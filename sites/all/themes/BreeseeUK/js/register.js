$(document).ready(function(){ 

$('#audiencsubmit').click(function() {
  $('#user-register').submit();
});


$('#edit-title-wrapper #edit-name').blur(function() {
		$('#u_stat').html('<div class="preloader"></div>');
		$('#u_stat').removeClass('rejected approved');
		var username = $('#edit-name').val();
		$.ajax({
							url: base_url+'/user/validate/upgrd/'+username,	
							success: function(msg){
								if(msg == 'success' ) {
									$('#u_stat').addClass('approved');
									$('#edit-name').removeClass('error required');
									$('#u_stat').html('');
								}
								else {
									$('#u_stat').addClass('rejected');
									$('#edit-name').addClass('error');
									$('#u_stat').html('');
									return false;
								}
							}	
		});
});



});