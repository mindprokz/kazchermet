$(document).ready(function(){$(".count_element").on("click",function(){return ga("send","event","goal","goal"),yaCounterXXXXXXXX.reachGoal("goal"),!0}),(new WOW).init(),Modernizr.svg||$("img[src*='svg']").attr("src",function(){return $(this).attr("src").replace(".svg",".png")}),$("#form").submit(function(){return $.ajax({type:"POST",url:"mail.php",data:$(this).serialize()}).done(function(){alert("Спасибо за заявку!"),setTimeout(function(){$("#form").trigger("reset")},1e3)}),!1});try{$.browserSelector(),$("html").hasClass("chrome")&&$.smoothScroll()}catch(t){}$("img, a").on("dragstart",function(t){t.preventDefault()})});