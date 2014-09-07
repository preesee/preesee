$(document).ready(function(){ 
	//alert('d');
	$('#edit-submit').click(function() {
	if($('#edit-name').val() == '') {
		$('#edit-name').addClass('error');
		return false;
	}
	else 
	$('#edit-name').removeClass('error');
	
	if($('#edit-pass').val() == '') {
		$('#edit-pass').addClass('error');
		return false;
	}
	else 
	$('#edit-pass').removeClass('error');
	
	});
	$('#edit-submit').click(function() {
		Drupal.modalFrame.close();
	});
});

