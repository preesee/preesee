$(document).ready(function(){
			showurl();
	    $('.regsteps').hide();
			$('#storstepone').show();
			$('#edit-field-email1-0-value').addClass('required');
      $('#edit-name').blur(function() {
				$('#url').text( $('#edit-name').val() );
			});

	$('#edit-field-own-value-0').click(function() {
		$('#optioanl_step_str').fadeOut();
		$('#optioanl_step_str .required').each(function() {
				$(this).removeClass('required');
		});
	});
	$('#edit-field-own-value-1').click(function() {
		$('#optioanl_step_str').fadeIn();
		$('#optioanl_step_str .required').each(function() {
					if( $(this).val() == ''  ) 
					$(this).addClass('error');
					else 
					$(this).removeClass('error');
			});
	});	
	
	
	$('#edit-field-email1-0-value').blur(function() {
		var emial = $(this).val();
		var atheUrl = Drupal.settings.breesee.base_url + '/user/validate/email/' + emial;
		$.ajax({
			url: atheUrl,
			success: function(msg){
			}
		});
	});
	
	
	
	$('.one').click(function() {
													 
		$('#storsteptwo .required').each(function() {
					if( $(this).val() == ''  ) 
					$(this).addClass('error');
					else 
					$(this).removeClass('error');
		});
			if ($("#storsteptwo .required").hasClass("error")) {
				$('html, body').animate({scrollTop: '120px'}, 600);
				return false;
			} else {
				$('#storsteptwo').hide('fast');
				$('#storstepone').fadeIn('slow');
				$('html, body').animate({scrollTop: '120px'}, 600);
			}
	});
	$('.two').click(function() {
		$('#storstepone .required').each(function() {
					if( $(this).val() == ''  ) 
					$(this).addClass('error');
					else 
					$(this).removeClass('error');
			});
		if ($("#storstepone .required").hasClass("error")) {
				$('html, body').animate({scrollTop: '120px'}, 600);
				return false;
		} else {
			$('#storstepone').hide('fast');
			$('#storsteptwo').fadeIn('slow');
			$('html, body').animate({scrollTop: '120px'}, 600);
		}
	});
	
	
});
	
	function stepnext(step){
		
		if(step == 1) {
			$('#storstepone .required').each(function() {
					if( $(this).val() == ''  ) 
					$(this).addClass('error');
					else 
					$(this).removeClass('error');
			});
			
			if ($("#storstepone .required").hasClass("error")) {
				$('html, body').animate({scrollTop: '120px'}, 600);
				return false;
			} else {
				//return true;
				$('#storstepone').hide('fast');
				$('#storsteptwo').fadeIn('slow');
				$('html, body').animate({scrollTop: '120px'}, 600);
			}
		}
		
		else if(step == 2) {
   
			$('.required').each(function() {
					if( $(this).val() == ''  ) 
					$(this).addClass('error');
					else 
					$(this).removeClass('error');
			});
			
			if ($("#storsteptwo .required").hasClass("error")) {
				$('html, body').animate({scrollTop: '120px'}, 600);
				return false;
			} else {
				$('#node-form').submit();
			}
		}
	
	}



function showurl() {
	$('#edit-title').blur(function() {
		var username = jQuery.trim($('#edit-title').val()).replace(/\s|\//g, '-').toLowerCase();
		username =  username.replace(/[^a-zA-Z 0-9 -]+/g,'');
		$('#srurl').text(username);
		$('#edit-field-alias-0-value').val(username);
	});
}

