$(document).ready(function () {
	$('.photos_bootom li').click(function() {
		$('.photos_bootom li').removeClass('highlighted');
		$(this).addClass('highlighted');																	
	});													 
});