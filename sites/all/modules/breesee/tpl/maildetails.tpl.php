<?php 
//print_r($data);
//die();
//ini_set('display_errors','On'); 
global $user, $base_url; 

			$uid = $user->uid;							
			//$row = drupal_clone($data);		
			$mid = $data['mid'];
			
			if($data['is_new'] == 1)
				db_query("update pm_index set is_new = 0 where uid = '$uid' AND mid = '$mid' ");
				
			$querymm = "SELECT uid FROM pm_index WHERE mid = '$mid' ";		
			$query_result = db_query($querymm);
			while($rowm = db_fetch_object($query_result)) {
				$pmuid[] = $rowm->uid;
			}
			
			if(!in_array($uid,$pmuid )) {
				drupal_set_message('Invalid mail selected', 'error');
				drupal_goto('user/mailbox');
			}
?>
            <div class="sell_now_right_container"><!-----[city-login-info-cover-div-starts-here]---->
                	<div class="button_login"><!-----[city-login-info-menu-tab-starts-here]---->
                   	<a href="<?php echo $base_url.'/user/mailbox'; ?>" class="current" >My Mailbox</a><a href="<?php echo $base_url.'/user/mailbox/compose'; ?>">Compose</a>
              </div><!-----[city-login-info-menu-tab-closed-here]---->
                    <div class="clear"></div>
                    <div class="breesee_login_info_blocks">
                      <div class="clear"></div> 
                      	<div class="mail_strip">
                        	<ul class="mail_type">
                            	<li class="li_mail active_emails" id="mail">
<a href="javascript:void(0);" class="mfilter" rel="all">Mail</a></li>
                                <li class="li_mail" id="breesee_mail">
                                	<a href="#">Breesee</a>
                                	
                                </li>
                                <li class="li_mail" id="payment">
                                	<a href="#">Payment</a>
                                    
                                </li>
                                <li class="li_mail" id="transaction">
                                	<a href="#">Transaction</a>
                                    
                                </li>
                                <li class="li_mail" id="city_mail">
                                	<a href="#">City</a>
                                    
                                </li>
                                <li class="li_mail creator_mail" id="creator_mail">
                                	<a href="#">Creator</a>
                                    
                                </li>
                                <li class="li_mail" id="member_mail">
                                	<a href="#">Member</a>
                                </li>
                               </ul>
                      </div> 
                        <div class="clear"></div>
                        <div class="tile_mail">
                        	<span class="first_column_mail">
                            	<a href="#">From</a>
                                <p>To</p>
                          </span>
                            <span class="right_column_mail">
                            	<a href="#">Mail Subject</a>
                                <p>Content</p>
                            </span>
                            <span class="third_column_mail">
                            	<a href="#">Date</a>
                                <p>Time</p>
                            </span>
                            
                        </div>
                        <div class="clear"></div>
<div id="message_area">
                        
                      <div class="clear"></div>
                      <div class="pm_replyas"> 
                      	<ul class="mail_contants_read">
<?php 
	$sqlone = "SELECT mid FROM pm_index WHERE thread_id = '$mid' AND uid = '$uid' ORDER BY mid ASC";
	$resultone = db_query($sqlone);
	while($rowone = db_fetch_object($resultone)){
		$reply_mid = $rowone->mid;
		$reply_message = privatemsg_message_load($reply_mid);
		privatemsg_message_change_status($reply_message['mid'], PRIVATEMSG_READ);
		$dispdateone = format_date($reply_message['timestamp'], 'custom', 'M d Y', $timezone, "en");
		$disptimeone = format_date($reply_message['timestamp'], 'custom', 'h:i: a', $timezone, "en");
		$li_class = 'mymail';
		if($reply_message['author']->uid != $uid)
			$li_class = 'myreply';
		?>                        
    <li style="height:auto; cursor:auto;" class="<?php echo $li_class; ?>"> 
        <span class="first_one_column_mail" style="background:<?php echo '#'._breesee_getmail_tag($reply_mid, $uid ); ?>"></span>
          <span class="second_one_column_mail">
              <p>From:<?php echo _breesee_get_display_name($reply_message['author']->uid); ?></p>
              <a href="javascript:void(0);">To: <?php echo _breesee_get_display_name(_breesee_get_to($reply_mid, $reply_message['author']->uid)); ?></a>
          </span>
          <span class="third_one_column_mail">
              <div><?php echo $reply_message['body']; ?></div>
          </span>
          <span class="fourth_one_column_mail">
              <h3><?php echo $dispdateone; ?></h3>
              <p><?php echo $disptimeone; ?></p>
          </span>
          
      </li>
<?php 
$li_class = '';
}
?>      
      
      
                        </ul>
                      </div>
                      
                     <div class="clear"></div> 
                     <div class="pm_reply">
                     <?php
				$thread = privatemsg_thread_load($data['thread_id']);
				echo drupal_get_form('privatemsg_new', $thread['participants'], $thread['subject'], $thread['thread_id'], $thread['read_all']); ?>
                     </div>
</div>
                    </div>
                    <div class="clear"></div>
  </div>