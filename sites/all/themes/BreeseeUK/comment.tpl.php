<?php
//print_r($comment);
$on = format_date($comment->timestamp - $timezone, 'custom', 'M d, Y', $timezone, "en");
$at = format_date($comment->timestamp - $timezone, 'custom', 'H:i:s', $timezone, "en");
$user_c = user_load($comment->uid);
?>
<div class="comment<?php print ($comment->new) ? ' comment-new' : ''; print ' '. $status; print ' '. $zebra; ?>">
                            <ul class="costumer_feed">
                            	<li>
                                	<span class="costumer_img"><?php  print theme('imagecache', 'comment_user_thumb', $user_c->picture);  ?></span>
                                    <span class="costumer_comments">
                                    	<div class="p_tag_comment_from">
                                            <p>
                                                <span class="name_p"><?php echo _breesee_get_display_name($comment->uid); ?></span>
                                                <span class="time_p">on <?php echo $on; ?>at <?php echo $at; ?></span>
                                            </p>
                                        </div>
                                        <div class="comment_content"><?php print $content ?></div>
                                    </span>
                                </li>
 </ul>
                        </div>