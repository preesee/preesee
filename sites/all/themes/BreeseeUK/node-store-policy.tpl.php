
<?php 

//print_r($form);
//die();

global $theme_path, $base_url, $user;
$theme_path_full = $base_url.'/'.$theme_path;

if(arg(1) == 'add' || arg(2) == 'edit') {
	$mm = uniqid();
	$form['title']['#default_value'] = $mm;
	$form['title']['#value'] = $mm;
	$breadcrumb[] = l('Breesee', '<front>');
	$breadcrumb[] = l($user->name, 'user/home');
	$breadcrumb[] = 'Manage Store Policy';
	drupal_set_breadcrumb($breadcrumb);
	drupal_set_title(t('Manage Store Policy'));
	
	global $theme_path, $base_url, $user;
	$theme_path_full = $base_url.'/'.$theme_path;
?>
        		<div class="sell_now_right_container"><!-----[city-login-info-cover-div-starts-here]---->
                	<div class="button_login"><!-----[city-login-info-menu-tab-starts-here]---->
                    	<a href="#">Add New Item</a>
                    </div><!-----[city-login-info-menu-tab-closed-here]---->
                    <div class="clear"></div>
             
             
              <!-----[city-policy-starts-here]----> 
                    
        <div class="city_policy_main_cover"><!-----[city-policy-main-cover-div-starts-here]---->            
                    <div class="city_login_policy_main_content_cover">
                    	<p>
                        	breesee encourage all shops to post policies to help shopper make informed purchases.
 							Don't forget! Shop Policies must oby breesee's  
                        	<a href="#">    DOs and DON'T</a>
                         	and
                         	<a href="#"> Terms of US.Get ideas on writing shop policies.
                        	</a>

                        </p>
                    </div>
                    
                    <div class="city_login_policy_listing_main">
                    	<div class="city_login_policy_listing">
                        	<h1>Welcome</h1>
                            <h2>General information philosophy, etc.</h2>
                        <div class="city_login_policy_listing_input_cover">
                        	<?php print drupal_render($form['field_welcome']); ?>
                      </div>
                      </div>
                    </div>
                    
                    
                    <div class="city_login_policy_listing_main">
                    	<div class="city_login_policy_listing">
                        	<h1>Payment</h1>
                            <h2>
                           	 Payment ethods, terms, deadlines, taxes,cancellation policy, etc.
                            </h2>
                        
                        <div class="city_login_policy_listing_input_cover">
                        <?php print drupal_render($form['field_payment']); ?>
                      </div>
                      </div>
                    </div>
                    
                    
                    
                    <div class="city_login_policy_listing_main">
                    	<div class="city_login_policy_listing">
                        	<h1>Shipping</h1>
                            <h2>
                            	Please writedown your shipping methods, upgrads, deadlines, insurance, confirmation,
                                international customs etc.
              			    </h2>
                        
                        <div class="city_login_policy_listing_input_cover">
                        	<?php print drupal_render($form['body_field']['body']); ?>
                      </div>
                      </div>
                    </div>
                    
                    
                    <div class="city_login_policy_listing_main">
                    	<div class="city_login_policy_listing">
                        	<h1>Refund and Exchange</h1>
                            <h2>
                            	Please writedown your terms, eligible items, damages, losses, etc.
                            </h2>
                        
                        <div class="city_login_policy_listing_input_cover">
                        	<?php print drupal_render($form['field_refund_exchange']); ?>
                      </div>
                      </div>
                    </div>
                    
                    
                    <div class="city_login_policy_listing_main_2">
                    	<div class="city_login_policy_listing">
                        	<h1>Additional Info</h1>
                            <h2>
                            	Additonal policies, FAQs, wholesale & consignment, guarantees, etc.
                            </h2>
                        
                        <div class="city_login_policy_listing_input_cover">
                            <?php print drupal_render($form['field_add_info']); ?>
                      </div>
                      </div>
                    </div>
                    	<div class="login_policy_save_block_cover">
                            <div class="login_policy_save_block">
                                <a href="#">Save</a>
                            </div>
                        </div>    
                    
              </div><!-----[city-policy-main-cover-div-closed-here]---->
                    
                    
                    
                    
                    
                    
                    
                    
                    
                </div><!-----[city-login-info-cover-div-closed-here]---->
          <div style="display:none;"> <?php print drupal_render($form); ?></div>

<?php 
} 
?>