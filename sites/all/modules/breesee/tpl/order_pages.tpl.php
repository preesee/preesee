<?php 
//print_r($data);
//die();


//line  2895

global $theme_path, $base_url, $user;
$theme_path_full = $base_url.'/'.$theme_path;

//$rol = _breesee_get_role($user->uid);

drupal_add_js(drupal_get_path('module', 'breesee') . '/js/order_actions.js');
?>
<div class="uc_order_page_wrapper">
<div class="login_shelf">
                	<div class="button_login">
                    	<a href="#" class="current">My Order History</a>
                    </div>
                	
                    <div class="report_problem_block">
                    <span class="year_li">
                          <select name="month" id="month" onchange="" size="1">
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
                          </select>
                          </span>
                        <span class="year_li">
                          <select name="year" id="year">
                            <option selected="selected">- Year -</option>
                            <?php 
	$m = date("Y") - 2;
	for($i= $m; $i<=date("Y")+3; $i++)
		  	if($year == $i)
				echo "<option value='$i'>$i</option>";
			else
				echo "<option value='$i'>$i</option>";
	?>
                          </select>
                        </span>
                      <h4 class="read_txt">Choose</h4>
                    </div>
                    
<div class="report_problemblock2">
                    	<div class="problem_left_block">
                        	Report problem to breesee
                        </div>
                        <div class="problem_right_block">
                        
                        	<span>
                            	<input type="checkbox" class="shipoptions" value="pending">
                            </span>
                            <span><h4>Unpaid</h4></span>
                            
                            <span>
                            	<input type="checkbox" class="shipoptions" value="feedback">
                            </span>
                            <span><h4>Unshiped</h4></span>
                            
                            <span>
                            	<input type="checkbox" class="shipoptions" value="unranked">
                            </span>
                            <span><h4>Unranked</h4></span>
                            
                            
                        </div>
                    </div>
                    <div id="order_area"> 
                    
                    <?php if (count($data['orders']) != 0 ) {  ?>
    <div class="price_listing_block_cover">       
                    <div class="contants_login_sh2">
                   	<ul class="nami_remark">
                        	<li class="scntr_1a">Item</li>
                            <li class="scntr_2a">Description</li>
                            <li class="scntr_3a">Quantity</li>
                            <li class="scntr_4a">Price&amp;shipping</li>
                            <li class="scntr_5a">Purchased time</li>
                            <li class="scntr_6a">Dealing status</li>
                            <li class="scntr_7a">Seller</li>
                      </ul>
                        <div class="clear"></div>
                        <?php 
												//print_r($data['orders']);die;
												foreach($data['orders'] as $key=>$val) { 	
												
												
												
	$imgd =  _breeee_load_product_img($val->products[0]->nid); 
	$seller_info = _breeee_load_sellerinfo($val->products[0]->nid); 
	
	$p_node = node_load($val->products[0]->nid);
	$sellername = _breesee_get_display_name($p_node->uid);
		
	$order_status = $val->order_status;
	if($order_status == 'processing')
		$order_status = "Confirm Shipment";
	else if($order_status == 'pending')
		$order_status = "Awaiting Shipment";
	else if($order_status == 'feedbackseller')
		$order_status = "Awaiting Feedback from ".$sellername;	
	else if($order_status == 'feedback')
		$order_status = "Feedback";	
	else if($order_status == 'feedbackbuyer')
		$order_status = "Awaiting Feedback from You";	
		
	
		
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
                            <li class="content_disiplay7">
                            <?php echo $seller_info; ?>
                            </li></ul>
                          <div id="<?php echo $val->order_id; ?>div" style="display:none;" class="order_details"></div>
                          <div class="clear"></div>
                          <?php } ?>
                          </div>
      <div class="clear"></div>
</div>
</div>

<?php }  else { ?>

<div class="sorry">Sorry No data Found <br />
Please visit <a href="<?php echo $base_url; ?>/shops">Breesee Store</a> to make a purchase</div>

<?php } ?>

</div>
</div></div>
<div id="pager">
<?php echo drupal_render($data['pager']); ?>
</div>