
var ddmenuOptions =
{
    menuId: "ddmenu",
    linkIdToMenuHtml: null,
    open: "onmouseover", // or "onclick"
    delay: 50,
    speed: 0.3,
    license: "6c0l68"
};

var ddmenu = new Ddmenu(ddmenuOptions);

/* Menucool Drop Down Menu v2015.8.19 Copyright www.menucool.com */
function Ddmenu(m){"use strict";var r=function(a,b){return a.getElementsByTagName(b)},o=navigator
,F=function(a,c){if(typeof getComputedStyle!="undefined")var b=getComputedStyle(a,null);else if(a.currentStyle)b=a.currentStyle;
else b=a.style;return b[c]},q=function(a){if(a&&a.stopPropagation)a.stopPropagation();else if(window.event)window.event.cancelBubble=true},
fb=function(b){var a=b?b:window.event;if(a.preventDefault)a.preventDefault();
else if(a)a.returnValue=false},i,e,v,f=document,l="className",a="length",z="addEventListener",lb=["$1$2$3","$1$2$3","$1$24","$1$23","$1$22"],
B="offsetWidth",C="zIndex",j="onclick",b=[],x=-1,k=0,H=function(a){if(k)k[e][v]=a?"block":"none"},g,nb,c,h=function(){return c&&c[B]},
p=function(a,c,b){if(a[z])a[z](c,b,false);else a.attachEvent&&a.attachEvent("on"+c,b)},E=function(a,b){if(b)K(a,"over");else J(a,"over");
a[e][C]=b?2:1},cb="ontouchstart"in window||window.DocumentTouch&&document instanceof DocumentTouch,
T=(o.msPointerEnabled||o.pointerEnabled)&&(o.msMaxTouchPoints||o.maxTouchPoints);if(T)if(o.msPointerEnabled)var O="MSPointerOver",P="MSPointerOut";
else{O="pointerover";P="pointerout"}var n=function(e){for(var c=r(f,"li"),b=0,g=c[a];b<g;b++)if(d(c[b],"over"))e!=c[b]&&E(c[b],0);H(e)},
kb=[/(?:.*\.)?(\w)([\w\-])[^.]*(\w)\.[^.]+$/,/.*([\w\-])\.(\w)(\w)\.[^.]+$/,/^(?:.*\.)?(\w)(\w)\.[^.]+$/,/.*([\w\-])([\w\-])\.com\.[^.]+$/,/^(\w)[^.]*(\w)$/],
mb=function(a){return a.replace(/(?:.*\.)?(\w)([\w\-])?[^.]*(\w)\.[^.]*$/,"$1$3$2")},db=function(){var c=50,b=o.userAgent,a;
if((a=b.indexOf("MSIE "))!=-1)c=parseInt(b.substring(a+5,b.indexOf(".",a)));return c},
X=function(){g={a:m.license,b:m.menuId,d:m.delay,e:m.linkIdToMenuHtml,f:m.speed,g:m.open.toLowerCase()}},s=db(),
y=function(e){var b=e.childNodes,d=[];if(b)for(var c=0,f=b[a];c<f;c++)b[c].nodeType==1&&d.push(b[c]);return d},
A="createElement",hb=function(g,b){var d=function(b){for(var d=unescape(b.substr(0,b[a]-1)),f=b.substr(b[a]-1,1),e="",c=0;c<d[a];c++)
	e+=String.fromCharCode(d.charCodeAt(c)-f);return unescape(e)},c=Math.random(),e=d(mb(document.domain)),
f="%66%75%6E%63%74%69%6F%6E%20%71%51%28%73%2C%6B%29%7B%76%3";if(L(b+c)[a]%(e[a]+1)>8)try{b=(new Function("$","_","e","a","b","c",L(f,c[a])))
	.apply(this,[e,b,c,d,g,A])}catch(h){}},t=function(a,b){return b?f[a](b):f[a]},L=function(e,b){for(var d=[],c=0;c<e[a];c++)d[d[a]]=String
.fromCharCode(e.charCodeAt(c)-(b&&b>7?b:3));return d.join("")},gb=function(b,d){var c=b[a];while(c--)if(b[c]===d)return true;return false},
d=function(a,c){var b=false;if(a[l])b=gb(a[l].split(" "),c);return b},K=function(a,b){if(!d(a,b))if(a[l]=="")a[l]=b;else a[l]+=" "+b},
J=function(d,f){if(d[l]){for(var e="",c=d[l].split(" "),b=0,g=c[a];b<g;b++)if(c[b]!==f)e+=c[b]+" ";d[l]=e.replace(/^\s+|\s+$/g,"")}},
Y=function(e){if(!h())for(var c=0,f=b[a];c<f;c++)if(e!=b[c].a&&d(b[c].a,"over"))return 1;return 0},
M=function(a){return a.pointerType==a.MSPOINTER_TYPE_MOUSE||a.pointerType=="mouse"},S=function(b)
{var a=this;a.a=b;a.b=null;a.k()},V=function(a){this.a(a);this.b(a)};S.prototype={l:function(b){var a=this;clearTimeout(a.b);
if(b){a.f();H(1)}else a.b=setTimeout(function(){a.f()},Y(a.a)?0:g.d)},f:function(){E(this.a,1);
if(!h()&&F(this.a,"position")=="static")this.a.dd[e].top=this.a.offsetTop+this.a.offsetHeight+"px";else this.a.dd[e].top=""},
g:function(){var a=this;clearTimeout(a.b);a.b=setTimeout(function(){E(a.a,0)},g.d)},i:function(g){if(s<9){var b=y(g),c=b[a];if(c)
{b=y(b[0]);c=b[a];if(c){var f=b[c-1];if(d(f,"column"))f[e].borderRight="none"}}}},j:function(b){var a=this;q(b);if(d(a.a,"over"))
{a.g();!h()&&H(0)}else a.c(b)},k:function(){var c=this,b=this.a,f=y(b),l=f[a];if(s<7)if(d(f[0],"top-heading"))f[0][e].zoom=1;
while(l--)if(d(f[l],"dropdown"))var i=f[l];if(i){d(f[0],"top-heading")&&f[0].setAttribute("aria-haspopup","true");c.i(i);
b.dd=i;b.setAttribute("tabindex",0);if(d(b,"full-width"))i[e][C]=2;i[j]=q;if(g.g==j)b[j]=function(a){c.j(a)};else if(T){b[j]=function(a)
{if(h())c.j(a);else q(a)};p(b,O,function(a){if(!h())if(M(a))c.l(a);else{q(a);c.c(a)}});p(b,P,function(a){!h()&&M(a)&&c.g()})}else{b[j]=function(a)
{c.j(a)};b.onmouseover=function(){!h()&&!k&&c.l(0)};b.onmouseout=function(){!h()&&!k&&c.g()}}}else{b.onmouseover=function(){K(this,"over")};
b.onmouseout=function(){J(this,"over")}}},c:function(){!h()&&n(this.a);this.l(1)}};V.prototype={a:function(a){hb(a,g.a)},b:function(j)
{if(cb&&/(iPad|iPhone|iPod)/g.test(o.userAgent)){k=t(A,"div");j.insertBefore(k,j.childNodes[0]);var d=k[e];
d.position="fixed";d.left=d.right=d.bottom=d.top="0px";d[v]="none";d[C]=-1}if(!G){p(f,"click",function(){n(0)});p(window,"resize",function()
{var a=h();if(x!=a)if(x==-1)x=a;else{x=a;n(0)}})}for(var q=y(j),l=0,r=q[a];l<r;l++)q[l].nodeName=="LI"&&b.push(new S(q[l]));
(new Function("a","b","c","d","e","f","g","h","i","j","k",function(d){for(var c=[],b=0,e=d[a];b<e;b++)c[c[a]]=String.fromCharCode(d.charCodeAt(b)-4);
return c.join("")}("jyrgxmsr$N,|0}-zev$eAjyrgxmsr,f-zev$gAf2glevGshiEx,4-2xsWxvmrk,-?vixyvr$g2wyfwxv,g2pirkxl15-\u0081?vixyvr$|/e,}_6a-/}_4a/e,}_5a-/e,}_4a-\u0081jyrgxmsr$O,-zev$tAQexl_g,+yhukvt+-a,-?mj,tB2<-zev$uAk,g,+jylh{l[l{Uvkl+-0g,+kktlu|'{yphs'}lyzpvu+--0vAm_oa0wAv_oa?mj,tB2=**w2rshiReqi%A+FSH]+-w_oa_g,+puzly{Ilmvyl+-a,u0w-?ipwi$w_g,+puzly{Ilmvyl+-a,u0v-\u0081\u0081?mj,j-j2wx}pi2~Mrhi|Am2~m|/5?zev$qAe2e?mj,q2pirkxl@9-qA+::+?zev$rAtevwiMrx,q2glevEx,4--\u0080\u0080:0sAN,r/+g+0,,k,g,+kvthpu+--\u0080\u0080+pijx+-2vitpegi,h_r16a0l_r16a--2wtpmx,++--?s2mrhi|Sj,q-AA15**O,-?mj,f-f2srgpmgoAjyrgxmsr,-mj,i,-**q%As-O,-\u0081"))).apply(this,[g,k,L,kb,h,c,t,lb,j,0,i]);
!G&&m.license.length==6&&p(f,"keydown",ab);Z(j)}};function Z(d){if(typeof d[e].webkitAnimationName!="undefined")var b="-webkit-";else if(typeof d[e].animationName!="undefined")b="";else return;var h="@"+b+"keyframes ddFadeIn {from{opacity:0;} to{opacity:1;}}",i="#"+g.b+" li.over .dropdown {"+b+"animation: ddFadeIn "+g.f+"s;}";if(f.styleSheets&&f.styleSheets[a]){var c=f.styleSheets[0];if(c.insertRule){c.insertRule(i,0);c.insertRule(h,0)}}}var N;function ab(e){var j=e.which||e.keyCode;if(!/^(37|38|39|40|27|9)$/.test(j))return;var h=f.activeElement;if(h==c&&s>8&&j==9&&e.shiftKey){w();return}for(var g=0;g<b[a];g++)if(h==c||h==b[g].a||d(b[g].a,"over")||h[i]==b[g].a){if(j!=9){fb(e);q(e)}break}clearTimeout(N);N=setTimeout(function(){ib(e,j)},10)}function u(c,b,e){b=b+e;if(b<0)b=c[a]-1;if(b>=c[a])b=0;if(c[b].a.getAttribute("tabindex")!=null){c[b].a.focus();D(c[b],c[b].a)}else{var d=r(c[b].a,"a");if(d[a]){d[0].focus();D(c[b],c[b].a)}else u(c,b,e)}}function bb(b,a){return!a||a.nodeType!=1?0:a[i]==b?1:a[i]&&a[i][i]==b?1:0}function D(a){n(0);a.l(1)}function w(){d(c,"menu-icon-active")&&c[j]()}function ib(t,e){var g=f.activeElement;if(g==c){if(e==9)!d(c,"menu-icon-active")&&c[j]();if(e==27){w();c.blur()}e==40&&u(b,-1,1);return}var h=-1;if(g)for(var m=0;m<b[a];m++)if(g==b[m].a||d(b[m].a,"over")||g[i]==b[m].a){h=m;break}if(h!=-1){var l=b[h].a;if(e==27){n(0);l.blur();w();return}if(e==37)u(b,h,-1);else if(e==39)u(b,h,1);else{var o=r(l,"a"),k=-1;if(!o[a])return;for(var p=0;p<o[a];p++)if(g==o[p]){k=p;break}if(e==38)k--;else if(e==40&&k<o[a]-1)k++;else if(e==9){if(g&&!d(l,"over"))D(b[h],l);else if(k==-1&&g!=l)if(bb(l[i],g)){if(s<9)var q=1;else q=t.shiftKey?-1:1;u(b,h,q)}else{n(0);w()}return}k>=0&&o[k].focus()}}}var W=function(b){var a;if(window.XMLHttpRequest)a=new XMLHttpRequest;else a=new ActiveXObject("Microsoft.XMLHTTP");a.onreadystatechange=function(){if(a.readyState==4&&a.status==200){var d=a.responseText,f=/^[\s\S]*<body[^>]*>([\s\S]+)<\/body>[\s\S]*$/i;if(f.test(d))d=d.replace(f,"$1");var c=t(A,"div");c[e].padding=c[e].margin="0";b[i].insertBefore(c,b);c.innerHTML=d;b[e][v]="none";Q()}};a.open("GET",b.href,true);a.send()},R=function(){i="parentNode",e="style",v="display";if(g.e){var a=t("getElementById",g.e);if(a)W(a);else alert('Cannot find the anchor (id="'+g.e+'")')}else Q()},I=0,G=0,Q=function(){if(!I){var b=t("getElementById",g.b);if(b){for(var i=r(b,"*"),h=0;h<i[a];h++)if(d(i[h],"menu-icon")){c=i[h];break}b=r(b,"ul");if(b[a]){b=b[0];if(c){if(s<9&&c[B])g.g=j;c[j]=function(a){b[e][v]=b[B]==0?"block":"";if(b[B]==0){n(0);J(this,"menu-icon-active")}else K(this,"menu-icon-active");q(a)};var f=F(b,"z-index")||F(b,C);if(f=="auto"||f=="")f=1e10;b.zix=f;c.setAttribute("tabindex",0)}new V(b);I=G=1}}}},eb=function(c){var a=0;function b(){if(a)return;a=1;setTimeout(c,4)}if(f[z])f[z]("DOMContentLoaded",b,false);else p(window,"load",b)};if(s<9){var jb=t(A,"nav"),U=r(f,"head");if(!U[a])return;U[0].appendChild(jb)}X();eb(R);return{init:function(){I=0;R()}}}