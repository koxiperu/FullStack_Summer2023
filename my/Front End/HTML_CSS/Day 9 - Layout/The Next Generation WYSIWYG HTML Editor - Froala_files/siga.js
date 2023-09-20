//~ YF ~//
var onloadCallback = function () {
	grecaptcha.render('google_recaptcha', {
		'sitekey': '6LfP4VsUAAAAAJ2Xuzo9eKRcDHV9BoceqRBaAqyk',
        callback: grecaptcha_event,
	});
};
function grecaptcha_event (){
	if (grecaptcha.getResponse() != "") {
		jQuery("#recaptchaMessage").hide();
	} else {
		jQuery("#recaptchaMessage").show();
	}
}
$('.termsChk').addClass('hidden');

$("#IderaForm").validate({
	// Specify validation rules
	focusInvalid: false,
	invalidHandler: function (form, validator) {

		if (grecaptcha.getResponse() != "") {
			jQuery("#recaptchaMessage").hide();
		} else {
			jQuery("#recaptchaMessage").show();
		}
        
		if (!validator.numberOfInvalids()){
			return;
        }
		jQuery('html, body').animate({
			scrollTop: jQuery(validator.errorList[0].element).offset().top - 150
		});

	},
	rules: {
		FirstName: "required",
		LastName: "required",
		Company: "required",
		Email: "required",
		Phone: {
			required: true,
		},
		Country: "required",
		StateandProvince: "required",
		Title: "required",
		privacyOptin: "required",
		emailOptIns: {
			required: false,
		},
		YourQuestion: "required",
		NumberofUsers: "required",
		webinarRegion: "required",
		demoType: "required",
		preferredRegion: "required",
	},
	errorPlacement: function (label, element) {
		console.log(element)
		if (element.attr("name") == "privacyOptin") {
			element.parent().parent('div').append(label.css('display','block'));
		} else {
			label.insertAfter(element)
		}
	},
	submitHandler: handleFormSubmit,	
});
function handleFormSubmit() {
	event.preventDefault();
	if ($("#IderaForm").valid() && grecaptcha.getResponse() != "") {
		jQuery("#recaptchaMessage").hide();
		// console.log("both are not empty");
		jQuery(".submit-eloqua-frm").attr('disabled', true);
		jQuery(".submit-eloqua-frm").addClass('disabled-form');
		var elqData = jQuery('#IderaForm').serialize();
		$.each($('form input[type=checkbox]')
			   .filter(function (idx) {
			return $(this).prop('checked') === false
		}),
			   function (idx, el) {
			// attach matched element names to the formData with a chosen value.
			var emptyVal = "0";
			elqData += '&' + $(el).attr('name') + '=' + emptyVal;
		}
			  );

		if ($('#state').attr('name') == "dropdownMenu" && $('#state').val() != "") {
			state = $('#state').val();
			elqData += '&dropdownMenu=' + state;
		}


		console.log(eloqua_obj.ajax_url);
		elqData += '&action=submit_eloqua';
		$.ajax({
			type: "POST",
			// dataType : "json",
			url: eloqua_obj.ajax_url,
			data: elqData,
			beforeSend: function () {
				// setting a timeout
				$('#submitEloquaForm').html('Loading...');
				$('#submitEloquaForm').attr('disabled','disabled');
			},
			success: function (response) {
				console.log(response);
				$("#IderaForm").trigger("reset");
// 				$('.cs-new-wrapper').hide();
// 				$('.cs-thankyou-block').show();
// 				setTimeout(()=>{
// 					$('html, body').animate({
// 				        scrollTop: $("#thank-you").offset().top
// 				    }, 100);
// 				},50);
				window.open(response, '_blank');
			}
		});
	}

	if (grecaptcha.getResponse() != "") {
		jQuery("#recaptchaMessage").hide();
	} else {
		jQuery("#recaptchaMessage").show();
	}


}

