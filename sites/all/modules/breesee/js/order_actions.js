$(document).ready(function(){
		$('.tablerow').click(function() {
				var idofdiv = $(this).attr('id');
				$('.login_purchaising_block_cover').css('display','none');
				$('div #' + idofdiv + 'div').css('display','block');
				$('div #' + idofdiv + 'div').html('<div class="preload"><br>Loading ...</div>');
				var atheUrl = Drupal.settings.breesee.base_url + '/user/orderdetail/' + idofdiv;
				$.ajax({
					url: atheUrl,
					success: function(msg){
						$('div #' + idofdiv + 'div').html(msg);
						init_self_close();
						init_igot_it();
						init_submit();
					}
				});
	
		});
		
		
		
$('#month').change(function() {
	$('#year').css('border', '1px sold #000');
});

$('#year').change(function() {
	if($('#month').val() == '- Month -' ) {
		$('.read_txt').css('color', 'red');
		$('.read_txt').text('Choose Month also');
		return false;
	}
	$('.read_txt').css('color', 'grey');
	$('.read_txt').text('Choose');
	
	$('#order_area').html('<div class="preloader"><br>Loading ...</div>');
	var atheUrl = Drupal.settings.breesee.base_url + '/order/userfilter/date/' + $('#month').val() + '/' + $('#year').val();
		$.ajax({
			url: atheUrl,
			success: function(msg){
			$('#order_area').html(msg);
			$('#order_area').fadeIn('fast');
			//init_openonly();
		}
		});
});
		
$('.shipoptions').change(function() {
	$('.shipoptions').removeAttr('checked');	
	$(this).attr('checked', true);
	$('#order_area').html('<div class="preloader"><br>Loading ...</div>');
	var atheUrl = Drupal.settings.breesee.base_url + '/order/userfilter/status/' + $(this).val();
		$.ajax({
			url: atheUrl,
			success: function(msg){
			$('#order_area').html(msg);
			$('#order_area').fadeIn('fast');
		}
	});
});




});



function init_submit() {
			
		$('#edit-body').click(function() {
				var curtxt = $('#edit-body').val();
				if(curtxt == 'Leave your comment if you like.thanks' ) {
					$('#edit-body').val('');
				}
				
		});
		
		$('#edit-body').blur(function() {
				var curtxt = $('#edit-body').val();
				if(curtxt == '' ) {
					$('#edit-body').val('Leave your comment if you like.thanks');
				}
				
		});
		
		$('.feedback-button').click(function (e){
				form_validate();
		  	e.preventDefault();
				var ser_frm = $('#breesee-purchase-feedback-form').serialize();
				var aj_url = Drupal.settings.breesee.base_url + '/user/feedback';
				$.ajax({method: "get",
					url: aj_url, 
					data: ser_frm,
					success: function(result) { 
					if(result == 'success')
						window.location.reload();
					else 
						return false;
					}
				});
				
				
		});
}

function init_self_close() {
	$('.closebtn').click(function() {
		$('.order_details').fadeOut('slow').queue(
		$('html, body').animate({scrollTop: '120px'}, 600));
	});
}

function init_igot_it() {
	jQuery('#igotit').click(function(e) {
		e.preventDefault();
		//jQuery('#gotitdiv').html('<div class="preloader">&nbsp;</div>');
			var oid = jQuery(this).attr('rel');
			var atheUrl = Drupal.settings.breesee.base_url + '/user/orderdetail/' + oid;
			var atheUrl = Drupal.settings.breesee.base_url + '/order/ostatus/' + oid;
				$.ajax({
					url: atheUrl,
					success: function(msg){
						//console.log(msg);]
						if(msg == 'success')
							window.location.reload();
						else 
							return false;
					}
				});	
	});
}

function form_validate() {
		//alert($("input[@name='feedback']").val());																					 
    if ($("input[@name='feedback']:checked").val() == '0')
         $('.prmtmessage').text("Please select at least one!"); 
    else if ($("input[@name='feedback']:checked").val() == '1')
         $('.prmtmessage').text("Please select at least one!"); 
    else
         $('.prmtmessage').text("Please select at least one!"); 
		
}