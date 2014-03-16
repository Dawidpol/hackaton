jQuery(document).ready(function($) {
	function timerMethod() {
		$('.top_number_box').css({borderRadius: 10}).animate({borderRadius: 30}, 300,function(){
			$('.top_number_box')animate({borderRadius: 0}, 300);
		});
	}
	
	var timerId = setInterval(timerMethod, 1800);
});