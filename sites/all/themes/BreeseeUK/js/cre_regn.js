$(document).ready(function(){
				
	    $('.regsteps').hide();
			$('#storstepone').show();
			
			var rand_no = Math.random();
			rand_no = rand_no * 100;

			$('#edit-pass-pass1').val(rand_no);
			$('#edit-pass-pass2').val(rand_no);
			
			$('#edit-name').blur(function() {
				$('#url').text( $('#edit-name').val() );
			});
			
	});
	
	function stepnext(step){
		
		if(step == 1) {
			var username = $('#edit-name').val();
			var mail = $('#edit-mail').val();
			var bkgrnd = $('#edit-field-backg-0-value').val();
			var prof = $('#edit-taxonomy-15').val();
			var specuis = $('#edit-taxonomy-16').val();
			var skil = $('#edit-field-skill-0-value').val();
			
			var errmsg = '';
			if(username == '' ) {
			  errmsg +='Username can not be empty<br/>';		
			}
			if(bkgrnd == '' ) {
			  errmsg +='Background can not be empty<br/>';		
			}
			if(prof == '' ) {
			  errmsg +='Proffession can not be empty<br/>';		
			}
//			if(specuis == '' ) {
//			  errmsg +='Speciality can not be empty<br/>';
//			}
//			if(skil == '' ) {
//			  errmsg +='Speciality can not be empty<br/>';
//			}
			
			if(mail==''){
			   var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
         if (!filter.test(mail)) {
				   errmsg +='Email can not be empty<br/>';
					 
				 }	
			}
			$('.formerror').css('display','block');	
			$('.formerror').html('<div class="preload"><br>Checking form ...</div>');	
			
			$('.required').each(function() {
											if( $(this).val() == ''  ) 
											$(this).removeClass('error');	
										});
										
			$.ajax({
							url: base_url+'/user/validate/'+step+'/'+username+'/'+mail,	
							success: function(msg){		
									if(msg == 'success' && errmsg==''){
									  $('#storstepone').fadeOut();
										$('#storsteptwo').fadeIn();
										$('#storsteptwo').scrollTo( 'li:eq(15)', 2500, {easing:'elasout'} );
									}
									else
									{										
										if(msg !='success'){
										  errmsg += msg;
										}
																			
										$('.formerror').html(errmsg);
										
										$('.required').each(function() {
											if( $(this).val() == ''  ) 
											$(this).addClass('error');	
										});
										
									  return false;
									}
								}	
							});
		}
		
		else if(step == 2) {
			//$('#storsteptwo').fadeOut();
			$('#user-register').submit();
		}
	
	}

function setiframesrc() {
	$('#gmapifr').attr('src', $('#edit-field-maphtml-0-url').val());
}	