(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[211],{86905:function(e,t,n){"use strict";n.r(t),n.d(t,{default:function(){return S}});var r=n(4730),o=n(59499),i=n(50029),s=n(87794),a=n.n(s),l=n(67294),u=n(11163),c=n(14416),d=n(72107),p=n(94688),h=n(70229),f=n(65596),g=n(90274),m=n(68859),b=n(33483),v=n(68007),y=n(17934),j=n(85893),x=["query","store"];function w(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}function k(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?w(Object(n),!0).forEach((function(t){(0,o.Z)(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):w(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}var O=function(e){var t=e.query,n=(0,l.useState)(!1),r=n[0],o=n[1],s=(0,c.I0)(),x=(0,u.useRouter)(),w=(0,c.v9)(d.HF),O=(0,c.v9)((function(e){return(0,p._W)(e,t.slug)})),S=(0,f.recordsContain)(null===w||void 0===w?void 0:w.unlockedHubs,O),P=function(){var e=(0,i.Z)(a().mark((function e(t){var n;return a().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return o(!0),e.next=3,s((0,h.jG)({data:k(k({},t),{},{challenge:O.id})}));case 3:if(n=e.sent,n.payload.data){e.next=7;break}return e.abrupt("return",o(!1));case 7:x.push("/challenges/".concat(O.slug,"/hub"));case 8:case"end":return e.stop()}}),e)})));return function(t){return e.apply(this,arguments)}}();return O?(0,j.jsxs)(b.Z,{description:"".concat(null===O||void 0===O?void 0:O.title," solution submission form"),image:null===O||void 0===O?void 0:O.heroImage,isAuthorized:!0,noIndex:!0,title:"Frontend Mentor | ".concat(null===O||void 0===O?void 0:O.title," solution submission form"),url:"https://www.frontendmentor.io/challenge/".concat(t.slug,"/solutions/new"),children:[(0,j.jsx)(f.PageHeader,{heading:"Submit solution"}),S?(0,j.jsxs)(j.Fragment,{children:[(0,j.jsx)(f.ScreenReaderOnly,{tagName:"h1",children:"Submit your solution"}),r&&(0,j.jsx)(f.LoadingScreen,{}),(0,j.jsx)(f.Container,{children:(0,j.jsx)(f.Spacer,{spacing:"10 0 0",children:(0,j.jsx)(v.ZP,{currentUser:w,onSubmit:P})})})]}):(0,j.jsx)(f.LockScreen,{title:"Looks like you haven't started this challenge yet",description:"You need to start this challenge to submit a solution.",children:(0,j.jsx)(g.Z,{href:"/challenges/".concat(O.slug),children:"Visit challenge page"})}),(0,j.jsx)(y.Z,{})]}):(0,j.jsx)(m.Z,{})};O.getInitialProps=function(){var e=(0,i.Z)(a().mark((function e(t){var n,o,i;return a().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return n=t.query,o=t.store,i=(0,r.Z)(t,x),e.next=3,o.dispatch((0,p.gW)({ctx:i,id:n.slug}));case 3:return e.abrupt("return",{query:n});case 4:case"end":return e.stop()}}),e)})));return function(t){return e.apply(this,arguments)}}();var S=O},68007:function(e,t,n){"use strict";n.d(t,{ZP:function(){return y}});var r=n(67294),o=n(14416),i=n(53847),s=n(5226),a=n(65596),l=n(50445),u=n(15708),c=n(33048),d=n(85893),p=function(e){var t=e.info;return(0,d.jsx)("div",{className:"info-button-wrapper",children:(0,d.jsx)(a.Modal,{align:"center",title:t.title,children:(0,d.jsx)(u.Z,{children:t.content})})})},h=(0,l.default)(a.Highlight.Wrapper).withConfig({displayName:"ProFieldWrapper__Wrapper",componentId:"sc-1lybomr-0"})(["display:flex;justify-content:center;"]),f=function(e){var t=e.children,n=e.hasActiveSubscription,o=e.info,i=(0,a.useModalContext)().open;return(0,d.jsx)(h,{$backgroundColor:"neutralLightestGrey",$opacity:"1",children:(0,d.jsx)(a.Spacer,{spacing:"6",children:(0,d.jsxs)(a.Align,{gap:"4",justifyContent:"center",children:[(0,d.jsxs)(a.Switch,{breakpoint:"mobile",column:{alignItems:"center",gap:"2"},isInline:!0,row:{alignItems:"center",gap:"4"},children:[r.Children.map(t,(function(e){return r.cloneElement(e,{disabled:!n})})),!n&&(0,d.jsx)(c.Z,{isLarge:!0,title:"Only available to PRO members"})]}),o&&(0,d.jsx)(a.InfoButton,{ariaLabel:o.label,onClick:function(){return i((0,d.jsx)(p,{info:o}))}})]})})})},g=[/^https:\/\/.*\.deno\.dev/,/^https:\/\/.*\.editorx\.io/,/^https:\/\/.*\.firebaseapp\.com/,/^https:\/\/.*\.fly\.dev/,/^https:\/\/.*\.github\.io/,/^https:\/\/.*\.gitlab\.io/,/^https:\/\/.*\.herokuapp\.com/,/^https:\/\/.*\.netlify\.app/,/^https:\/\/.*\.onrender\.com/,/^https:\/\/.*\.pages\.dev/,/^https:\/\/.*\.repl\.co/,/^https:\/\/.*\.surge\.sh/,/^https:\/\/.*\.vercel\.app/,/^https:\/\/.*\.web\.app/],m=[/^https:\/\/bitbucket\.com/,/^https:\/\/bitbucket\.org/,/^https:\/\/github\.com/,/^https:\/\/gitlab\.com/],b={required:!0,url:!0,validate:{notSettings:function(e){return!e.includes("settings")||'Please remove "/settings" from the end of the URL'},allowedDomains:function(e){return m.some((function(t){return t.test(e)}))||"This should be a GitHub, GitLab or BitBucket repository"}}},v={required:!0,url:!0,validate:{isLive:function(e){return!m.some((function(t){return t.test(e)}))||"This should be a live version of your site, not the repository"},allowedDomains:function(e){return g.some((function(t){return t.test(e)}))||"Invalid domain. Please check README for recommended hosts"}}},y=function(e){var t=e.currentUser,n=e.onSubmit,r=e.solution,l=(0,o.v9)(i.a0),u=(0,s.gq)(l);return(0,d.jsx)(a.Card,{children:(0,d.jsx)(a.Card.Content,{children:(0,d.jsx)(a.Form,{onSubmit:n,children:(0,d.jsxs)(a.Stack,{gap:"4",children:[(0,d.jsx)(a.TextField,{helperText:"Include some of the tools and techniques you used to complete the challenge.",label:"Solution title",name:"title",placeholder:"e.g. Responsive landing page using CSS Grid",validations:{required:!0,maxLength:70},value:null===r||void 0===r?void 0:r.title}),(0,d.jsx)(a.TextField,{label:"Repository URL",name:"repoURL",type:"url",validations:b,value:null===r||void 0===r?void 0:r.repoURL}),(0,d.jsx)(a.TextField,{helperText:"Read more about our [recommended free hosting options](https://medium.com/frontend-mentor/frontend-mentor-trusted-hosting-providers-bf000dfebe).",label:"Live site URL",name:"liveURL",type:"url",validations:v,value:null===r||void 0===r?void 0:r.liveURL}),(0,d.jsx)(a.SelectField,{helperText:"Add up to 5 tags based on your tools and approaches for this project. We don\u2019t require HTML, CSS, and JavaScript tags, as they are the foundational front-end languages. Don\u2019t see the tag you want? Request it by emailing [hi@frontendmentor.io](mailto:hi@frontendmentor.io).",label:"Tags",isMulti:!0,name:"tags",options:u,validations:{maxOptions:5},value:null===r||void 0===r?void 0:r.tags}),(0,d.jsx)(a.MarkdownPreview,{helperText:'Please ensure you add specific questions you\'d like people to answer if you want feedback. Specific questions are more likely to receive helpful feedback than general statements like "Feedback welcome".\nThings to consider when asking for specific feedback include:\n\n+ What did you find difficult while building the project?\n+ Which areas of your code are you unsure of?\n+ Do you have any questions about best practices?\n              ',isBordered:!0,label:"Questions for the community",name:"questions",value:null===r||void 0===r?void 0:r.questions}),(0,d.jsx)(f,{hasActiveSubscription:null===t||void 0===t?void 0:t.hasActiveSubscription,info:{title:"Private Solutions",content:"With private solutions you can control exactly who sees your\nsolutions. If you make your solution private it won't show up on the\nsolutions page or on your profile. We'll also make it so that search\nengines don't index the page.\n\nBut anyone you share your solution URL with will still be able to view\nit.",label:"Learn about private solutions"},children:(0,d.jsx)(a.Toggle,{ariaLabel:"Make your solution private?",name:"private",offLabel:"Public",onLabel:"Private",size:"medium",value:null===r||void 0===r?void 0:r.private})}),(0,d.jsx)(a.Align,{justifyContent:"flex-end",children:(0,d.jsxs)(a.Button,{isWide:!0,children:[r?"Update":"Submit"," solution"]})})]})})})})}},17934:function(e,t,n){"use strict";n(67294);var r=n(25675),o=n.n(r),i=n(50445),s=n(13540),a=n(65596),l=n(85893),u=(0,i.default)(a.Highlight.Wrapper).withConfig({displayName:"Discord__Wrapper",componentId:"sc-14o27h5-0"})(["&&{overflow:hidden;}> *{position:relative;}"," + ","{font-size:2.8rem;line-height:1.3;}::before{background-image:url('/static/images/bg-discord.svg');background-repeat:no-repeat;background-position:center;bottom:-40rem;content:'';height:80rem;opacity:1;position:absolute;right:-60rem;width:80rem;@media (min-width:","){bottom:-20rem;right:-13rem;}}"],a.Heading.Wrapper,a.Text.Wrapper,(function(e){return e.theme.breakpoints.tablet}));t.Z=function(){return(0,l.jsx)(a.Container,{spacing:"12 0",tagName:"div",width:"full",children:(0,l.jsx)(u,{$backgroundColor:"primaryBlue",children:(0,l.jsx)(a.Container,{width:"xwide",children:(0,l.jsxs)(a.Stack,{alignItems:"center",gap:"8",spacing:"12 9",children:[(0,l.jsx)(o(),{alt:"Discord logo",height:32,src:"/static/images/logo-discord.svg",width:166}),(0,l.jsx)(a.Heading,{align:"center",color:"neutralWhite",level:"2",children:"Join our Discord community"}),(0,l.jsx)(a.Text,{align:"center",color:"neutralWhite",children:"Join other Frontend Mentor community members taking the challenges, sharing resources, helping each other, and chatting about all things front-end!"}),(0,l.jsx)(a.LinkWithButtonStyles,{color:"primaryBlue",level:"tertiary",href:s.Vs,children:"Join our Discord"})]})})})})}},90274:function(e,t,n){"use strict";var r=n(21402),o=n(65596),i=(0,r.Z)(o.LinkWithButtonStyles);i.Wrapper=o.LinkWithButtonStyles.Wrapper,t.Z=i},15708:function(e,t,n){"use strict";var r=n(59499),o=n(4730),i=(n(67294),n(65596)),s=n(46346),a=n(85893),l=["node"];function u(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}function c(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?u(Object(n),!0).forEach((function(t){(0,r.Z)(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):u(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}var d=function(e){var t={a:function(e){e.node;var t=(0,o.Z)(e,l);return t.href?(0,a.jsx)(s.Z,c(c({},t),{},{underline:"solid"})):t.children?"[".concat(t.children[0],"]()"):"[]()"}};return(0,a.jsx)(i.Markdown,c({componentMap:t},e))};d.Wrapper=i.Markdown.Wrapper,t.Z=d},68859:function(e,t,n){"use strict";n(67294);var r=n(33483),o=n(65596),i=n(85893);t.Z=function(){return(0,i.jsx)(r.Z,{noIndex:!0,children:(0,i.jsx)(o.NotFound,{})})}},49084:function(e,t,n){(window.__NEXT_P=window.__NEXT_P||[]).push(["/challenges/[slug]/solutions/new",function(){return n(86905)}])}},function(e){e.O(0,[9774,2888,179],(function(){return t=49084,e(e.s=t);var t}));var t=e.O();_N_E=t}]);