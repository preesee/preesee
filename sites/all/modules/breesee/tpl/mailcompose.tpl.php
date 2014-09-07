 <?php global $user, $base_url; ?>
 <div class="sell_now_right_container pm_compose"><!-----[city-login-info-cover-div-starts-here]---->
                	<div class="button_login"><!-----[city-login-info-menu-tab-starts-here]---->
                    	<a href="<?php echo $base_url.'/user/mailbox'; ?>">My Mailbox</a><a href="<?php echo $base_url.'/user/mailbox/compose'; ?>" class="current">Compose</a>
              </div>
							<?php 
							//print_r();
print drupal_get_form('privatemsg_new');
?>
</div>