<?php 
//print_r($form);
//die();
global $base_url;
?>

<div class="login_purchase_feedback_block">
  <div class="choose_feedback_option_block">
                            	<div class="feeder_facebook_positive">
                                    <span><img src="<?php print $base_url; ?>/<?php print drupal_get_path('theme','BreeseeUK'); ?>/images/Reader-LoginPurchase06/LoginPurchase06_positive_img.png"></span>
                                    <span class="feeder_facebook_negative"><?php echo drupal_render($form['feedback'][2]) ?></span></div>
<div class="feeder_facebook_neutral">
                                    <span><img src="<?php print $base_url; ?>/<?php print drupal_get_path('theme','BreeseeUK'); ?>/images/Reader-LoginPurchase06/LoginPurchase06_netural_img.png">
                                    	<?php echo drupal_render($form['feedback'][1]) ?>
                                    </span>
                                </div>
                                <div class="feeder_facebook_negative">
                                    <span><img src="<?php print $base_url; ?>/<?php print drupal_get_path('theme','BreeseeUK'); ?>/images/Reader-LoginPurchase06/LoginPurchase06_negative_img.png"></span>                                <?php echo drupal_render($form['feedback'][0]) ?></div>
  </div>
                            <div class="feedback_comment_option">
                          <?php echo drupal_render($form['body']) ?>
                        </div>	
                        <div class="prmtmessage"></div>
                        <div class="feedback_comment_up_picture_block">
                            <div class="feedback_comment_up_picture">
                            	 <?php // echo drupal_render($form['upload']) ?>
                            </div>
                        </div>
                        <div class="feedback_check_main">
                        	<div class="feedback_check_later">
                            	<a href="javascript:void(0);" class="closebtn">Check later &amp; Close</a>
                          </div>
                            <div class="dfghdgh">
                            	 <?php echo drupal_render($form['submit_feedback']) ?>
                            </div>
                        </div>
                        <div class="feedback_close_block"></div>
                        <div style="display:none;">
                        	<?php echo drupal_render($form); ?>
                        </div>
</div>