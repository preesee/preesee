$(document).ready(function() {
$('#edit-title').blur(function() {
		$('#u_stat').html('<div class="preload"></div>');
		$('#u_stat').removeClass('rejected approved');
		var username = $('#edit-title').val();
		$.ajax({
							url: base_url+'/user/validate/upgrd/'+username,	
							success: function(msg){
								if(msg == 'success' ) {
									$('#u_stat').addClass('approved');
									$('#edit-title').removeClass('error');
									$('#edit-title').removeClass('required');
									$('#u_stat').html('');
								}
								else {
									$('#u_stat').addClass('rejected');
									$('#edit-title').addClass('error');
									$('#u_stat').html('');
									return false;
								}
							}	
		});
});
});