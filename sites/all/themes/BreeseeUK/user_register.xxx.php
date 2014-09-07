<div id="user_registration">
<?php 
global $theme_path, $base_url, $user;
$theme_path_full = $base_url.'/'.$theme_path;
switch(arg(2)) {
case 'audience':
 
?>
<div class="user_regi_step1_wrapper">
    	<div class="breesee_account">
       		<div class="logo_accont"><a href="#"><img src="<?php echo $base_url.'/sites/all/themes/BreeseeUK/images/user_regi_step1/logo.jpg'; ?>" /></a></div>
            <div class="text_log_acc">Breesee Account</div>
    </div>
        <div class="clear"></div>
        <div class="beco_apart_strip">
        	<h1>Become a part of the bigger creative community beyond your city</h1>
            <p>breesee Account is free. You can connect with other art enthusiasts, get updates from your favorite designers and shop products from local stores near you</p>
        </div>
        <div class="step1_index">
            	<div class="left_block1">
                <div class="left_step1">
                    <span class="name_step1">Your desired user name</span>
                    <span>
                    	
                       	<?php print drupal_render($form['account']['name']); ?>
                    
                    </span>
                </div>
                
                <div class="left_step1">
                    <span class="name_step1">First Name</span>
                    <span>
                    	
                        	<?php print drupal_render($form['field_fname']); ?>
                    
                    </span>
                </div>
                
                <div class="left_step1">
                    <span class="name_step1">Last Name</span>
                    <span>
                    	
                        	<?php print drupal_render($form['field_lname']); ?>
                    
                    </span>
                </div>
                
                <div class="left_step1">
                    <span class="name_step1">Email address</span>
                    <span>
                    	
                        	<?php print drupal_render($form['account']['mail']); ?>
                    
                    </span>
                </div>
                
                <div class="left_step1">
                    <span class="name_step1">Your Password</span>
                    <span>
                    	
                        	<?php print drupal_render($form['account']['pass']['pass1']); ?>
                    
                    </span>
                </div>
                
                
                <div class="left_step1">
                    <span class="name_step1">Re-type Password</span>
                    <span>
                    	
                        	<?php print drupal_render($form['account']['pass']['pass2']); ?>
                    
                    </span>
                </div>
                
                <div class="left_step1">
                    <span class="name_step1">Country</span>
                    <span>
                    	
                        	<?php print drupal_render($form['taxonomy'][13]); ?>
                    
                    </span>
                </div>
                
                <div class="left_step1">
                    <span class="name_step1">City</span>
                    <span>
                    	
                        	<?php print drupal_render($form['field_city']); ?>
                    
                    </span>
                </div>
                <div class="left_step1">
                    <span class="name_step1">Picture</span>
                    <span>
                    	
                        	<?php 
													$form['picture']['picture_upload_register']['#size'] = 0;
													print drupal_render($form['picture']['picture_upload_register']);
													?>
                    
                    </span>
                </div>
                <div class="left_step1">
                    <span class="name_step1"><h1>Or</h1></span>
                    <span>
                    	<p>Have a Facebook account?</p>
                    </span>
                </div>
                
                <div class="left_step1">
                    <span class="name_step1">&nbsp;</span>
                    <span>
                    	<a href="#"><img src="<?php echo $base_url.
'/sites/all/themes/BreeseeUK/images/user_regi_step1/face_book_img.jpg'; ?>" /></a>
                    </span>
                </div>
                
                <div class="left_step1">
                    <span class="name_step1">&nbsp;</span>
                    	<h2>
                    	We promise that we will not post anything your facebook profile</h2>              </div>
                
            </div>     
                  
        
 	<div class="right_step1">
                	<h1>Why do we need to know where you live?</h1>
                    <p>
                    We would like to recommend you the nearest stores that carry 
your interested artworks and creative products from your favorite 
designers. We will not sell any of your information to these local 
stores. Learn more about breesee accounts in <a href="#">FAQ section</a>
                    </p>
          <?php 
$form['submit']['#title'] = 'Join Breesee';
$form['submit']['#attributes']['class'] = 'join_breez';
$form['submit']['#attributes']['id'] = 'audiencsubmit';
print drupal_render($form['submit']);
?> 
         
          </div>

<!-- ############################## Step Two -->


<div class="user_regi_step1_wrapper2" style="display:none;">
    	<div class="breesee_account">
       		<div class="logo_accont"><a href="#"><img src="images/user_regi_step1/logo.jpg" /></a></div>
            <div class="text_log_acc">breesee Account</div>
  </div>
        <div class="clear"></div>
        <div class="you_almst">
        	<h1>You're almost done!</h1>
            <p>
            Please confirm your email address via the link in the email we sent you to complete the registration. Once you click on the link, you will be ready 
to explore creative communities around the world. If you did not receive any confirmatiion email from us, click to <a href="#">resend</a> the confirmation email.
            </p>
            <p>
            If you have problems or questions regarding the registration for breesee Account, please email <a href="#">info@breesee.com</a> and we will get back to you.
            </p>
            <h3>Local Stores near you</h3>
            <ul>
            	<li><a href="#"><img src="images/user_regi_step1/images_uls_03.jpg" /></a></li>
                <li><a href="#"><img src="images/user_regi_step1/images_uls_05.jpg" /></a></li>
                <li><a href="#"><img src="images/user_regi_step1/images_uls_07.jpg" /></a></li>
                <li><a href="#"><img src="images/user_regi_step1/images_uls_09.jpg" /></a></li>
            </ul>
        </div>
        
  </div>

			


<?php 
break; 
case 'creator':
drupal_add_js(drupal_get_path('theme', 'BreeseeUK') . '/js/cre_regn.js');
?>
<div class="clear"> </div>
<div style="display:none;"> <?php 
print drupal_render($form['account']['pass']); 
$form['account']['pass']['pass1']['#value'] = '123456';
$form['account']['pass']['pass2']['#value'] = '123456'; 
?></div>
<div class="main_container regsteps" id="storstepone" ><!-----[middle-container-starts-here]---->
        		<div class="creator_regstep1"><!-----[Creator Account wrapper first block starts-here]---->
                	<div class="breesee_account"><!-----[Creator Account wrapper starts-here]---->
       					<div class="logo_creator_acc"><!-----[Creator Account logo-starts-here]---->
            			<a href="#">
                 	<img src="<?php echo $base_url.
'/sites/all/themes/BreeseeUK/images/creator_account/icons1.jpg' ?>" />
                  </a>
                    </div><!-----[Creator Account logo closed starts-here]---->
            			<div class="text_log_creator_acc">Creator Account</div><!-----[Creator Account logo_text starts starts-here]---->
                	</div><!-----[Creator Account wrapper closed-here]---->
                    <div class="clear"></div>
                    <div class="apps_steps"><!--------[Application process cover starts here]---------->
                		<div class="applic_proces">Application Process</div><!--------[Application text starts here]---------->
                   		<div class="stepsss"><!--------[steps starts here]---------->
                    	
                        <a class="tabs2 corner" href="#">
                        	<div class="ch_inner1">
                            	<span class="ch1"><h1>3</h1></span>
                                <span class="ch4"><p>Review & Submit</p></span>
                        </div>
                        </a>
                    
                    	<a class="tabs3 corner2" href="#">
                        	<div class="ch_inner1">
                            	<span class="ch1"><h1>2</h1></span>
                                <span class="ch4"><p>YOUR ARTWORK</p></span>
                      </div>
                        </a>
                        
                    	<a class="tabs1 corner3" href="#">
                        	<div class="ch_inner1">
                            	<span class="ch1"><h1>1</h1></span>
                                <span class="ch4"><p>YOUR Expertise</p></span>
                      </div>
                        </a>
                        
                    </div><!--------[steps closed here]---------->
                	</div><!--------[Application process cover closed here]---------->
  </div><!-----[Creator Account wrapper first block closed-here]---->
                <div class="clear"></div>
                <div class="steps_coverdiv"><!-----[Creator Account first step whole wrapper starts-here]---->
                	<h1>Pick Your Desired Creator Name</h1>
                    <div class="warning"><!-----[Warning block starts-here]---->
                        	<?php print drupal_render($form['account']['name']);  ?>
                        
                        
                        <div class="warn_cover">
                        	<span class="war_atag"><a href="#">warning</a></span>
                            <span class="text_ptag">
                            	<p>
                               		Once you set your creator name, you will not be able to change it again. 
For more information, please read breesee's <a href="#">application policy</a>. 
                            </p>
                            </span>
                        </div>
                        
                        <h2>Your Personal URL: http://www.thebreesee.com/creator/<span id="url">Your Name</span></h2>
                        <p>Your URL will NOT be active until your creator application is approved.</p>
                        
                    </div><!-----[Warning block closed-here]---->
                    <h6>Tell us about Your Expertise</h6>
                    <h3><b>*</b>Required fields</h3>
                    
                    <div class="forms_steps"><!-----[Required fields starts-here]---->
                    	<ul class="fields_steps">
                        	<li class="first_leftnames">Your Email</li>
                            <li class="second_rightfields">
      <?php print drupal_render($form['account']['mail']); ?>
                            	<b>*</b>
                            </li>
                      </ul>
                    </div><!-----[Required fields closed-here]---->
                    <div class="clear"></div>
                    
                     <div class="forms_steps"><!-----[Required fields starts-here]---->
                    	<ul class="fields_steps">
                        	<li class="first_leftnames">Avatar</li>
                            <li class="second_rightfields"><span class="left_step1"><span>
                            <?php 
													$form['picture']['picture_upload_register']['#size'] = 0;
													print drupal_render($form['picture']['picture_upload_register']);
													?>
                            </span></span><b>*</b>
                            </li>
                      </ul>
                    </div><!-----[Required fields closed-here]---->
										<div class="clear"></div>
                    
                    <div class="forms_steps"><!-----[Required fields starts-here]---->
                    	<ul class="fields_steps">
                        	<li class="first_leftnames">Your background</li>
                            <li class="second_rightfields">
                            	<?php print drupal_render($form['field_backg']); ?>
                            	<b>*</b>
                            </li>
                      </ul>
                    </div><!-----[Required fields closed-here]---->
                    <div class="clear"></div>
                  	<div class="forms_steps"><!-----[Required fields starts-here]---->
                    	<ul class="fields_steps">
                        	<li class="first_leftnames">Profession</li>
                            <li class="second_rightfields">
                            	<?php
			$form['taxonomy'][15]['#title'] = '';
			print drupal_render($form['taxonomy'][15]);
			?>
                            	<b>*</b>
                            </li>
                      </ul>
                    </div><!-----[Required fields closed-here]---->
                    <div class="clear"></div>
                    <div class="forms_steps"><!-----[Required fields starts-here]---->
                    	<ul class="fields_steps">
                        	<li class="first_leftnames">Specialties</li>
                            <li class="second_rightfields">
                            	 <?php
			$form['taxonomy'][16]['#title'] = '';
			print drupal_render($form['taxonomy'][16]);
      ?>
                            	<b>*</b>
                            </li>
                      </ul>
                    </div><!-----[Required fields closed-here]---->
                    <div class="clear"></div>
                    <div class="forms_steps"><!-----[Required fields starts-here]---->
                    	<ul class="fields_steps">
                        	<li class="first_leftnames">Skills</li>
                            <li class="second_rightfields">
      <?php print drupal_render($form['field_skill']); ?>	
                            	<b>*</b>
                            </li>
                      </ul>
                    </div><!-----[Required fields closed-here]---->
										<div class="clear"></div>
                    
                    <div class="forms_steps"><!-----[Required fields starts-here]---->
                    	<ul class="fields_steps">
                        	<li class="first_leftnames">Country</li>
                            <li class="second_rightfields"><?php print drupal_render($form['taxonomy'][13]); ?><b>*</b>
                            </li>
                      </ul>
                    </div><!-----[Required fields closed-here]---->
										<div class="clear"></div>
                    
                    <div class="forms_steps"><!-----[Required fields starts-here]---->
                    	<ul class="fields_steps">
                        	<li class="first_leftnames">City</li>
                            <li class="second_rightfields"><?php print drupal_render($form['field_city']); ?><b>*</b>
                            </li>
                      </ul>
                    </div><!-----[Required fields closed-here]---->
										<div class="clear"></div>
                    
                   
                    
        <h1>Your Experience</h1>
                    <div class="clear"></div>
                    <div class="forms_steps"><!-----[Required fields starts-here]---->
                    	<ul class="fields_steps">
                        	<li class="first_leftnames">School 1</li>
                            <li class="second_rightfields">
      <?php print drupal_render($form['field_sch1']); ?></li></ul>
                    </div><!-----[Required fields closed-here]---->
                    <div class="clear"></div>
                    <div class="forms_steps"><!-----[Required fields starts-here]---->
                    	<ul class="fields_steps">
                        	<li class="first_leftnames">School 2</li>
                            <li class="second_rightfields">
      <?php print drupal_render($form['field_sch2']); ?></li>
                      </ul>
                    </div><!-----[Required fields closed-here]---->
                    <div class="clear"></div>
                    <div class="forms_steps"><!-----[Required fields starts-here]---->
                    	<ul class="fields_steps">
                        	<li class="first_leftnames">Awards</li>
                            <li class="second_rightfields">
      <?php  print drupal_render($form['field_award']); ?></li>
                      </ul>
                        <h5>One award per line</h5>
                    </div><!-----[Required fields closed-here]---->
                   
                    <div class="clear"></div>
                    <div class="formerror messages error"></div>
                    <div class="next_step_btn"><!-----[Next step starts-here]---->
                    	<a id="storenext1" onClick="javascript:stepnext(1)" href="javascript:void(0)" >Next Step</a>
                    </div><!-----[Next step closed-here]---->
                    <div class="clear"></div>
                </div><!-----[Creator Account first step whole wrapper closed-here]---->
                
	</div>
  <div class="clear"></div>
  <div id="storsteptwo" class="regsteps"> 
        		<div class="creator_regstep1"><!-----[Creator Account wrapper first block starts-here]---->
                	<div class="breesee_account"><!-----[Creator Account wrapper starts-here]---->
       					<div class="logo_creator_acc"><!-----[Creator Account logo-starts-here]---->
            			<a href="#"><img src="<?php echo $base_url.
'/sites/all/themes/BreeseeUK/images/creator_account/icons1.jpg' ?>" /></a>
                    </div><!-----[Creator Account logo closed starts-here]---->
            			<div class="text_log_creator_acc">Creator Account</div><!-----[Creator Account logo_text starts starts-here]---->
                	</div><!-----[Creator Account wrapper closed-here]---->
                    <div class="clear"></div>
                    <div class="apps_steps"><!--------[Application process cover starts here]---------->
                		<div class="applic_proces">Application Process</div><!--------[Application text starts here]---------->
                   		<div class="stepsss"><!--------[steps starts here]---------->
                    	
                        <a class="tabs2 corner" href="#">
                        	<div class="ch_inner1">
                            	<span class="ch1"><h1>3</h1></span>
                                <span class="ch4"><p>Review & Submit</p></span>
                        </div>
                        </a>
                    
                    	<a class="tabs1 corner2" href="#">
                        	<div class="ch_inner1">
                            	<span class="ch1"><h1>2</h1></span>
                                <span class="ch4"><p>YOUR ARTWORK</p></span>
                      </div>
                        </a>
                        
                    	<a class="tabs3 corner3" href="#">
                        	<div class="ch_inner1">
                            	<span class="ch1"><h1>1</h1></span>
                                <span class="ch4"><p>YOUR Expertise</p></span>
                      </div>
                        </a>
                        
                    </div><!--------[steps closed here]---------->
                	</div><!--------[Application process cover closed here]---------->
          </div><!-----[Creator Account wrapper first block closed-here]---->
                <div class="clear"></div>
                <div class="step2_cover_div"><!-----[creator account step2 starts-here]---->
                	<h1>We would like to see some of your art work before we approve you as a breesee creator</h1>
                    <p>Use .jpg, .gif or .png files no larger than 1MB. the image have to be at least 500px wide<br />Please upload 2 photos from different angles.</p>
                    <div class="sample_images"><!-----[upload sample images starts-here]---->
                    	<div class="sample_cover">
                            <div class="sample_photo"><img src="<?php echo $base_url.
'/sites/all/themes/BreeseeUK/images/user_regi_step2/upload_image2.jpg'; ?>" /></div>
                            <div class="sample_photo"><img src="<?php echo $base_url.
'/sites/all/themes/BreeseeUK/images/user_regi_step2/upload_image.jpg'; ?>" /></div>
                      </div>
                        <h1>SAMPLE IMAGES IN DIFFEREND ANGLES</h1>
                    </div><!-----[upload sample images closed-here]---->
                    <h2>Upload atleast 1 Artwork</h2>
                    <div class="upload_fields">
                    	<span class="item_column">
                        	<p>Item</p>
                            <h1>*</h1>
          </span>
                        <span class="choose_file">
         	
                            	
                            		<?php print drupal_render($form['field_item1']); ?>
            
                                
                            		<?php print drupal_render($form['field_item11']); ?> 
                                
                        </span>
                        <span class="upload_discription">
                        	<p>Please tell us about the concept and inspiration behind your artwork</p>
                            
                            	<?php print drupal_render($form['field_fld']); ?>
                        </span>
  </div>
                    <div class="clear"></div>
                    <div class="upload_fields">
                    	<span class="item_column">
                        	<p>Item2</p>
                            <h1>*</h1>
                        </span>
                        <span class="choose_file">
                        	
                            	
                            		<?php print drupal_render($form['field_item2']); ?>
                                
                                
                            		<?php print drupal_render($form['field_item22']); ?>
                                
                        </span>
                        <span class="upload_discription">
                        	<p>Please tell us about the concept and inspiration behind your artwork</p>
                            
                            	<?php print drupal_render($form['field_textfiled2']); ?>
                        </span>
                    </div>
                    <div class="clear"></div>
                    <div class="upload_fields">
                    	<span class="item_column">
                        	<p>Item3</p>
                            <h1>*</h1>
                        </span>
                        <span class="choose_file">
                        	
                            	
                            		<?php print drupal_render($form['field_item3']); ?>
                                
                                
                            		<?php print drupal_render($form['field_item33']); ?>
                                
                        </span>
                        <span class="upload_discription">
                        	<p>Please tell us about the concept and inspiration behind your artwork</p>
                            
                            	<?php print drupal_render($form['field_textfiled3']); ?>
                        </span>
                    </div>
                    <div class="all_field_importent">All fields in Item 1 are required</div>
                    <div class="next_step_btn"><!-----[Next step starts-here]---->
                    	<a id="storenext1" onClick="javascript:stepnext(2)" href="javascript:void(0)">Next Step</a>
                    </div>
                </div><!-----[creator account step2 closed-here]---->
                

</div>
<?php 
break; 
case 'store':
drupal_add_js(drupal_get_path('theme', 'BreeseeUK') . '/js/stor_regn.js');
drupal_add_js(drupal_get_path('theme', 'BreeseeUK') . '/js/jquery.scrollTo-min.js');
?>
<div class="main_container regsteps" id="storstepone"><!-----[middle-container-starts-here]---->

<div style="display:none;"> <?php 
print drupal_render($form['account']['pass']); 
$form['account']['pass']['pass1']['#value'] = '123456';
$form['account']['pass']['pass2']['#value'] = '123456'; 
?></div>

        		<div class="creator_regstep1"><!-----[Creator Account wrapper first block starts-here]---->
                	<div class="breesee_account"><!-----[Creator Account wrapper starts-here]---->
       					<div class="logo_creator_acc"><!-----[Creator Account logo-starts-here]---->
            			<a href="#">
                        	<img src="<?php echo $base_url.
'/sites/all/themes/BreeseeUK/images/store_reg_step1/store_reg_logo.jpg'; ?>" />
                        </a>
                    	</div><!-----[Creator Account logo closed starts-here]---->
            			<div class="text_log_creator_acc">Store Account</div><!-----[Creator Account logo_text starts starts-here]---->
                	</div><!-----[Creator Account wrapper closed-here]---->
                    <div class="clear"></div>
                    <div class="apps_steps"><!--------[Application process cover starts here]---------->
                		<div class="applic_proces">Application Process</div><!--------[Application text starts here]---------->
                   		<div class="stepsss"><!--------[steps starts here]---------->
                    	
                        <a class="tabs2 corner" href="#">
                        	<div class="ch_inner1">
                            	<span class="ch1"><h1>3</h1></span>
                                <span class="ch4"><p>Review & Submit</p></span>
                            </div>
                        </a>
                    
                    	<a class="tabs3 corner2" href="#">
                        	<div class="ch_inner1">
                            	<span class="ch1"><h1>2</h1></span>
                                <span class="ch4"><p>YOUR ARTWORK</p></span>
                            </div>
                        </a>
                        
                    	<a class="tabs1 corner3" href="#">
                        	<div class="ch_inner1">
                            	<span class="ch1"><h1>1</h1></span>
                                <span class="ch4"><p>YOUR Expertise</p></span>
                            </div>
                        </a>
                        
                    </div><!--------[steps closed here]---------->
                	</div><!--------[Application process cover closed here]---------->
                </div><!-----[Creator Account wrapper first block closed-here]---->
                <div class="clear"></div>
                <div class="steps_coverdiv"><!-----[Creator Account first step whole wrapper starts-here]---->
                	<h1>Pick Your Desired Store Name</h1>
                    <div class="warning"><!-----[Warning block starts-here]---->
                        	<?php print drupal_render($form['account']['name']); ?>
                        <div class="warn_cover">
                        	<span class="war_atag"><a href="#">warning</a></span>
                            <span class="text_ptag">
                            	<p>
                               		Once you set your store name, you will not be able to change it again. 
For more information, please read breesee's<a href="#">application policy</a>. 
                                </p>
                            </span>
                        </div>
                        
                        <h2>Your Personal URL: http://www.thebreesee.com/store/<span id="url">Your Name</span></h2>
                        <p>Your URL will NOT be active until your store application is approved.</p>
                        
                    </div><!-----[Warning block closed-here]---->
                    <h6>About your store</h6>
                    <div class="forms_steps"><!-----[Required fields starts-here]---->
                    	<ul class="store_field_steps">
                            <li>
                            	<?php print drupal_render($form['field_about']); ?>
                            </li>
                        </ul>
                    </div><!-----[Required fields closed-here]---->
                    <h1>Do you own any Physical Stores?</h1>
               	  	<div class="store_radio_box">
                       	 <?php  print drupal_render($form['field_own']); ?>
                        
                  	</div>
                  	<div class="border_box"></div>
                  	<h6>Your Physical Store Address</h6>
                  	<h3><b>*</b>Required fields</h3>
                    
                    <div class="forms_steps"><!-----[Required fields starts-here]---->
                    	<ul class="store_field_steps">
                        	<li class="store_first_leftnames">Store Email</li>
                            <li class="store_second_rightfields"><span class="second_rightfields"><?php print drupal_render($form['account']['mail']); ?></span><b>*</b>
                            </li>
                        </ul>
                    </div><!-----[Required fields closed-here]---->
                    <div class="clear"></div>
                    
                    <div class="forms_steps"><!-----[Required fields starts-here]---->
                    	<ul class="store_field_steps">
                        	<li class="store_first_leftnames">Avatar</li>
                            <li class="store_second_rightfields"><span class="left_step1"><span>
                            <?php 
													$form['picture']['picture_upload_register']['#size'] = 0;
													print drupal_render($form['picture']['picture_upload_register']);
													?>
                            </span></span><b>*</b>
                            </li>
                      </ul>
                    </div><!-----[Required fields closed-here]---->
                    <div class="clear"></div>
                    
               	<div class="forms_steps"><!-----[Required fields starts-here]---->
                    	<ul class="store_field_steps">
                        	<li class="store_first_leftnames">Country</li>
                            <li class="store_second_rightfields">
                            	<?php $form['taxonomy'][13]['#title'] = '';
			print drupal_render($form['taxonomy'][13]); ?> 
                            	<b>*</b>
                            </li>
                        </ul>
                    </div><!-----[Required fields closed-here]---->
                    <div class="clear"></div>
                    <div class="forms_steps"><!-----[Required fields starts-here]---->
                    	<ul class="store_field_steps">
                        	<li class="store_first_leftnames">Address Line 1</li>
                            <li class="store_second_rightfields">
                            	<?php print drupal_render($form['field_addr1']); ?>
                            	<b>*</b>
                            </li>
                        </ul>
                    </div><!-----[Required fields closed-here]---->
                    <div class="clear"></div>
                    <div class="forms_steps"><!-----[Required fields starts-here]---->
                    	<ul class="store_field_steps">
                        	<li class="store_first_leftnames">Address Line 2</li>
                            <li class="store_second_rightfields">
                            	<?php print drupal_render($form['field_addr2']); ?>
                            	<b>*</b>
                            </li>
                        </ul>
                    </div><!-----[Required fields closed-here]---->
                    <div class="clear"></div>
                    <div class="forms_steps"><!-----[Required fields starts-here]---->
                    	<ul class="store_field_steps">
                        	<li class="store_first_leftnames">City</li>
                            <li class="store_second_rightfields">
                            	 <?php print drupal_render($form['field_city']); ?>
                            	<b>*</b>
                            </li>
                        </ul>
                    </div><!-----[Required fields closed-here]---->
                    <div class="clear"></div>
                    <div class="forms_steps"><!-----[Required fields starts-here]---->
                    	<ul class="store_field_steps">
                        	<li class="store_first_leftnames">State/ Province / Region</li>
                            <li class="store_second_rightfields">
                            	<?php print drupal_render($form['field_state_pro_reg']); ?>
                            	<b>*</b>
                            </li>
                        </ul>
                    </div><!-----[Required fields closed-here]---->
                    <div class="clear"></div>
                    <div class="forms_steps"><!-----[Required fields starts-here]---->
                    	<ul class="store_field_steps">
                        	<li class="store_first_leftnames">ZIP/ Post Code</li>
                            <li class="store_second_rightfields">
                            	<?php  print drupal_render($form['field_zpc']); ?>
                            	<b>*</b>
                            </li>
                        </ul>
                    </div><!-----[Required fields closed-here]---->
                    <div class="clear"></div>
                    <div class="forms_steps"><!-----[Required fields starts-here]---->
                    	<ul class="store_field_steps">
                        	<li class="store_first_leftnames">Phone Number</li>
                            <li class="store_second_rightfields">
                            	<?php print drupal_render($form['field_phn']); ?>
                            	<b>*</b>
                            </li>
                        </ul>
                    </div><!-----[Required fields closed-here]---->
                    <div class="clear"></div>
                    <div class="forms_steps"><!-----[Required fields starts-here]---->
                    	<ul class="store_field_steps">
                        	<li class="store_first_leftnames">&nbsp;</li>
                            <li class="store_second_rightfields">
                            <?php print drupal_render($form['field_maphtml']); ?>
                                <p>You can paste HTML from google map to show your locations</p>
                            </li>
                        </ul>
                    </div><!-----[Required fields closed-here]---->
                    <h1>Your Physical Store Images</h1>
                    <div class="physical_images"><!-----[Physical exterior and interior images starts-here]---->
                    	<div class="cover_physical_img"><!-----[cover starts-here]---->
                        	<span>
                            	<img src="<?php echo $base_url.
'/sites/all/themes/BreeseeUK/images/store_reg_step1/physical_image1.jpg'; ?>" />
                                2 shop exterior photos
                    </span>
                            <span>
                            	<img src="<?php echo $base_url.
'/sites/all/themes/BreeseeUK/images/store_reg_step1/physical_image2.jpg'; ?>" />
                            	3 shop interior photos
                        </span> 
                        </div><!-----[cover closed-here]---->
                        <div class="image_footer"><!-----[discription starts-here]---->
                        	<h1>SAMPLE IMAGES FOR STORE FRONT</h1>	
                            <p>
                                Use .jpg, .gif or .png images files no larger than 1MB. images has to be at least 500px X 500px<br />
                                Please upload 2 exterior images and 3 interior images of your physical store
                            </p>
                        </div><!-----[discription closed-here]---->
                        <div class="store_image_upload"><!-----[image upload block starts-here]---->
                        	<span class="title_store_photo">
                       	<p>2 Exterior Images</p></span>
                            <span class="upload_store_photo">
                            <?php print drupal_render($form['field_2ext']); ?>
														<?php print drupal_render($form['field_2ext2']); ?>
                            </span>
                        </div><!-----[image upload block closed-here]---->
                        <div class="store_image_upload"><!-----[image upload block starts-here]---->
                        	<span class="title_store_photo">
                       	<p class="padding_extream">3 Interiour Images</p></span>
                            <span class="upload_store_photo">
                            <?php print drupal_render($form['field_3ext3']); ?>
														<?php print drupal_render($form['field_3ext4']); ?>
                            <?php print drupal_render($form['field_3ext5']); ?>
                          </span>
                        </div><!-----[image upload block closed-here]---->
                    </div><!-----[Physical exterior and interior images closed-here]---->
                    <div class="clear"></div>
                    <div class="formerror messages error"></div>
                    <div class="store_next_step_btn"><!-----[Next step starts-here]---->
                    	<a id="crenext1" onClick="javascript:stepnext(1)" href="javascript:void(0)" >Next Step</a>
                  </div><!-----[Next step closed-here]---->
                    <div class="clear"></div>
                </div><!-----[Creator Account first step whole wrapper closed-here]---->
                
      		</div>

<div class="clear"></div>

<div class="main_container regsteps " id="storesteptwo"><!-----[middle-container-starts-here]---->
        		<div class="store_registration_step1"><!-----[Creator Account wrapper first block starts-here]---->
                	<div class="breesee_account"><!-----[Creator Account wrapper starts-here]---->
       					<div class="logo_creator_acc"><!-----[Creator Account logo-starts-here]---->
            				<a href="#">
                        		<img src="<?php echo $base_url.
'/sites/all/themes/BreeseeUK/images/store_reg_step1/store_reg_logo.jpg'; ?> " />
                        	</a>
                    	</div><!-----[Creator Account logo closed -here]---->
            			<div class="text_log_creator_acc">Store Account</div><!-----[Creator Account logo_text starts starts-here]---->
                	</div><!-----[Creator Account wrapper closed-here]---->
                    <div class="clear"></div>
                    <div class="apps_steps"><!--------[Application process cover starts here]---------->
                		<div class="applic_proces">Application Process</div><!--------[Application text starts here]---------->
                   		<div class="stepsss"><!--------[steps starts here]---------->
                    	
                        <a class="tabs3 corner" href="#">
                        	<div class="ch_inner1">
                            	<span class="ch1"><h1>3</h1></span>
                                <span class="ch4"><p>Review & Submit</p></span>
                            </div>
                        </a>
                    
                    	<a class="tabs1 corner2" href="#">
                        	<div class="ch_inner1">
                            	<span class="ch1"><h1>2</h1></span>
                                <span class="ch4"><p>YOUR ARTWORK</p></span>
                            </div>
                        </a>
                        
                    	<a class="tabs2 corner3" href="#">
                        	<div class="ch_inner1">
                            	<span class="ch1"><h1>1</h1></span>
                                <span class="ch4"><p>YOUR Expertise</p></span>
                            </div>
                        </a>
                        
                    </div><!--------[steps closed here]---------->
                	</div><!--------[Application process cover closed here]---------->
                </div><!-----[Creator Account wrapper first block closed-here]---->
                <div class="clear"></div>
                <div class="store_registration_step2">
                	<h1>Please tell us what types of products you are selling in your store</h1>
                   <?php print drupal_render($form['field_pls']); ?>
                    <h1>Your Product Images</h1>
                    <p>
                        Use .jpg, gif or .png image files no larger than 1MB. The images have to be at least 500px wide. 
                        Please upload 2 images from different angles.
                    </p>
                    <div class="store_step2_image_cover">
                    	<span class="store_step2_img"><img src="<?php echo $base_url.
'/sites/all/themes/BreeseeUK/images/user_regi_step3/art_angle1.jpg'; ?>" /></span>
                        <span class="store_step2_img"><img src="<?php echo $base_url.
'/sites/all/themes/BreeseeUK/images/user_regi_step3/art_angle2.jpg'; ?> " /></span>
                    </div>
                    <div class="store_step2_img_discription">
                    	SAMPLE IMAGES IN DIFFERENT ANGLES
                    </div>
                    <p>Upload images for at least one product in your store </p>
                    <div class="image_upload">
                    	<span class="img_uploader1">
                        	<p>Item</p><b>*</b>
                        </span>
                        <span class="img_uploader2">
                        	<?php print drupal_render($form['field_itm1']); ?>
                        </span>
                        <span class="img_uploader3">
                        <?php	print drupal_render($form['field_itm2']); ?>
                        </span>
                    </div>
                    
                    <div class="image_upload">
                    	<span class="img_uploader1">
                        	<p>Item2</p>
                        </span>
                        <span class="img_uploader2">
                        	<?php	print drupal_render($form['field_itm02']); ?>
                        </span>
                        <span class="img_uploader3">
                        	 <?php	 print drupal_render($form['field_item03']); ?>
                        </span>
                    </div>
                    
                    <div class="image_upload">
                    	<span class="img_uploader1">
                        	<p>Item3</p>
                        </span>
                        <span class="img_uploader2">
                        <?php	 print drupal_render($form['field_itm3']); ?>
                        </span>
                        <span class="img_uploader3">
                        	<?php	 print drupal_render($form['field_itm04']); ?>
                        </span>
                    </div> 
                    
                    <div class="store_next_step2_btn"><!-----[Next step starts-here]---->
                    	<a id="crenext1" onClick="javascript:stepnext(2)" href="javascript:void(0)" >Next Step</a>
                    </div><!-----[Next step closed-here]---->
                    
                </div>
                
      		</div>


<?php break; ?>
<?php } 
//print drupal_render($form);
?>
<div >
<?php print drupal_render($form) ?>
</div>

</div>