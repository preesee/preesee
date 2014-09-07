<?php 
if(!isset($_SESSION['color']))
$_SESSION['color'] = array();
//drupal_add_js(drupal_get_path('theme', 'BreseeUK') . '/js/jquery_notification_v.1.js');		
//drupal_add_css(drupal_get_path('theme', 'BreseeUK') . '/css/jquery_notification.css');		
global $theme_path, $base_url, $user;
$colorsk = BreeseeUK_taxonomy_links($data, '30');
$rol = _breesee_get_role($user->uid);
$stat = _breeseeCheckClaim($data->nid);
if($user->uid) {
	if($rol == 'creator')
		$claim_url = $base_url.'/claim/' . $data->nid;
	else 
		$claim_url = '';
		
	$abu_node = $base_url.'/abuse/report/node/'. $data->nid;
	$nid_arr = array();
		$fav_prods = favorite_nodes_get($user->uid, 'product');
			foreach($fav_prods as $key=>$val) {
			$nid_arr[] = $val->nid;
		}
		if(in_array($data->nid, $nid_arr)) {
			$fav_node = $base_url.'/favorite_nodes/delete/'. $data->nid;
			$class = '';
			$fav_tst = 'Remove from favorites';
		} else {
			$fav_node = $base_url.'/favorite_nodes/add/'. $data->nid;
			$class = '';
			$fav_tst = 'Add item to my favorite';
		}
}
else {
	$claim_url = $base_url.'/user/claim/login/'.$data->uid.'?destination=' . '/claim/' . $data->nid;
	$fav_node = $base_url.'/user/login/'. $data->nid .'?destination=' . drupal_get_path_alias('node/'.$data->nid);
	$abu_node = $base_url.'/user/claim/login/'. $data->nid .'?destination=' . '/abuse/report/node/' . $data->nid;
	$class = '';
	$fav_tst = 'Add item to my favorite';
}
?>
        	<div class="hom_right"><!-----[home-right-starts here]----> 
            	<div class="right_claim_block1">
<!--                  <div id="chosecolor" style="display:none;">Choose Color !</div>               issue 45 remove price and orders -->
<!--                    <h1>--><?php //echo t('Price'); ?><!--</h1>-->
<!--                    <h2>USD $ --><?php //echo floatval(round($data->sell_price, 2)); ?><!--</h2>-->
<!--                    <div class="order_format">-->
<!--                      --><?php //echo theme_uc_product_add_to_cart($data);  ?>
<!--                    </div>-->
<!--                    <div id="fav_suces_messsgae"></div>-->
<!--                    <div class="add_to_favorite" id="mydii">-->
<!--   	<a href="--><?php //echo $fav_node; ?><!--" id="itm_fav_add" class="norightclick" >-->
<!--                            <p>-->
<!--                                <span class="icon_span"><img src="--><?php //print $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?><!--/images/claim_1/favorite.jpg" /></span>-->
<!--                                <span class="text_favorite" id="favstext">--><?php //echo $fav_tst; ?><!--</span>-->
<!--                            </p>-->
<!--                        </a>-->
<!--                        -->
<!--                        --><?php // if ( ($stat == 'Pending' || $stat == '0') && $rol == 'creator') { ?>
<!--                        <a href="--><?php //echo $claim_url; ?><!--" class="modalframe-example-child modalframe-example-size[650,600]" >-->
<!--                            <p>-->
<!--                                <span class="icon_span"><img src="--><?php //print $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?><!--/images/claim_1/claim_fav.jpg" /></span>-->
<!--                                <span class="text_favorite">--><?php //echo t('Claim intelligent property'); ?><!--</span>-->
<!--                            </p>-->
<!--                        </a>-->
<!--                        --><?php //} ?>
<!--                    </div>-->
<!--                    <h1>--><?php //echo t('Share'); ?><!-- --><?php //echo $data->title; ?><!--<br />--><?php //echo t('with your friends'); ?><!--</h1>-->
                    <div class="like_all_social">
                    	
                      <?php 
											$block = module_invoke('addthis', 'block', 'view',0);
											print $block['content'];
												?>
                      <a href="<?php echo $abu_node; $store = user_load($data->uid);?>" class=""> <?php echo t('Report this item to Breesee'); ?></a></div>

            </div>
  </div>
                <div class="right_claim_block1">
                	<h1><?php echo t('About Shop'); ?></h1>
                	<div class="shop_product">
                    	<span class="left_shop_product">
                      <a href="<?php print $base_url.'/'.drupal_get_path_alias('user/'.$store->uid); ?>">
											<?php  print theme('imagecache', 'store_page_abt_shop', $store->picture);  ?>
                      </a>
                      </span>
                        <span class="right_shop_product">
<?php 
	$folnos = _breesee_count_following($data->uid);
	// Calculate Feedback Score 
	$tot_pur = $score = $score_perone = $score_perone = 0;
	list ($tot_pur, $score) = calculate_feedback_score_todisp($data->uid);
	$score_perone = 	($score / 2);
	$score_per = ($score_perone / $tot_pur) * 100;
?>
                        	<h2><?php echo _breesee_get_display_name($data->uid); ?></h2>
                            <h3>has <b><?php echo $folnos; ?></b> followers</h3>
                            <b><?php echo t('Shop Policy'); ?></b>
                            <p>Feedback  <?php echo $tot_pur; ?> <?php echo $score_per; ?> %</p>
                        </span>
                  </div>
                  <?php 
									if (  $stat != '0') { 
									$claimed = user_load($stat);
									//print_r($claimed);
									?>
                  <div class="clear"></div>
                  <h1><?php echo t('About Creator'); ?></h1>
                	<div class="shop_product">
                    	<span class="left_shop_product">
                      <a href="<?php print $base_url.'/'.drupal_get_path_alias('user/'.$claimed->uid); ?>">
											<?php print theme('imagecache', 'store_page_abt_shop', $claimed->picture);  ?>
                      </a>
                      </span>
                        <span class="right_shop_product">
                        <?php 
												$foldnos = _breesee_count_following($claimed->uid);
												list ($tot_purs, $scores) = calculate_feedback_score_todisp($claimed->uid);
												$score_perones = 	($scores / 2);
												$score_pers = ($score_perones / $tot_purs) * 100;
												?>
                        	<h2><?php echo _breesee_get_display_name($claimed->uid); ?></h2>
                            <h3>has <b><?php echo $foldnos; ?></b> followers</h3>
                            <p>Feedback  <?php echo $tot_purs; ?> <?php echo $score_pers; ?>%</p>
                        </span>
                  </div>
                  <div class="clear"></div>
                  <?php } ?>
                    <div class="border_only">&nbsp;</div>
                    <div class="follow_me_claim">
                    <h1><?php echo t('Your next Item'); ?></h1>
                      <div><?php echo _breesee_next_product(arg(1));?></div>
                		</div>
                <div class="order_from_breesee">
<!--                	<h2>USD $ --><?php //echo floatval(round($data->sell_price, 2)); ?><!--</h2>      issue 45 -->
<!--                    <div class="order_format">-->
<!--                      --><?php //echo theme_uc_product_add_to_cart($data);  ?>
<!--                    </div>-->
<!--                    <div class="credit_transaction"><a href="#"><img src="--><?php //print $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?><!--/images/claim_1/pay_pal.jpg" /></a></div>       issue 45-->
                </div>
            </div><!-----[home-right-closed here]---->