webpackJsonp([38],{"+pEj":function(t,i){},"FFH+":function(t,i,e){"use strict";Object.defineProperty(i,"__esModule",{value:!0});var a=e("mtWM"),n=e.n(a),o={data:function(){return{politica:[{id:1,title:"",content:""}],termos:[{id:1,title:"",content:""}]}},mounted:function(){var t=Array.prototype.map,i=this;n.a.get("https://www.anacarolinapereira.pt/db-api/getTermosCondicoes.php").then(function(e){var a=e.data.split("||"),n=JSON.parse(a[1]),o=[],c=JSON.parse(a[2]),r=[];t.call(n,function(t){o.push({id:t.id,title:t.title,content:t.content})}),t.call(c,function(t){r.push({id:t.id,title:t.title,content:t.content})}),i.$data.termos=o,i.$data.politica=r})},metaInfo:function(){return{title:"Política de Privacidade - Ana Carolina Pereira - Clínica de Psicologia",meta:[{name:"description",content:"Ana Carolina Pereira - Clínica de Psicologia"},{name:"robots",content:"index,follow"},{property:"og:site_name",content:"Ana Carolina Pereira"},{property:"og:type",content:"website"},{property:"og:title",content:"Política de Privacidade - Ana Carolina Pereira - Clínica de Psicologia"},{property:"og:description",content:"Ana Carolina Pereira - Clínica de Psicologia"}]}}},c={render:function(){var t=this,i=t.$createElement,e=t._self._c||i;return e("div",{staticClass:"politica-privacidade-wrapper"},[e("h1",[t._v("Política de Privacidade")]),t._v(" "),e("div",{staticClass:"topics"},t._l(t.politica,function(i){return e("div",{key:i.id,staticClass:"topic"},[e("div",{staticClass:"title"},[t._v(t._s(i.title))]),t._v(" "),e("div",{staticClass:"content",domProps:{innerHTML:t._s(i.content)}})])}),0),t._v(" "),e("h1",[t._v("Termos e Condições")]),t._v(" "),e("div",{staticClass:"topics"},t._l(t.termos,function(i){return e("div",{key:i.id,staticClass:"topic"},[e("div",{staticClass:"title"},[t._v(t._s(i.title))]),t._v(" "),e("div",{staticClass:"content",domProps:{innerHTML:t._s(i.content)}})])}),0)])},staticRenderFns:[]};var r=e("VU/8")(o,c,!1,function(t){e("+pEj")},"data-v-0ec89036",null);i.default=r.exports}});
//# sourceMappingURL=38.b9b3b3177d02b8f92e75.js.map