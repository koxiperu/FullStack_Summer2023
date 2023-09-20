if("object"!=typeof Storylane){var Storylane={Play:function(e){if("object"!=typeof e)return console.log("Error: Invalid params."),0;switch(this.params=e,this.params.type){case"popup":this.Player(e);break;case"preview_embed":this.PreviewEmbed(e)}},PreviewEmbed:function(e){if("object"!=typeof e)return console.log("Error: Invalid params."),0;if(this.params={scale:.9,...e},!this.params.hasOwnProperty("demo_url"))return console.log("Error: Invalid params. Please provide valid demo_url"),0;console.log("creating storylane demo with preview");let t=this.params.element,n=t.closest(".sl-embed-container"),r=n.querySelector(".sl-preview"),o=n.querySelector("iframe.sl-demo");t.style.display="none",r.style.display="none",o.style.display="",o.style.backgroundColor="#f3f5f7",o.style.borderRadius="inherit",o.src=this.params.demo_url},Player:function(e){if("object"!=typeof e)return console.log("Error: Invalid params."),0;if(this.params={scale:.9,width:"100%",padding_bottom:"calc(56.33% + 27px)",fullscreen:!1,...e},!this.params.hasOwnProperty("demo_url"))return console.log("Error: Invalid params. Please provide valid demo_url"),0;this.storylane_style="\n        #__sl-demo-wrapper{\n          position: fixed;\n          top: 0px;\n          left: 0px;\n          width: 100%;\n          height: 100%;\n          z-index: 9999999;\n          background: rgba(0,0,0,0.8);\n        }\n        .__sl-embed-container1{\n          z-index: 99999999;\n          position: relative;\n          width: 100%;\n          height: 100%;\n          display: flex;\n          align-items: auto;\n          flex-direction: column;\n          background: #000000;\n          box-shadow: 0px 0px 5px #222222;\n          padding-bottom: calc(56.33% + 27px);\n        }\n        .__sl-embed-container{\n          z-index: 99999999;\n          position: relative;\n          width: 100%;\n          display: flex;\n          max-width: 100%;\n          height: 100%;\n          max-height: 100%;\n          align-items: center;\n          justify-content: center;\n        }\n        .__sl-close-btn{\n          position: absolute !important;\n          background: #ffffff !important;\n          color: #1A1348 !important;\n          top: 16px !important;\n          right: 16px !important;\n          border: 2px solid #FFFFFE !important;\n          border-radius: 20px !important;\n          line-height: 18px !important;\n          box-shadow: 0px 0px 5px #444 !important;\n          cursor: pointer !important;\n          z-index: 999999999 !important;\n          font-family:Helvetica !important;\n          box-shadow: 0px 0px 5px #222222 !important;\n          font-size: 14px !important;\n          font-weight: bold !important;\n          height: 24px !important;\n          width: 24px !important;\n          padding: 0px !important;\n        }\n        .__sl-embed{\n          position:relative;\n          width:100%;\n          height:0;\n        }\n        .__sl-embed-portrait{\n          padding-bottom: 0px !important;\n          height: 100% !important;\n        }\n        .__sl-player-iframe{\n          position:absolute;top:0;left:0;width:100%;height:100%;border:none;\n        }\n      ",this.embed_style="\n        padding-bottom: $padding_bottom;\n        transform: scale($scale);\n        -webkit-transform: scale($scale);\n        -moz-transform: scale($scale);\n        -o-transform: scale($scale);\n      ",this.demo_html='\n        <button class="__sl-close-btn">&times;</button>\n        <div class="__sl-embed-container">\n          <div class="__sl-embed-wrapper" style="width: $embed_width; height: $embed_height;">\n            <div class="__sl-embed">\n              <iframe class=\'__sl-player-iframe\' allowfullscreen></iframe>\n            </div>\n          </div>\n        </div>\n      ',console.log("creating storylane demo");let t=document.getElementById("__sl-demo-wrapper");if(null==t){t=document.createElement("div"),t.id="__sl-demo-wrapper",t.style="display: none;",document.body.appendChild(t);let e=document.createElement("style");e.innerHTML=this.storylane_style,document.head.appendChild(e)}t.innerHTML=this.demo_html;let n=this.params.element,r=document.getElementsByClassName("__sl-close-btn")[0],o=document.getElementsByClassName("__sl-player-iframe")[0],i=document.getElementsByClassName("__sl-embed-wrapper")[0],l=document.getElementsByClassName("__sl-embed")[0],a=parseFloat(this.params.scale),s=window.innerWidth<window.innerHeight,d=window.innerHeight-50,p=window.innerWidth-50;s&&(d=window.innerHeight,p=window.innerWidth);let c=p,m="auto";if(!0===this.params.fullscreen)c="100%";else{let e=parseFloat(this.params.height),t=parseFloat(this.params.width);if(!isNaN(e)&&0!=e&&!isNaN(t)&&0!=t){let n=parseFloat((e/t).toFixed(2));c=t,e>d&&(c=parseFloat((d/n).toFixed(2))),c>p&&(c=p)}isNaN(a)||(c=(c*a).toFixed(2)),c+="px"}s&&(c="100%","html"===this.params.demo_type&&(m="100%",l.classList.add("__sl-embed-portrait")));let h=i.getAttribute("style");h=h.replaceAll("$embed_width",c),h=h.replaceAll("$embed_height",m),i.setAttribute("style",h);let u=this.embed_style.replaceAll("$scale",1),g=this.params.padding_bottom;u=u.replaceAll("$padding_bottom",g),l.style=u,n&&null===n.onclick?n.addEventListener("click",(e=>{o.src=this.params.demo_url,t.style.display=""})):(o.src=this.params.demo_url,t.style.display=""),r.addEventListener("click",(e=>{t.style.display="none",o.src=""}))},Embed:function(e){if("object"!=typeof e)return console.log("Error: Invalid params."),0;if(this.params={scale:.9,...e},!this.params.hasOwnProperty("demo_url"))return console.log("Error: Invalid params. Please provide valid demo_url"),0;this.storylane_style="\n        #__sl-demo-embed-wrapper{\n          width: 100%;\n          height: 100%;\n          z-index: 10000;\n          background: rgba(0,0,0,0.6);\n          background-color: #F3F5F7;\n          border: 0px solid black;\n        }\n        .__sl-iframe{border: 0px; width: 100%; height: 100%; min-height: 100vh;}\n\n        .__sl-demo-preview{\n          width:100%; height: 100%;\n          transform:scale(1.0);\n          background-color: #ffffff;\n          z-index: 999999999;\n        }\n\n        .__sl-play{\n          z-index: 10003;\n          box-sizing: border-box;\n        \tdisplay:block;\n        \twidth:140px;\n        \theight:60px;\n        \tpadding-top: 14px;\n        \tpadding-left: 8px;\n        \tline-height: 20px;\n        \tborder: 3px solid #fff;\n        \tborder-radius: 5px;\n        \tcolor: #f5f5f5;\n        \ttext-align:center;\n        \ttext-decoration:none;\n        \tbackground-color: #e0007a;\n        \tfont-size: 22px;\n        \tfont-weight: normal;\n        \ttransition: all 0.3s ease;\n          position: relative;\n          top: 45%;\n          left: 45%;\n          cursor: pointer;\n        }\n\n        .__sl-play:hover {\n        \tbackground-color: #c1066c;\n        \tbox-shadow: 0px 0px 6px rgba(255,255,100,1);\n        }\n      ";let t=document.getElementById("__sl-demo-embed-wrapper");if(null==t){t=document.createElement("div"),t.id="__sl-demo-embed-wrapper",t.style="";let e=document.createElement("style");e.innerHTML=this.storylane_style,document.head.appendChild(e)}let n=this.params.element,r=this.params.demo_url,o=this.params.demo_preview;if(r){console.log("creating storylane embedded demo");let e=document.createElement("iframe");e.classList="__sl-iframe",e.src=this.params.demo_url,t.appendChild(e),e.src=this.params.demo_url,n.innerHTML="",n.appendChild(t)}else if(o){console.log("creating storylane embedded demo with preview");let e=n.innerHTML,r=document.createElement("div");r.classList="__sl-demo-preview",r.style="background: linear-gradient(0deg, rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('"+o+"') no-repeat; background-size: 100% auto;";let i=document.createElement("a");i.classList="__sl-play",i.text="Start Demo",i.addEventListener("click",(n=>{r.remove(),t.innerHTML=e})),r.appendChild(i),t.appendChild(r),n.innerHTML="",n.appendChild(t)}}};document.addEventListener("DOMContentLoaded",(function(e){const t=document.createElement("style");t.innerHTML="\n      .sl-preview-img{\n        width: 100%;\n        height: 100%;\n        webkit-filter: blur(1px);\n        filter: blur(1px);\n        background-color: rgba(0, 0, 0, 0.3);\n        border-radius: inherit;\n        z-index: 999991;\n      }\n      .sl-ripple-backdrop{\n        width: 75px;\n        height: 75px;\n        webkit-backdrop-filter: blur(1px);\n        backdrop-filter: blur(1px);\n        background-color: rgba(0, 0, 0, 0);\n        position: absolute;\n        top: 20%;\n        left: 20%;\n        z-index: 999991;\n      }\n      .sl-ripple-main {\n          --ripple-max-size: 75px;\n          --circle-size: 22px;\n          --color: #9639e7;\n          --border-animation-duration: 1.5s;\n          --ripple-border-width: 8px;\n          --ripple-timing-func: ease-in;\n\n          width: var(--ripple-max-size);\n          height: var(--ripple-max-size);\n          position: absolute;\n          top: 20%;\n          left: 20%;\n          z-index: 999990;\n        }\n\n      .sl-ripple-center {\n          position: absolute;\n          top: 50%;\n          left: 50%;\n          width: var(--circle-size);\n          height: var(--circle-size);\n          transform: translate(-50%, -50%);\n          background-color: var(--color);\n          border-radius: 50%;\n        }\n\n      .sl-ripple {\n          position: absolute;\n          top: 50%;\n          left: 50%;\n          transform: translate(-50%, -50%);\n          border-radius: 50%;\n          border: var(--ripple-border-width) solid var(--color);\n          animation: enlargeSlRipple var(--border-animation-duration) var(--ripple-timing-func) infinite;\n          animation-delay: 2s;\n          transition-delay: 2s;\n        }\n\n        @keyframes enlargeSlRipple {\n          0% {width: 0px; height: 0px; opacity: 1;}\n          50% {opacity: 0.75;}\n          100% {width: var(--ripple-max-size); height: var(--ripple-max-size); opacity: 0; border-width: 0;}\n        }\n    ",document.head.appendChild(t);const n=document.querySelectorAll(".sl-preview");if(n.length>0)for(const e of n){let t="#9639e7",n='\n      <div class="sl-ripple-backdrop"></div>\n      <div class="sl-ripple-main">\n        <div class="sl-ripple-center" style="background-color: $ripple_color"></div>\n        <div class="sl-ripple" style="border: 8px solid $ripple_color"></div>\n      </div>\n    ',r=e.parentElement.parentElement.querySelector(".sl-preview-cta");null!=r&&(t=r.style.backgroundColor);let o=document.createElement("img");o.src=e.style.backgroundImage.match(/(https?:\/\/[^ |'|"]*)/)[0],o.classList="sl-preview-img",e.appendChild(o),e.style.backgroundImage="",e.parentElement.style.borderRadius="10px",e.style.borderRadius="inherit",e.innerHTML+=n.replaceAll("$ripple_color",t)}const r=document.querySelectorAll(".sl-demo-btn");if(r.length>0)for(const e of r)Storylane.Player({element:e,demo_url:e.getAttribute("data-sl-url"),scale:e.getAttribute("data-sl-scale")});const o=document.querySelectorAll('a[href*="?sl_popup"],a[href*="&sl_popup"]');if(o.length>0)for(const e of o){let t=new URL(e.getAttribute("href")),n=new URLSearchParams(t.search),r=n.get("config"),o=r&&r.length?JSON.parse(atob(r)):{};n.delete("config"),n.delete("sl_popup"),t.search=n.toString();const i={element:e,demo_url:t,type:"popup"};e.onclick=function(e){e.preventDefault(),Storylane.Play({...i,...o})}}const i=document.querySelectorAll(".sl-inline-embed");if(i.length>0)for(const e of i)Storylane.Embed({element:e,demo_preview:e.getAttribute("data-sl-preview"),demo_url:e.getAttribute("data-sl-url"),scale:e.getAttribute("data-sl-scale")})})),window.addEventListener("message",(e=>{try{if("storylane-demo-event"===e.data.message){let t=e.data.payload;"open_external_url"===t.event&&"_self"===t.target.target&&window.open(t.target.url,t.target.target)}if("storylane-embed-demo"===e.data.source){let t=new URL(window.location).searchParams,n=t.get("email");t.delete("email");let r=[],o={};for(const[e,n]of t.entries())if(null!=e.match(/token/)){r.push(e),o[e.match(/^token\[(.*)]$/)[1]]=n}for(const e of r)t.delete(e);n&&e.source.postMessage({source:"storylane-demo-host",lead:{email:n}},e.origin),Object.keys(o).length>0&&e.source.postMessage({message:"storylane-token-submit",payload:{token:o}},e.origin),e.source.postMessage({source:"storylane-host-info",host:{url:window.location.href}},e.origin),e.source.postMessage({source:"storylane-tracking",tracking:document.cookie},e.origin)}}catch(e){console.error(e)}}))}