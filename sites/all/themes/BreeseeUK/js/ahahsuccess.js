$(document).ready( function () {
	$('body').bind('ajaxSuccess', function(data, status, xhr) {
		//$('#please_wait').fadeOut('slow');
		init_ajax_sucess();
	});
	
//	$('body').bind('ajaxSend', function(data, status, xhr) {
//		$('#please_wait').fadeIn('fast');
//	});
	
});

function init_ajax_sucess() {
		jQuery('#creation_extra_comment #comment-form').submit(function() {
																																	
				var dataString = jQuery('#comment-form').serialize();
				var all_comments = jQuery('#all_comments').val();
				var nid = jQuery('#node_id').val();
				jQuery('#creation_extra_comment').html('<div class="preload"><br><br>Loading ...</div>');	
				$.ajax({  
					type: "POST",  
					dataType:"html",
					url: Drupal.settings.breesee.base_url + '/breesee/custom_comment_submit/' + nid + '/' + all_comments,  
					data: dataString,  
					success: function(msg) {
						jQuery('#creation_extra_comment').html(msg);
					}
				});			
				return false; 
			});
		
		$('#line-items-div table tr').each(function() {
			
		});
		
		$("tr:contains('Shipping:')").css("display", "none");
}