$(document).ready(function(){
													 
//	$('.product-description li').each(function() {												 
//		var clr = $(this).html().substring(6, 14);
//		$(this).html('');
//		$(this).css('height', '30px');
//		$(this).css('width', '30px');
//		$(this).css('background', clr);
//	});	

$("#edit-continue").click(function(e) {
	$('#steptwo .required').each(function() {
			if( $(this).val() == ''  ) 
			$(this).addClass('error');
			else 
			$(this).removeClass('error');
		});
		
		if ($("#steptwo .required").hasClass("error")) {
			$('html, body').animate({scrollTop: '180px'}, 600);
			e.preventDefault();
			return false;
		} else {
			return true;
		}
	});													
	
	$("a#1").click(function(e) {
			$('html, body').animate({scrollTop: '180px'}, 600);
			$('#steptwo').fadeOut('slow');
			$('#stepone').fadeIn('fast');
			$("a#2").removeClass('choos1_sub');
			$(this).addClass('choos1_sub');
	});
	$("a#2").click(function(e) {
			$('html, body').animate({scrollTop: '180px'}, 600);
			$('#steptwo').fadeIn('slow');
			$('#stepone').fadeOut('fast');
			$("a#1").removeClass('choos1_sub');
			$(this).addClass('choos1_sub');
	});
	
	
	
});

function stepnext(step){
		
		if(step == 1) {
			$('#stepone .required').each(function() {
					if( $(this).val() == ''  ) 
					$(this).addClass('error');
					else 
					$(this).removeClass('error');
			});
			
			if ($("#stepone .required").hasClass("error")) {
				$('html, body').animate({scrollTop: '180px'}, 600);
				return false;
			} else {
				//return true;
				$('a#1').removeClass('choos1_sub');
				$('a#1').addClass('choos2_sub');
				$('a#2').addClass('choos2_sub')
				$('a#2').addClass('choos1_sub');
				$('#stepone').hide('fast');
				$('#steptwo').fadeIn('slow');
				$('html, body').animate({scrollTop: '180px'}, 600);
			}
		}
		else if(step == 2) {
			$('#steptwo .required').each(function() {
					if( $(this).val() == ''  ) 
					$(this).addClass('error');
					else 
					$(this).removeClass('error');
			});
			
			if ($("#steptwo .required").hasClass("error")) {
				$('html, body').animate({scrollTop: '180px'}, 600);
				return false;
			} else {
				return true;
			}
		}
	}


