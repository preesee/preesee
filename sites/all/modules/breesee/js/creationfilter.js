$(document).ready(function(){ 
													 
	  $('.category li a').click(function() {
																					 
						$('.category li a').removeClass("active");
						$(this).addClass("active");
						
						$('#citylist').html('<div class="preload"><br><br>Loading ...</div>');
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

