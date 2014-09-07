jQuery(document).ready(function(){
	var pathname = window.location.href;
		jQuery('.quicktabs-style-basic a.qt_tab').click(function() {
			var aurl = jQuery(this).attr('href');
			var splidted = aurl.split('?');
			var strnew = splidted[1].toString();
			var tabidk = strnew.split('#');
			if(jQuery('.activ-quicktabs #pager').length != 0) {
				jQuery('#pager a').not('.processed').each(function () {
					var newhref = jQuery(this).attr('href') + '&' + tabidk[0];
					jQuery(this).attr('href', newhref);
					jQuery(this).addClass('processed');
				});
			}

		});
});