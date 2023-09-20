(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[7033],{61396:function(e,n,t){"use strict";t.r(n),t.d(n,{default:function(){return X}});var r=t(50029),i=t(16835),l=t(4730),o=t(87794),a=t.n(o),s=t(67294),c=t(11163),d=t(50445),u=t(96486),h=t(14416),p=t(72107),f=t(94688),g=t(5226),m=t(65596),x=t(33483),b=t(59499),y=d.default.button.withConfig({displayName:"DropdownMenuButton",componentId:"sc-vv2phe-0"})(["align-items:center;background:none;border:none;cursor:pointer;display:flex;font-family:",";font-size:",";font-style:italic;gap:",";height:100%;justify-content:center;letter-spacing:1px;text-transform:uppercase;transition:background 0.3s;width:100%;:hover{background:",";}","{transform:",";transition:transform 300ms;}"],(function(e){return e.theme.fonts.secondary}),(function(e){return e.theme.textSizes.xsmall}),(0,m.convertSpacings)("2"),(function(e){return e.theme.colors.neutralLightestGrey}),m.Icon.Wrapper,(function(e){return e.$isActive&&"rotate(180deg)"})),j=d.default.ul.withConfig({displayName:"DropdownList",componentId:"sc-1z11v91-0"})(["background:",";border:1px solid ",";border-top:none;margin:0;max-height:calc(100vh - 28rem);overflow-y:scroll;position:absolute;right:0;top:100%;width:100%;z-index:",";@media (min-width:","){border-top:1px solid ",";max-height:calc(100vh - 20rem);}"],(function(e){return e.theme.colors.neutralOffWhite}),(function(e){return e.theme.colors.neutralLightGrey}),(function(e){return e.theme.zIndex.second}),(function(e){return e.theme.breakpoints.tablet}),(function(e){return e.theme.colors.neutralLightGrey})),v=t(85893);function w(e,n){var t=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);n&&(r=r.filter((function(n){return Object.getOwnPropertyDescriptor(e,n).enumerable}))),t.push.apply(t,r)}return t}function k(e){for(var n=1;n<arguments.length;n++){var t=null!=arguments[n]?arguments[n]:{};n%2?w(Object(t),!0).forEach((function(n){(0,b.Z)(e,n,t[n])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(t)):w(Object(t)).forEach((function(n){Object.defineProperty(e,n,Object.getOwnPropertyDescriptor(t,n))}))}return e}var C=d.default.div.withConfig({displayName:"SortBy__Wrapper",componentId:"sc-1nq1cih-0"})(["flex:1;border:1px solid ",";@media (min-width:","){border-bottom:none;border-top:none;min-width:15rem;}"],(function(e){return e.theme.colors.neutralLightGrey}),(function(e){return e.theme.breakpoints.tablet})),I=d.default.li.withConfig({displayName:"SortBy__ListItem",componentId:"sc-1nq1cih-1"})(["border-left:5px solid ",";:not(:last-child){border-bottom:1px solid ",";}button{background:",";border:none;cursor:pointer;display:block;font-family:",";padding:",";text-align:start;width:100%;}"],(function(e){return e.$active?e.theme.colors.primaryBlue:e.theme.colors.neutralWhite}),(function(e){return e.theme.colors.neutralLightGrey}),(function(e){return e.theme.colors.neutralOffWhite}),(function(e){return e.theme.fonts.secondary}),(0,m.convertSpacings)("6 9")),S=function(e){var n=e.filters,t=e.setFilters,r=(0,s.useState)(!1),i=r[0],l=r[1],o=(0,s.useRef)();(0,m.useOutsideClick)(o,(function(){return l(!1)}));var a=function(e){return t(k(k({},n),{},{sort:e}))};return(0,v.jsxs)(C,{ref:o,children:[(0,v.jsxs)(y,{"aria-controls":"sort-challenges-list","aria-expanded":i,$isActive:i,onClick:function(){return l(!i)},children:[(0,v.jsx)("span",{children:"Sort by"}),(0,v.jsx)(m.Icon,{name:"chevron-down"})]}),i&&(0,v.jsxs)(j,{id:"sort-challenges-list",children:[(0,v.jsx)(I,{$active:"createdAt|desc"===n.sort,children:(0,v.jsx)("button",{onClick:function(){return a("createdAt|desc")},children:"Most recent"})}),(0,v.jsx)(I,{$active:"difficulty|asc"===n.sort,children:(0,v.jsx)("button",{onClick:function(){return a("difficulty|asc")},children:"Difficulty (easier first)"})}),(0,v.jsx)(I,{$active:"difficulty|desc"===n.sort,children:(0,v.jsx)("button",{onClick:function(){return a("difficulty|desc")},children:"Difficulty (harder first)"})})]})]})},F=d.default.div.withConfig({displayName:"FilterBy__Wrapper",componentId:"sc-1wtonnm-0"})(["border:1px solid ",";border-left:none;flex:1;@media (min-width:","){border:none;border-right:1px solid ",";min-width:15rem;}"],(function(e){return e.theme.colors.neutralLightGrey}),(function(e){return e.theme.breakpoints.tablet}),(function(e){return e.theme.colors.neutralLightGrey})),W=d.default.ul.withConfig({displayName:"FilterBy__List",componentId:"sc-1wtonnm-1"})(["margin:0;"]),O=d.default.li.withConfig({displayName:"FilterBy__ListItem",componentId:"sc-1wtonnm-2"})(["border-bottom:1px solid ",";padding:",";"],(function(e){return e.theme.colors.neutralLightGrey}),(0,m.convertSpacings)("6")),_=function(e){var n,t,r,i,l,o,a,c,d,h,p,f=e.filters,x=e.setFilters,b=(0,s.useState)(!1),w=b[0],k=b[1],C=(0,s.useRef)();(0,m.useOutsideClick)(C,(function(){return k(!1)}));return(0,v.jsxs)(F,{ref:C,children:[(0,v.jsxs)(y,{"aria-controls":"challenge-filters-list","aria-expanded":w,$isActive:w,onClick:function(){return k(!w)},children:[(0,v.jsx)("span",{children:"Filter by"}),(0,v.jsx)(m.Icon,{name:"chevron-down"})]}),w&&(0,v.jsx)(m.Form,{onChange:function(e){var n=(0,g.ik)(e,f);(0,u.isEqual)(n,f)||x(n)},children:(0,v.jsxs)(j,{id:"challenge-filters-list",children:[(0,v.jsxs)("li",{children:[(0,v.jsx)(O,{as:"div",children:(0,v.jsx)(m.Text,{color:"neutralMidGrey",font:"secondary",fontWeight:"semiBold",isItalic:!0,isUppercase:!0,size:"small",tagName:"h3",children:"Type"})}),(0,v.jsxs)(W,{children:[(0,v.jsx)(O,{children:(0,v.jsx)(m.CheckboxField,{checked:null===(n=f.type)||void 0===n?void 0:n.includes("free"),label:"Free",name:"type",value:"free"})}),(0,v.jsx)(O,{children:(0,v.jsx)(m.CheckboxField,{checked:null===(t=f.type)||void 0===t?void 0:t.includes("free-plus"),label:"Free+",name:"type",value:"free-plus"})}),(0,v.jsx)(O,{children:(0,v.jsx)(m.CheckboxField,{checked:null===(r=f.type)||void 0===r?void 0:r.includes("premium"),label:"Premium",name:"type",value:"premium"})})]})]}),(0,v.jsxs)("li",{children:[(0,v.jsx)(O,{as:"div",children:(0,v.jsx)(m.Text,{color:"neutralMidGrey",font:"secondary",fontWeight:"semiBold",isItalic:!0,isUppercase:!0,size:"small",tagName:"h3",children:"Difficulty"})}),(0,v.jsxs)(W,{children:[(0,v.jsx)(O,{children:(0,v.jsx)(m.CheckboxField,{checked:null===(i=f.difficulty)||void 0===i?void 0:i.includes(1),label:"Newbie",name:"difficulty",value:1})}),(0,v.jsx)(O,{children:(0,v.jsx)(m.CheckboxField,{checked:null===(l=f.difficulty)||void 0===l?void 0:l.includes(2),label:"Junior",name:"difficulty",value:2})}),(0,v.jsx)(O,{children:(0,v.jsx)(m.CheckboxField,{checked:null===(o=f.difficulty)||void 0===o?void 0:o.includes(3),label:"Intermediate",name:"difficulty",value:3})}),(0,v.jsx)(O,{children:(0,v.jsx)(m.CheckboxField,{checked:null===(a=f.difficulty)||void 0===a?void 0:a.includes(4),label:"Advanced",name:"difficulty",value:4})}),(0,v.jsx)(O,{children:(0,v.jsx)(m.CheckboxField,{checked:null===(c=f.difficulty)||void 0===c?void 0:c.includes(5),label:"Guru",name:"difficulty",value:5})})]})]}),(0,v.jsxs)("li",{children:[(0,v.jsx)(O,{as:"div",children:(0,v.jsx)(m.Text,{color:"neutralMidGrey",font:"secondary",fontWeight:"semiBold",isItalic:!0,isUppercase:!0,size:"small",tagName:"h3",children:"Languages"})}),(0,v.jsxs)(W,{children:[(0,v.jsx)(O,{children:(0,v.jsx)(m.CheckboxField,{checked:null===(d=f.languages)||void 0===d?void 0:d.includes("CSS"),label:"HTML & CSS",name:"languages",value:"CSS"})}),(0,v.jsx)(O,{children:(0,v.jsx)(m.CheckboxField,{checked:null===(h=f.languages)||void 0===h?void 0:h.includes("JS"),label:"JS",name:"languages",value:"JS"})}),(0,v.jsx)(O,{children:(0,v.jsx)(m.CheckboxField,{checked:null===(p=f.languages)||void 0===p?void 0:p.includes("API"),label:"API",name:"languages",value:"API"})})]})]})]})})]})};function N(e,n){var t=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);n&&(r=r.filter((function(n){return Object.getOwnPropertyDescriptor(e,n).enumerable}))),t.push.apply(t,r)}return t}function P(e){for(var n=1;n<arguments.length;n++){var t=null!=arguments[n]?arguments[n]:{};n%2?N(Object(t),!0).forEach((function(n){(0,b.Z)(e,n,t[n])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(t)):N(Object(t)).forEach((function(n){Object.defineProperty(e,n,Object.getOwnPropertyDescriptor(t,n))}))}return e}var Z=d.default.div.withConfig({displayName:"Filters__Wrapper",componentId:"sc-k4wmcf-0"})(["align-items:center;background-color:",";display:flex;flex-direction:column-reverse;gap:",";left:0;padding:",";position:absolute;top:5.5rem;width:100%;","{width:max-content;}@media (min-width:","){border-left:1px solid ",";flex-direction:row;left:0;padding:",";position:initial;top:0;transform:initial;width:auto;}"],(function(e){return e.theme.colors.neutralOffWhite}),(0,m.convertSpacings)("8"),(0,m.convertSpacings)("8"),m.Form.Wrapper,(function(e){return e.theme.breakpoints.tablet}),(function(e){return e.theme.colors.neutralLightGrey}),(0,m.convertSpacings)("0 0 0 8")),A=d.default.div.withConfig({displayName:"Filters__SortFilterWrapper",componentId:"sc-k4wmcf-1"})(["align-items:stretch;display:flex;height:5rem;position:relative;width:100%;@media (min-width:","){height:100%;width:auto;}"],(function(e){return e.theme.breakpoints.tablet})),B=function(e){var n,t=e.filters,r=e.setFilters,i=(0,h.v9)(p.HF);return(0,v.jsxs)(Z,{children:[i&&(0,v.jsx)(m.Form,{onSubmit:function(){return null},children:(0,v.jsx)(m.CheckboxField,{label:"Hide completed",name:"hideCompleted",onChange:function(e){return r(P(P({},t),{},{hideCompleted:e}))},checked:(null===(n=t.exclude)||void 0===n?void 0:n.length)>0})}),(0,v.jsxs)(A,{children:[(0,v.jsx)(S,{filters:t,setFilters:r}),(0,v.jsx)(_,{filters:t,setFilters:r})]})]})},L=t(27812),T={1:"Newbie",2:"Junior",3:"Intermediate",4:"Advanced",5:"Guru",CSS:"HTML & CSS",JS:"JS",API:"API","free-plus":"Free+"},D=(0,d.default)(m.Flag.Wrapper).withConfig({displayName:"ActiveFilters__Wrapper",componentId:"sc-cssklw-0"})(["display:flex;align-items:center;gap:",";button{background:none;border:none;cursor:pointer;padding:0;}"],(0,m.convertSpacings)("2")),G=function(e){var n=e.filters,t=e.setFilters,r=n.difficulty,i=n.languages,l=n.type,o=[].concat((0,L.Z)(r),(0,L.Z)(i),(0,L.Z)(l));return(0,v.jsx)(m.Align,{alignItems:"center",gap:"2",isInline:!0,isWrap:!0,justifyContent:"center",children:o.map((function(e){var r=T[e]||e;return(0,v.jsxs)(D,{$backgroundColor:"primaryBlue",$color:"neutralWhite",$font:"secondary",$fontWeight:"bold",$isUppercase:!0,$isRounded:!0,$size:"xsmall",children:[(0,v.jsx)("span",{children:r}),(0,v.jsx)("button",{"aria-label":"Remove ".concat(r," filter"),onClick:function(){return function(e){var r=(0,u.cloneDeep)(n);Object.keys(r).forEach((function(n){r[n]instanceof Array&&r[n].includes(e)&&r[n].splice(r[n].indexOf(e),1)})),t(r)}(e)},children:(0,v.jsx)(m.Icon,{color:"neutralWhite",name:"close",style:"solid"})})]},e)}))})},$=t(33048),z=t(58261),H=function(){return(0,v.jsxs)(m.Modal,{align:"left",title:"What are the different challenge types?",children:[(0,v.jsx)(m.Heading,{level:"2",tagName:"h2",spacing:"4",children:(0,v.jsx)(z.Z,{type:"free"})}),(0,v.jsx)(m.Text,{spacing:"4",children:"Free challenges can be started by anyone. All the starter code including the assets and designs in JPG format are free to download."}),(0,v.jsxs)(m.Text,{spacing:"4",children:["There are Sketch and Figma design files for these challenges but they need to be purchased with design credits. Design credits are available with a"," ",(0,v.jsx)($.Z,{isLink:!0})," subscription."]}),(0,v.jsx)(m.Rule,{spacing:"8 0"}),(0,v.jsx)(m.Heading,{color:"primaryBlue",level:"2",tagName:"h2",spacing:"4",children:(0,v.jsx)(z.Z,{type:"free-plus"})}),(0,v.jsx)(m.Text,{spacing:"4",children:"Free+ challenges can be started by anyone. All the starter code including the assets are free to download."}),(0,v.jsxs)(m.Text,{spacing:"4",children:["The Sketch and Figma design files are freely available to download for all users. These challenges allow anyone to trial premium challenges without subscribing as a ",(0,v.jsx)($.Z,{isLink:!0})," member."]}),(0,v.jsx)(m.Rule,{spacing:"8 0"}),(0,v.jsx)(m.Heading,{level:"2",tagName:"h2",spacing:"4",children:(0,v.jsx)(z.Z,{type:"premium"})}),(0,v.jsxs)(m.Text,{spacing:"4",children:["Premium challenges can only be started by ",(0,v.jsx)($.Z,{isLink:!0})," members. The Sketch and Figma design files are included."]})]})},M=t(87588),E=t(17934),J=["sort"],R=["store","query"],q=(0,d.default)(m.Container.Wrapper).withConfig({displayName:"Index__Wrapper",componentId:"sc-15c3lxm-0"})(["padding-top:16rem;","{white-space:nowrap;}@media (min-width:","){padding-top:",";",":first-child{align-items:flex-end;}}"],m.InfoButton.Wrapper,(function(e){return e.theme.breakpoints.tablet}),(0,m.convertSpacings)("10"),m.Stack.Wrapper),U={difficulty:[],hideCompleted:!1,languages:[],sort:"createdAt|desc",type:[]},Y=function(){var e=(0,c.useRouter)(),n=(0,h.v9)(f.GN),t=(0,m.useModalContext)().open,r=(0,h.v9)(p.rY).map((function(e){return e.id})),o=(0,g.IM)(e.query,U),a=(0,s.useState)(o),d=a[0],b=a[1],y=function(e,n,t){var r=t.sort,o=(0,l.Z)(t,J),a=e.filter((function(e){return Object.keys(o).every((function(t){if(o[t]instanceof Array&&!o[t].length)return!0;switch(t){case"languages":return o[t].includes(e[t].slice(-1)[0]);case"hideCompleted":return!o[t]||o[t]&&!n.includes(e.id);default:return o[t].includes(e[t])}}))})),s=r.split("|"),c=(0,i.Z)(s,2),d=c[0],h=c[1];return(0,u.orderBy)(a,[d],[h])}(n,r,d);return(0,s.useEffect)((function(){var n=(0,g.Yb)(d,U),t=n.length?"/challenges?".concat(n):"/challenges";e.replace(t)}),[d]),(0,v.jsxs)(x.Z,{description:"Browse through the front-end coding challenges on Frontend Mentor. Find interesting projects to practice your HTML, CSS and JavaScript",image:"https://res.cloudinary.com/dz209s6jk/image/upload/v1585172856/Meta/meta-challenges.png",title:"Frontend Mentor | Challenges",url:"https://www.frontendmentor.io/challenges",children:[(0,v.jsx)(m.PageHeader,{heading:"Challenges",isSticky:!0,children:(0,v.jsx)(B,{completedChallengeIds:r,filters:d,setFilters:b})}),(0,v.jsx)(m.ScreenReaderOnly,{tagName:"h1",children:"Challenges"}),(0,v.jsx)(q,{$width:"xwide",children:(0,v.jsxs)(m.Stack,{alignItems:"center",gap:"6",children:[(0,v.jsxs)(m.Switch,{breakpoint:"tablet",column:{alignItems:"center",gap:"10"},row:{alignItems:"center",justifyContent:"space-between"},children:[(0,v.jsx)(G,{filters:d,setFilters:b}),(0,v.jsx)(m.InfoButton,{onClick:function(){return t((0,v.jsx)(H,{}))},children:"Learn about our challenge types"})]}),(0,v.jsx)(m.Grid,{children:y.map((function(e){return(0,v.jsx)(M.Z,{challenge:e,isCompleted:r.includes(e.id)},e.id)}))})]})}),(0,v.jsx)(E.Z,{})]})};Y.getInitialProps=function(){var e=(0,r.Z)(a().mark((function e(n){var t,r,i,o;return a().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return t=n.store,r=n.query,i=(0,l.Z)(n,R),e.next=3,t.dispatch((0,f.Rx)());case 3:if(o=t.getState(),!(0,p.HF)(o)){e.next=8;break}return e.next=8,t.dispatch((0,p.ui)({ctx:i}));case 8:return e.abrupt("return",{query:r});case 9:case"end":return e.stop()}}),e)})));return function(n){return e.apply(this,arguments)}}();var X=Y},87588:function(e,n,t){"use strict";t.d(n,{Z:function(){return f}});t(67294);var r=t(50445),i=t(67803),l=t(5717),o=t(65596),a=t(86159),s=t(46346),c=t(85893),d=(0,r.default)(o.Spacer.Wrapper).withConfig({displayName:"Completed__Wrapper",componentId:"sc-6w8cl2-0"})(["background:linear-gradient(to top,hsla(0,0%,0%,0.5),hsla(0,0%,0%,0));bottom:0;left:50%;pointer-events:none;position:absolute;transform:translate(-50%,0);width:100%;","{margin:0 auto;width:max-content;}","{text-shadow:0 2px 2px hsla(0,0%,0%,0.4);}"],o.Align.Wrapper,o.Text.Wrapper),u=function(){return(0,c.jsx)(d,{$spacing:"4 0",children:(0,c.jsxs)(o.Align,{alignItems:"center",gap:"3",children:[(0,c.jsx)(o.Bubble,{backgroundColor:"neutralWhite",children:(0,c.jsx)(o.Icon,{color:"primaryGreen",name:"check",style:"solid"})}),(0,c.jsx)(o.Text,{color:"neutralWhite",font:"secondary",fontWeight:"semiBold",children:"You\u2019ve completed this challenge!"})]})})},h=t(58261),p=(0,r.default)(o.Card.Wrapper).withConfig({displayName:"Card__Wrapper",componentId:"sc-1ad0ofr-0"})(["position:relative;.image-wrapper{position:relative;::before{content:'';position:absolute;background:linear-gradient(hsla(0,0%,0%,0.15),hsla(0,0%,0%,0));width:100%;height:6rem;z-index:1;pointer-events:none;}}"]),f=function(e){var n=e.challenge,t=e.isCompleted,r=e.isHub,d="/challenges/".concat(n.slug).concat(r?"/hub":"");return(0,c.jsxs)(p,{$direction:"column",children:[(0,c.jsxs)(o.Card.Flags,{children:[(0,i.Z)(new Date,(0,l.Z)(n.createdAt))<=10&&(0,c.jsx)(h.Z,{size:"small",type:"new"}),(0,c.jsx)(h.Z,{size:"small",type:n.type})]}),(0,c.jsxs)("div",{className:"image-wrapper",children:[(0,c.jsx)(a.Z,{href:d,src:n.heroImage}),t&&(0,c.jsx)(u,{})]}),(0,c.jsxs)(o.Card.Content,{children:[(0,c.jsx)(o.Heading,{level:"5",tagName:"h2",spacing:"4",children:(0,c.jsx)(s.Z,{href:d,children:n.title})}),(0,c.jsxs)(o.Align,{alignItems:"center",gap:"2",isWrap:!0,justifyContent:"space-between",children:[(0,c.jsx)(o.Align.Item,{spacing:"0 0 2",children:(0,c.jsx)(o.Languages,{languages:n.languages,size:"large"})}),(0,c.jsx)(o.Align.Item,{spacing:"0 0 2",children:(0,c.jsx)(o.Difficulty,{level:n.difficulty})})]}),(0,c.jsx)(o.Spacer,{spacing:"2 0 0",children:(0,c.jsx)(o.Text,{color:"neutralDarkGrey",children:n.description})})]})]})}},58261:function(e,n,t){"use strict";t(67294);var r=t(65596),i=t(85893),l={premium:{backgroundColor:"primaryBlue",color:"neutralWhite",label:"Premium"},"free-plus":{backgroundColor:"primaryOrange",color:"neutralWhite",label:"Free+"},free:{backgroundColor:"primaryLightBlue",color:"primaryBlue",label:"Free"},new:{backgroundColor:"primaryRed",color:"neutralWhite",label:"New",icon:(0,i.jsx)(r.Icon,{name:"star-of-life",style:"solid"})},private:{backgroundColor:"primaryCyan",color:"neutralWhite",label:"Private",icon:(0,i.jsx)(r.Icon,{name:"lock",style:"solid"})}};n.Z=function(e){var n=e.size,t=void 0===n?"medium":n,o=e.type;return(0,i.jsx)(r.Flag,{backgroundColor:l[o].backgroundColor,color:l[o].color,icon:l[o].icon,isRounded:!0,isUppercase:!0,size:t,children:l[o].label})}},86159:function(e,n,t){"use strict";var r=t(21402),i=t(65596),l=(0,r.Z)(i.Card.Image);l.Wrapper=i.Card.Image.Wrapper,n.Z=l},17934:function(e,n,t){"use strict";t(67294);var r=t(25675),i=t.n(r),l=t(50445),o=t(13540),a=t(65596),s=t(85893),c=(0,l.default)(a.Highlight.Wrapper).withConfig({displayName:"Discord__Wrapper",componentId:"sc-14o27h5-0"})(["&&{overflow:hidden;}> *{position:relative;}"," + ","{font-size:2.8rem;line-height:1.3;}::before{background-image:url('/static/images/bg-discord.svg');background-repeat:no-repeat;background-position:center;bottom:-40rem;content:'';height:80rem;opacity:1;position:absolute;right:-60rem;width:80rem;@media (min-width:","){bottom:-20rem;right:-13rem;}}"],a.Heading.Wrapper,a.Text.Wrapper,(function(e){return e.theme.breakpoints.tablet}));n.Z=function(){return(0,s.jsx)(a.Container,{spacing:"12 0",tagName:"div",width:"full",children:(0,s.jsx)(c,{$backgroundColor:"primaryBlue",children:(0,s.jsx)(a.Container,{width:"xwide",children:(0,s.jsxs)(a.Stack,{alignItems:"center",gap:"8",spacing:"12 9",children:[(0,s.jsx)(i(),{alt:"Discord logo",height:32,src:"/static/images/logo-discord.svg",width:166}),(0,s.jsx)(a.Heading,{align:"center",color:"neutralWhite",level:"2",children:"Join our Discord community"}),(0,s.jsx)(a.Text,{align:"center",color:"neutralWhite",children:"Join other Frontend Mentor community members taking the challenges, sharing resources, helping each other, and chatting about all things front-end!"}),(0,s.jsx)(a.LinkWithButtonStyles,{color:"primaryBlue",level:"tertiary",href:o.Vs,children:"Join our Discord"})]})})})})}},80929:function(e,n,t){(window.__NEXT_P=window.__NEXT_P||[]).push(["/challenges",function(){return t(61396)}])}},function(e){e.O(0,[9774,2888,179],(function(){return n=80929,e(e.s=n);var n}));var n=e.O();_N_E=n}]);