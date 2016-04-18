jQuery(function($){
	$('.full-post').find('h3').each(function (index, element) {
		var text = $(this).text();
		$('#quick-view ul').append('<li><a href="#tab'+index+'">'+text+'</a></li>')
		$(this).attr('id','tab'+index);
	});
	$("#quick-view ul li a").click(function() {
		var id = $(this).attr('href');
                var topValue = $(id).offset().top;
		$('html, body').animate({
			scrollTop: (topValue - 50)
		}, 1000);
		return false;
	});
});
