(window.webpackJsonp=window.webpackJsonp||[]).push([[167],{14:function(e,t,n){"use strict";n.d(t,"c",(function(){return a})),n.d(t,"a",(function(){return l})),n.d(t,"e",(function(){return d})),n.d(t,"b",(function(){return s})),n.d(t,"d",(function(){return f}));var r=n(15),o=n(16);function i(e,t){var n="undefined"!==typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(!n){if(Array.isArray(e)||(n=function(e,t){if(!e)return;if("string"===typeof e)return c(e,t);var n=Object.prototype.toString.call(e).slice(8,-1);"Object"===n&&e.constructor&&(n=e.constructor.name);if("Map"===n||"Set"===n)return Array.from(e);if("Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n))return c(e,t)}(e))||t&&e&&"number"===typeof e.length){n&&(e=n);var r=0,o=function(){};return{s:o,n:function(){return r>=e.length?{done:!0}:{done:!1,value:e[r++]}},e:function(e){throw e},f:o}}throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}var i,a=!0,u=!1;return{s:function(){n=n.call(e)},n:function(){var e=n.next();return a=e.done,e},e:function(e){u=!0,i=e},f:function(){try{a||null==n.return||n.return()}finally{if(u)throw i}}}}function c(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,r=new Array(t);n<t;n++)r[n]=e[n];return r}var a=function(){return Object(o.a)(u)},u=function(){var e,t=i(document.querySelectorAll("[data-repositioning-dropdown]"));try{for(t.s();!(e=t.n()).done;){var n=e.value;n.classList.remove("reverse");var o="block"===n.style.display;o||(n.style.opacity=0,n.style.display="block"),Object(r.a)({element:n})||n.classList.add("reverse"),o||(n.style.removeProperty("display"),n.style.removeProperty("opacity"))}}catch(c){t.e(c)}finally{t.f()}},l='button, [href], input:not([type="hidden"]), select, textarea, [tabindex="0"]',d=function(e){var t,n=e.triggerElementId,r=e.dropdownContentId,o=document.getElementById(r);document.getElementById(n).setAttribute("aria-expanded","true"),o.style.display="block",null===(t=o.querySelector(l))||void 0===t||t.focus()},s=function(e){var t,n=e.triggerElementId,r=e.dropdownContentId,o=e.onClose,i=document.getElementById(r);i&&(null===(t=document.getElementById(n))||void 0===t||t.setAttribute("aria-expanded","false"),i.style.removeProperty("display"),null===o||void 0===o||o())},f=function(e){var t=e.triggerElementId,n=e.dropdownContentId,r=e.dropdownContentCloseButtonId,o=e.onClose,i=e.onOpen,c=document.getElementById(t),a=document.getElementById(n);if(c&&a){c.setAttribute("aria-expanded","false"),c.setAttribute("aria-controls",n),c.setAttribute("aria-haspopup","true");var u,f=function(e){var r=e.key;if("Escape"===r)"true"===c.getAttribute("aria-expanded")&&(s({triggerElementId:t,dropdownContentId:n,onClose:m}),c.focus());else if("Tab"===r){(null===a||void 0===a?void 0:a.contains(document.activeElement))||s({triggerElementId:t,dropdownContentId:n,onClose:m})}},v=function(e){var r=e.target,o=document.getElementById(t);!o||r===o||a.contains(r)||o.contains(r)||(s({triggerElementId:t,dropdownContentId:n,onClose:m}),r.matches(l)||o.focus())},m=function(){null===o||void 0===o||o(),document.removeEventListener("keyup",f),document.removeEventListener("click",v)};if(c.addEventListener("click",(function(){var e;"true"===(null===(e=document.getElementById(t))||void 0===e?void 0:e.getAttribute("aria-expanded"))?s({triggerElementId:t,dropdownContentId:n,onClose:m}):(d({triggerElementId:t,dropdownContentId:n}),null===i||void 0===i||i(),document.addEventListener("keyup",f),document.addEventListener("click",v))})),r)null===(u=document.getElementById(r))||void 0===u||u.addEventListener("click",(function(){var e;s({triggerElementId:t,dropdownContentId:n,onClose:m}),null===(e=document.getElementById(t))||void 0===e||e.focus()}));return{closeDropdown:function(){s({triggerElementId:t,dropdownContentId:n,onClose:m})}}}}},15:function(e,t,n){"use strict";function r(e){var t=e.element,n=e.offsetTop,r=void 0===n?0:n,o=e.allowPartialVisibility,i=void 0!==o&&o,c=t.getBoundingClientRect(),a=window.innerHeight||document.documentElement.clientHeight,u=window.innerWidth||document.documentElement.clientWidth,l=c.top<=a&&c.top>=r,d=c.right>=0&&c.right<=u,s=c.bottom>=r&&c.bottom<=a,f=c.left<=u&&c.left>=0,v=c.top<=r,m=c.bottom>=a;return i?(l||s||v&&m)&&(f||d):l&&s&&f&&d}n.d(t,"a",(function(){return r}))},16:function(e,t,n){"use strict";n.d(t,"a",(function(){return l}));var r=n(29),o=n.n(r);function i(e){return i="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},i(e)}function c(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}function a(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?c(Object(n),!0).forEach((function(t){u(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):c(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}function u(e,t,n){return(t=function(e){var t=function(e,t){if("object"!==i(e)||null===e)return e;var n=e[Symbol.toPrimitive];if(void 0!==n){var r=n.call(e,t||"default");if("object"!==i(r))return r;throw new TypeError("@@toPrimitive must return a primitive value.")}return("string"===t?String:Number)(e)}(e,"string");return"symbol"===i(t)?t:String(t)}(t))in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}function l(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{},n=t.time,r=void 0===n?300:n,i=t.config,c=void 0===i?{leading:!1}:i,u=a({},c);return o()(e,r,u)}},38:function(e,t,n){"use strict";n.d(t,"a",(function(){return f}));function r(){return new Promise((function(e,t){var n=0,r=setInterval((function(){var o=document.querySelector("meta[name='csrf-token']");if(n+=1,o){clearInterval(r);var i=o.getAttribute("content");return e(i)}if(30===n)return clearInterval(r),Honeybadger.notify("Could not locate CSRF metatag ".concat(JSON.stringify(localStorage.current_user))),t(new Error("Could not locate CSRF meta tag on the page."))}),250)}))}function o(e){return o="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},o(e)}var i=["headers","body","method","csrfToken"];function c(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}function a(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?c(Object(n),!0).forEach((function(t){u(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):c(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}function u(e,t,n){return(t=function(e){var t=function(e,t){if("object"!==o(e)||null===e)return e;var n=e[Symbol.toPrimitive];if(void 0!==n){var r=n.call(e,t||"default");if("object"!==o(r))return r;throw new TypeError("@@toPrimitive must return a primitive value.")}return("string"===t?String:Number)(e)}(e,"string");return"symbol"===o(t)?t:String(t)}(t))in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}function l(e,t){if(null==e)return{};var n,r,o=function(e,t){if(null==e)return{};var n,r,o={},i=Object.keys(e);for(r=0;r<i.length;r++)n=i[r],t.indexOf(n)>=0||(o[n]=e[n]);return o}(e,t);if(Object.getOwnPropertySymbols){var i=Object.getOwnPropertySymbols(e);for(r=0;r<i.length;r++)n=i[r],t.indexOf(n)>=0||Object.prototype.propertyIsEnumerable.call(e,n)&&(o[n]=e[n])}return o}function d(e,t,n,r,o,i,c){try{var a=e[i](c),u=a.value}catch(l){return void n(l)}a.done?t(u):Promise.resolve(u).then(r,o)}function s(e){return function(){var t=this,n=arguments;return new Promise((function(r,o){var i=e.apply(t,n);function c(e){d(i,r,o,c,a,"next",e)}function a(e){d(i,r,o,c,a,"throw",e)}c(void 0)}))}}function f(e){return v.apply(this,arguments)}function v(){return v=s((function*(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{},n=t.headers,o=t.body,c=t.method,u=void 0===c?"GET":c,d=t.csrfToken,s=void 0===d?yield r():d,f=l(t,i),v={body:o&&"string"!==typeof o?JSON.stringify(o):o},m=a(a({method:u,headers:a({Accept:"application/json","X-CSRF-Token":s,"Content-Type":"application/json"},n),credentials:"same-origin"},v),f);return fetch(e,m)})),v.apply(this,arguments)}},741:function(e,t,n){"use strict";n.r(t),n.d(t,"listenForHoveredOrFocusedStoryCards",(function(){return p})),n.d(t,"initializeFeedPreviewCards",(function(){return b}));var r=n(0),o=n(5),i=Object(o.memo)((function(e){var t=e.email,n=e.location,o=e.summary,i=e.created_at,c=e.education,a=e.work,u=new Date(i),l=new Intl.DateTimeFormat(navigator.language||"default",{day:"numeric",month:"long",year:"numeric"}).format(u);return Object(r.h)(r.Fragment,null,o&&Object(r.h)("div",{className:"color-base-70"},o),Object(r.h)("div",{className:"user-metadata-details"},Object(r.h)("ul",{class:"user-metadata-details-inner"},t&&Object(r.h)("li",null,Object(r.h)("div",{class:"key"},"Email"),Object(r.h)("div",{class:"value"},Object(r.h)("a",{href:"mailto:".concat(t)},t))),a&&Object(r.h)("li",null,Object(r.h)("div",{className:"key"},"Work"),Object(r.h)("div",{className:"value"},a)),n&&Object(r.h)("li",null,Object(r.h)("div",{class:"key"},"Location"),Object(r.h)("div",{class:"value"},n)),c&&Object(r.h)("li",null,Object(r.h)("div",{class:"key"},"Education"),Object(r.h)("div",{class:"value"},c)),Object(r.h)("li",null,Object(r.h)("div",{class:"key"},"Joined"),Object(r.h)("div",{class:"value"},Object(r.h)("time",{datetime:i,class:"date"},l))))))})),c=n(14),a=n(38);function u(e,t){var n="undefined"!==typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(!n){if(Array.isArray(e)||(n=function(e,t){if(!e)return;if("string"===typeof e)return l(e,t);var n=Object.prototype.toString.call(e).slice(8,-1);"Object"===n&&e.constructor&&(n=e.constructor.name);if("Map"===n||"Set"===n)return Array.from(e);if("Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n))return l(e,t)}(e))||t&&e&&"number"===typeof e.length){n&&(e=n);var r=0,o=function(){};return{s:o,n:function(){return r>=e.length?{done:!0}:{done:!1,value:e[r++]}},e:function(e){throw e},f:o}}throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}var i,c=!0,a=!1;return{s:function(){n=n.call(e)},n:function(){var e=n.next();return c=e.done,e},e:function(e){a=!0,i=e},f:function(){try{c||null==n.return||n.return()}finally{if(a)throw i}}}}function l(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,r=new Array(t);n<t;n++)r[n]=e[n];return r}function d(e,t,n,r,o,i,c){try{var a=e[i](c),u=a.value}catch(l){return void n(l)}a.done?t(u):Promise.resolve(u).then(r,o)}function s(e){return function(){var t=this,n=arguments;return new Promise((function(r,o){var i=e.apply(t,n);function c(e){d(i,r,o,c,a,"next",e)}function a(e){d(i,r,o,c,a,"throw",e)}c(void 0)}))}}var f={};function v(){return(v=s((function*(e){var t=e.dataset,n=t.authorId;if(!t.fetched){e.dataset.fetched="true";var r=f[n];if(r)m(r,e);else{var o=yield Object(a.a)("/profile_preview_cards/".concat(n)),i=yield o.json();f[n]=i,m(i,e)}}}))).apply(this,arguments)}function m(e,t){var n=t.parentElement;Object(r.render)(Object(r.h)(i,e),n,t),n.closest(".profile-preview-card__content").style.setProperty("--card-color",e.card_color)}function y(e){var t=e.target;if(t.classList.contains("profile-preview-card__trigger")){var n=t.parentElement.getElementsByClassName("author-preview-metadata-container")[0];n&&function(e){v.apply(this,arguments)}(n)}}function p(){var e=document.getElementById("main-content");e.addEventListener("mouseover",y),e.addEventListener("focusin",y)}function b(){var e,t=u(document.querySelectorAll("button[id^=story-author-preview-trigger]:not([data-initialized])"));try{var n=function(){var t=e.value,n=t.getAttribute("aria-controls"),r=document.getElementById(n);r&&(Object(c.d)({triggerElementId:t.id,dropdownContentId:n,onOpen:function(){return null===r||void 0===r?void 0:r.classList.add("showing")},onClose:function(){return null===r||void 0===r?void 0:r.classList.remove("showing")}}),t.dataset.initialized=!0)};for(t.s();!(e=t.n()).done;)n()}catch(r){t.e(r)}finally{t.f()}}var g=new MutationObserver((function(e){e.forEach((function(e){"childList"===e.type&&b()}))}));document.getElementById("index-container")&&g.observe(document.getElementById("index-container"),{childList:!0,subtree:!0});var h=Object(c.c)();document.addEventListener("scroll",h),InstantClick.on("change",(function(){g.disconnect(),document.removeEventListener("scroll",h)})),window.addEventListener("beforeunload",(function(){g.disconnect(),document.removeEventListener("scroll",h)}))}}]);
//# sourceMappingURL=167-3ebdf11555746db71bc1.chunk.js.map