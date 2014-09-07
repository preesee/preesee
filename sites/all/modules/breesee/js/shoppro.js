$(document).ready(function(){ 
													 
	  $('.left_cat li a').click(function() {
						$('.left_cat li a').removeClass("active");
						$(this).addClass("active");
						$('#shops_pro').html('<div class="preload"><br><br>Loading ...</div>');
						var urlPart = $(this).attr('href');
						var theUrl = urlPart + '/ajax';
							$.ajax({
							url: theUrl,
							success: function(msg){		
							$('#shops_pro').html(msg);	
								}
							});
						return false;
						});
});

