$(document).ready(function() {
	$('#followers').html('<div class="preload"><br>Loading ...</div>');
	var tofollow = $('#followme').attr('rel');
	var theUrl = base_url + '/myfollowers/' + tofollow;
	$.ajax({
							url: theUrl,
							success: function(msg){		
							$('#followers').html(msg);	
							}
	});
//	$('#followmediv').mouseenter(function () {
//		//alert('l');
//		$('#ftxt').html('Follow Me');
//		//$('#ftxt').css('background', '#09F');
//	});
//	$('#followmediv').mouseleave(function () {
//		var bg = $('#ftxt').css('background');
//		if (bg != 'none repeat scroll 0% 0% rgb(0, 204, 51)' )
//			//$('#ftxt').css('background', '#0C3');
//			$('#ftxt').html('Followers');
//	});
	$('#followmediv').click(function () {
		var tofollow = $('#followme').attr('rel');
					if (!isNaN(tofollow)) {
					$('#followers').html('<div class="preload"><br>Refreshing ...</div>');
					var tofollow = $('#followme').attr('rel');
					var theUrl = base_url + '/userfollow/' + tofollow;
					$.ajax({
										url: theUrl,
										success: function(msg){		
										
											$("#followmediv").removeClass();
											$('#followmediv').addClass(msg);	
											if(msg == 'OW_NONE' )
												minusCount();
											else 
												addCount();
										
										$('#ftxt').html(msg);
										var tofollow = $('#followme').attr('rel');
										var theUrl = base_url + '/myfollowers/' + tofollow;
										var msg = '';
										$.ajax({
											url: theUrl,
											success: function(msg){		
												$('#followers').html(msg);	
											}
										});
										}
										});
					}
	});
	
/*	$('#contact_me').click(function() {
		var uid = $(this).attr('rel');
		$('#homeblog .quicktabs_tabs').append('<li id="contact_load"><a>Contact</a></li>');
		$('#homeblog .quicktabs_tabs').append('<li id="contact_load"><a>Contact</a></li>');
	});*/
	
});

function addCount() {
	var precnt = $('#folow_count').text();
	var new_cnt = parseInt(precnt) + 1;
	$('#folow_count').text(new_cnt);
}
function minusCount() {
	var precnt = $('#folow_count').text();
	var new_cnt = parseInt(precnt) - 1;
	$('#folow_count').text(new_cnt);
}
