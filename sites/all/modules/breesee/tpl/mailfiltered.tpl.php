<ul class="mail_contants_read">
<?php 
//print_r($data['messages']);
global $user, $base_url;
	foreach($data['messages'] as $key=>$val) {
		
		$uid = $user->uid;
		$i = 1;
		$mid = $val['mid'];
		$is_new = $val['is_new'];
		$timestamp = $val['timestamp'];
		$thread_id = $val['thread_id'];
		$subject = $val['subject'];
		$body = $val['body'];
		$author = $val['author']->uid;
		$dispdate = format_date($timestamp, 'custom', 'M d Y', $timezone, "en");
		$disptime = format_date($timestamp, 'custom', 'h:i: a', $timezone, "en");
		$readornot = 'read';
		if($is_new == 1)
			$readornot = 'unread';
		?>
                            <li class="<?php echo $readornot; ?>"> 
                            	<span class="first_one_column_mail" style="background:<?php echo '#'._breesee_getmail_tag($mid, $uid ); ?>"></span>
                                <span class="second_one_column_mail">
                                    <p>From :<?php echo _breesee_get_display_name($author); ?></p>
                                    <a href="#">To: <?php echo _breesee_get_display_name(_breesee_get_to($mid, $author)); ?></a>
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
                            <?php $i++; } ?>
                            <div class="clear"></div>
                            <div id="pager"><?php print drupal_render($data['pager']); ?></div>
                      </ul>
