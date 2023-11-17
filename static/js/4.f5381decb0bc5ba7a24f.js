webpackJsonp([4,10,14,34],{IeWK:function(t,e,i){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var a=i("L0iC"),s=i("noE/"),n=i("UEX4"),o=i("lbB+"),r={components:{banner:a.default,apresentacao:s.default,servicos:n.default,marcarConsulta:o.default},metaInfo:function(){return{title:"Serviços - Ana Carolina Pereira - Clínica de Psicologia",meta:[{name:"description",content:"A sua confiança pela nossa equipa e nos nossos serviços interpela e exige o compromisso, ético e profissional, de lhe proporcionarmos um conjunto de serviços clínicos especializados. Que condensam anos de prática clínica e contínua atualização profissional e académica."},{name:"robots",content:"index,follow"},{property:"og:site_name",content:"Ana Carolina Pereira"},{property:"og:type",content:"website"},{property:"og:title",content:"Serviços - Ana Carolina Pereira - Clínica de Psicologia"},{property:"og:description",content:"A sua confiança pela nossa equipa e nos nossos serviços interpela e exige o compromisso, ético e profissional, de lhe proporcionarmos um conjunto de serviços clínicos especializados. Que condensam anos de prática clínica e contínua atualização profissional e académica."}]}}},c={render:function(){var t=this.$createElement,e=this._self._c||t;return e("div",[e("banner"),this._v(" "),e("apresentacao"),this._v(" "),e("servicos"),this._v(" "),e("marcar-consulta")],1)},staticRenderFns:[]};var l=i("VU/8")(r,c,!1,function(t){i("VHRk")},"data-v-291ad182",null);e.default=l.exports},K3rD:function(t,e){},L0iC:function(t,e,i){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var a=i("spiu"),s=i.n(a),n={data:function(){return{img:s.a}}},o={render:function(){this.$createElement;this._self._c;return this._m(0)},staticRenderFns:[function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"slideshow-wrapper"},[e("div",{attrs:{id:"slideshow"}},[e("div",{staticClass:"slide"},[e("div",{staticClass:"copy"},[e("h1",{staticClass:"title"},[this._v("Serviços")])])])])])}]};var r=i("VU/8")(n,o,!1,function(t){i("Yzag")},"data-v-848331ce",null);e.default=r.exports},UEX4:function(t,e,i){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var a=i("mtWM"),s=i.n(a),n={data:function(){return{servicos:[{id:"",code:"",title:"",text:"",url:""}]}},methods:{FadeIn:function(){var t=$(".movement, .cover"),e=$(".movement-delayed"),i=$(".lateral, .lateralR"),a=$("#svg");!function(t){t.fn.visible=function(e,i){void 0===i&&(i=0);var a=t(this),s=t(window),n=s.scrollTop(),o=n+s.height(),r=a.offset().top+i,c=r+a.height()-i;return(!0===e?r:c)<=o&&(!0===e?c:r)>=n}}(jQuery);var s=$(window),n=!0;t.each(function(t,e){(e=$(e)).visible(!0)&&e.addClass("placed")}),a.each(function(t,e){(e=$(e)).visible(!0)&&(n&&e.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),n=!1)}),i.each(function(t,e){(e=$(e)).visible(!0,100)&&e.addClass("placed")}),e.each(function(t,e){(e=$(e)).visible(!0,800)&&e.addClass("placed")}),s.scroll(function(s){t.each(function(t,e){(e=$(e)).visible(!0)&&e.addClass("placed")}),i.each(function(t,e){(e=$(e)).visible(!0,100)&&e.addClass("placed")}),e.each(function(t,e){(e=$(e)).visible(!0,800)&&e.addClass("placed")}),a.each(function(t,e){(e=$(e)).visible(!0)&&(n&&e.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),n=!1)})})}},mounted:function(){var t=Array.prototype.map,e=this;s.a.get("https://beta.anacarolinapereira.pt/db-api/getServicos.php").then(function(i){var a=i.data.split("||"),s=JSON.parse(a[2]),n=[];t.call(s,function(t){n.push({id:t.id,code:t.code,title:t.title,text:t.text,url:t.link})}),e.$data.servicos=n}).then(function(){e.FadeIn()}).then(function(){var t=window.location.href.split("/"),e=t[t.length-1];if(e.includes("#")){var i=e.split("#");if("flex"==$(".servicos-mobile").css("display")){var a=$(".servicos-mobile #"+i[1])[0].offsetTop;setTimeout(function(){$("html, body").animate({scrollTop:a-100},1e3)},500)}else{a=$(".servicos #"+i[1])[0].offsetTop;setTimeout(function(){$("html, body").animate({scrollTop:a-100},1e3)},500)}}})}},o={render:function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"servicos-wrapper"},[i("div",{staticClass:"servicos"},t._l(t.servicos,function(e,a){return i("div",{key:a,staticClass:"row",class:{lateral:e.id%2==0,lateralR:e.id%2!=0},attrs:{id:e.code}},[i("div",{staticClass:"wrapper"},[i("div",{class:{right:e.id%2==0,left:e.id%2!=0}},[i("h2",{staticClass:"txt",domProps:{innerHTML:t._s(e.title)}}),t._v(" "),i("div",{staticClass:"line"})]),t._v(" "),i("div",{class:{left:e.id%2==0,right:e.id%2!=0}},[i("div",{staticClass:"copy"},[i("div",{staticClass:"text",domProps:{innerHTML:t._s(e.text)}}),t._v(" "),i("router-link",{attrs:{to:e.url}},[i("div",{staticClass:"btn blue"},[i("div",{staticClass:"txt"},[t._v("Saiba mais")])])])],1)])])])}),0),t._v(" "),i("div",{staticClass:"servicos-mobile"},t._l(t.servicos,function(e,a){return i("div",{key:a,staticClass:"row",attrs:{id:e.code}},[i("div",{staticClass:"wrapper movement"},[i("div",{staticClass:"top"},[i("div",{staticClass:"copy"},[i("div",{staticClass:"title"},[t._v(t._s(e.title))]),t._v(" "),i("div",{staticClass:"line"}),t._v(" "),i("div",{staticClass:"text",domProps:{innerHTML:t._s(e.text)}}),t._v(" "),i("router-link",{attrs:{to:e.url}},[i("div",{staticClass:"btn blue"},[i("div",{staticClass:"txt"},[t._v("Saiba mais")])])])],1)])])])}),0)])},staticRenderFns:[]};var r=i("VU/8")(n,o,!1,function(t){i("g08i")},"data-v-facd6572",null);e.default=r.exports},VHRk:function(t,e){},Yzag:function(t,e){},g08i:function(t,e){},"noE/":function(t,e,i){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var a=i("bhzy"),s=i.n(a),n=i("mtWM"),o=i.n(n),r={data:function(){return{img:s.a,text:""}},mounted:function(){Array.prototype.map;var t=this;o.a.get("https://beta.anacarolinapereira.pt/db-api/getServicos.php").then(function(e){var i=e.data.split("||"),a=JSON.parse(i[1]);t.text=a[0].text})}},c={render:function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"apresentacao-wrapper movement"},[e("div",{attrs:{id:"apresentacao"}},[e("div",{staticClass:"copy",domProps:{innerHTML:this._s(this.text)}}),this._v(" "),e("div",{staticClass:"line"})])])},staticRenderFns:[]};var l=i("VU/8")(r,c,!1,function(t){i("K3rD")},"data-v-283efcba",null);e.default=l.exports},spiu:function(t,e,i){t.exports=i.p+"static/img/moldura.d659f7d.svg"}});
//# sourceMappingURL=4.f5381decb0bc5ba7a24f.js.map