jQuery(document).on('change', '#TermsAndConditions', function () {
	if ($("#TermsAndConditions").is(":visible")) {

		if (jQuery("#TermsAndConditions").is(":checked") == true) {
			jQuery('#TermsAndConditions').val('1');
		} else {
			jQuery('#TermsAndConditions').val('0');
		}
	}

});
jQuery(document).on('change', '#MarketingCommunications', function () {
	if ($("#MarketingCommunications").is(":visible")) {

		if (jQuery("#MarketingCommunications").is(":checked") == true) {
			jQuery('#MarketingCommunications').val('1');
		} else {
			jQuery('#MarketingCommunications').val('0');
		}
	}

});

jQuery('input#job_title').keyup(function() {
    jQuery('.jobtitle-count').html(this.value.length);
});


jQuery(document).on('change', '#country-sel', function () {
	var country = $('#country-sel').val();
	jQuery('#MarketingCommunications').val('0');
	$('#MarketingCommunications').prop('checked', false);
	$('#TermsAndConditions').prop('checked', false);
	jQuery('#TermsAndConditions').val('0');


	if (country != "") {
		jQuery('#country-sel').addClass('selected');
	} else {
		jQuery('#country-sel').removeClass('selected');
	}

	var target = jQuery(this).val();

	jQuery('.termsChk').addClass('hidden');
	jQuery(".termsChk input").prop('required', false);

	//Reset selection of all State DropDowns
	jQuery('#SateUS').val("");

	if (target == 'US') {
		jQuery('.state_wrapper').removeClass('hidden');
		jQuery('#ip_provience').removeClass('hidden');
	}
	if (target == 'CA') {
		jQuery('.state_wrapper').removeClass('hidden');
		jQuery('#ip_provience').removeClass('hidden');
		jQuery('.termsChk').removeClass('hidden');
		jQuery(".termsChk input").prop('required', true);
	}
	if (target == 'MX') {
		jQuery('.state_wrapper').removeClass('hidden');
		jQuery('#ip_provience').removeClass('hidden');
	}
	if (target == 'BR') {
		jQuery('.state_wrapper').removeClass('hidden');
		jQuery('#ip_provience').removeClass('hidden');
	}
	if (target == "AU" || target == "BE" || target == "HR" || target == "CY" || target == "CZ" || target == "DK" || target == "EE" || target == "FI" || target == "FR" || target == "DE" || target == "GR" || target == "HU" || target == "IE" || target == "IT" || target == "LV" || target == "LT" || target == "LU" || target == "MT" || target == "NL" || target == "PL" || target == "PT" || target == "RO" || target == "SK" || target == "SI" || target == "ES" || target == "SE" || target == "GB" || target == "CA" || target == "BG") {
		console.log("added");

		if ($("#MarketingCommunications").is(":visible")) {
			console.log("checkbox1 visible");
			if (jQuery("#MarketingCommunications").is(":checked") == true) {
				jQuery('#MarketingCommunications').val('1');
			} else {
				jQuery('#MarketingCommunications').val('0');
			}
		}

		if ($("#TermsAndConditions").is(":visible")) {
			console.log("checkbox visible");

			if (jQuery("#TermsAndConditions").is(":checked") == true) {
				jQuery('#TermsAndConditions').val('1');
			} else {
				jQuery('#TermsAndConditions').val('0');
			}
		}

		jQuery('.termsChk').removeClass('hidden');
		jQuery(".termsChk input").prop('required', true);
	}

});

jQuery(document).on('change', '.state', function () {
	var state = $('.state').val();
	if (state != "") {
		jQuery('.state').addClass('selected');
	} else {
		jQuery('.state').removeClass('selected');
	}
});

$('.numberonly').on("cut copy paste", function (e) {
	e.preventDefault();
});

var inputEmail = document.querySelector('.numberonly');
jQuery('.numberonly').keyup(function (e) {
	var max = 12; // The maxlength you want

	var characterCount = inputEmail.value.length;
	var current = $('#rchars');
	if (characterCount <= 12) {
		current.text(characterCount);
	}

	if (inputEmail.value.length > max) {
		inputEmail.value = inputEmail.value.substring(0, max);
		e.preventDefault();
		return false;
	}
});

