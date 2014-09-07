$(document).ready(function(){
	$('#nologin_blog_block').html('<div class="preload"><br><br>Loading ...</div>');
						var urlPart = $('#nologinhomemmnu li .fb').attr('href');
						var theUrl = base_url + '/' + urlPart + '/ajax';
							$.ajax({
							url: theUrl,	  
							success: function(msg){		
							$('#nologin_blog_block').html(msg);	
								}
							});
});

