
$(function() {
		$('.scrollup').click(function() {
			$("html, body").animate({
			scrollTop:0
			},1000);
		})
    })
	$(window).scroll(function() {
		if ($(this).scrollTop()>500) {
			$('.scrollup').fadeIn();
		}
		else {
			$('.scrollup').fadeOut();
		}
    });
	