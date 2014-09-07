$(document).ready(function(){
			showurl();
			
//			var urlrl = window.location.pathname;
//			var kkkk = urlrl.split("/", 7);
//			var editid = kkkk[6];
			
			if(editid == 'experience' ) {
				$('.regsteps').hide();
				$('#storstepone').show();
			}
			else if(editid == 'expertise' ) {
				$('.regsteps').hide();
				$('#storstepone').show();
			}
			else if(editid == 'artwork' ) {
				$('.regsteps').hide();
				$('#storsteptwo').show();
			}
			else {
				$('.regsteps').hide();
				$('#storstepone').show();
			}
			
			$('#edit-field-email1-0-value').addClass('required');
			$('#edit-field-avtr-0-upload').addClass('required');
			$('#edit-taxonomy-13-hierarchical-select-selects-0').addClass('required');
			$('#edit-name').blur(function() {
				$('#url').text( $('#edit-name').val() );
			});
	
	$('#edit-field-item1-0-upload').addClass('required');
	$('#edit-field-item11-0-upload').addClass('required');
	
	$('#edit-field-item2-0-upload').addClass('required');
	$('#edit-field-item22-0-upload').addClass('required');
	
	
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
			
			$('#storsteptwo .required').each(function() {
					if( $(this).val() == ''  ) 
					$(this).addClass('error');
					else 
					$(this).removeClass('error');
					
					var ext = $(this).val().split('.').pop().toLowerCase();
					if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
						$(this).addClass('error');
					}
			});
			if ($("#storsteptwo .required").hasClass("error")) {
				$('html, body').animate({scrollTop: '120px'}, 600);
				return false;
			} else {
				$('#node-form').submit();
			}
		}
	
	}

function setiframesrc() {
	$('#gmapifr').attr('src', $('#edit-field-maphtml-0-url').val());
}	

function showurl() {
	$('#edit-title').blur(function() {
		var username = jQuery.trim($('#edit-title').val()).replace(/\s|\//g, '-').toLowerCase();
		username =  username.replace(/[^a-zA-Z 0-9 -]+/g,'');
		$('#srurl').text(username);
		$('#edit-field-alias-0-value').val(username);
	});
}