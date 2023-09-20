(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[1698],{37641:function(e,n,t){"use strict";t.r(n),t.d(n,{default:function(){return I}});var r=t(4730),i=t(50029),o=t(87794),s=t.n(o),a=t(67294),l=t(14416),c=t(72107),u=t(94688),d=t(70229),h=t(65596),g=t(90274),p=t(68939),m=t(68859),f=t(33483),x=t(78258),j=t(17934),b=t(85893),v=["store","query"],y="NOT_FOUND",k="HUB_UNLOCKED",O="LOCKED",Z="SOLUTIONS_UNLOCKED",w=function(e,n,t){return e?n?Z:t?k:O:y};function C(e){var n=e.query,t=(0,a.useState)(!1),r=t[0],o=t[1],v=(0,l.v9)(c.HF),C=(0,l.v9)((function(e){return(0,u._W)(e,n.slug)})),I=(0,h.recordsContain)(null===v||void 0===v?void 0:v.unlockedHubs,C),W=(0,l.v9)((function(e){return(0,c.$j)(e,C)})),S=(0,l.v9)((function(e){return(0,d.QT)(e,null===C||void 0===C?void 0:C.solutions)})),N=(0,l.v9)((function(e){return(0,u.o4)(e,null===C||void 0===C?void 0:C.id)})),L=(0,l.I0)(),A=function(){var e=(0,i.Z)(s().mark((function e(){return s().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return o(!0),e.next=3,L((0,u.FB)({id:C.id,params:{page:N}}));case 3:o(!1);case 4:case"end":return e.stop()}}),e)})));return function(){return e.apply(this,arguments)}}(),P=w(C,W,I);return(0,b.jsxs)(f.Z,{description:"Community solutions for the ".concat(null===C||void 0===C?void 0:C.title," challenge"),image:null===C||void 0===C?void 0:C.heroImage,isAuthorized:!0,noIndex:!0,title:"Frontend Mentor | ".concat(null===C||void 0===C?void 0:C.title," solutions"),url:"https://www.frontendmentor.io/challenges/".concat(n.slug,"/solutions"),children:[(0,b.jsx)(h.PageHeader,{isSticky:!0,heading:"Hub",children:(0,b.jsxs)(h.PageHeader.NavLinks,{children:[(0,b.jsx)(p.Z,{href:"/challenges/".concat(C.slug,"/hub"),level:"secondary",children:"Overview"}),(0,b.jsx)(p.Z,{href:"/challenges/".concat(C.slug,"/solutions"),isActive:!0,level:"secondary",children:"Community solutions"})]})}),(0,b.jsx)(h.ScreenReaderOnly,{tagName:"h1",children:"Community solutions"}),P===y&&(0,b.jsx)(m.Z,{}),P===O&&(0,b.jsx)(h.LockScreen,{title:"Looks like you haven't started this challenge yet",description:"You need to start the challenge and then submit a solution to unlock the community solutions for this challenge.",children:(0,b.jsx)(g.Z,{href:"/challenges/".concat(C.slug),children:"Visit challenge page"})}),P===k&&(0,b.jsx)(h.LockScreen,{title:"Looks like you haven't submitted a solution for this challenge yet",description:"Submit your solution to unlock the community solutions for this challenge.",children:(0,b.jsx)(g.Z,{href:"/challenges/".concat(C.slug,"/hub"),children:"Visit challenge Hub"})}),P===Z&&(0,b.jsx)(h.Spacer,{spacing:"6 0 0",children:(0,b.jsx)(h.Container,{width:"xwide",children:(0,b.jsxs)(h.Stack,{gap:"3",children:[(0,b.jsx)(h.Grid,{isMasonry:!0,children:S.map((function(e){return(0,b.jsx)(x.Z,{isAttributed:!0,solution:e},e.id)}))}),N&&(0,b.jsx)(h.LoadMore,{isLoading:r,onClick:A})]})})}),(0,b.jsx)(j.Z,{})]})}C.getInitialProps=function(){var e=(0,i.Z)(s().mark((function e(n){var t,i,o,a,l,d;return s().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return t=n.store,i=n.query,o=(0,r.Z)(n,v),e.next=3,t.dispatch((0,u.gW)({ctx:o,id:i.slug}));case 3:if(a=(0,c.HF)(t.getState()),l=(0,u._W)(t.getState(),i.slug),a){e.next=7;break}return e.abrupt("return",{query:i});case 7:return e.next=9,t.dispatch((0,c.ui)({ctx:o}));case 9:if(d=(0,c.$j)(t.getState(),l),w(d,l,a)!==Z){e.next=14;break}return e.next=14,t.dispatch((0,u.FB)({id:i.slug,ctx:o}));case 14:return e.abrupt("return",{query:i});case 15:case"end":return e.stop()}}),e)})));return function(n){return e.apply(this,arguments)}}();var I=C},58261:function(e,n,t){"use strict";t(67294);var r=t(65596),i=t(85893),o={premium:{backgroundColor:"primaryBlue",color:"neutralWhite",label:"Premium"},"free-plus":{backgroundColor:"primaryOrange",color:"neutralWhite",label:"Free+"},free:{backgroundColor:"primaryLightBlue",color:"primaryBlue",label:"Free"},new:{backgroundColor:"primaryRed",color:"neutralWhite",label:"New",icon:(0,i.jsx)(r.Icon,{name:"star-of-life",style:"solid"})},private:{backgroundColor:"primaryCyan",color:"neutralWhite",label:"Private",icon:(0,i.jsx)(r.Icon,{name:"lock",style:"solid"})}};n.Z=function(e){var n=e.size,t=void 0===n?"medium":n,s=e.type;return(0,i.jsx)(r.Flag,{backgroundColor:o[s].backgroundColor,color:o[s].color,icon:o[s].icon,isRounded:!0,isUppercase:!0,size:t,children:o[s].label})}},9950:function(e,n,t){"use strict";var r=t(90165),i=t(65596),o=(0,r.Z)(i.ButtonWithLinkStyles);o.Wrapper=i.ButtonWithLinkStyles.Wrapper,n.Z=o},86159:function(e,n,t){"use strict";var r=t(21402),i=t(65596),o=(0,r.Z)(i.Card.Image);o.Wrapper=i.Card.Image.Wrapper,n.Z=o},17934:function(e,n,t){"use strict";t(67294);var r=t(25675),i=t.n(r),o=t(50445),s=t(13540),a=t(65596),l=t(85893),c=(0,o.default)(a.Highlight.Wrapper).withConfig({displayName:"Discord__Wrapper",componentId:"sc-14o27h5-0"})(["&&{overflow:hidden;}> *{position:relative;}"," + ","{font-size:2.8rem;line-height:1.3;}::before{background-image:url('/static/images/bg-discord.svg');background-repeat:no-repeat;background-position:center;bottom:-40rem;content:'';height:80rem;opacity:1;position:absolute;right:-60rem;width:80rem;@media (min-width:","){bottom:-20rem;right:-13rem;}}"],a.Heading.Wrapper,a.Text.Wrapper,(function(e){return e.theme.breakpoints.tablet}));n.Z=function(){return(0,l.jsx)(a.Container,{spacing:"12 0",tagName:"div",width:"full",children:(0,l.jsx)(c,{$backgroundColor:"primaryBlue",children:(0,l.jsx)(a.Container,{width:"xwide",children:(0,l.jsxs)(a.Stack,{alignItems:"center",gap:"8",spacing:"12 9",children:[(0,l.jsx)(i(),{alt:"Discord logo",height:32,src:"/static/images/logo-discord.svg",width:166}),(0,l.jsx)(a.Heading,{align:"center",color:"neutralWhite",level:"2",children:"Join our Discord community"}),(0,l.jsx)(a.Text,{align:"center",color:"neutralWhite",children:"Join other Frontend Mentor community members taking the challenges, sharing resources, helping each other, and chatting about all things front-end!"}),(0,l.jsx)(a.LinkWithButtonStyles,{color:"primaryBlue",level:"tertiary",href:s.Vs,children:"Join our Discord"})]})})})})}},90274:function(e,n,t){"use strict";var r=t(21402),i=t(65596),o=(0,r.Z)(i.LinkWithButtonStyles);o.Wrapper=i.LinkWithButtonStyles.Wrapper,n.Z=o},15708:function(e,n,t){"use strict";var r=t(59499),i=t(4730),o=(t(67294),t(65596)),s=t(46346),a=t(85893),l=["node"];function c(e,n){var t=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);n&&(r=r.filter((function(n){return Object.getOwnPropertyDescriptor(e,n).enumerable}))),t.push.apply(t,r)}return t}function u(e){for(var n=1;n<arguments.length;n++){var t=null!=arguments[n]?arguments[n]:{};n%2?c(Object(t),!0).forEach((function(n){(0,r.Z)(e,n,t[n])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(t)):c(Object(t)).forEach((function(n){Object.defineProperty(e,n,Object.getOwnPropertyDescriptor(t,n))}))}return e}var d=function(e){var n={a:function(e){e.node;var n=(0,i.Z)(e,l);return n.href?(0,a.jsx)(s.Z,u(u({},n),{},{underline:"solid"})):n.children?"[".concat(n.children[0],"]()"):"[]()"}};return(0,a.jsx)(o.Markdown,u({componentMap:n},e))};d.Wrapper=o.Markdown.Wrapper,n.Z=d},68859:function(e,n,t){"use strict";t(67294);var r=t(33483),i=t(65596),o=t(85893);n.Z=function(){return(0,o.jsx)(r.Z,{noIndex:!0,children:(0,o.jsx)(i.NotFound,{})})}},90165:function(e,n,t){"use strict";var r=t(59499),i=t(4730),o=(t(67294),t(14416)),s=t(72107),a=t(65596),l=t(74516),c=t(15708),u=t(85893),d=["modal","onClick"];function h(e,n){var t=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);n&&(r=r.filter((function(n){return Object.getOwnPropertyDescriptor(e,n).enumerable}))),t.push.apply(t,r)}return t}function g(e){for(var n=1;n<arguments.length;n++){var t=null!=arguments[n]?arguments[n]:{};n%2?h(Object(t),!0).forEach((function(n){(0,r.Z)(e,n,t[n])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(t)):h(Object(t)).forEach((function(n){Object.defineProperty(e,n,Object.getOwnPropertyDescriptor(t,n))}))}return e}n.Z=function(e){var n=function(n){var t=n.modal,r=n.onClick,h=(0,i.Z)(n,d),p=(0,a.useModalContext)().open,m=(0,o.v9)(s.HF),f=g({description:"You need to be logged in before you can do that.",title:"Oops! \ud83d\ude2c"},t);return(0,u.jsx)(e,g({onClick:m?r:function(){p((0,u.jsxs)(a.Modal,{align:"center",id:"autentication",title:f.title,children:[(0,u.jsx)(c.Z,{spacing:"0 0 4",children:f.description}),(0,u.jsx)(l.Z,{})]}))}},h))};return n.displayName="Auth".concat(e.displayName||e.name),n}},70466:function(e,n,t){"use strict";t(67294);var r=t(50445),i=t(65596),o=t(14416),s=t(70229),a=t(46346),l=t(9950),c=t(85893),u=(0,r.default)(i.Align.Wrapper).withConfig({displayName:"Activity__Wrapper",componentId:"sc-16vkb3s-0"})(["",""],(function(e){return e.$disabled&&(0,r.css)(["&& button{opacity:1;}"])}));n.Z=function(e){var n=e.currentUser,t=e.disabled,r=e.solution,d=e.size,h=void 0===d?"medium":d,g=(0,o.I0)(),p=(0,i.recordsContain)(r.likes,n),m=(0,i.recordsContain)(r.bookmarks,n),f=function(){return(0,c.jsxs)(i.Align,{alignItems:"center",gap:"2",isInline:!0,children:[(0,c.jsx)(i.Icon,{color:"neutralDarkGrey",name:"message",size:"large"}),(0,c.jsx)(i.Text,{size:h,children:r.commentCount})]})};return(0,c.jsxs)(u,{$alignItems:"center",$disabled:t,$gap:"3",$isInline:!0,children:[t?(0,c.jsx)(f,{}):(0,c.jsx)(a.Z,{ariaLabel:"Go to solution feedback. This solution has ".concat((0,i.pluralize)(r.commentCount,"comment"),"."),href:"/solutions/".concat(r.slug,"#feedback"),isIcon:!0,children:(0,c.jsx)(f,{})}),(0,c.jsx)(l.Z,{ariaLabel:"".concat(p?"Unlike":"Like"," this solution. This solution has ").concat((0,i.pluralize)(r.likes.length,"like"),"."),disabled:t,isIcon:!0,onClick:function(){return g((0,s.Xj)({id:r.id}))},children:(0,c.jsxs)(i.Align,{alignItems:"center",gap:"2",isInline:!0,children:[(0,c.jsx)(i.Icon,{color:p?"primaryRed":"neutralDarkGrey",name:"heart",size:"large",style:p?"solid":"regular"}),(0,c.jsx)(i.Text,{size:h,children:r.likes.length})]})}),(0,c.jsx)(l.Z,{ariaLabel:"".concat(m?"Unbookmark":"Bookmark"," this solution. This solution has ").concat((0,i.pluralize)(r.bookmarks.length,"bookmark")),disabled:t,isIcon:!0,onClick:function(){return g((0,s.oU)({id:r.id}))},children:(0,c.jsxs)(i.Align,{alignItems:"center",gap:"2",isInline:!0,children:[(0,c.jsx)(i.Icon,{color:m?"primaryBlue":"neutralDarkGrey",name:"bookmark",size:"large",style:m?"solid":"regular"}),(0,c.jsx)(i.Text,{size:h,children:r.bookmarks.length})]})})]})}},78258:function(e,n,t){"use strict";t(67294);var r=t(14416),i=t(72107),o=t(94688),s=t(53847),a=t(21884),l=t(65596),c=t(46346),u=t(86159),d=t(58261),h=t(15708),g=t(70466),p=t(12442),m=t(96309),f=t(85893);n.Z=function(e){var n=e.headingTag,t=void 0===n?"h2":n,x=e.isAttributed,j=e.isFixedHeight,b=e.solution,v=(0,r.v9)((function(e){return(0,o.ai)(e,null===b||void 0===b?void 0:b.challenge)})),y=(0,r.v9)(i.HF),k=(0,r.v9)((function(e){return(0,s.vc)(e,null===b||void 0===b?void 0:b.tags)})),O=(0,r.v9)((function(e){return(0,a.dy)(e,null===b||void 0===b?void 0:b.user)}));return(0,f.jsxs)(l.Card,{tagName:"article",children:[(0,f.jsx)(l.Card.Flags,{children:b.private&&(0,f.jsx)(d.Z,{size:"small",type:"private"})}),(0,f.jsx)(u.Z,{aspectRatio:j?"3 / 2":void 0,href:"/solutions/".concat(b.slug),position:j?"top":void 0,src:b.screenshot}),(0,f.jsxs)(l.Card.Content,{children:[(0,f.jsxs)(l.Text,{color:"neutralDarkGrey",size:"small",children:["Submitted ",(0,f.jsx)(l.TimeAgo,{time:b.submittedAt})]}),(0,f.jsxs)(l.Stack,{gap:"2",children:[(0,f.jsx)(l.Heading,{level:"5",tagName:t,spacing:"2",children:(0,f.jsx)(c.Z,{href:"/solutions/".concat(b.slug),children:b.title})}),(0,f.jsx)(p.Z,{tags:k}),(0,f.jsxs)(l.Align,{alignItems:"center",isWrap:!0,justifyContent:"space-between",children:[v&&(0,f.jsx)(l.Align.Item,{spacing:"0 0 2",children:(0,f.jsx)(l.Languages,{languages:v.languages,size:"large"})}),(0,f.jsx)(l.Align.Item,{spacing:"0 0 2",children:(0,f.jsx)(g.Z,{currentUser:y,solution:b,size:"large"})})]})]}),x&&(0,f.jsxs)(f.Fragment,{children:[(0,f.jsx)(l.Rule,{spacing:"2 0 6"}),(0,f.jsx)(m.Z,{isStacked:!0,user:O})]}),b.questions&&!j&&(0,f.jsxs)(f.Fragment,{children:[(0,f.jsx)(l.Rule,{spacing:"4 0 6"}),(0,f.jsx)(h.Z,{children:b.questions})]})]})]})}},12442:function(e,n,t){"use strict";t(67294);var r=t(65596),i=t(85893);n.Z=function(e){var n=e.justifyContent,t=void 0===n?"flex-start":n,o=e.tags,s=e.theme;return(0,i.jsx)(r.Align,{gap:"2",isWrap:!0,justifyContent:t,children:o.map((function(e){return(0,i.jsxs)(r.Text,{color:"light"===s?"neutralWhite":"primaryBlue",tagName:"span",children:["#",e.name]},e.id)}))})}},96309:function(e,n,t){"use strict";t(67294);var r=t(65596),i=t(46346),o=t(85893),s={dark:{link:"neutralBlack",text:"neutralDarkGrey",score:"primaryBlue"},light:{link:"neutralWhite",text:"neutralMidGrey",score:"neutralWhite"}};n.Z=function(e){var n=e.gap,t=void 0===n?"2":n,a=e.isStacked,l=e.subtext,c=e.theme,u=void 0===c?"dark":c,d=e.user;return d?(0,o.jsxs)(r.Align,{alignItems:"center",gap:t,children:[(0,o.jsx)(i.Z,{ariaLabel:"Visit ".concat(d.displayName,"'s profile"),href:"/profile/".concat(d.username),isIcon:!0,tabIndex:-1,children:(0,o.jsx)(r.Avatar,{image:d.avatar,isProMember:d.hasActiveSubscription,name:d.displayName})}),(0,o.jsxs)(r.Stack,{overflow:"hidden",isInline:!0,children:[(0,o.jsxs)(r.Align,{alignItems:"baseline",gap:"1",children:[(0,o.jsx)(i.Z,{ariaLabel:"Visit ".concat(d.displayName,"'s profile"),color:s[u].link,font:"secondary",fontWeight:"bold",href:"/profile/".concat(d.username),isEllipsis:!0,size:"small",children:d.displayName}),(0,o.jsxs)(r.Align.Item,{shrink:"0",tagName:"span",children:[(0,o.jsx)(r.Text,{color:s[u].link,size:"small",tagName:"span",children:"\u2022"})," ",(0,o.jsx)(r.Text,{color:s[u].score,fontWeight:"bold",size:"small",tagName:"span",children:d.mentorScore.total.toLocaleString()})]})]}),(0,o.jsxs)(r.Align,{gap:"2",alignItems:"baseline",isWrap:!0,children:[(0,o.jsx)(r.Align.Item,{basis:a?"100%":void 0,children:(0,o.jsxs)(r.Text,{color:s[u].text,size:"small",children:["@",d.username]})}),l&&(0,o.jsx)(r.Text,{color:s[u].text,isItalic:!0,size:"xsmall",children:l})]})]})]}):(0,o.jsx)(r.Text,{font:"secondary",fontWeight:"semiBold",children:"Account Deleted"})}},70705:function(e,n,t){(window.__NEXT_P=window.__NEXT_P||[]).push(["/challenges/[slug]/solutions",function(){return t(37641)}])}},function(e){e.O(0,[9774,2888,179],(function(){return n=70705,e(e.s=n);var n}));var n=e.O();_N_E=n}]);