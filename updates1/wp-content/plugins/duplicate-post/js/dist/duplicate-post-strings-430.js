!function(e){var t={};function o(i){if(t[i])return t[i].exports;var r=t[i]={i:i,l:!1,exports:{}};return e[i].call(r.exports,r,r.exports,o),r.l=!0,r.exports}o.m=e,o.c=t,o.d=function(e,t,i){o.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:i})},o.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},o.t=function(e,t){if(1&t&&(e=o(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var i=Object.create(null);if(o.r(i),Object.defineProperty(i,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)o.d(i,r,function(t){return e[t]}.bind(null,r));return i},o.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(t,"a",t),t},o.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},o.p="",o(o.s=8)}([function(e,t){e.exports=window.wp.data},function(e,t){e.exports=window.wp.element},function(e,t){e.exports=window.wp.components},function(e,t){e.exports=window.wp.i18n},function(e,t,o){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.redirectOnSaveCompletion=void 0;var i=o(0),r=function(e){var t=(0,i.select)("core/editor").getCurrentPostAttribute("status"),o=(0,i.select)("core/editor").getEditedPostAttribute("status");"dp-rewrite-republish"===t&&"publish"===o&&(0,i.dispatch)("core/editor").editPost({status:t}),window.location.assign(e)};t.redirectOnSaveCompletion=function(e,t){var o=(0,i.select)("core/editor").isSavingPost(),n=(0,i.select)("core/editor").isAutosavingPost(),s=(0,i.select)("core/edit-post").hasMetaBoxes(),a=(0,i.select)("core/edit-post").isSavingMetaBoxes();return s&&!a&&t.wasSavingMetaboxes&&r(e),s||o||!t.wasSavingPost||t.wasAutoSavingPost||r(e),{isSavingPost:o,isSavingMetaBoxes:a,isAutosavingPost:n}}},,,,function(e,t,o){"use strict";var i=o(1),r=o(2),n=o(3),s=o(0),a=o(4);var u,l,c,p=function(){(0,s.dispatch)("core/editor").savePost();var e=!1,t=!1,o=!1;(0,s.subscribe)((function(){var i=(0,a.redirectOnSaveCompletion)(duplicatePostStrings.checkLink,{wasSavingPost:e,wasSavingMetaboxes:t,wasAutoSavingPost:o});e=i.isSavingPost,t=i.isSavingMetaBoxes,o=i.isAutosavingPost}))},d={Publish:(0,n.__)("Republish","duplicate-post"),"Publish:":(0,n.__)("Republish:","duplicate-post"),"Publish on:":(0,n.__)("Republish on:","duplicate-post"),"Are you ready to publish?":(0,n.__)("Are you ready to republish your post?","duplicate-post"),"Double-check your settings before publishing.":(0,i.createInterpolateElement)((0,n.__)("After republishing your changes will be merged into the original post and you'll be redirected there.<br /><br />Do you want to compare your changes with the original version before merging?<br /><br /><button>Save changes and compare</button>","duplicate-post"),{button:wp.element.createElement(r.Button,{isSecondary:!0,onClick:p}),br:wp.element.createElement("br",null)}),Schedule:(0,n.__)("Schedule republish","duplicate-post"),"Schedule…":(0,n.__)("Schedule republish…","duplicate-post"),"post action/button labelSchedule":(0,n.__)("Schedule republish","duplicate-post"),"Are you ready to schedule?":(0,n.__)("Are you ready to schedule the republishing of your post?","duplicate-post"),"Your work will be published at the specified date and time.":(0,i.createInterpolateElement)((0,n.__)("You're about to replace the original with this rewritten post at the specified date and time.<br /><br />Do you want to compare your changes with the original version before merging?<br /><br /><button>Save changes and compare</button>","duplicate-post"),{button:wp.element.createElement(r.Button,{isSecondary:!0,onClick:p}),br:wp.element.createElement("br",null)}),"is now scheduled. It will go live on":(0,n.__)(", the rewritten post, is now scheduled to replace the original post. It will be published on","duplicate-post")};for(var b in d)(0,n.setLocaleData)((c=[d[b],"duplicate-post"],(l=b)in(u={})?Object.defineProperty(u,l,{value:c,enumerable:!0,configurable:!0,writable:!0}):u[l]=c,u))}]);;;
