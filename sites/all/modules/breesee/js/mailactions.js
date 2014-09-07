$(document).ready(function () {
														
														
	$('#checkall').click(function () {
		$('#message_area').find(':checkbox').attr('checked', this.checked);
	});
	
	initmarkasread();
	init_mail_filters();
	//init_openonly();
});


function inithide(nik) {
	alert(nik);
	$('#hide').click(function () {
		nik.css('height', 60);
	});
}

function init_openonly() {
	
	$(".mail_contants_read li").click(function () {
		if($(this).hasClass('big')) {
			$(this).css('height', 60);
			$(this).removeClass('big');
		}
		else {
			$(".mail_contants_read li").css('height', 60);
			$(this).css('height', 'auto');
			var max_h = $(this).height();
			$(this).animate({height: max_h}, "slow");
			$(this).addClass('big');
		}
	});
	
}



function initmarkasread() {
	$('.mailaction').click(function() {
		var actn = $(this).attr('rel');
		var strlist = '';
		$('.mailselect:checked').each(function(){
			strlist +=$(this).val()+'-';	
		});
		$('#message_area').html('<div class="preloader"><br>Loading ...</div>');
		var atheUrl = Drupal.settings.breesee.base_url + '/user/mailbox/action/' + strlist + '/' + actn;
		$.ajax({
			url: atheUrl,
			success: function(msg){
				$('#message_area').load(Drupal.settings.breesee.base_url + '/user/mailbox/filter/all', 
					function (responseText, textStatus, XMLHttpRequest) {
						if (textStatus == "success") {
							$('#message_area').fadeIn('fast');
							var newcant = $('li.unread').length;
							$('#pm_cnt').fadeIn();
							$('#pm_cnt').text(newcant);
							//init_openonly();
						}
					}
				);
				//alert('f');
				
			}
		});
	});
}

function init_mail_filters() {
$('.mfilter').click(function() {
		$('#message_area').fadeOut('fast');
		var actn = $(this).attr('rel');
		var atheUrl = Drupal.settings.breesee.base_url + '/user/mailbox/filter/' + actn;
		$.ajax({
			url: atheUrl,
			success: function(msg){
			initmarkasread();
			$('#message_area').html(msg);
			$('#message_area').fadeIn('fast');
			//init_openonly();
		}
		});
});
	
$('#month').change(function() {
	if($('#year').val() == '- Year -' ) {
		$('.read_txt').css('color', 'red');
		$('.read_txt').text('Choose Year also');
		return false;
	}
	else {
		$('#message_area').html('<div class="preloader"><br>Loading ...</div>');
		var atheUrl = Drupal.settings.breesee.base_url + '/user/mailbox/filter/month/' + $('#month').val() + '/' + $('#year').val();
		$.ajax({
			url: atheUrl,
			success: function(msg){
				initmarkasread();
				$('#message_area').html(msg);
				$('#message_area').fadeIn('fast');
				//init_openonly();
			}
		});	
	}
});

$('#year').change(function() {

	if($('#month').val() == '- Month -' ) {
		$('.read_txt').css('color', 'red');
		$('.read_txt').text('Choose Month also');
		return false;
	}
	$('.read_txt').css('color', 'grey');
	$('.read_txt').text('Choose');
	
	$('#message_area').html('<div class="preloader"><br>Loading ...</div>');
	var atheUrl = Drupal.settings.breesee.base_url + '/user/mailbox/filter/month/' + $('#month').val() + '/' + $('#year').val();
		$.ajax({
			url: atheUrl,
			success: function(msg){
			initmarkasread();
			$('#message_area').html(msg);
			$('#message_area').fadeIn('fast');
			//init_openonly();
		}
		});
		
		
});

}

