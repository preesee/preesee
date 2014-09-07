$(document).ready(function(){
	$("ul.sidenavgation li.left").mouseover(function() {
		$(this).find("div.inner_info").stop()
			.animate({left: "153px", opacity:1}, "fast")
			.css("display","block")
		});

	$("ul.sidenavgation li.left").mouseout(function() {
			$(this).find("div.inner_info").stop()
			.animate({left: "0px", opacity: 0}, "fast")
	});

		$("ul.sidenavgation li.right").mouseover(function() {
		$(this).find("div.inner_info").stop()
			.animate({left: "-153px", opacity:1}, "fast")
			.css("display","block")
		});
	$("ul.sidenavgation li.right").mouseout(function() {
			$(this).find("div.inner_info").stop()
			.animate({left: "100px", opacity: 0}, "fast")
	});	
	
});


/*	$(".inner_info").click(function() {
			$(this).fadeOut();
	});*/