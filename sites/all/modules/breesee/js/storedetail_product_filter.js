$(document).ready(function(){ 

$('#product_filter a.clik').click(function() {
	$('#ajax_page').html('<div class="preload"><br><br>Loading ...</div>');
	var urlPart = $(this).attr('rel');
	var theUrl = base_url + '/product/filter/' + urlPart + '/ajax';
	
	$.ajax({
		url: theUrl,
		success: function(msg){		
		$('#ajax_page').html(msg);	
		init_slideout();
		}
	});
});
						
});

function init_slideout(){
	$("ul.sidenavgation li.left").mouseenter(function() {
		$(this).find("div.inner_info").stop()
			.animate({left: "153", opacity:1}, "fast")
			.css("display","block")
		});
	$("ul.sidenavgation li.left").mouseleave(function() {
			$(this).find("div.inner_info").stop()
			.animate({left: "0", opacity: 0}, "fast")
	});	
	
		$("ul.sidenavgation li.right").mouseenter(function() {
		$(this).find("div.inner_info").stop()
			.animate({left: "-171", opacity:1}, "fast")
			.css("display","block")
		});
	$("ul.sidenavgation li.right").mouseleave(function() {
			$(this).find("div.inner_info").stop()
			.animate({left: "0", opacity: 0}, "fast")
	});	
}