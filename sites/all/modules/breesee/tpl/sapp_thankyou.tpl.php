<?php 
global $theme_path, $base_url, $user;
$theme_paths = $base_url.'/'.$theme_path;
$breadcrumb[] = l('Breesee', '<front>');
$breadcrumb[] = 'Thank you for your application';
drupal_set_breadcrumb($breadcrumb);
drupal_set_title('Thank you for your application');
?><div class="main_container"><!-----[middle-container-starts-here]---->
        		<div class="creator_regstep4"><!-----[Creator Account wrapper first block starts-here]---->
                	<div class="breesee_account"><!-----[Creator Account wrapper starts-here]---->
       					<div class="logo_creator_acc"><!-----[Creator Account logo-starts-here]---->
            			<a href="#">
                        	<img src="<?php print $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/creator_account/icons1.jpg" />
                        </a>
                    </div><!-----[Creator Account logo closed starts-here]---->
            			<div class="text_log_creator_acc">Store Account</div><!-----[Creator Account logo_text starts starts-here]---->
                	</div><!-----[Creator Account wrapper closed-here]---->
                    <div class="clear"></div>
                    <div class="apps_steps"><!--------[Application process cover starts here]---------->
                    	<div class="apps_cover_step"><!--------[Application cover text starts here]---------->
                			<div class="applic_proces">Thank you for your application</div><!--------[Application text starts here]---------->
                        </div><!--------[Application cover text closed here]---------->
                        <p>
                            Your application is submitted to the breesee team. Please allow 2-3 business days for us to review your application. If your creator application   
                            is approved, your breesee account will be upgraded to <a href="#">store account.</a> With creator account, you will be able to share your artworks to the rest of 
                            the breesee members
                        </p>
                        <p>
                            If you have problems or questions regarding the application of creator account, please email <a href="#">info@breesee.com</a> and we will get back to you.
                            Thank you for your patience.
                        </p>
                        <div class="goto_your_step4_btn"><!-----[goto your profile starts-here]---->
                    		<a href="<?php print $base_url.'/user/home'; ?>">goto your profile</a>
                    	</div><!-----[goto your profile closed-here]---->
                        
                        <div class="connect_other"><!-----[showcase starts here]----> 
                	<h1>Connect with other breesee Stores</h1>
                    <ul>
                    <?php 
										$query = "SELECT users.uid AS uid, users.picture AS users_picture, users.name AS users_name, users.mail AS users_mail FROM users users  INNER JOIN users_roles users_roles ON users.uid = users_roles.uid WHERE users_roles.rid = 6";
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