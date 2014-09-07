$(document).ready( function () {
	
//alert($('#pm_cnt').html());

$('.blog_add_home #edit-body').addClass('tmceedit');


if($('#pm_cnt').html() == '' )
	$('#pm_cnt').remove();

//$('#user-login-form').submit(function() {	
//	jQuery('#c_login_info').html('<div class="preloader"><br>Authenticating...</div>');
//	var uname = jQuery('#edit-name-2').val();
//	var pass = jQuery('#edit-pass-1').val();
//	var dataString = 'uname='+ uname + '&pass=' + pass;  
//	$.ajax({  
//  type: "POST",  
//  url: Drupal.settings.breesee.base_url + "/breesee/user_login",  
//  data: dataString,  
//  success: function(msg) {
//		if(msg == 'success' )
//			window.location = Drupal.settings.breesee.base_url + '/user/home';
//		else 
//			jQuery('#c_login_info').html('Invalid Username Or Password');
//			jQuery('#c_login_info').fadeIn();
//		}  
//	}); 
//	console.clear();
//	return false;
//});



														 
$('#fancy_login_close_button').click(function(e) {														 
	e.preventDefault();
	$('#fancy_login_dim_screen').fadeOut();
	$('#fancy_login_login_box').fadeOut();
	$('#fancy_login_dim_screen').remove();
	$('#fancy_login_login_box').remove();
});
		
		/* Google map */

		
	/* views-view--Recently-Listed-Stores.tpl.php */ 
		$('#res_listed_stores li').click(function(e) {
			e.preventDefault();
			$('.stor_info').css('display', 'none');
			$('.stor_info').hide();
			var iid = $(this).attr('id');
			$("div#sss" + iid + "").slideDown();
		});
		
				
	/* views-view--Recently-Listed-Stores.tpl.php */

			$(".category a").click(function (e) {
				if(e.ctrlKey  == true) {
					return false;
				} 
			});	
		

$('.option').each(function() {
	$(this).css('display', 'block');
});		

$('#backtotop').click(function(e){
		e.preventDefault();
		$('html, body').animate({scrollTop: '120px'}, 600);
});

$('#nopopup').click(function(e){
	e.preventDefault();
	window.location.href = Drupal.settings.breesee.base_url + '/user/login';
});

$('.messages').prepend('<span class="clbtn">x</span>')
$('.messages').fadeIn(1000);

$('.clbtn').click(function(e){
		e.preventDefault();
		//$('.messages').fadeOut('fast');
		$(this).parent().fadeOut('slow');
});

$('#search-block-form #edit-submit').click(function() {
	if($('#edit-search-block-form-1').val() == '') {
		$('#edit-search-block-form-1').focus();
		return false;
	}
});


$('#contact_user').click(function(e) {
	e.preventDefault();
	//$('.activ-quicktabs').fadeOut('fast');
	$('.activ-quicktabs .contact_placeholder').show('slow');
	$('.activ-quicktabs .contact_placeholder').html('<div class="preload"><br><br>Loading ...</div>');
	var atheUrl = $(this).attr('rel');
	$.ajax({
		url: atheUrl,
		success: function(msg){
			$('.activ-quicktabs .contact_placeholder').html(msg);
			var captch = getcaptcha();
			//alert(captch);
			validate_contact_submit();
		 	init_form_close();
		}
	});
});


$('#itm_fav_add').click(function(e) {
	e.preventDefault();
	var atheUrl = $(this).attr('href');
	$.ajax({
		url: atheUrl,
		success: function(msg){
			//$('#itm_fav_add').attr('href') = msg;
			$('#mydii').html(msg);
			$('#fav_suces_messsgae').html('Item added to favotites');
			inint_favclick();
		}
	});
});	




$('.norightclick').bind("contextmenu",function(e){
  return false;
	if( e.which == 2 ) {
		return false;
	}
});

//				$('#regn_audience #edit-field-fname-0-value').addClass('required');
//			$('#regn_audience #edit-field-lname-0-value').addClass('required');
//			$('#regn_audience #edit-mai').addClass('required');
//			$('#regn_audience #edit-field-new-country-value').addClass('required');		
//	
//	$('#regn_audience #user-register').submit(function() {
//			$('#regn_audience .required').each(function() {
//				if($(this).val() == '') {
//					$(this).addClass('error');
//					$('html, body').animate({scrollTop: '120px'}, 600);
//					return false;
//				}
//			});
//			
//	});


});


function inint_favclick() {
	$('#itm_fav_add').click(function(e) {
	e.preventDefault();
	var atheUrl = $(this).attr('href');
	$.ajax({
		url: atheUrl,
		success: function(msg){
			//$('#itm_fav_add').attr('href') = msg;
			$('#mydii').html(msg);
			$('#fav_suces_messsgae').html('Item added to favotites');
			inint_favclick();
		}
	});
});
}

