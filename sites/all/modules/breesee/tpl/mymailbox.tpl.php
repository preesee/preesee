<?php global $user, $base_url; 
drupal_add_js(drupal_get_path('module', 'breesee') . '/js/mailactions.js');
//drupal_add_js("jQuery(document).ready(function () { $('.mail_contants_read li').divgrow({initialHeight: 50})  });" , 'inline');
?>
            <div class="sell_now_right_container"><!-----[city-login-info-cover-div-starts-here]---->
                	<div class="button_login "><!-----[city-login-info-menu-tab-starts-here]---->
                    	<a href="#" class="current">My Mailbox</a><a href="<?php echo $base_url.'/user/mailbox/compose'; ?>">Compose</a>
              </div><!-----[city-login-info-menu-tab-closed-here]---->
                    <div class="clear"></div>
                    <div class="breesee_login_info_blocks">
                        <div class="date_mail_box">
                            <ul class="date_ul_left_block">
                                <li><select name="month" id="month" onchange="" size="1">
    <option selected="selected">- Month -</option>
    <option value="01">January</option>
    <option value="02">February</option>
    <option value="03">March</option>
    <option value="04">April</option>
    <option value="05">May</option>
    <option value="06">June</option>
    <option value="07">July</option>
    <option value="08">August</option>
    <option value="09">September</option>
    <option value="10">October</option>
    <option value="11">November</option>
    <option value="12">December</option>
</select></li>
                                <li class="year_li"><select name="year" id="year">
                                
	<?php 
	$yr = date("Y");
	$m = date("Y") - 5;
	for($i= $m; $i<=date("Y")+2; $i++)
		  if($i == date("Y"))
				echo "<option value='$i' selected='selected'>$i</option>";
			else 
				echo "<option value='$i' >$i</option>";

	?>
</select></li>
                                <li class="read_txt">Choose</li>
                            </ul>
                            
                            <ul class="date_ul_right_block">
                                <li class="read_txt1">Unread</li>
                                <li class="read_block"><a class="colour_unread" href="#">&nbsp;</a></li>
                                <li class="read_txt1">Read</li>
                                <li class="read_block"><a class="colour_read" href="#">&nbsp;</a></li>
                            </ul>
                      </div> 
                        <div class="clear"></div> 
                      	<div class="mail_strip">
                        	<ul class="mail_type">
                            	<li class="li_mail active_emails" id="mail">
                                	<a href="javascript:void(0);" class="mfilter" rel="all">Mail</a>
                                	<div class="sub_mail_dropdown">
                                    	<a href="javascript:void(0);" class="mfilter" rel="received">Received Mail</a>
                                      <a href="javascript:void(0);" class="mfilter" rel="sent">Sent Mail</a>
                                </div>
                            </li>
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
                            <ul class="mark_as_read">
                            	<li>
                              	<a href="javascript:void(0);" id="mailaction">Action</a>
                                <div id="sublevels">
                                <ul>
                                	<li><a href="javascript:void(0);" class="mailaction" rel="read">Mark As Read</a></li>
                                	<li><a href="javascript:void(0);" class="mailaction" rel="unread">Mark As Unread</a></li>
                                	<li><a href="javascript:void(0);" class="mailaction" rel="deleteme">Delete</a></li>
                                 </ul>
                                 </div>
                              </li>
                              <li><input type="checkbox" id="checkall"/></li>
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
                        <ul class="mail_contants_read">
                        <?php 
												$account = drupal_clone($user);
												$i = 1;
												drupal_set_title('Mailbox');
												$uid = $user->uid;
												$sql = "SELECT  pm_message.mid as mid, pm_message.timestamp as timestamp, pm_message.author as author, pm_message.subject as subject, pm_message.body as body, pm_index.is_new as is_new, pm_index.thread_id as thread_id FROM pm_message LEFT JOIN pm_index ON pm_index.mid = pm_message.mid AND pm_index.uid <> pm_message.author WHERE pm_index.deleted = 0 AND pm_index.uid = '$uid' GROUP BY pm_index.thread_id ORDER BY pm_message.timestamp DESC";
		$query_count = "SELECT COUNT(*) FROM (" . $sql . ") AS count_query";
		$result = pager_query($sql,10,0,$query_count);
		$pager =  array('#value' => theme('pager', NULL, 10, 0));
		while($row = db_fetch_object($result)){
    	$mid = $row->mid;
			$is_new = $row->is_new;
			$timestamp = $row->timestamp;
			$subject = $row->subject;
			$body = $row->body;
			$author = $row->author;
			$thread_id = $row->thread_id;
			
			$dispdate = format_date($timestamp, 'custom', 'M d Y', $timezone, "en");
			$disptime = format_date($timestamp, 'custom', 'h:i: a', $timezone, "en");
			$readornot = 'read';
			if($is_new == 1)
				$readornot = 'unread';
		?>
                            <li class="<?php echo $readornot; ?>" id="<?php echo $mid; ?>"> 
                            	<span class="first_one_column_mail" style="background:<?php echo '#'._breesee_getmail_tag($mid, $uid ); ?>"></span>
                                <span class="second_one_column_mail">
                                    <p>From:<?php echo _breesee_get_display_name($author); ?></p>
                                    <a href="javascript:return false;">To: <?php echo _breesee_get_display_name(_breesee_get_to($mid, $author)); ?></a>
                                </span>
                               
                                <span class="third_one_column_mail">
                                     <a href="<?php echo $base_url; ?>/user/mail/<?php echo $thread_id;  ?>"><h2><?php echo $subject; ?></h2></a>
                                    <p><?php echo $body; ?></p>
                                </span>
                                
                                <span class="fourth_one_column_mail">
                                    <h3><?php echo $dispdate; ?></h3>
                                    <p><?php echo $disptime; ?></p>
                                </span>
                                <span class="fifth_one_column_mail"><input alt="<?php echo $readornot; ?>"  value="<?php echo $mid; ?>" type="checkbox" name="checkbox" class="mailselect <?php echo $readornot; ?>" /></span>
                            </li>
                            
                            <div id="read-more"></div>
                            <?php $i++; } ?>
                            <div class="clear"></div>
                            
                      </ul>
                      </div>
                    </div>
                    <div class="clear"></div>
                    <div class="pagination_home">
                      <div class="right_pagination"> <div id="pager"><?php print drupal_render($pager); ?></div> </div>
                    	<div class="clear"></div>
                	</div>
                    <div class="clear"></div>
  </div><!-----[city-login-info-cover-div-closed-here]---->