jQuery('.numberonly').keypress(function (e) {
	var charCode = (e.which) ? e.which : e.keyCode
	if (String.fromCharCode(charCode).match(/[^0-9]/g))
		return false;
});

jQuery(document).ready(function () {
	/* country dropdown */
	var countrySelectOptions = `
<option value="">Country</option>
<option value="CA">Canada</option>
<option value="US">United States</option>
<option value="AF">Afghanistan</option>
<option value="AX">Åland Islands</option>
<option value="AL">Albania</option>
<option value="DZ">Algeria</option>
<option value="AS">American Samoa</option>
<option value="AD">Andorra</option>
<option value="AO">Angola</option>
<option value="AI">Anguilla</option>
<option value="AQ">Antarctica</option>
<option value="AG">Antigua and Barbuda</option>
<option value="AR">Argentina</option>
<option value="AM">Armenia</option>
<option value="AW">Aruba</option>
<option value="AU">Australia</option>
<option value="AT">Austria</option>
<option value="AZ">Azerbaijan</option>
<option value="BS">Bahamas</option>
<option value="BH">Bahrain</option>
<option value="BD">Bangladesh</option>
<option value="BB">Barbados</option>
<option value="BY">Belarus</option>
<option value="BE">Belgium</option>
<option value="BZ">Belize</option>
<option value="BJ">Benin</option>
<option value="BM">Bermuda</option>
<option value="BT">Bhutan</option>
<option value="BO">Bolivia</option>
<option value="BA">Bosnia and Herzegovina</option>
<option value="BW">Botswana</option>
<option value="BV">Bouvet Island</option>
<option value="BR">Brazil</option>
<option value="IO">Brit/Indian Ocean Terr.</option>
<option value="BN">Brunei Darussalam</option>
<option value="BG">Bulgaria</option>
<option value="BF">Burkina Faso</option>
<option value="BI">Burundi</option>
<option value="KH">Cambodia</option>
<option value="CM">Cameroon</option>
<option value="CA">Canada</option>
<option value="CV">Cape Verde</option>
<option value="KY">Cayman Islands</option>
<option value="CF">Central African Republic</option>
<option value="TD">Chad</option>
<option value="CL">Chile</option>
<option value="CN">China</option>
<option value="CX">Christmas Island</option>
<option value="CC">Cocos (Keeling) Islands</option>
<option value="CO">Colombia</option>
<option value="KM">Comoros</option>
<option value="CG">Congo</option>
<option value="CD">Congo, The Dem. Republic Of</option>
<option value="CK">Cook Islands</option>
<option value="CR">Costa Rica</option>
<option value="CI">Côte D'Ivore</option>
<option value="HR">Croatia</option>
<option value="CU">Cuba</option>
<option value="CY">Cyprus</option>
<option value="CZ">Czech Republic</option>
<option value="DK">Denmark</option>
<option value="DJ">Djibouti</option>
<option value="DM">Dominica</option>
<option value="DO">Dominican Republic</option>
<option value="EC">Ecuador</option>
<option value="EG">Egypt</option>
<option value="SV">El Salvador</option>
<option value="GQ">Equatorial Guinea</option>
<option value="ER">Eritrea</option>
<option value="EE">Estonia</option>
<option value="ET">Ethiopia</option>
<option value="FK">Falkland Islands</option>
<option value="FO">Faroe Islands</option>
<option value="FJ">Fiji</option>
<option value="FI">Finland</option>
<option value="FR">France</option>
<option value="GF">French Guiana</option>
<option value="PF">French Polynesia</option>
<option value="TF">French Southern Terr.</option>
<option value="GA">Gabon</option>
<option value="GM">Gambia</option>
<option value="GE">Georgia</option>
<option value="DE">Germany</option>
<option value="GH">Ghana</option>
<option value="GI">Gibraltar</option>
<option value="GR">Greece</option>
<option value="GL">Greenland</option>
<option value="GD">Grenada</option>
<option value="GP">Guadeloupe</option>
<option value="GU">Guam</option>
<option value="GT">Guatemala</option>
<option value="GN">Guinea</option>
<option value="GW">Guinea-Bissau</option>
<option value="GY">Guyana</option>
<option value="HT">Haiti</option>
<option value="HM">Heard/McDonald Isls.</option>
<option value="HN">Honduras</option>
<option value="HK">Hong Kong</option>
<option value="HU">Hungary</option>
<option value="IS">Iceland</option>
<option value="IN">India</option>
<option value="ID">Indonesia</option>
<option value="IR">Iran</option>
<option value="IQ">Iraq</option>
<option value="IE">Ireland</option>
<option value="IL">Israel</option>
<option value="IT">Italy</option>
<option value="JM">Jamaica</option>
<option value="JP">Japan</option>
<option value="JO">Jordan</option>
<option value="KZ">Kazakhstan</option>
<option value="KE">Kenya</option>
<option value="KI">Kiribati</option>
<option value="KP">Korea (North)</option>
<option value="KR">Korea (South)</option>
<option value="KW">Kuwait</option>
<option value="KG">Kyrgyzstan</option>
<option value="LA">Laos</option>
<option value="LV">Latvia</option>
<option value="LB">Lebanon</option>
<option value="LS">Lesotho</option>
<option value="LR">Liberia</option>
<option value="LY">Libya</option>
<option value="LI">Liechtenstein</option>
<option value="LT">Lithuania</option>
<option value="LU">Luxembourg</option>
<option value="MO">Macau</option>
<option value="MK">Macedonia</option>
<option value="MG">Madagascar</option>
<option value="MW">Malawi</option>
<option value="MY">Malaysia</option>
<option value="MV">Maldives</option>
<option value="ML">Mali</option>
<option value="MT">Malta</option>
<option value="MH">Marshall Islands</option>
<option value="MQ">Martinique</option>
<option value="MR">Mauritania</option>
<option value="MU">Mauritius</option>
<option value="YT">Mayotte</option>
<option value="MX">Mexico</option>
<option value="FM">Micronesia</option>
<option value="MD">Moldova</option>
<option value="MC">Monaco</option>
<option value="MN">Mongolia</option>
<option value="MS">Montserrat</option>
<option value="MA">Morocco</option>
<option value="MZ">Mozambique</option>
<option value="MM">Myanmar</option>
<option value="MP">N. Mariana Isls.</option>
<option value="NA">Namibia</option>
<option value="NR">Nauru</option>
<option value="NP">Nepal</option>
<option value="NL">Netherlands</option>
<option value="AN">Netherlands Antilles</option>
<option value="NC">New Caledonia</option>
<option value="NZ">New Zealand</option>
<option value="NI">Nicaragua</option>
<option value="NE">Niger</option>
<option value="NG">Nigeria</option>
<option value="NU">Niue</option>
<option value="NF">Norfolk Island</option>
<option value="NO">Norway</option>
<option value="OM">Oman</option>
<option value="PK">Pakistan</option>
<option value="PW">Palau</option>
<option value="PS">Palestinian Territory, Occupied</option>
<option value="PA">Panama</option>
<option value="PG">Papua New Guinea</option>
<option value="PY">Paraguay</option>
<option value="PE">Peru</option>
<option value="PH">Philippines</option>
<option value="PN">Pitcairn</option>
<option value="PL">Poland</option>
<option value="PT">Portugal</option>
<option value="PR">Puerto Rico</option>
<option value="QA">Qatar</option>
<option value="RE">Reunion</option>
<option value="RO">Romania</option>
<option value="RU">Russian Federation</option>
<option value="RW">Rwanda</option>
<option value="KN">Saint Kitts and Nevis</option>
<option value="LC">Saint Lucia</option>
<option value="WS">Samoa</option>
<option value="SM">San Marino</option>
<option value="ST">Sao Tome/Principe</option>
<option value="SA">Saudi Arabia</option>
<option value="SN">Senegal</option>
<option value="CS">Serbia and Montenegro</option>
<option value="SC">Seychelles</option>
<option value="SL">Sierra Leone</option>
<option value="SG">Singapore</option>
<option value="SK">Slovak Republic</option>
<option value="SI">Slovenia</option>
<option value="SB">Solomon Islands</option>
<option value="SO">Somalia</option>
<option value="ZA">South Africa</option>
<option value="ES">Spain</option>
<option value="LK">Sri Lanka</option>
<option value="SH">St. Helena</option>
<option value="PM">St. Pierre and Miquelon</option>
<option value="VC">St. Vincent and Grenadines</option>
<option value="SD">Sudan</option>
<option value="SR">Suriname</option>
<option value="SJ">Svalbard/Jan Mayen Isls.</option>
<option value="SZ">Swaziland</option>
<option value="SE">Sweden</option>
<option value="CH">Switzerland</option>
<option value="SY">Syria</option>
<option value="TW">Taiwan</option>
<option value="TJ">Tajikistan</option>
<option value="TZ">Tanzania</option>
<option value="TH">Thailand</option>
<option value="TL">Timor-Leste</option>
<option value="TG">Togo</option>
<option value="TK">Tokelau</option>
<option value="TO">Tonga</option>
<option value="TT">Trinidad and Tobago</option>
<option value="TN">Tunisia</option>
<option value="TR">Turkey</option>
<option value="TM">Turkmenistan</option>
<option value="TC">Turks/Caicos Isls.</option>
<option value="TV">Tuvalu</option>
<option value="UG">Uganda</option>
<option value="UA">Ukraine</option>
<option value="AE">United Arab Emirates</option>
<option value="GB">United Kingdom</option>
<option value="US">United States</option>
<option value="UM">US Minor Outlying Is.</option>
<option value="UY">Uruguay</option>
<option value="UZ">Uzbekistan</option>
<option value="VU">Vanuatu</option>
<option value="VA">Vatican City</option>
<option value="VE">Venezuela</option>
<option value="VN">Viet Nam</option>
<option value="VG">Virgin Islands (British)</option>
<option value="VI">Virgin Islands (U.S.)</option>
<option value="WF">Wallis/Futuna Isls.</option>
<option value="EH">Western Sahara</option>
<option value="YE">Yemen</option>
<option value="ZM">Zambia</option>
<option value="ZW">Zimbabwe</option>
	`;
	jQuery('#country-sel').append(countrySelectOptions);

	$('#country-sel').on('input', function (e) {
		var country = $(this).val();
		if (country == 'US') {
			$('#ip_provience').empty();
			$('#ip_provience').removeClass('hidden');
			$('#ip_provience').parent().removeClass('hidden');
			var stateSelectOptions = `
	<option value="">Select State</option>
	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AS">American Samoa</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FM">Federated States Of Micronesia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="GU">Guam Gu</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MH">Marshall Islands</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="MP">Northern Mariana Islands</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PW">Palau</option>
	<option value="PA">Pennsylvania</option>
	<option value="PR">Puerto Rico</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VI">Virgin Islands</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
	`;
			$('#ip_provience').append(stateSelectOptions);
		} else if (country == 'CA') {
			$('#ip_provience').empty();
			$('#ip_provience').removeClass('hidden');
			$('#ip_provience').parent().removeClass('hidden');
			var stateSelectOptions = `
	<option value="">Select Province</option>
	<option value="AB">Alberta</option>
	<option value="BC">British Columbia</option>
	<option value="MB">Manitoba</option>
	<option value="NB">New Brunswick</option>
	<option value="NL">Newfoundland and Labrador</option>
	<option value="NS">Nova Scotia</option>
	<option value="NT">Northwest Territories</option>
	<option value="NU">Nunavut</option>
	<option value="ON">Ontario</option>
	<option value="PE">Prince Edward Island</option>
	<option value="QC">Quebec</option>
	<option value="SK">Saskatchewan</option>
	<option value="YT">Yukon</option>
`;
			$('#ip_provience').append(stateSelectOptions);
		} else if (country == 'MX') {
			$('#ip_provience').empty();
			$('#ip_provience').removeClass('hidden');
			$('#ip_provience').parent().removeClass('hidden');
			var stateSelectOptions = `
	<option selected="selected" value="">Select Your State</option>
	<option value="DIF">Distrito Federal</option>
	<option value="AGS">Aguascalientes</option>
	<option value="BCN">Baja California</option>
	<option value="BCS">Baja California Sur</option>
	<option value="CAM">Campeche</option>
	<option value="CHP">Chiapas</option>
	<option value="CHI">Chihuahua</option>
	<option value="COA">Coahuila</option>
	<option value="COL">Colima</option>
	<option value="DUR">Durango</option>
	<option value="GTO">Guanajuato</option>
	<option value="GRO">Guerrero</option>
	<option value="HGO">Hidalgo</option>
	<option value="JAL">Jalisco</option>
	<option value="MEX">MÃ©xico</option>
	<option value="MIC">MichoacÃ¡n</option>
	<option value="MOR">Morelos</option>
	<option value="NAY">Nayarit</option>
	<option value="NLE">Nuevo LeÃ³n</option>
	<option value="OAX">Oaxaca</option>
	<option value="PUE">Puebla</option>
	<option value="QRO">QuerÃ©taro</option>
	<option value="ROO">Quintana Roo</option>
	<option value="SLP">San Luis PotosÃ­</option>
	<option value="SIN">Sinaloa</option>
	<option value="SON">Sonora</option>
	<option value="TAB">Tabasco</option>
	<option value="TAM">Tamaulipas</option>
	<option value="TLX">Tlaxcala</option>
	<option value="VER">Veracruz</option>
	<option value="YUC">YucatÃ¡n</option>
	<option value="ZAC">Zacatecas</option>
`;
			$('#ip_provience').append(stateSelectOptions);
		} else if (country == 'BR') {
			$('#ip_provience').empty();
			$('#ip_provience').removeClass('hidden');
			$('#ip_provience').parent().removeClass('hidden');
			var stateSelectOptions = `
	<option selected="selected" value="">Select Your State</option>
	<option value="AC">Acre</option>
	<option value="AL">Alagoas</option>
	<option value="AP">AmapÃ¡</option>
	<option value="AM">Amazonas</option>
	<option value="BA">Bahia</option>
	<option value="CE">CearÃ¡</option>
	<option value="DF">Distrito</option>
	<option value="ES">Espirito</option>
	<option value="GO">GoiÃ¡s</option>
	<option value="MA">MaranhÃ£o</option>
	<option value="MT">Mato Grosso</option>
	<option value="MS">Mato Grosso do Sul</option>
	<option value="MG">Minas Gerais</option>
	<option value="PA">ParÃ¡</option>
	<option value="PB">ParaÃ­ba</option>
	<option value="PR">ParanÃ¡</option>
	<option value="PE">Pernambuco</option>
	<option value="PI">PiauÃ­</option>
	<option value="RJ">Rio de Janeiro</option>
	<option value="RN">Rio Grande do Norte</option>
	<option value="RS">Rio Grande do Sul</option>
	<option value="RO">RondÃ´nia</option>
	<option value="RR">Roraima</option>
	<option value="SC">Santa Catarina</option>
	<option value="SP">SÃ£o Paulo</option>
	<option value="SE">Sergipe</option>
	<option value="TO">Tocantins</option>
`;
			$('#ip_provience').append(stateSelectOptions);
		} else {
			$('#ip_provience').empty();
			$('#ip_provience').addClass('hidden');
			$('#ip_provience').parent().addClass('hidden');
		}

	});
});


function IsEmail(email) {
	if (/([A-Z0-9a-z_-]{1,100}[^@])+?@[^$#<>?]+?\.[\w]{2,4}/.test(email)) {
		return true;
	}
	return false;
}
