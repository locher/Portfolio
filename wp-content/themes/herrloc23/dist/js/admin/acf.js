function checkImage(e){var t=new XMLHttpRequest;if(t.open("HEAD",e,!1),t.send(),"404"!=t.status)return!0}function changeImages(){$(".acf-tooltip ul li a").hover((function(){var e=$(this).attr("data-layout"),t=adminLocal.img_path+e+".png",n=checkImage(t)?t:"";$(".acf-tooltip").append('<div class="module-preview"><img src="'+n+'"></div>')}),(function(){$(".module-preview").remove()}))}function checkDOMChange(){let e=document.querySelectorAll(".acf-tooltip ul li");e.length?changeImages(e):setTimeout(checkDOMChange,100)}function init(){$(document).on("click","a[data-name=add-layout]",(function(){checkDOMChange()}))}$(document).ready(init);