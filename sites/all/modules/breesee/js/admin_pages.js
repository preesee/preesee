$(document).ready(function() {
	$('.paynow').change(function() {
		var message = 'Are you sure to make this payment? This action cannot be undone';
		var answer = confirm(message)
    if (answer){
      var theUrl = Drupal.settings.breesee.base_url + '/admin/breesee/makepayment/' + $(this).val();
			$.ajax( {
				url: theUrl,
				success: function (result) {
					if(result == 'success')
						window.location.reload();
					else 
						return false;
				}
			});
    }
		
	});	
});