$(document).ready(function(){
													 
													 
		$('.form-file').change( function() {	
			//$(this).next('.ahah-processed').click();     henry.hua 2014/2/19
            //alert('!!!!');
		});	
	inint_removeitem();												 
//	var urlrl = window.location.pathname;
//	var kkkk = urlrl.split("/", 7);
//	var editid = edit_step
	if(editid == '1' ) {
		$('.add_steps').hide();
		$('#stepone').show();
	}
	else if(editid == '2' ) {
		$('.add_steps').hide();
		$('#steptwo').show();
	}
	else if(editid == '3' ) {
		$('.add_steps').hide();
		$('#stepthree').show();
	}
	else {
		$('.add_steps').hide();
		$('#stepone').show();
	}
			
	//$('#stepthree').show();
	showurl();
	makeimage_preview();
    makeimage_preview_creation();
	$('#edit-sell-price').val('');

$('#colorpalette li').click( function() {
	// pal_selected
	var clfr = $(this).attr('id');
	$('#pal_selected li.empty').css('background', '#' + clfr);	
	$('#pal_selected li.empty').attr("rel",'#' + clfr);
	var cur_id = $('#pal_selected li.empty').attr('id');
	$('#pal_selected li.empty').removeClass('empty');
	$('#add_remove').addClass('add_remove');
	$('#add_remove').fadeIn();
});			

$('.selected_clrs').click( function() {	
	$('#1').css('background', '#FFF');
	$('#1').addClass('empty');
});	

$('#add_remove').click( function() {
	$('#1').addClass('empty');
	$('.selected_clrs').css('background', '#FFF');
});

$('#cntryadd_lotn').click(function(e) {
	e.preventDefault();	
	$('.no_none').each(function() {
		if( $(this).val() == ''  ) 
			$(this).addClass('error');
		else 
			$(this).removeClass('error');
	});
	if ($(".no_none").hasClass("error")) {
				$('html, body').animate({scrollTop: '120px'}, 600);
				return false;
	} else {
		$('.runner').fadeIn();
		var newrel = parseInt($('#cntryadd_lotn').attr('rel')) + 1;
		var atheUrl = $(this).attr('href') +'/'+ new Date().getTime();
		$.ajax({
			url: atheUrl,
			type: 'POST',
			success: function(msg){
				$('#location_container').append(msg);
				$('#def_country').text('Everywhere Else');
				inint_removeitem();
				//init_item_validate();
				$('#cntryadd_lotn').attr('rel', newrel);
				$('.runner').fadeOut();
			}
		});
	}
});
	
	
$('#edit-submit').click(function() { 
	if ($(".required").hasClass("error")) {
		$('html, body').animate({scrollTop: '120px'}, 600);
		return false;
	} else {
		$('#node-form').submit();
	}
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
			
			if($("#pal_selected li").hasClass('empty')) {
				$("#pod_clrerr").addClass('error');
				$("#pod_clrerr").fadeIn();
				$('html, body').animate({scrollTop: '120px'}, 600);
				return false;
			}
			else {
				$("#pod_clrerr").fadeOut();	
			}
			
			if ($("#stepone .required").hasClass("error")) {
				$('html, body').animate({scrollTop: '120px'}, 600);
				return false;
			} else {
				//return true;
					var clrs_now = '';
					$('#pal_selected li').each(function() {
						clrs_now += $(this).attr('rel') + ', ';
					});
					
					$('#edit-taxonomy-tags-30').val(clrs_now);
					$('#edit-taxonomy-tags-30').removeClass('error');
					
				$('#stepone').hide('fast');
				$('#steptwo').fadeIn('slow');
				$('html, body').animate({scrollTop: '120px'}, 600);
			}
		}
		else if(step == 2) {
			$('#edit-field-surf-0-value').addClass('required');
			$('#edit-taxonomy-17').addClass('required');
			$('#edit-field-quantity-0-value').addClass('required');
			$('#edit-taxonomy-19').addClass('required');
			$('#edit-sell-price').val();
			$('#steptwo .required').each(function() {
					if( $(this).val() == ''  ) 
					$(this).addClass('error');
					else 
					$(this).removeClass('error');
			});
			
			if ($("#steptwo .required").hasClass("error")) {
				$('html, body').animate({scrollTop: '120px'}, 600);
				return false;
			} else {
				//return true;
//				$('#steptwo').hide('fast');
//				$('#stepthree').fadeIn('slow');
//				$('html, body').animate({scrollTop: '120px'}, 600);
                $('#node-form').submit();
			}
		}
		
//		else if (step == 3) {
//			$('#edit-taxonomy-19').addClass('required');
//			$('#edit-field-quantity-0-value').addClass('required');
//			$('#edit-sell-price').addClass('required');
//
//			$('#stepthree .required').each(function() {
//					if( $(this).val() == ''  )
//						$(this).addClass('error');
//					else
//						$(this).removeClass('error');
//			});
//
//			if ($("#stepthree .required").hasClass("error")) {
//				$('html, body').animate({scrollTop: '120px'}, 600);
//				return false;
//			} else {
//				$('#node-form').submit();
//			}
//		}
	}




	
function step_prevoius(step) {
	if(step == 1) {
		$('#steptwo').hide('fast');
		$('#stepone').fadeIn('slow');
		$('html, body').animate({scrollTop: '120px'}, 600);
	}
	if(step == 2) {
		$('#stepthree').hide('fast');
		$('#steptwo').fadeIn('slow');
		$('html, body').animate({scrollTop: '120px'}, 600);
	}
	if(step == 3) {
		$('#stepfour').hide('fast');
		$('#stepthree').fadeIn('slow');
		$('html, body').animate({scrollTop: '120px'}, 600);
	}
}


function showurl() {
	$('#edit-title').blur(function() {
		var username = jQuery.trim($('#edit-title').val()).replace(/\s|\//g, '-').toLowerCase();
		$('#srurl').text(username);
		$('#prod_sampl').text($('#edit-title').val());
	});
}

function makeimage_preview() {
	$('#edit-field-surf-0-value').click(function() {
	// var prelod = Drupal.settings.breesee.base_url + '/preloader.gif';
	// $('#img_prev').attr("src",prelod);;
	if($('#field_image_cache_values img').length > 0) {
			var newimgsrc = $('#field_image_cache_values img').attr('src');
			var img_p = newimgsrc.split("/imagefield_thumbs/");
			var km = img_p[1].split("?");
			var img_path = km[0];
			var preset = 'store_list';
			var atheUrl = Drupal.settings.breesee.base_url + '/makethumb/' + preset + '/' + img_path;
			$.ajax({
				url: atheUrl,
				success: function(msg){
					$('#img_prev').attr("src",msg);
				}
			});
	}
	});
}

function makeimage_preview_creation() {
    $('#edit-field-surcr-0-value').click(function() {
        // var prelod = Drupal.settings.breesee.base_url + '/preloader.gif';
        // $('#img_prev').attr("src",prelod);;
        if($('#field_upload_values img').length > 0) {
            var newimgsrc = $('#field_upload_values img').attr('src');
            var img_p = newimgsrc.split("/imagefield_thumbs/");
            var km = img_p[1].split("?");
            var img_path = km[0];
            var preset = 'creations_list';
            var atheUrl = Drupal.settings.breesee.base_url + '/makethumb/' + preset + '/' + img_path;
            $.ajax({
                url: atheUrl,
                success: function(msg){
                    $('#img_prev').attr("src",msg);
                }
            });
        }
    });
}


function inint_removeitem() {
	$('.rem_itm').click(function() {
		$(this).parent($('.ship_itm')).fadeOut();
		$(this).parent($('.ship_itm')).remove();
	});
}


function init_item_validate() {
	$('#cntryadd_lotn').click(function(e) {
	 $('.no_none').each(function() {
		if( $(this).val() == ''  ) 
			$(this).addClass('error');
		else 
			$(this).removeClass('error');
	});
	if ($(".no_none").hasClass("error")) {
		$('html, body').animate({scrollTop: '120px'}, 600);
		return false;	
	}
	});
}