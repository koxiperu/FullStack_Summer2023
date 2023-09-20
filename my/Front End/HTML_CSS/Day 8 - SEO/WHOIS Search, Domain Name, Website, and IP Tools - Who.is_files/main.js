function handleOutboundLinkClicks(event, e) {
  ga('send', 'event', {
    eventCategory: 'Outbound Link',
    eventAction: 'click',
    eventLabel: $(e).attr('data-label'),
    transport: 'beacon'
  });
}
	function addToAccount(e)
        {
                var domainName = jQuery.trim($(e).attr('data-domain'));
		var userID = jQuery.trim($(e).attr('data-userid'));

                $.post("/api/whois/addAccountDomains", {domainName:domainName, userID:userID},
                function(data)
                {
                        if(data['error'] == '1')
                        {
                                $(e).html(data['message']).removeClass('btn-primary').addClass('btn-danger');
                                return;
                        }
			else if(data['error'] == '2')
			{
				$(e).html(data['message']).removeClass('btn-primary').addClass('btn-success');
                                return;
			}
			else
			{
                        $(e).html('Added!').removeClass('btn-primary').addClass('btn-success');
			}
		}, "json");
        }

	function doDomainSearches(domain, pendingDomainCheck)
	{
		        $.post("/api/whois/checkDomainAvailability/"+domain, {pendingDomainCheck:pendingDomainCheck},
		        function(data)
		        {
				var html = "<center>";
				if(data['domains'][domain].avail && data['domains'][domain].product_type == 'rightside_make_offer')
				{
					var headingHtml = "<p><center><span style='font-size:24px;'><strong>"+domain+"</strong> may be available!</span><span style='display:inline-block; width:50px;'>&nbsp;</span> <button style='margin-bottom:10px;' class='btn btn-success' data-domain='"+domain+"' onclick='makeOffer(this); handleOutboundLinkClicks(event, this);' data-label='above power bar name.com make offer 1'>Make an offer!</button></center></p>";
					$("#domainAvailabilityPowerBarHeading").html(headingHtml);
				}
				else if(data['domains'][domain].avail)
				{
					var headingHtml = "<p><center><span style='font-size:24px;'><strong>"+domain+"</strong> is available!</span><span style='display:inline-block; width:50px;'>&nbsp;</span><span style='font-size:24px;'>$"+data['domains'][domain].price+"</span> <button style='margin-bottom:10px;' class='btn btn-success' data-domain='"+domain+"' data-label='buy it now top bar' onclick='purchaseThisDomains(this); handleOutboundLinkClicks(event, this);'>Buy it now!</button></center></p>";
					$("#domainAvailabilityPowerBarHeading").html(headingHtml);
				}
				else
				{
					var headingHtml = "<p><center><span style='font-size:20px;'><strong>"+domain+"</strong> is already registered.</span> Interested in buying it? <a data-label='above power bar name.com make offer 2' href='https://domainagents.com/"+domain+"-whodot'><strong>Make an Offer</strong></a></center></p>";
					$("#domainAvailabilityPowerBarHeading").html(headingHtml);
				}

				html += "<div id='domainAvailabilityPowerBarTlds'>";
				var haveAvailable = false;
				var counter = 0;
				for(var key in data['domains'])
				{
					counter++;

					var domainInfo = data['domains'][key];

					if(domainInfo.avail && domainInfo.product_type != 'rightside_make_offer')
						haveAvailable = true;

					var statusText = '';
					if(domainInfo.product_type == 'rightside_make_offer')
						statusText = 'Make Offer';
					else if(domainInfo.avail)
						statusText = 'Available';
					else
						statusText = 'Taken';

					html += "<span class='powerBarTldContainer'><div class='powerBarTldContainerTld'><strong>."+domainInfo['tld']+"</strong></div>";
					html += "<div class='powerBarTldContainerPrice'>"+(domainInfo.avail && domainInfo.price ? '$'+domainInfo.price : '')+"</div>";

					html += "<div data-selected='off' data-domain='"+key+"' class='powerBarTldContainerStatus "+(domainInfo.avail ? 'powerBarTldContainerStatusAvailable' : 'powerBarTldContainerStatusTaken')+"'>"+statusText+"</div></span>";

					if(counter == 8)
						break;
				}
				html += "</div>";
				if(haveAvailable)
					html += "<div style='margin-top:0px; margin-bottom:15px;'><button class='btn btn-success' data-label='purchase domains top bar' onclick='handleOutboundLinkClicks(event, this); purchaseSelectedDomains();'>Purchase Selected Domains</button></div>";
				html += "</center>";
				if(data['cached'])
				{
					html += "<small class='text-muted pull-right'>cached</small><div style='clear:both;'></div>";
				}

				$("#domainAvailabilityPowerBarContent").html(html);
				$("#domainAvailabilityPowerBarProgress").hide();
				$(".powerBarTldContainerStatusAvailable").click(function ()
				{
					togglePowerBarClicked(this);
				});
				$("#domainAvailabilityPowerBar").slideDown();

				var haveSuggested = false;
				$('#suggestedDomainsContainer').html('');
				for(var key in data['suggested'])
				{
					var domainInfo = data['suggested'][key];
					if(!domainInfo['avail'])
						continue;

					$('#suggestedDomainsContainer').append("\
<div class='container-fluid'> \
  <div class='row'> \
    <div class='col-md-9' style='padding:5px; word-break: break-all;'> \
      <input class='suggestedDomainCheckbox' type='checkbox' value='"+key+"'> "+key+" \
    </div> \
    <div class='col-md-3' style='padding-top:7px;'> \
      $"+domainInfo['price']+" \
    </div> \
  </div> \
</div>");
					haveSuggested = true;
				}

				if(haveSuggested)
				{
					$('#suggestedDomainsContainer').append("<div style='padding:5px;'><center><button class='btn btn-success' data-label='purchase domains suggested' onclick='handleOutboundLinkClicks(event, this); purchaseSelectedDomains();'>Purchase Selected Domains</button></center></div>");
				}
		        }, "json");
	}

	function makeOffer(e)
	{
		var domain = jQuery.trim($(e).attr('data-domain'));
		if(!domain)
			return;

		$('#makeOfferModalSuccess').hide();
		$('#makeOfferModalError').hide();
		$('#makeOfferModalDomain').html(domain);

		$('#makeOfferModal').modal('show');
	}

	function purchaseThisDomains(e)
	{
		var domain = jQuery.trim($(e).attr('data-domain'));
		if(!domain)
			return;

		var domains = [];
		domains.push(domain);

		if(domains.length > 0)
		{
			var form = '<form id="domainRegForm" method="POST" action="https://www.name.com/cart/add">';
			for(var i = 0; i < domains.length; i++)
			{
				form += '<input name="domain[]" type="hidden" value="'+domains[i]+'">';
			}
			form += '<input name="tag" type="hidden" value="whois-v2-results-suggested">';
			form += '<input name="utm_campaign" type="hidden" value="Who.is">';
			form += '<input name="utm_source" type="hidden" value="powerbar">';
			form += '<input name="utm_medium" type="hidden" value="form">';
			form += '</form>';

			$('#hiddenDiv').html(form);
			$('#domainRegForm').submit();
		}
	}

	function purchaseSelectedDomains()
	{
		var domains = [];

		$('.powerBarTldContainerStatusAvailable[data-selected="on"]').each(function()
		{
			domains.push($(this).attr('data-domain'));
		});

		$('.suggestedDomainCheckbox:checked').each(function()
                {
			domains.push($(this).val());
                });

		if(domains.length > 0)
		{
			// track
	                $.post("/api/whois/trackNameCom", {domains:domains});

			var form = '<form id="domainRegForm" method="POST" action="https://www.name.com/cart/add">';
			for(var i = 0; i < domains.length; i++)
			{
				form += '<input name="domain[]" type="hidden" value="'+domains[i]+'">';
			}
			form += '<input name="tag" type="hidden" value="whois-v2-results-suggested">';
			form += '<input name="utm_campaign" type="hidden" value="Who.is">';
			form += '<input name="utm_source" type="hidden" value="powerbar">';
			form += '<input name="utm_medium" type="hidden" value="form">';
			form += '</form>';

			$('#hiddenDiv').html(form);
			$('#domainRegForm').submit();
		}
	}

	function togglePowerBarClicked(e)
	{
		if($(e).html() == 'Make Offer')
		{
			makeOffer(e);
			return;
		}

		var selected = $(e).attr('data-selected');
		if(selected == 'off')
		{
			$(e).attr('data-selected', 'on');
			$(e).css('background-color', '#5cb85c');
			$(e).html('SELECTED');
		}
		else
		{
			$(e).attr('data-selected', 'off');
			$(e).css('background-color', '#337ab7');
			$(e).html('Available');
		}
	}
