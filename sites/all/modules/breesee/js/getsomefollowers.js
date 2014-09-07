$(document).ready(function(){ 

	$('#following_list_home').html('<div class="preload"><br><br>Loading ...</div>');
					var uid = $(this).attr('rel');
						var theUrl = Drupal.settings.breesee.base_url + '/user/followers/ajax';
							$.ajax({
							url: theUrl,
							success: function(msg){		
							$('#following_list_home').html(msg);	
								}
							});
			$('#follower_list_home').html('<div class="preload"><br><br>Loading ...</div>');
					var uid = $(this).attr('rel');
						var theUrl = Drupal.settings.breesee.base_url + '/user/following/ajax';
							$.ajax({
							url: theUrl,
							success: function(msg){		
							$('#follower_list_home').html(msg);	
								}
							});
});