<?php 

global $theme_path, $base_url, $user;
$theme_path_full = $base_url.'/'.$theme_path;

if(arg(1) == 'add') {

global $user;
if ( ! $user->uid ) {
	drupal_goto('user/register/creator');
}
	
drupal_add_js(drupal_get_path('theme', 'BreeseeUK') . '/js/cre_upgrade.js');
drupal_add_js(drupal_get_path('theme', 'BreeseeUK') . '/js/jquery.scrollTo-min.js');

print drupal_render($form['form_build_id']);
print drupal_render($form['form_id']);
print drupal_render($form['form_token']);

?>
<link href="css/style.css" rel="stylesheet" type="text/css" />

<div class="clear"> </div>
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
                        	<?php print drupal_render($form['title']);  ?>
                        
                        
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
      <?php print drupal_render($form['field_emails']); ?>
                                  	<b>*</b>
                            </li>
                      </ul>
                    </div><!-----[Required fields closed-here]---->
                    <div class="clear"></div>
                    
                     <div class="forms_steps"><!-----[Required fields starts-here]---->
                    	<ul class="fields_steps">
                        	<li class="first_leftnames">Avatar</li>
                            <li class="second_rightfields"><span class="left_step1"><span>
                            
                            </span></span><b>*</b><?php 
													print drupal_render($form['field_avatar']);
													?>
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
                
<div style="display:none">
<?php print drupal_render($form) ?>
</div>

</div>


<?php } ?>