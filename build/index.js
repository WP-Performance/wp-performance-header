(()=>{"use strict";var e={n:r=>{var o=r&&r.__esModule?()=>r.default:()=>r;return e.d(o,{a:o}),o},d:(r,o)=>{for(var t in o)e.o(o,t)&&!e.o(r,t)&&Object.defineProperty(r,t,{enumerable:!0,get:o[t]})},o:(e,r)=>Object.prototype.hasOwnProperty.call(e,r)};const r=window.wp.element,o=window.wp.blocks,t=(window.wp.data,window.wp.serverSideRender);var a=e.n(t);const n=window.wp.i18n,i=window.wp.blockEditor;(0,o.registerBlockType)("wp-performance/header",{title:(0,n.__)("WP Performance Header","wp-performance-header"),description:(0,n.__)("This plugin allows you to display logo","wp-performance-header"),icon:"format-image",category:"theme",example:{},attributes:{},edit:e=>((0,i.useBlockProps)(),(0,r.createElement)("div",(0,i.useBlockProps)(),(0,r.createElement)(a(),{block:"wp-performance/header",attributes:{...e.attributes}})))})})();