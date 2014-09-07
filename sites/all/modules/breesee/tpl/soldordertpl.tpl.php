
<?php 
global $theme_path, $base_url, $user;
$theme_path_full = $base_url.'/'.$theme_path;
drupal_add_js(drupal_get_path('module', 'breesee') . '/js/soldorder_actions.js');
drupal_add_js(drupal_get_path('module', 'breesee') . '/js/datepicker.js');
drupal_add_css(drupal_get_path('theme', 'BreeseeUK') . '/css/datepicker.css');


	$breadcrumb[] = l('Home', '<front>');
	$breadcrumb[] = drupal_get_title();
	drupal_set_breadcrumb($breadcrumb);
	
	
?>
<div class="uc_order_page_wrapper">
<div class="login_shelf soldorderpage">
                	<div class="button_login">
                    	<a href="#" class="current">Sold Orders</a>
                    </div>
                	
                    <div class="report_problem_block">
                    	<span><img src="<?php echo $base_url.'/sites/all/themes/BreeseeUK/images/Reader-LoginPurchase01/LoginPurchase01_icon.png'; ?>"></span>
                    <span><img src="<?php echo $base_url.'/sites/all/themes/BreeseeUK/images/Reader-LoginPurchase01/LoginPurchase01_icon.png'; ?>"></span>
                        <h3>2010</h3>
                        <h4>Choose</h4>
                    </div>
                    
<div class="report_problemblock2">
                    	<div class="problem_left_block">
                        	Report problem to breesee
                        </div>
                        <div class="problem_right_block">
                        	<span>
                            	<input type="checkbox" class="shipoptions" value="unpaid">
                            </span>
                            <span><h4>Unpaid</h4></span>
                            
                            <span>
                            	<input type="checkbox" class="shipoptions" value="unshiped">
                            </span>
                            <span><h4>Unshiped</h4></span>
                            
                            <span>
                            	<input type="checkbox" class="shipoptions" value="unranked">
                            </span>
                            <span><h4>Unranked</h4></span>
                            
                            
                        </div>
                    </div>
    <div class="price_listing_block_cover">       
                    <div class="contants_login_sh2">
                    	<h3>January</h3>
                   	<ul class="nami_remark">
                        	<li class="scntr_1a">Item</li>
                            <li class="scntr_2a">Description</li>
                            <li class="scntr_3a">Quantity</li>
                            <li class="scntr_4a">Price&amp;shipping</li>
                            <li class="scntr_5a">Purchased time</li>
                            <li class="scntr_6a">Dealing status</li>
                      </ul>

                        
                        <div class="clear"></div>
                        <div class="clear"></div>
                        
<?php foreach($data['orders'] as $key=>$val) { 	
												
												if($val->order_status == 'in_checkout')
													continue;
												
	$buyername = _breesee_get_display_name($val->uid);
	
	$imgd =  _breeee_load_product_img($val->products[0]->nid); 
	$seller_info = _breeee_load_sellerinfo($val->products[0]->nid); 
	$order_status = $val->order_status;
	if($order_status == 'processing')
		$order_status = "Shipped";
	else if($order_status == 'pending')
		$order_status = "Awaiting Shipment";
	else if($order_status == 'feedbackseller')
		$order_status = "Awaiting Feedback from You";	
	else if($order_status == 'feedbackbuyer')
		$order_status = "Awaiting Feedback from ".$buyername;	
	?>
  
                        <ul class="<?php echo $val->order_status; ?> tablerow contts_disply2" id="<?php echo $val->order_id; ?>">
                        	<li class="content_disiplay1">
                            	&nbsp;<?php print theme('imagecache', 'order_history', $imgd); ?>
                          </li>
                            <li class="content_disiplay2">
                            	<?php echo $val->products[0]->title; ?>
                                <h4>Invoice</h4>
                            </li>
                            <li class="content_disiplay3"><?php echo $val->products[0]->qty; ?></li>
                            <li class="content_disiplay4">
                            	<h4>$<?php echo $val->order_total +  $val->quote['rate']; ?> USD</h4>
                               <p><?php echo $val->line_items[0]['amount'].' USD + '. round($val->quote['rate'], 2).' USD'; ?></p>
                            </li>
                            <li class="content_disiplay5">
                            	<h4><?php print date("M d Y", $val->created);   ?></h4>
                            </li>
                            <li class="content_disiplay6">
                            	<h5><?php echo ucfirst($order_status); ?></h5>
                            </li>
                           </ul>
                          <div id="<?php echo $val->order_id; ?>div" style="display:none;" class="order_details"></div>
                          <div class="clear"></div>
                          <?php } ?>
                          </div>
      <div class="clear"></div>
</div>
</div></div></div>
