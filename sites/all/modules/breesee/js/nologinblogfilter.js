$(document).ready(function(){ 
													 
	  $('#nologinhomemmnu li a').click(function() {
						$('#nologinhomemmnu li a').removeClass("active");
						$(this).addClass("active");
						
						$('#nologin_blog_block').html('<div class="preload"><br><br>Loading ...</div>');
						var urlPart = $(this).attr('href');
						var theUrl = urlPart + '/ajax';
							$.ajax({
							url: theUrl,
							success: function(msg){		
							$('#citylist').html(msg);	
								}
							});
						return false;
						});
});

