$(document).ready(function () {
	$('#followers_content').html('<div class="preload"><br><br>Loading ...</div>');
	var theUrl = base_url + '/user/followers/ajax';
	$.ajax( {
		url: theUrl,
		success: function (msg) {
			$('#followers_content').html(msg);
			init_popactions();
			//init_follow_filters();
		}
	});
	$('#followerorfollowing a').click(function () {
		$('#followerorfollowing a').removeClass('active');
		$('#followers_content').html('<div class="preload"><br><br>Loading ...</div>');
		var varl = $(this).attr('rel');
		if (varl == 'Followers') {
			$(this).addClass('active');
			$('.fltr').removeClass('folw');
			$('.fltr').addClass('folo');
			
			var theUrl = Drupal.settings.breesee.base_url + '/user/followers/ajax';
			$.ajax( {
				url: theUrl,
				success: function (msg) {
					$('#followers_content').html(msg);
					clickinit();
					init_popactions();
				}
			});
		}else if (varl == 'Following') {
			$(this).addClass('active');
			
			$('.fltr').removeClass('folo');
			$('.fltr').addClass('folw');
			
			var theUrl = Drupal.settings.breesee.base_url + '/user/following/ajax';
			$.ajax( {
				url: theUrl,
				success: function (msg) {
					$('#followers_content').html(msg);
					clickinit();
					init_popactions();
				}
			});
		}
	});
});
function clickinit() {
	$('.actions').click(function () {
		var theUrl = $(this).attr('rel');
		$.ajax( {
			url: theUrl,
			success: function (msg) {
				$('#followers_content').html(msg);
			}
		});
	});
}function onajax_success() {
	var theUrl = $('.active').attr('rel');
	$.ajax( {
		url: theUrl,
		success: function (msg) {
			$('#followers_content').html(msg);
			init_popactions();
		}
	});
}

function init_popactions() {
	$('.actions').click(function () {
		var theUrl = $(this).attr('rel');
		$.ajax( {
			url: theUrl,
			success: function (msg) {
				$('#followers_content').load(Drupal.settings.breesee.base_url + '/user/followers/ajax');
				init_popactions();
			}
		});
	});
	$('#homeblog .mems').mouseenter(function () {
		$(this).find('.act_pop').fadeIn();
	});
	$('#homeblog .mems').mouseleave(function () {
		$('#homeblog .act_pop').fadeOut();
	});
	$('#homeblog .act_pop img').click(function () {
		$('#homeblog .act_pop').fadeOut();
	});
}