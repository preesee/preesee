$(document).ready(function() {
    var pathname = window.location.href;
		$('#left_menu_one a').each(function() {
			var cur_a_url = $(this).attr('href');
			if(cur_a_url == pathname) {
				$(this).addClass('active');
			}
		});
});