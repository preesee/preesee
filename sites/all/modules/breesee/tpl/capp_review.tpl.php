



<?php 

//echo $data->type;


//print_r($data);
//exit();
global $theme_path, $base_url, $user;


//$user = user_load($_SESSION['newuserid']);
$uid = $user->uid;
if( arg(1) == 'creator') {
$resdult = db_query("select nid from node where uid = '$uid' and type = 'creators'");
$rodw = db_fetch_object($resdult);
$rodw->nid;
}


$nid = $rodw;

$result = db_query("select field_app_status_value from content_field_app_status where nid = '$nid'");
$row = db_fetch_object($result);
if($row->field_app_status_value == 1 ) {
	drupal_set_message('You cannot make changes till Breesee reviews your application');
	drupal_goto('user/home');
}



if($data->type == 'creators') {

//print_r($data);
//die;


$theme_path_full = $base_url.'/'.$theme_path;
$breadcrumb[] = l('Breesee', '<front>');
$breadcrumb[] = l($user->name, 'user/home');
$breadcrumb[] = 'Review Your Application';
drupal_set_breadcrumb($breadcrumb);

?>
        	<div class="main_container"><!-----[middle-container-starts-here]---->
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
                		<div class="applic_proces">Application Process</div><!--------[Application text starts here]---------->
                   		<div class="stepsss"><!--------[steps starts here]---------->
                    	
                        <a class="tabs4 corner" href="#">
                        	<div class="ch_inner1">
                            	<span class="ch1"><h1>2</h1></span>
                                <span class="ch4"><p>Review & Submit</p></span>
                        </div>
                        </a>
                    
<!--                    	<a class="tabs2 corner2" href="#">-->
<!--                        	<div class="ch_inner1">-->
<!--                            	<span class="ch1"><h1>2</h1></span>-->
<!--                                <span class="ch4"><p>YOUR ARTWORK</p></span>-->
<!--                      </div>-->
<!--                        </a>-->
                        
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
                <div class="step3_cover_div"><!-----[creator account step3 starts-here]---->
                	<h1>Please review and confirm your information</h1>
                    <div class="you_are_expert"><!-----[step3_heading starts-here]---->
                    	<div class="left_you">Your Expertise</div>
                        <div class="middle_you"></div>
                        <div class="right_you"><a href="<?php echo $base_url.'/node/'.$data->nid.'/edit/expertise'; ?>">Edit Your Expertise</a></div>
                    </div><!-----[step3_heading closed-here]---->
                    <div class="clear"></div>
                    <div class="you_are_discription"><!-----[step3_discription starts-here]---->
                    	<span class="left_you_discription">Your desired creator name</span>
                        <span class="right_you_discription"><?php echo $data->title; ?></span>
                    </div><!-----[step3_discription closed-here]---->
                    <div class="clear"></div>
                    <div class="you_are_discription"><!-----[step3_discription starts-here]---->
                    	<span class="left_you_discription">Your profile URL</span>
                        <span class="right_you_discription"><?php echo $base_url; ?>/creator/<?php echo strtolower(urlencode(str_replace(' ','-' , $data->title))); ?></span>
                    </div><!-----[step3_discription closed-here]---->
                    <div class="clear"></div>
                    <div class="you_are_discription"><!-----[step3_discription starts-here]---->
                    	<span class="left_you_discription">Your Introduction</span>
                        <span class="right_you_discription"><?php echo $data->field_backg[0]['value']; ?></span>
                    </div><!-----[step3_discription closed-here]---->
                    <div class="clear"></div>
                    <div class="you_are_discription"><!-----[step3_discription starts-here]---->
                        <span class="left_you_discription"> Web Site</span>
                        <span class="right_you_discription"><?php echo $data->field_website[0]['value']; ?></span>
                    </div>
                    <div class="clear"></div>
                    <div class="you_are_discription"><!-----[step3_discription starts-here]---->
                    	<span class="left_you_discription">Profession</span>
                        <span class="right_you_discription"><?php echo BreeseeUK_taxonomy_links($data, 22); ?></span>
                    </div><!-----[step3_discription closed-here]---->
                    <div class="clear"></div>
                    <div class="you_are_discription"><!-----[step3_discription starts-here]---->
                        <span class="left_you_discription">Current Country</span>
                        <span class="right_you_discription"><?php  $term=taxonomy_get_term($data->field_current_country[0]['value']);echo $term->name ?></span>
                    </div>

                    <div class="clear"></div>
                    <div class="you_are_discription"><!-----[step3_discription starts-here]---->
                        <span class="left_you_discription">Current City</span>
                        <span class="right_you_discription"><?php  $term=taxonomy_get_term($data->field_current_city[0]['value']);echo $term->name ?></span>
                    </div>
                    <div class="clear"></div>
                    <div class="you_are_discription"><!-----[step3_discription starts-here]---->
                        <span class="left_you_discription">Home Town Country</span>
                        <span class="right_you_discription"><?php $term= taxonomy_get_term($data->field_new_country[0]['value']);echo $term->name ?></span>
                    </div>

                    <div class="clear"></div>
                    <div class="you_are_discription"><!-----[step3_discription starts-here]---->
                        <span class="left_you_discription">Home Town City</span>
                        <span class="right_you_discription"><?php $term= taxonomy_get_term($data->field_city[0]['value']);echo $term->name ?></span>
                    </div>

                    <div class="clear"></div>
                    <div class="you_are_discription"><!-----[step3_discription starts-here]---->
                        <span class="left_you_discription">User Language</span>
                        <span class="right_you_discription"><?php echo $data->language; ?></span>
                    </div>

                    <div class="clear"></div>
                    <div class="you_are_discription"><!-----[step3_discription starts-here]---->
                        <span class="left_you_discription">Second Language</span>
                        <span class="right_you_discription"><?php $term= taxonomy_get_term($data->field_sec_language[0]['value']);echo $term->name ?></span>
                    </div>


<!--                    <div class="clear"></div>-->
<!--                    <div class="you_are_discription"><!-----[step3_discription starts-here]---->
<!--                    	<span class="left_you_discription">Specialties</span>-->
<!--                        <span class="right_you_discription">--><?php //echo BreeseeUK_taxonomy_links($data, 16); ?><!--</span>-->
<!--                    </div><!-----[step3_discription closed-here]---->
<!--                    <div class="clear"></div>-->
<!--                    <div class="you_are_discription"><!-----[step3_discription starts-here]---->
<!--                    	<span class="left_you_discription">Skills</span>-->
<!--                        <span class="right_you_discription">--><?php //echo $data->field_skill[0]['value']; ?><!--</span>-->
<!--                    </div><!-----[step3_discription closed-here]---->
<!--                    <div class="clear"></div>-->
<!--                    <div class="you_are_expert"><!-----[step3_heading starts-here]---->
<!--                    	<div class="left_you">Your Experience</div>-->
<!--                        <div class="middle_you"></div>-->
<!--                        <div class="right_you"><a href="--><?php //echo $base_url.'/node/'.$data->nid.'/edit/experience'; ?><!--">Edit Your Experience</a></div>-->
                    </div><!-----[step3_heading closed-here]---->
<!--                    <div class="clear"></div>-->
<!--                    <div class="you_are_discription"><!-----[step3_discription starts-here]---->
<!--                    	<span class="left_you_discription">University</span>-->
<!--                        <span class="right_you_discription">--><?php //echo $data->field_sch1[0]['value']; ?><!--</span>-->
<!--                    </div><!-----[step3_discription closed-here]---->
<!--                    <div class="clear"></div>-->
<!--                    <div class="you_are_discription"><!-----[step3_discription starts-here]---->
<!--                    	<span class="left_you_discription">University</span>-->
<!--                        <span class="right_you_discription">--><?php //echo $data->field_sch2[0]['value']; ?><!--</span>-->
<!--                    </div><!-----[step3_discription closed-here]---->
<!--                    <div class="clear"></div>-->
                    <div class="you_are_expert"><!-----[step3_heading starts-here]---->
                    	<div class="left_you">Your Artwork</div>
                        <div class="middle_you"></div>
                        <div class="right_you"><a href="<?php echo $base_url.'/node/'.$data->nid.'/edit/experience'; ?>">Edit Your Artwork</a></div>
                    </div><!-----[step3_heading closed-here]---->
                    <div class="clear"></div>
                    <div class="you_are_discription"><!-----[step3_discription starts-here]---->
                    	<span class="left_you_discription">Item 1</span>
                        <span class="right_you_discription">
                        <?php echo $data->field_fld[0]['value']; ?>
                            <div class="art_disply">
                              <?php  print theme('imagecache', 'creator_app_preview', $data->field_item1[0]['filepath']);  ?>
                              <?php  print theme('imagecache', 'creator_app_preview', $data->field_item11[0]['filepath']);  ?>
                            </div>
						</span>
                    </div><!-----[step3_discription closed-here]---->
                    <div class="clear"></div>
                    <div class="you_are_discription"><!-----[step3_discription starts-here]---->
                    	<span class="left_you_discription">Item 2</span>
                        <span class="right_you_discription">
                            <?php echo $data->field_textfiled2[0]['value']; ?>
                            <div class="art_disply">
                            <?php  print theme('imagecache', 'creator_app_preview', $data->field_item2[0]['filepath']);  ?>
                            <?php  print theme('imagecache', 'creator_app_preview', $data->field_item22[0]['filepath']);  ?>
                            </div>
						</span>
                    </div><!-----[step3_discription closed-here]---->
                    <div class="clear"></div>
                    
                     <div class="you_are_discription"><!-----[step3_discription starts-here]---->
                    	<span class="left_you_discription">Item 3</span>
                        <span class="right_you_discription">
                            <?php echo $data->field_textfiled3[0]['value']; ?>
                            <div class="art_disply">
                            <?php  print theme('imagecache', 'creator_app_preview', $data->field_item3[0]['filepath']);  ?>
                            <?php  print theme('imagecache', 'creator_app_preview', $data->field_item33[0]['filepath']);  ?>
                            </div>
						</span>
                    </div><!-----[step3_discription closed-here]---->
                    <div class="clear"></div>
                    
                    <div class="submit_step3_btn"><!-----[Next step starts-here]---->
                    	<a href="<?php echo $base_url.'/upgradeapplication/submit/creator/'. $data->nid; ?>" id="cre_confirm_submit">submit</a>
                    </div>
                </div><!-----[creator account step3 closed-here]---->
      		</div><!-----[middle-container-closed-here]---->
<?php } 
else if($data->type == 'store' ) { 

$theme_path_full = $base_url.'/'.$theme_path;
$breadcrumb[] = l('Breesee', '<front>');
$breadcrumb[] = l($user->name, 'user/home');
$breadcrumb[] = 'Review Your Application';
drupal_set_breadcrumb($breadcrumb);
?>
<div class="main_container"><!-----[middle-container-starts-here]---->
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
                    	
                        <a class="tabs4 corner" href="#">
                        	<div class="ch_inner1">
                            	<span class="ch1"><h1>3</h1></span>
                                <span class="ch4"><p>Review & Submit</p></span>
                            </div>
                        </a>
                    
                    	<a class="tabs2 corner2" href="#">
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
                <div class="step3_cover_div"><!-----[creator account step3 starts-here]---->
                    <div class="you_are_expert"><!-----[step3_heading starts-here]---->
                    	<div class="store_left_you">Your Store Information</div>
                        <div class="store_middle_you"></div>
                        <div class="store_right_you"><a href="<?php echo $base_url.'/node/'.$data->nid.'/edit/info'; ?>">Edit Store Information</a></div>
                    </div><!-----[step3_heading closed-here]---->
                    <div class="clear"></div>
                    <div class="you_are_discription"><!-----[step3_discription starts-here]---->
                    	<span class="store_left_you_discription">Store Name</span>
                        <span class="store_right_you_discription"><?php echo $data->title; ?></span>
                    </div><!-----[step3_discription closed-here]---->
                    <div class="clear"></div>
                    <div class="you_are_discription"><!-----[step3_discription starts-here]---->
                    	<span class="store_left_you_discription">Store URL</span>
                        <span class="store_right_you_discription"><?php echo $base_url; ?>/store/<?php echo strtolower(urlencode(str_replace(' ','-' , $data->title))); ?></span>
                    </div><!-----[step3_discription closed-here]---->
                    <div class="clear"></div>
                    <div class="you_are_discription"><!-----[step3_discription starts-here]---->
                    	<span class="store_left_you_discription">About Your Store</span>
                        <span class="store_right_you_discription"><?php echo $data->field_about[0]['value']; ?></span>
                    </div><!-----[step3_discription closed-here]---->
                    <div class="clear"></div>
                    <div class="you_are_discription"><!-----[step3_discription starts-here]---->
                    	<span class="store_left_you_discription">Physical Store Address</span>
                        <span class="store_right_you_discription">
                        	<ul>
                            	<li>
                                    <?php echo $data->field_addr1[0]['value']; ?>
                                    <?php echo $data->field_addr2[0]['value']; ?>
                                    <?php echo _gettermsname($data->field_city[0]['value']); ?>
                                    <?php echo _gettermsname($data->field_zpc[0]['value']); ?>
																		<?php echo $data->field_phn[0]['value']; ?>
                                </li>
                                <li><a href="#"></a></li>
                                <li><a href="#"><?php echo theme('imagecache', 'store_app_review', $data->field_2ext[0]['filepath']); ?></a></li>
                                <li><a href="#"><?php echo theme('imagecache', 'store_app_review', $data->field_2ext2[0]['filepath']); ?></a></li>
                                <li><a href="#"><?php echo theme('imagecache', 'store_app_review', $data->field_3ext3[0]['filepath']); ?></a></li>
                                <li><a href="#"><?php echo theme('imagecache', 'store_app_review', $data->field_3ext4[0]['filepath']); ?></a></li>
                                <li><a href="#"><?php echo theme('imagecache', 'store_app_review', $data->field_3ext5[0]['filepath']); ?></a></li>
                                </ul>
                        </span>
                    </div><!-----[step3_discription closed-here]---->
                    <div class="clear"></div>
                    <div class="border_box1"></div>
                    <div class="you_are_expert"><!-----[step3_heading starts-here]---->
                    	<div class="store_left_you">Your Product Information</div>
                        <div class="store_middle_you"></div>
                        <div class="store_right_you"><a href="<?php echo $base_url.'/node/'.$data->nid.'/edit/productinfo'; ?>">Edit Product Information</a></div>
                    </div><!-----[step3_heading closed-here]---->
                    <div class="clear"></div>
                    <div class="you_are_discription"><!-----[step3_discription starts-here]---->
                    	<span class="store_left_you_discription">Type of Products</span>
                        <span class="store_right_you_discription"><?php echo $data->field_pls[0]['value']; ?></span>
                    </div><!-----[step3_discription closed-here]---->
                    <div class="clear"></div>
                    <div class="you_are_discription"><!-----[step3_discription starts-here]---->
                    	<span class="store_left_you_discription">Product Images</span>
                        <span class="store_right_you_discription">
                            <div class="art_disply">
                            	<?php echo theme('imagecache', 'store_app_review', $data->field_itm1[0]['filepath']); ?>
                               <?php echo theme('imagecache', 'store_app_review', $data->field_itm2[0]['filepath']); ?>
                            </div>
                            <div class="art_disply">
                            	<?php echo theme('imagecache', 'store_app_review', $data->field_itm02[0]['filepath']); ?>
                               <?php echo theme('imagecache', 'store_app_review', $data->field_item03[0]['filepath']); ?>
                            </div>
                            <div class="art_disply">
                            	<?php echo theme('imagecache', 'store_app_review', $data->field_itm3[0]['filepath']); ?>
                               <?php echo theme('imagecache', 'store_app_review', $data->field_itm04[0]['filepath']); ?>
                            </div>
                        </span>
                    </div><!-----[step3_discription closed-here]---->
                    <div class="clear"></div>
                    <div class="store_submit_step3_btn"><!-----[Next step starts-here]---->
                    	<a href="<?php echo $base_url.'/upgradeapplication/submit/store/'.$data->nid; ?>">submit</a>
                    </div>
                </div><!-----[creator account step3 closed-here]---->
      		</div>
<?php 
}
if($data->type == '' ) { 
$theme_path_full = $base_url.'/'.$theme_path;
$breadcrumb[] = l('Breesee', '<front>');
$breadcrumb[] = l($user->name, 'user/home');
$breadcrumb[] = 'Thank You';
drupal_set_breadcrumb($breadcrumb);
drupal_set_title('Thank You');
?>


<div class="main_container"><!-----[middle-container-starts-here]---->
        		<div class="creator_regstep4"><!-----[Creator Account wrapper first block starts-here]---->
                	<div class="breesee_account"><!-----[Creator Account wrapper starts-here]---->
       					<div class="logo_creator_acc"><!-----[Creator Account logo-starts-here]---->
            			<a href="#">
                        	<img src="<?php print $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/creator_account/icons1.jpg" />
                        </a>
                    </div><!-----[Creator Account logo closed starts-here]---->
            			<div class="text_log_creator_acc">Breesee Account</div><!-----[Creator Account logo_text starts starts-here]---->
                	</div><!-----[Creator Account wrapper closed-here]---->
                    <div class="clear"></div>
                    <div class="apps_steps"><!--------[Application process cover starts here]---------->
                    	<div class="apps_cover_step"><!--------[Application cover text starts here]---------->
                			<div class="applic_proces">Thank you for your application</div><!--------[Application text starts here]---------->
                        </div><!--------[Application cover text closed here]---------->
                        
                        <p>
                            If you have problems or questions regarding the application of creator account, please email <a href="#">info@breesee.com</a> and we will get back to you.
                            Thank you for your patience.
                        </p>
                        <div class="goto_your_step4_btn"><!-----[goto your profile starts-here]---->
                    		<a href="<?php print $base_url.'/user/firsttimelogin'; ?>">goto your profile</a>
                    	</div><!-----[goto your profile closed-here]---->
                        
                        <div class="connect_other"><!-----[showcase starts here]----> 
                	<h1>Connect with other breesee Creators</h1>
                    <ul>
                    <?php 
										$query = "SELECT users.uid AS uid, users.picture AS users_picture, users.name AS users_name, users.mail AS users_mail FROM users users  INNER JOIN users_roles users_roles ON users.uid = users_roles.uid WHERE users_roles.rid = 5";
										$query_result = db_query($query);
										while($row = db_fetch_array($query_result)){
    								$users_picture = $row['users_picture'];
										$uid = $row['uid'];
										$path = 'user/'.$uid;
										?>
                      <li class="left_r"><a href="<?php print $base_url.'/'.drupal_get_path_alias('user/'.$uid); ?>"><?php print theme('imagecache', 'showcase_list', $users_picture);?></a></li>
                    <?php 
										}
										?>
                    </ul>   
                </div>
                        
                		</div><!--------[Application process cover closed here]---------->
                </div><!-----[Creator Account wrapper first block closed-here]---->
                <div class="clear"></div>
      		</div>
          
<?php } ?>