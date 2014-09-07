jQuery(document).ready(function(){
	//alert('Hi');
	jQuery('#ac_fil').click(function() {
		var ser_frm = jQuery('#activity_filter_frm ul li input:checked').val();
		if(ser_frm != null ) {
			jQuery('#my_activity_section').html('<div class="preloader"><br>Loading ...</div>');
			jQuery('.acfilter').attr('disabled', 'true');
			var theUrl = Drupal.settings.breesee.base_url + '/activityfiltyer/' + ser_frm;
			$.ajax({
				url: theUrl,
				success: function (msg) {
				jQuery('#my_activity_section').html(msg);
				jQuery('.acfilter').removeAttr('disabled');
				}
			});
		}
	});
});