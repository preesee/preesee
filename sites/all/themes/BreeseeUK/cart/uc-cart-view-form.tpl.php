<div class="main_container cart_contents"><!-----[middle-container-starts-here]---->
                <div class="city_store_gain_robot_main">
                	<h1>Please review your order</h1>
                </div>
                <div class="city_store_gain_robot_review_order_main">
                	<div class="city_store_gain_robot_review_order_sub">
                    	<ul>
                        	<li class="robot_review_order_top_1">ITEM NAME</li>
                            <li class="robot_review_order_top_2">CREATOR</li>
                            <li class="robot_review_order_top_3">PRICE</li>
                            <li class="robot_review_order_top_4">QUANTITY</li>
                            <li class="robot_review_order_top_5">TOTAL</li>
                            <li class="robot_review_order_top_5">REMOVE</li>
                    </ul>
                  </div>
                  <?php 
									global $base_url, $user;
									
// 				Checking store role									
//				$role = _breesee_get_role($user->uid);
//				if($role == 'store') {
//					drupal_set_message('Use your other account to make a purchase', 'warning');
//					drupal_set_message('Click <a href="'.$base_url.'/purchaseswitch">HERE</a> to switch to your other account', 'warning');
//					drupal_goto('user/home');
//
//				}
	
	
								
									$item_size = count(element_children($form['items']));
									$break_point = $item_size - 1;
									$counter = 1;
foreach (element_children($form['items']) as $i) {
			
				
		$c_img = _breesee_cart_getcreator_image($form['items'][$i]['nid']['#value']);

		$form['items'][$i]['creator'] = array(
														'#type'=>'item',
														'#value' => $c_img				
		
		); 
		?>
                  <div class="city_store_gain_robot_review_order_sub2">
                    	<span class="purchase_order_1">
                        	<?php print drupal_render($form['items'][$i]['image']); ?></li>
                    </span>
                        <span class="purchase_order_2">
                        	<h2><?php print $form['items'][$i]['title']['#value']; ?></h2>
                            <h3>T-shirt</h3>
                        </span>
                        <span class="purchase_order_3">
                        <?php print drupal_render($form['items'][$i]['creator']);?>
                        </span>
                    <!--    <span class="purchase_order_4">=</span>-->
                        <span class="purchase_order_5">
                        	USD $ <?php echo ($form['items'][$i]['#total']) / ($form['items'][$i]['qty']['#default_value']) ?>
                        </span>
                        <span class="purchase_order_6">
                        	x 
                        </span>
                        <span class="purchase_order_7">
                        	<?php print drupal_render($form['items'][$i]['qty']);?>
                        </span>
                        <span class="purchase_order_8">
                        	<?php print drupal_render($form['items'][$i]['total']); ?>
                        </span>
                        <span class="purchase_order_9">
                        	<?php print drupal_render($form['items'][$i]['remove']); ?>
                        </span>
                  </div>
                  
                  <?php 
									if($counter == $break_point)
										break;
									$counter++;
									} 
									?>
                  
                   <div class="city_store_gain_robot_review_order_sub3">
                    	<div class="gain_robot_review_order">
                        	<div class="gain_robot_review_order_update">
                          <?php print drupal_render($form['update']); ?>
                            
                        </div>
                      </div>
                    </div>
  </div>
                    <div class="city_store_gain_robot_shoping">
                    	<span class="gain_robot_shoping_1">
                        	<h1>Cost before shipping</h1>
                            <a href="<?php echo $base_url.'/shops' ?>">Continue shopping</a>
                      </span>
                        <span class="gain_robot_shoping_2">
                            <h3>or</h3>
                        </span>
                        <span class="gain_robot_shoping_3">
                        	<h1><?php print $form['items'][$break_point]['total']['#value']; ?></h1>
                            <?php print drupal_render($form['checkout']); ?>
                        </span>
                    </div>
                    <div style="display:none;"> <?php print drupal_render($form); ?></div>
</div>
