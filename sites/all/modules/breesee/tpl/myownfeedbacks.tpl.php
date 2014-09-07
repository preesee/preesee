<?php 
	global $theme_path, $base_url, $user;
	$theme_path_full = $base_url.'/sites/all/themes/BreeseeUK';
	
	$pos_per = round(($data['poscnt'] * 100) / $data['tot_vote'], 2);
	$neu_per = round(($data['neucnt'] * 100) / $data['tot_vote'], 2);
	$neg_per = round(($data['neg_cnt'] * 100) / $data['tot_vote'], 2);
	
	//print_r($data);

?>

<div class="sell_now_right_container"><!-----[city-login-info-cover-div-starts-here]---->
                	<div class="button_login"><!-----[city-login-info-menu-tab-starts-here]---->
                    	<a href="#" class="current">My Feedback</a>
                    </div><!-----[city-login-info-menu-tab-closed-here]---->
                    <div class="clear"></div>
                    <div class="city_store_feed_back">
                    	<div class="icon_notification">
                        	<div class="notify_1"><img src="<?php echo $theme_path_full; ?>/images/City store LoginFeedback/positive.jpg" />
                          <h4><?php echo $pos_per; ?>% Positive</h4>
                          </div>
                            <div class="notify_2"><img src="<?php echo $theme_path_full; ?>/images/City store LoginFeedback/neutral.jpg" />
                             <h4><?php echo $neu_per; ?>% Neutral</h4></div>
                            <div class="notify_3"><img src="<?php echo $theme_path_full; ?>/images/City store LoginFeedback/negative.jpg" />
                             <h4><?php echo $neg_per; ?>% Negative</h4>
                             </div>
                            <div class="notify_4"><img src="<?php echo $theme_path_full; ?>/images/City store LoginFeedback/right_icons.jpg" /></div>
                        </div>
                    	<div class="clear"></div>
                    	<!--<div class="title_past_month">
                        	<span class="left_past_month"><h1>+  Over the past 12 months</h1></span>
                            <span class="right_past_month">
                            	<ul class="date_ul_left_block date_class_past_month">
                                	<li><a href="#">November</a></li>
                                	<li class="year_li"><a href="#">2010</a></li>
                                	<li class="read_txt">choose</li>
                            	</ul>
                            </span>
                        </div>-->
                        <div class="clear"></div>
                    	<div class="feed_back_buyer">
                   <!--     	<h1>Feedback<b>From Buyer</b></h1>-->
                            <div class="feed_back_listing">
                                <div class="title_feed_back">
                                	<span class="title_feed1">Item</span>
                                    <span class="title_feed2">Buyer  &  Comments</span>
                                    <span class="title_feed3">PIC</span>
                                    <span class="title_feed4">Date</span>
                                    <span class="title_feed5">Feedback</span>
                                </div>
                                <div class="clear"></div>
  <ul class="feed_back_ul_listing">
  <?php foreach($data['fb_lines'] as $key=>$val) { 
	$order = uc_order_load($val['oid']);
	//print_r($order );
	
	if($val['vote'] == 0 )
		$img = '<img src="'.$theme_path_full.'/images/City store LoginFeedback/negative.jpg" />';
	else if($val['vote'] == 1 )
		$img = '<img src="'.$theme_path_full.'/images/City store LoginFeedback/neutral.jpg" />';
	else if($val['vote'] == 2 )
		$img = '<img src="'.$theme_path_full.'/images/City store LoginFeedback/positive.jpg" />';
	$prod = node_load($order->products[0]->nid);
	?>
  <li>
    <span class="feed_1"><?php print theme('imagecache', 'order_history', $prod->field_image_cache[0]['filepath']); ?></span>
    <span class="feed_2">
    <h3>Buyer: <b><?php echo $val['buyer']; ?></b></h3>
    <p><?php echo $val['comment']; ?></p>
    </span>
    <span class="feed_3"><?php print theme('imagecache', 'order_history', _breesee_get_profileimage()); ?></span>
    <span class="feed_4">
    <h3><?php print date("M d Y", $order->created);   ?></h3>
    </span>
    <span class="feed_5"><?php echo $img; ?></span>
  </li>
  <?php } ?>
  </ul>
                            </div>
                            
                      </div>
                    </div>
                    <div class="pagination_home">
                    	<div class="right_pagination">
   <?php print drupal_render($data['pager']); ?>
                    	</div>
                    	<div class="clear"></div>
                	</div>
                </div>