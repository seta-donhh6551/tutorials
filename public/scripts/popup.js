var popupStatus = 0;
//loading popup with jQuery magic!
function loadPopup() {
    //loads popup only if it is disabled    
    if (popupStatus == 0) {
        $("#backgroundPopup").css({
            "opacity": "0.9"
        });
        $("#backgroundPopup").fadeIn("slow");
        $("#popupContact").fadeIn("slow");		
        popupStatus = 1;      
    }
}
//disabling popup with jQuery magic!
function disablePopup() {
    //disables popup only if it is enabled
    if (popupStatus == 1) {
        $("#backgroundPopup").fadeOut("slow");
        $("#popupContact").fadeOut("slow");
        popupStatus = 0;
    }
}
//centering popup
function centerPopup() {
    //request data for centering
    var windowWidth = document.documentElement.clientWidth;
    var windowHeight = document.documentElement.clientHeight;
    var popupHeight = $("#popupContact").height();
    var popupWidth = $("#popupContact").width();
    //centering
    $("#popupContact").css({
        "top": windowHeight / 2 - popupHeight / 2,
        //"top": 20,
        "left": windowWidth / 2 - popupWidth / 2
    });
    //only need force for IE6
    $("#backgroundPopup").css({
        "height": windowHeight
    });
}
$(function() {	
	var s = $.session.get('p')
	if(!$.session.get('p') || s < 1)
	{
		centerPopup();
		loadPopup();
	}
    
    //Click the button event!
    $("#button").click(function() {
        centerPopup();
        loadPopup();
		$.session.set('p', '1');
    });
    //CLOSING POPUP
    //Click the x event!
    $("#popupContactClose").click(function() {
        disablePopup();
		$.session.set('p', '1');
		//$.cookie("showpopup",null); 
    });
    //Click out event!
    $("#backgroundPopup").click(function() {
		disablePopup();
		$.session.set('p', '1');
    });    
    //Press Escape event!
    $(document).keypress(function(e) {
        if (e.keyCode == 27 && popupStatus == 1) {
            disablePopup();
			//$.cookie("showpopup",null); 
			$.session.set('p', '1');
        }
    });
});