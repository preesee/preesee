$(document).ready(function(){
		$('.tablerow').click(function() {
																	
																	
				var idofdiv = $(this).attr('id');
				var cuuudiv = $(this);
				//window.location.href = Drupal.settings.breesee.base_url + '/user/orderdetail/' + idofdiv;
				//return false;
				$('.login_purchaising_block_cover').css('display','none');
				$('div #' + idofdiv + 'div').css('display','block');
				$('div #' + idofdiv + 'div').html('<div class="preload"><br>Loading ...</div>');
				var atheUrl = Drupal.settings.breesee.base_url + '/user/soldorderdetail/' + idofdiv;
				$.ajax({
					url: atheUrl,
					success: function(msg){
						//console.log(msg);
						//alert(cuuudiv.attr('class'))
						$('div #' + idofdiv + 'div').html(msg);
						init_self_close();
						init_igot_it();
						if(! cuuudiv.hasClass('processing'))
							init_datepickers();
						init_submit()
						
					}
				});
	
		});
		$('.feedback-button').click(function (){
		  			form_validate();																
		});
});


function init_self_close() {
	$('.closebtn').click(function() {
		$('.order_details').fadeOut('slow').queue(
		$('html, body').animate({scrollTop: '120px'}, 600));
	});
}

function init_datepickers() {
		$('#expdelfrm').DatePicker({
	format:'Y/m/d',
	date: $('#expdelfrm').val(),
	current: $('#expdelfrm').val(),
	starts: 1,
	position: 'r',
	onBeforeShow: function(){
		$('#expdelfrm').DatePickerSetDate($('#expdelfrm').val(), true);
	},
	onChange: function(formated, dates){
		$('#expdelfrm').val(formated);
		$('#expdelfrm').DatePickerHide();
	}
	});
	
	$('#shippingdate').DatePicker({
	format:'Y/m/d',
	date: $('#shippingdate').val(),
	current: $('#shippingdate').val(),
	starts: 1,
	position: 'r',
	onBeforeShow: function(){
		$('#shippingdate').DatePickerSetDate($('#shippingdate').val(), true);
	},
	onChange: function(formated, dates){
		$('#shippingdate').val(formated);
		$('#shippingdate').DatePickerHide();
	}
	});
	
	$('#expdelto').DatePicker({
	format:'Y/m/d',
	date: $('#expdelto').val(),
	current: $('#expdelto').val(),
	starts: 1,
	position: 'r',
	onBeforeShow: function(){
		$('#expdelto').DatePickerSetDate($('#expdelto').val(), true);
	},
	onChange: function(formated, dates){
		$('#expdelto').val(formated);
		$('#expdelto').DatePickerHide();
	}
	});
	
}


function init_igot_it() {
	
	
	
	jQuery('#shipitbtn').click(function(e) {
		
		$('.required').each(function() {
					if( $(this).val() == ''  ) 
					$(this).addClass('error');
					else 
					$(this).removeClass('error');
			});
		if ($(".required").hasClass("error")) {
				$('html, body').animate({scrollTop: '400px'}, 600);
				return false;
		}
		
		else { 
			var aj_url = Drupal.settings.breesee.base_url + '/user/ordership';																						
			var datastring = $('#shipit_form').serialize();
			$.ajax({method: "get",
			url: aj_url, 
			data: datastring,
			success: function(result) { 
			if(result == 'success')
				window.location.reload()
			else 
				return false;
			
			}
		 
			});
		}
		
		//alert($('#shipit_form').serialize());
		e.preventDefault();
	});
}


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
		  	e.preventDefault();
				var ser_frm = $('#breesee-purchase-feedback-form').serialize();
				var aj_url = Drupal.settings.breesee.base_url + '/user/feedback';
				$.ajax({method: "get",
					url: aj_url, 
					data: ser_frm,
					success: function(result) { 
					if(result == 'success')
						window.location.reload()
					else 
						return false;
					}
				});
				
				
		});
}

function form_validate() {
		alert($("input[@name='feedback']").val());																					 
    if ($("input[@name='feedback']:checked").val() == '0')
         $('.message').text("Please select at least one!"); 
    else if ($("input[@name='feedback']:checked").val() == '1')
         $('.message').text("Please select at least one!"); 
    else
         $('.message').text("Please select at least one!"); 
		
}