function showAutoCloseMessage(){
showNotification({
message: "This is Auto Close notification. Message will close after 2 seconds",
autoClose: true,
duration: 2
});
} 


function getcaptcha(){
	var stmp = $('#timestamp').text();
	var atheUrl = Drupal.settings.breesee.base_url + '/user/captcha/' + stmp;
	$.ajax({
		url: atheUrl,
		success: function(msg){
			var soluion = msg;
			$('#timestamp').text(msg);
		}
	});
}

function validate_contact_submit() {
	$('.contct_btn_submit').click(function(e) {
	required = ["edit-name", "edit-mail", "edit-subject", "edit-message", "edit-captcha-response"];
	email = $("#edit-mail");
	errornotice = $("#contact_form_error");
	emptyerror = "Please fill out this field.";
	emailerror = "Please enter a valid e-mail.";
	
	
	$(":input").focus(function(){		
	   if ($(this).hasClass("error") ) {
			$(this).val("");
			$(this).removeClass("error");
	   }
	});
		
		//Validate required fields
		for (i=0;i<required.length;i++) {
			var input = $('#'+required[i]);
			if ((input.val() == "") || (input.val() == emptyerror)) {
				input.addClass("error");
				input.val(emptyerror);
				errornotice.fadeIn(750);
			} else {
				input.removeClass("error");
			}
		}
		// Validate the e-mail.
		if (!/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(email.val())) {
			email.addClass("error");
			email.val(emailerror);
		}
		if( $('#edit-captcha-response').val() != $('#timestamp').text()) {
			$('#edit-captcha-response').addClass("error");
			return false;
		}

		//if any inputs on the page have the class 'needsfilled' the form will not submit
		if ($(":input").hasClass("error")) {
			return false;
		} else {
			errornotice.hide();
			contactform_do_submit();
			return false;
		}
	
	
	
});

/*$("#contact-user-access-form").submit(function(){	
		//Validate required fields
		for (i=0;i<required.length;i++) {
			var input = $('#'+required[i]);
			if ((input.val() == "") || (input.val() == emptyerror)) {
				input.addClass("error");
				input.val(emptyerror);
				errornotice.fadeIn(750);
			} else {
				input.removeClass("error");
			}
		}
		// Validate the e-mail.
		if (!/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(email.val())) {
			email.addClass("error");
			email.val(emailerror);
		}
		if( $('#edit-captcha-response').val() != $('#timestamp').text()) {
			$('#edit-captcha-response').addClass("error");
			return false;
		}

		//if any inputs on the page have the class 'needsfilled' the form will not submit
		if ($(":input").hasClass("error")) {
			return false;
		} else {
			errornotice.hide();
			contactform_do_submit();
		}
	});*/
}


function contactform_do_submit() {
	var selectedbooks = $("#contact-user-access-form").serialize();
	//alert (selectedbooks); 
	$('#contact_placeholder').html('<div class="preload"><br><br><br>Submitting ...</div>');
	var atheUrl = Drupal.settings.breesee.base_url + '/user/contact/submit/' + selectedbooks;
	$.ajax({
		url: atheUrl,
		success: function(msg){
			cfrm_submiit_success()
		}
	});
	return false;
}

function cfrm_submiit_success() {
	$('.contact_placeholder').hide('fast');															
	$('.activ-quicktabs').fadeIn('fast');
}

function init_form_close() {
	$('.close_div').click(function () {
		$('.contact_placeholder').fadeOut();															
		$('.activ-quicktabs').fadeIn('fast');
});
}



$('.quicktabs_tabs quicktabs-style-basic li a').click(function() {
	$('#contact_placeholder').fadeOut('fast');
	$('#store_introduction').fadeIn('slow');
});

jQuery(document).ready(function(){
	//var pathname = window.location.href;
	//alert(pathname);
	jQuery('.quicktabs-style-basic a.qt_tab').click(function() {
		var aurl = jQuery(this).attr('href');
		var splidted = aurl.split('?');
		var strnew = splidted[1].toString();
		var tabidk = strnew.split('#');
		if(jQuery('.activ-quicktabs #pager').length != 0) {
			jQuery('#pager a').not('.processed').each(function () {
				var newhref = jQuery(this).attr('href') + '&' + tabidk[0];
				jQuery(this).attr('href', newhref);
				jQuery(this).addClass('processed');
			});
		}

	});
	
	$('#edit-field-upload-field-upload-add-more').val('Add another Image');
	
	var orig_sell_pa = $('#sellprice_erer').val();
	$('#edit-sell-price').val(orig_sell_pa);
	
	
	
});

