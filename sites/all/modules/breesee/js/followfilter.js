$(document).ready(function () {
		jQuery('.fltr').click(function() {
		$('.fltr').removeClass('active');
		// alert('ff');
		var varl = $(this).attr('class');
		var lclass = varl.substr(5);
		var rol = $(this).attr('rel');
		$('#followers_content').html('<div class="preload"><br><br>Loading ...</div>');
		if (lclass == 'folo') {
			$(this).addClass('active');
			$('.asdfghj').html('<div class="preload"><br><br>Loading ...</div>');
			var theUrl = Drupal.settings.breesee.base_url + '/user/followers/ajax/' + rol;
			$.ajax( {
				url: theUrl,
				success: function (msg) {
					$('.asdfghj').html(msg);
					$('#followers_content').html(msg);
					init_popactions();
				}
			});
		}
		else if (lclass == 'folw') {
			$(this).addClass('active');
			$('.qwertyu').html('<div class="preload"><br><br>Loading ...</div>');
			var theUrl = Drupal.settings.breesee.base_url + '/user/following/ajax/' + rol;
			$.ajax( {
				url: theUrl,
				success: function (msg) {
					$('.qwertyu').html(msg);
					$('#followers_content').html(msg);
					init_popactions();
				}
			});
		}
		
		});
});
