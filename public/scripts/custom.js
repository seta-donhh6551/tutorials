// Start slide customer
var $jQuery = jQuery.noConflict(); jQuery.fn.imageScroller = function(params){ var p = params || { next:"btn1",
				prev:"btn2",
				frame:"slide-body",
				width:100,
				child:"a",
				auto:true,
		func:function(){}
		}; 
		var _btnNext = $jQuery("#"+ p.next); 
		var _btnPrev = $jQuery("#"+ p.prev); 
		var _imgFrame = $jQuery("#"+ p.frame); 
		var _width = p.width; 
		var _child = p.child; 
		var _auto = p.auto; 
		var _func = p.func; 
		var _itv; 
		var turnLeft = function(){ _btnPrev.unbind("click",turnLeft); if(_auto) autoStop(); _imgFrame.animate( {marginLeft:-_width}, 'fast', '', function(){ _imgFrame.find(_child+":first").appendTo( _imgFrame ); _imgFrame.css("marginLeft",0); _btnPrev.bind("click",turnLeft); if(_auto) autoPlay(); }); }; 
		var turnRight = function(){ _btnNext.unbind("click",turnRight); if(_auto) autoStop(); _imgFrame.find(_child+":last").clone().click(_func).show().prependTo( _imgFrame ); _imgFrame.css("marginLeft",-_width); _imgFrame.animate( {marginLeft:0}, 'fast' ,'', function(){ _imgFrame.find(_child+":last").remove(); _btnNext.bind("click",turnRight); if(_auto) autoPlay(); }); }; 
			  _btnNext.css("cursor","hand").click( turnRight ); _btnPrev.css("cursor","hand").click( turnLeft ); var autoPlay = function(){ _itv = window.setInterval(turnLeft, 5000); }; var autoStop = function(){ window.clearInterval(_itv); }; if(_auto) autoPlay(); }; $jQuery(document).ready(function(){ $jQuery("#customer_content_mid").imageScroller({ next:"btn1",
 				prev:"btn2",
 				frame:"slide-body",
 				width:100,
 				child:"a",
 				auto:1
 			}); 
}); 
// End slide customer
// Google 
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35845136-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
// end goole