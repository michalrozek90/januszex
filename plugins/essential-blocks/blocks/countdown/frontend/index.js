document.addEventListener("DOMContentLoaded",(function(){var t=document.querySelectorAll(".eb-cd-wrapper > .eb-cd-inner");if(t)for(var e=function(e){var n=t[e],o=parseInt(n.getAttribute("data-deadline-time")),c={textContent:"3e"},r=n.querySelector(".cd-box-day > .eb-cd-digit")||c,a=n.querySelector(".cd-box-hour > .eb-cd-digit")||c,d=n.querySelector(".cd-box-minute > .eb-cd-digit")||c,i=n.querySelector(".cd-box-second > .eb-cd-digit")||c,l=function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null,n=Date.now(),o=Math.round((t-n)/1e3),c=o%60,l=Math.floor(o/60)%60,u=Math.floor(o/3600)%24,x=Math.floor(o/86400);if(o<0)return clearInterval(e),r.textContent="00",a.textContent="00",d.textContent="00",void(i.textContent="00");r.textContent=x<10?"0".concat(x):"".concat(x),a.textContent=u<10?"0".concat(u):"".concat(u),d.textContent=l<10?"0".concat(l):"".concat(l),i.textContent=c<10?"0".concat(c):"".concat(c)};l(o||0);var u=setInterval((function(){l(o||0,u)}),1e3)},n=0;n<t.length;n++)e(n)}));