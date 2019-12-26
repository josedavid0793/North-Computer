	$(document).ready(function(){

	$(window).scroll(function(){
	var	scroll = $(window).scrollTop();

		if ($(window).width()>480) {
			if (scroll > 100) {
				$(".menu").css({"background":"#fff"});
				$(".menu").css({"padding":"5px 0"});
				$(".menu").addClass("shadow");
			}
		}
	})	

              
			})