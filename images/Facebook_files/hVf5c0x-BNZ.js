;/*FB_PKG_DELIM*/

__d("DeferPresenceBadge.relayprovider",["gkx"],(function(a,b,c,d,e,f,g){"use strict";a={get:function(){return Boolean(c("gkx")("3365"))}};g["default"]=a}),98);
__d("CometSSRViewportHints",[],(function(a,b,c,d,e,f){"use strict";e={max:function(a,b){return a<=b},min:function(a,b){return a>=b}};var g=null,h=null,i=[];function a(a){return a==="width"?g:h}function b(a){g=a.width_px,h=a.height_px}function c(a,b,c,d){var e=i.findIndex(function(b){return b.dimension===a&&b.operation===c&&b.result===d});if(e===-1)i.push({dimension:a,numPixels:b,operation:c,result:d});else{var f=c==="min"&&d===!0||c==="max"&&d===!1,g=i[e].numPixels;i[e].numPixels=f?Math.max(g,b):Math.min(g,b)}}function d(){i.length=0}f.check=e;f.useMatchViewportResults=i;f.getDimension=a;f.setDimensions=b;f.addUseMatchViewportResult=c;f.clearUseMatchViewportResults=d}),66);
__d("useMatchViewport",["CometSSRViewportHints","ExecutionEnvironment","react","useLayoutEffect_SAFE_FOR_SSR"],(function(a,b,c,d,e,f,g){"use strict";var h=d("react").useState;function a(a,b,e){var f=h(function(){if(!c("ExecutionEnvironment").canUseDOM){var f=d("CometSSRViewportHints").getDimension(b);return f!=null?d("CometSSRViewportHints").check[a](f,e):!1}return!!window.matchMedia&&window.matchMedia(i(a,b,e)).matches}),g=f[0],j=f[1];c("ExecutionEnvironment").canUseDOM||d("CometSSRViewportHints").addUseMatchViewportResult(b,e,a,g);c("useLayoutEffect_SAFE_FOR_SSR")(function(){if(!window.matchMedia)return;var c=i(a,b,e),d=window.matchMedia(c),f=function(a){return j(a.matches)};d.addListener(f);return function(){return d.removeListener(f)}},[a,b,e]);return g}function i(a,b,c){return"("+a+"-"+b+": "+c+"px)"}g["default"]=a}),98);
__d("useProfileCometIsCenteredLayout",["CometLeftRailLayoutContext","CometRouteRenderType","react","useMatchViewport"],(function(a,b,c,d,e,f,g){"use strict";var h=d("react").useContext;function a(){var a=h(c("CometLeftRailLayoutContext")),b=d("CometRouteRenderType").useIsHosted();a=a||b;b=a?1259:899;return c("useMatchViewport")("max","width",b)}g["default"]=a}),98);