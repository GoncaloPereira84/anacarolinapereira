webpackJsonp([42],{"FFH+":function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i=a("mtWM"),n=a.n(i),o={data:function(){return{politica:[{id:1,title:"",content:""}]}},mounted:function(){var t=Array.prototype.map,e=this;n.a.get("https://www.anacarolinapereira.pt/db-api/getTermosCondicoes.php").then(function(a){var i=a.data,n=[];t.call(i,function(t){n.push({id:t.id,title:t.title,content:t.content})}),e.$data.politica=n}).then(function(){var e=document.querySelectorAll(".content > a");t.call(e,function(t){t.style.color="#0babc5 !important",t.style.textDecoration="none !important",t.target="_blank"})})},metaInfo:function(){return{title:"Política de Privacidade - Ana Carolina Pereira - Clínica de Psicologia",meta:[{name:"description",content:"Consulte a Política de Privacidade e os Termos e Condições para estar a par das condições de navegação do nosso site."},{property:"og:title",content:"Política de Privacidade - Ana Carolina Pereira - Clínica de Psicologia"},{property:"og:url",content:"https://www.anacarolinapereira.pt/politica-privacidade"},{property:"og:description",content:"Consulte a Política de Privacidade e os Termos e Condições para estar a par das condições de navegação do nosso site."}]}}},r={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"politica-privacidade-wrapper"},[a("h1",[t._v("Política de Privacidade e Protecção de Dados")]),t._v(" "),a("div",{staticClass:"topics"},t._l(t.politica,function(e){return a("div",{key:e.id,staticClass:"topic"},[a("div",{staticClass:"title"},[t._v(t._s(e.title))]),t._v(" "),a("div",{staticClass:"content",domProps:{innerHTML:t._s(e.content)}})])}),0)])},staticRenderFns:[]};var c=a("VU/8")(o,r,!1,function(t){a("tXV6")},"data-v-00044a1f",null);e.default=c.exports},tXV6:function(t,e){}});
//# sourceMappingURL=42.afe986c5775a79aa1fc0.js.map