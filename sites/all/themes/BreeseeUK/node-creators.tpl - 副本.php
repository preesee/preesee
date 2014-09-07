<?php 
global $theme_path, $base_url, $user;
$theme_path_full = $base_url.'/'.$theme_path;
if(arg(1) == 'add' || arg(2)=='edit'){
$breadcrumb[] = l('Breesee', '<front>');
$breadcrumb[] = l($user->name, 'user/home');
$breadcrumb[] = 'Apply for Creator Account';
drupal_set_breadcrumb($breadcrumb);
drupal_set_title('Apply for Creator Account');
drupal_add_js(drupal_get_path('theme', 'BreeseeUK') . '/js/cre_upgrade.js');

$aud_prf = content_profile_load('audience', $user->uid);
$form['field_fname'][0]['value']['#default_value'] =  $aud_prf->field_fname[0]['value'];
$form['field_lname'][0]['value']['#default_value'] =  $aud_prf->field_lname[0]['value'];
$form['field_lname'][0] ['#required'] = 0;

//if( ! _breesee_already_another_profile('creator')) {
//	drupal_set_message('You already have a Creator Profile Click <a href="'.$base_url.'/switch/creator">HERE</a> to switch to it', 'warning');
//	drupal_goto('user/home');
//}
$m = 'creator_add';
if(arg(2)=='edit')
	$m = 'creator_editing';

?>

<script type="text/javascript">
var editid = '<?php echo arg(3); ?>';
</script>

<div class="upgrade_to_creator" id="<?php echo $m; ?>" ><!-----[real center container starts-here]---->
          <div class="main_container regsteps" id="storstepone"><!-----[middle-container-starts-here]---->
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
                    	
                        <a class="tabs2 corner" href="javascript:void(0);" >
                        	<div class="ch_inner1">
                            	<span class="ch1"><h1>3</h1></span>
                                <span class="ch4"><p>Review & Submit</p></span>
                            </div>
                        </a>
                    
                    	<a class="tabs3 corner2 two" href="javascript:void(0);" >
                        	<div class="ch_inner1">
                            	<span class="ch1"><h1>2</h1></span>
                                <span class="ch4"><p>YOUR ARTWORK</p></span>
                            </div>
                        </a>
                        
                    	<a class="tabs1 corner3 one" href="javascript:void(0);" >
                        	<div class="ch_inner1">
                            	<span class="ch1"><h1>1</h1></span>
                                <span class="ch4"><p>YOUR Expertise</p></span>
                            </div>
                        </a>
                        
                    </div><!--------[steps closed here]---------->
                	</div><!--------[Application process cover closed here]---------->
                </div><!-----[Creator Account wrapper first block closed-here]---->
                <div class="clear"></div>
                <div class="steps_coverdiv" ><!-----[Creator Account first step whole wrapper starts-here]---->
                	<h1>Pick Your Desired Creator Name</h1>
                    <div class="warning"><!-----[Warning block starts-here]---->
                    	<div style="overflow:hidden; clear:both;"><?php  $form['title']['#value']=$user->name;
                            print drupal_render($form['title']);  ?><span id="u_stat" class="uname_val"></span></div>
                        
                        <div class="warn_cover">
                        	<span class="war_atag"><a href="#">warning</a></span>
                            <span class="text_ptag">
                            	<p>
                               		Once you set your creator name, you will not be able to change it again. 
For more information, please read breesee &prime; s <a href="#">application policy</a>. 
                                </p>
                            </span>
                        </div>
                        
                        <h2>Your Personal URL: <a href="#">http://www.thebreesee.com/creator/<span id="srurl"></span></a></h2>
                        <p>Your URL will NOT be active until your creator application is approved.</p>
                        
                    </div><!-----[Warning block closed-here]---->
                    <h6 id="expertise">Your Introduction</h6>
                    <h3><b>*</b>Required fields</h3>
                  <!-----[Required fields closed-here]----> 
                    <div class="clear"></div> 
                  <div class="forms_steps"><!-----[Required fields starts-here]---->
                    	<ul class="fields_steps">
                        	<li class="first_leftnames"><b>*</b>Your Introduction</li>
                            <li class="second_rightfields">
                            	<?php print drupal_render($form['field_backg']); ?>
                            </li>
                        </ul>
                    </div><!-----[Required fields closed-here]---->

                    <div class="clear"></div>
                    <div class="forms_steps"><!-----[Required fields starts-here]---->
                        <ul class="fields_steps">
                            <li class="first_leftnames"><b>*</b>WebSite</li>
                            <li class="second_rightfields">
                                <?php
                                 print drupal_render($form['field_website']);
                                ?>
                            </li>
                        </ul>
                    </div><!-----[Required fields closed-here]---->

                    <div class="clear"></div>
                  	<div class="forms_steps"><!-----[Required fields starts-here]---->
                    	<ul class="fields_steps">
                        	<li class="first_leftnames"><b>*</b>Profession</li>
                            <li class="second_rightfields">
                            	<?php
			$form['taxonomy'][22]['#title'] = '';
			print drupal_render($form['taxonomy'][22]);
			?>
                            </li>
                        </ul>
                    </div><!-----[Required fields closed-here]---->

                    <div class="clear"></div>
                    <div class="forms_steps"><!-----[Required fields starts-here]---->
                        <ul class="fields_steps">
                            <li class="first_leftnames"><b>*</b>Current Country</li>
                            <li class="second_rightfields">
                                <?php print drupal_render($form['field_current_country']); ?>
                            </li>
                        </ul>
                    </div><!-----[Required fields closed-here]---->
                    <div class="clear"></div>
<!--                    --><?php //if(arg(2)=='edit'){ ?>
                        <div class="forms_steps"><!-----[Required fields starts-here]---->
                            <ul class="fields_steps">
                                <li class="first_leftnames"><b>*</b>Current City</li>
                                <li class="second_rightfields">
                                    <?php  print drupal_render($form['field_current_city']); ?>
                                </li>
                            </ul>
                        </div><!-----[Required fields closed-here]---->
<!--                    --><?php //} ?>

                    <div class="clear"></div>
                    <div class="forms_steps"><!-----[Required fields starts-here]---->
                        <ul class="fields_steps">
                            <li class="first_leftnames"><b>*</b>Home Town Country</li>
                            <li class="second_rightfields">
                                <?php print drupal_render($form['field_new_country']); ?>
                            </li>
                        </ul>
                    </div><!-----[Required fields closed-here]---->
                    <div class="clear"></div>
<!--                    --><?php //if(arg(2)=='edit'){ ?>
                        <div class="forms_steps"><!-----[Required fields starts-here]---->
                            <ul class="fields_steps">
                                <li class="first_leftnames"><b>*</b>Home Town City</li>
                                <li class="second_rightfields">
                                    <?php  print drupal_render($form['field_city']); ?>
                                </li>
                            </ul>
                        </div><!-----[Required fields closed-here]---->
<!--                    --><?php //} ?>

                    <div class="clear"></div>
                    <div class="forms_steps"><!-----[Required fields starts-here]---->
                    	<ul class="fields_steps">
                        	<li class="first_leftnames"><b>*</b>Language</li>
                            <li class="second_rightfields">
                            	 <?php print drupal_render($form['language']); ?>
                            </li>
                        </ul>
                    </div><!-----[Required fields closed-here]---->
                    <div class="clear"></div>
                     <div class="forms_steps"><!-----[Required fields starts-here]---->
                    	<ul class="fields_steps">
                        	<li class="first_leftnames"><b>*</b>Avatar</li>
                            <li class="second_rightfields">
                            	 <?php 
													print drupal_render($form['field_intro']);
													?>
                            </li>
                        </ul>



<!--                         <tr>-->
<!--                             <td align="right" valign="middle"><span class="style1">Avatar</span></td>-->
<!--                             <td valign="middle">&nbsp;</td>-->
<!--                             <td valign="middle">&nbsp;</td>-->
<!--                         </tr>-->
<!--                         <tr>-->
<!--                             <td colspan="3" align="left" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">-->
<!--                                     <tr>-->
<!--                                         <td width="41%">--><?php
//
//                                             global $user;
//                                             print '<div class="editcustdd"><div class="replac_pic">'.theme('imagecache', 'store_list',$user->picture).'
//		                                                                </div><div class="place_name_red">'._gettermsname($form['field_city']['#default_value'][0]['value']).'</div>
//		                                       </div>';
//                                             $form['picture']['picture_upload']['#attributes']['size'] = 20;
//                                             ?><!--</td>-->
<!--                                         <td width="59%"><h3>Set Your Icon by the below tool</h3>-->
<!--                                             <h2>Buy the Showcase time</h2>-->
<!--                                             <h4>Notic: Your Shop Icon should obey preesee&rsquo;s <a href="#">rules</a></h4>-->
<!--                                             <h1>Find Your Images</h1>-->
<!--                                             --><?php //print print drupal_render($form['field_avtr']); ?>
<!--                                             <div id="upload_img"></div>-->
<!--                                             <h5> Use .jpg, .gif or .png files no larger than 500K. Suggesting Images  size is 240px(W) X 180 px(H) </h5>-->
<!--                                             <p> Your intro should not be more than 3 lines and 200 characters. </p></td>-->
<!--                                     </tr>-->
<!--                                 </table>      </td>-->
<!--                         </tr>-->
<!--                         <tr>-->
<!--                             <td colspan="3" align="right" valign="middle"><hr /></td>-->
<!--                         </tr>-->
                     </div><!-----[Required fields closed-here]---->





                    <div class="clear"></div>
                    <div class="formerror messages" style="display:none;"></div>
                    <div class="next_step_btn"><!-----[Next step starts-here]---->
                    	<a id="storenext1" onclick="javascript:stepnext(1)" href="javascript:void(0)">Next Step</a>
                    </div><!-----[Next step closed-here]---->
                    <div class="clear"></div>
                </div><!-----[Creator Account first step whole wrapper closed-here]---->
           	</div><!-----[middle-container-closed-here]---->
           
          <div class="clear"></div>                                                                        
         <div id="storsteptwo" class="regsteps" >
         <div class="main_container" id="artwork"><!-----[middle-container-starts-here]---->
          <!-----[Creator Account wrapper first block closed-here]---->
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
                    	
                        <a class="tabs2 corner" href="javascript:void(0);">
                        	<div class="ch_inner1">
                            	<span class="ch1"><h1>3</h1></span>
                                <span class="ch4"><p>Review & Submit</p></span>
                            </div>
                        </a>
                    
                    	<a class="tabs1 corner2 two" href="javascript:void(0);">
                        	<div class="ch_inner1">
                            	<span class="ch1"><h1>2</h1></span>
                                <span class="ch4"><p>YOUR ARTWORK</p></span>
                            </div>
                        </a>
                        
                    	<a class="tabs3 corner3 one" href="javascript:void(0);">
                        	<div class="ch_inner1">
                            	<span class="ch1"><h1>1</h1></span>
                                <span class="ch4"><p>YOUR Expertise</p></span>
                            </div>
                        </a>
                        
                    </div><!--------[steps closed here]---------->
                	</div><!--------[Application process cover closed here]---------->
                </div>
                <div class="clear"></div>
        	  <div class="step2_cover_div"><!-----[creator account step2 starts-here]---->
       	<h1>We would like to see some of your art work before we approve you as a preesee creator</h1>
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
                    <h2>Upload atleast 2 Artwork</h2>
                    <div class="upload_fields">
                    	<span class="item_column">
                        	<p><b>*</b>Item</p>
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
                        	<p><b>*</b>Item2</p>
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
                    <div class="all_field_importent">&nbsp;</div>
                    <div class="next_step_btn5"><!-----[Next step starts-here]---->
                    	<a id="storenext1" onclick="javascript:stepnext(2)" href="javascript:void(0)">Next Step</a>
                    </div>
                </div><!-----[creator account step2 closed-here]---->
                
      		</div><!-----[middle-container-closed-here]---->
      	
       </div> 
</div>
                
<div style="display:none;">
<?php print drupal_render($form) ?>
</div>


<?php } elseif((arg(1)=="settings")) {

		$breadcrumb[] = l('Breesee', '<front>');
		$breadcrumb[] = l($user->name, 'user/home');
		$breadcrumb[] = 'Edit Your Account';
		drupal_set_breadcrumb($breadcrumb);

global $user;

if ( ! $user->uid ) {
	drupal_goto('user/register/creator');
}
	
drupal_add_js(drupal_get_path('theme', 'BreeseeUK') . '/js/cre_upgrade.js');
//print_r($form['field_avtr']);
//exit();
?>
<style>
.upload_fields {
 padding:0px;
}
</style>

<div class="upgrade_to_creator"><!-----[real center container starts-here]---->
          <div class="main_container regsteps" id="storstepone"><!-----[middle-container-starts-here]---->
        
               
                <div class="steps_coverdiv" ><!-----[Creator Account first step whole wrapper starts-here]---->
                	<h1>Pick Your Desired Creator Name</h1>
                    <div class="warning"><!-----[Warning block starts-here]---->
                      <?php $form['title']['#attributes'] = array('readonly'=>'readonly'); ?>
                    	<?php print drupal_render($form['title']);  ?>
                         <div class="clear"></div>
                        <div class="warn_cover">
                        
                        	<span class="war_atag"><a href="#">warning</a></span>
                            <span class="text_ptag">
                            	<p>
                               		Once you set your creator name, you will not be able to change it again. 
For more information, please read breesee &prime; s <a href="#">application policy</a>. 
                                </p>
                            </span>
                        </div>
                        
                        <h2><a href="#">Your Personal URL: http://www.thebreesee.com/<Your Name></a></h2>
                        <p>Your URL will NOT be active until your creator application is approved.</p>
                        
                    </div><!-----[Warning block closed-here]---->
                    <h6 id="expertise">Your Introduction</h6>
                    <h3><b>*</b>Required fields</h3>
                  <div class="forms_steps"><!-----[Required fields starts-here]---->
                    	<ul class="fields_steps">
                        	<li class="first_leftnames"><b>*</b>Your Email</li>
                            <li class="second_rightfields">
                            	 <?php print drupal_render($form['field_email1']); ?>
                            </li>
                        </ul>
                    </div><!-----[email]---->



                    <div class="clear"></div>
                    <div class="forms_steps"><!-----[Required fields starts-here]---->
                        <ul class="fields_steps">
                            <li class="first_leftnames"><b>*</b>Your Introduction</li>
                            <li class="second_rightfields">
                                <?php print drupal_render($form['field_backg']); ?>
                            </li>
                        </ul>
                    </div><!-----[introduction]---->


                    <div class="clear"></div>
                    <div class="forms_steps"><!-----[Required fields starts-here]---->
                        <ul class="fields_steps">
                            <li class="first_leftnames"><b>*</b>WebSite</li>
                            <li class="second_rightfields">
                                <?php
                                print drupal_render($form['field_website']);
                                ?>
                            </li>
                        </ul>
                    </div><!-----[website]---->

                    
                    <div class="clear"></div>
                  	<div class="forms_steps"><!-----[Required fields starts-here]---->
                    	<ul class="fields_steps">
                        	<li class="first_leftnames"><b>*</b>Profession</li>
                            <li class="second_rightfields">
                            	<?php 
			$form['taxonomy'][22]['#title'] = '';
			print drupal_render($form['taxonomy'][22]);
			?>
                            </li>
                        </ul>
                    </div><!-----[profession]---->

                    <div class="clear"></div>
                    <div class="forms_steps"><!-----[Required fields starts-here]---->
                        <ul class="fields_steps">
                            <li class="first_leftnames"><b>*</b>Current Country</li>
                            <li class="second_rightfields">
                                <?php print drupal_render($form['field_current_country']); ?>
                            </li>
                        </ul>
                    </div><!-----[current country]---->

                    <div class="clear"></div>
                    <!--                    --><?php //if(arg(2)=='edit'){ ?>
                    <div class="forms_steps"><!-----[Required fields starts-here]---->
                        <ul class="fields_steps">
                            <li class="first_leftnames"><b>*</b>Current City</li>
                            <li class="second_rightfields">
                                <?php  print drupal_render($form['field_current_city']); ?>
                            </li>
                        </ul>
                    </div><!-----[current city]---->
                    <!--                    --><?php //} ?>


                    <div class="clear"></div>
                    <div class="forms_steps"><!-----[Required fields starts-here]---->
                        <ul class="fields_steps">
                            <li class="first_leftnames"><b>*</b>Home Town Country</li>
                            <li class="second_rightfields">
                                <?php print drupal_render($form['field_new_country']); ?>
                            </li>
                        </ul>
                    </div><!-----[home town country]---->

                    <div class="clear"></div>
                    <!--                    --><?php //if(arg(2)=='edit'){ ?>
                    <div class="forms_steps"><!-----[Required fields starts-here]---->
                        <ul class="fields_steps">
                            <li class="first_leftnames"><b>*</b>Home Town City</li>
                            <li class="second_rightfields">
                                <?php  print drupal_render($form['field_city']); ?>
                            </li>
                        </ul>
                    </div><!-----[Home Town city]---->

                    <div class="clear"></div>
                    <div class="forms_steps"><!-----[Language]---->
                        <ul class="fields_steps">
                            <li class="first_leftnames"><b>*</b>Language</li>
                            <li class="second_rightfields">
                                <?php print drupal_render($form['language']); ?>
                            </li>
                        </ul>
                    </div><!-----[Language]---->

                    <div class="clear"></div>
                     <div class="forms_steps"><!-----[Required fields starts-here]---->
                    	<ul class="fields_steps">
                        	<li class="first_leftnames"><b>*</b>Avatar</li>
                            <li class="second_rightfields">
                            	 <?php 
													print drupal_render($form['field_intro']);
													?>
                            </li>
                        </ul>
                    </div><!-----[Required fields closed-here]---->
                    <div class="clear"></div>
                     <div class="forms_steps"><!-----[Required fields starts-here]---->
                    	<ul class="fields_steps">
                        	<li class="first_leftnames"><b>*</b>Country</li>
                            <li class="second_rightfields">
                            	<?php print drupal_render($form['taxonomy'][13]); ?>
                            </li>
                        </ul>
                    </div><!-----[Required fields closed-here]---->
                    <div class="clear"></div>
                     <div class="forms_steps"><!-----[Required fields starts-here]---->
                    	<ul class="fields_steps">
                        	<li class="first_leftnames"><b>*</b>City</li>
                            <li class="second_rightfields">
                            	<?php print drupal_render($form['field_city']); ?>
                            </li>
                        </ul>
                    </div><!-----[Required fields closed-here]---->



                    <div class="clear"></div>
                    <div class="formerror messages" style="display:none;"></div>
                    <div class="clear"></div>
                </div><!-----[Creator Account first step whole wrapper closed-here]---->
           	</div><!-----[middle-container-closed-here]---->
           
          <div class="clear"></div>                                                                        
         <div id="storsteptwo">
       
        	  <div class="step2_cover_div"><!-----[creator account step2 starts-here]---->
               
                    <h2>Upload atleast 2 Artwork</h2>
                    <div class="upload_fields">
                    	<span class="item_column">
                        	<p><b>*</b>Item</p>
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
                        	<p><b>*</b>Item2</p>
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
                    <div class="all_field_importent">&nbsp;</div>
											<?php $form['buttons']['submit']['#attributes'] = array('class'=>'round-button'); ?>
                      <?php unset($form['buttons']['preview']); ?>
                    	<?php print drupal_render($form['buttons']); ?>
                      
                </div><!-----[creator account step2 closed-here]---->
                
      		
      	
       </div> 
</div>
                
<div style="display:none;">
<?php print drupal_render($form) ?>
</div>


<?php 
} 
else { 
//print_r($node);
?>        	<div class="main_container"><!-----[middle-container-starts-here]---->
        		<div class="creator_regstep1"><!-----[Creator Account wrapper first block starts-here]---->
                	<div class="breesee_account"><!-----[Creator Account wrapper starts-here]---->
       					<div class="logo_creator_acc"><!-----[Creator Account logo-starts-here]---->
            			<a href="#"><img src="<?php echo $base_url.
'/sites/all/themes/BreeseeUK/images/creator_account/icons1.jpg' ?>" alt="" /></a>
                    </div><!-----[Creator Account logo closed starts-here]---->
            			<div class="text_log_creator_acc">Creator Account</div><!-----[Creator Account logo_text starts starts-here]---->
                	</div><!-----[Creator Account wrapper closed-here]---->
                    <div class="clear"></div>
              <div class="apps_steps"><!--------[Application process cover starts here]---------->
             		<div class="applic_proces">Application Received</div>
             		<!--------[Application text starts here]----------><!--------[steps closed here]---------->
               	</div><!--------[Application process cover closed here]---------->
            </div><!-----[Creator Account wrapper first block closed-here]---->
                <div class="clear"></div>
                <div class="step3_cover_div"><!-----[creator account step3 starts-here]----><!-----[step3_heading starts-here]---->                 	
                  <div class="you_are_expert">
                	  <div class="left_you">Your Expertise</div>
                        <div class="middle_you"></div>
                        <div class="right_you"></div>
                  </div><!-----[step3_heading closed-here]---->
                    <div class="clear"></div>
                    <div class="you_are_discription"><!-----[step3_discription starts-here]---->
                    	<span class="left_you_discription">Your desired creator name</span>
                        <span class="right_you_discription"><?php echo $node->title; ?></span>
                    </div><!-----[step3_discription closed-here]---->
                    <div class="clear"></div>
                    <div class="you_are_discription"><!-----[step3_discription starts-here]---->
                    	<span class="left_you_discription">Your profile URL</span>
                        <span class="right_you_discription">http://www.breesee.com/<?php echo strtolower(urlencode(str_replace(' ','-' , $node->title))); ?></span>
                    </div><!-----[step3_discription closed-here]---->
                    <div class="clear"></div>
                    <div class="you_are_discription"><!-----[step3_discription starts-here]---->
                    	<span class="left_you_discription">Your background</span>
                        <span class="right_you_discription"><?php echo $node->field_backg[0]['value']; ?></span>
                    </div><!-----[step3_discription closed-here]---->
<!--                    <div class="clear"></div>-->
<!--                    <div class="you_are_discription"><!-----[step3_discription starts-here]---->-->
<!--                    	<span class="left_you_discription">Profession</span>-->
<!--                        <span class="right_you_discription">--><?php //echo BreeseeUK_taxonomy_links($data, 15); ?><!--</span>-->
<!--                    </div><!-----[step3_discription closed-here]---->-->
                    <div class="clear"></div>
                    <div class="you_are_discription"><!-----[step3_discription starts-here]---->
                    	<span class="left_you_discription">Specialties</span>
                        <span class="right_you_discription"><?php echo BreeseeUK_taxonomy_links($data, 16); ?></span>
                    </div><!-----[step3_discription closed-here]---->
<!--                    <div class="clear"></div>-->
<!--                    <div class="you_are_discription"><!-----[step3_discription starts-here]---->-->
<!--                    	<span class="left_you_discription">Skills</span>-->
<!--                        <span class="right_you_discription">--><?php //echo $node->field_skill[0]['value']; ?><!--</span>-->
<!--                    </div><!-----[step3_discription closed-here]---->
                    <div class="clear"></div>
                    <div class="you_are_expert"><!-----[step3_heading starts-here]---->
                    	<div class="left_you">Your Experience</div>
                        <div class="middle_you"></div>
                        <div class="right_you"></div>
                    </div><!-----[step3_heading closed-here]---->
                    <div class="clear"></div>
                    <div class="you_are_discription"><!-----[step3_discription starts-here]---->
                    	<span class="left_you_discription">University</span>
                        <span class="right_you_discription"><?php echo $node->field_sch1[0]['value']; ?></span>
                    </div><!-----[step3_discription closed-here]---->
                    <div class="clear"></div>
                    <div class="you_are_discription"><!-----[step3_discription starts-here]---->
                    	<span class="left_you_discription">University</span>
                        <span class="right_you_discription"><?php echo $node->field_sch2[0]['value']; ?></span>
                    </div><!-----[step3_discription closed-here]---->
                    <div class="clear"></div>
                    <div class="you_are_expert"><!-----[step3_heading starts-here]---->
                    	<div class="left_you">Your Artwork</div>
                        <div class="middle_you"></div>
                        <div class="right_you"></div>
                    </div><!-----[step3_heading closed-here]---->
                    <div class="clear"></div>
                    <div class="you_are_discription"><!-----[step3_discription starts-here]---->
                    	<span class="left_you_discription">Item 1</span>
                        <span class="right_you_discription">
                        <?php echo $node->field_fld[0]['value']; ?>
                            <div class="art_disply">
                              <?php  print theme('imagecache', 'creator_app_preview', $node->field_item1[0]['filepath']);  ?>
                              <?php  print theme('imagecache', 'creator_app_preview', $node->field_item11[0]['filepath']);  ?>
                            </div>
						</span>
                    </div><!-----[step3_discription closed-here]---->
                    <div class="clear"></div>
                    <div class="you_are_discription"><!-----[step3_discription starts-here]---->
                    	<span class="left_you_discription">Item 2</span>
                        <span class="right_you_discription">
                            <?php echo $node->field_textfiled2[0]['value']; ?>
                            <div class="art_disply">
                            <?php  print theme('imagecache', 'creator_app_preview', $node->field_item3[0]['filepath']);  ?>
                            <?php  print theme('imagecache', 'creator_app_preview', $node->field_item33[0]['filepath']);  ?>
                            </div>
						</span>
                    </div><!-----[step3_discription closed-here]---->
                    <div class="clear"></div>
                    <div class="submit_step3_btn"><!-----[Next step starts-here]---->
                    	<a href="<?php echo $base_url.'/accept/'. $node->uid.'/'.$node->nid.'/creator'; ?>" id="cre_confirm_submit">submit</a>
                    </div>
  </div><!-----[creator account step3 closed-here]---->
      		</div><!-----[middle-container-closed-here]---->
<?php } ?>

<!--<script type="text/javascript">-->
<!--    $(document).ready(function(){-->
<!--        $('#upload_img').axuploader({-->
<!--            url: Drupal.settings.breesee.base_url + '/breesee/ajax_image_upload',-->
<!--            finish:function(x,files){-->
<!--                $('.city_profiles').html('<img width="160" height="160" src="' + '--><?php //echo $base_url; ?><!--/' + x +'" >');-->
<!--                $('td div.picture').html('<img width="160" height="160" src="' + '--><?php //echo $base_url; ?><!--/' + x +'" >');-->
<!--                $('div.replac_pic').html('<img width="241" height="178" src="' + '--><?php //echo $base_url; ?><!--/' + x +'" >');-->
<!--                $('div.topsmallimg').html('<img width="15" height="15" src="' + '--><?php //echo $base_url; ?><!--/' + x +'" >');-->
<!--            },-->
<!--            enable:true-->
<!--        });-->
<!--    });-->
<!--</script>-->