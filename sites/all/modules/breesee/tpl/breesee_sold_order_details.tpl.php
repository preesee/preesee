<?php 
//print_r(uc_order_load(arg(2)));
//die();

//module_load_include('inc', 'uc_shipping', 'uc_shipping.admin');
//$shipment = uc_shipping_shipment_load(1);
//$order = uc_order_load(31);
//echo uc_shipping_shipment_view($order, $shipment);
//die();

	global $theme_path, $base_url, $user;
	$theme_path_full = $base_url.'/'.$theme_path;
	$order = uc_order_load(arg(2));
	$m = db_fetch_array(db_query("select sid from {uc_shipments} where order_id = ".arg(2)));
	$shipment_id = $m['sid'];
	$shipment = uc_shipping_shipment_load($shipment_id);
	$shipped = '';
	$exp_del = '';
	$exp_del_frm_to = '';
	$igot_it = '';
	$shipped = date("Y/m/d");
	$exp_del = date("Y/m/d");
	$exp_del_frm_to = date("Y/m/d");
	
if($shipment != '') {
	$shipped = date("M d Y", $shipment->ship_date);
	$exp_del = date("M d Y", $shipment->expected_delivery);
	$nextWeek = $shipment->expected_delivery + (5 * 24 * 60 * 60);
	$exp_del_frm_to = date("M d Y", $nextWeek);
	$igot_it = '<a href="javasscript:void(0);" id="igotit">I have Received</a>';
}
if (($order->order_status == 'pending'  ) || ($order->order_status == 'processing') || ($order->order_status == 'payment_received'))  { 

$m = '';
if ($order->order_status == 'processing')
	$m = 'readonly="readonly" onClick="javascript:return false;"';
	
?>
<div class="order_details">
<div class="login_purchaising_block_cover <?php echo $order->order_status; ?>">
                        	<div class="login_purchaising_reciving_block">
                            	<div class="purchaising_reciving_sub">
                                	<span>
                                    	<h1>Confirm Your Receiving if you get order</h1>
                                    </span>
                                    <span><h5>&nbsp;</h5></span>
                                    <span><h4>&nbsp;</h4></span>
                                    <span><h2>Report Problem</h2></span>
                                </div>
                            </div>
                            <div class="reciving_adress_block">
                            	<div class="reciving_adress_left_block">
                                	<span>1.</span>
                                    <span>
                                    	<h1>SHIP TO YOUR<br>SUPPORTER ADDRESS</h1>
                                    </span>
                                    
                                </div>
                                <div class="reciving_adress_middle_block">
                                	<h1>Your Adress</h1>
                                    <h2><?php echo $order->delivery_first_name.' '.$order->delivery_last_name ?></h2>
                                    <h4><?php echo $order->delivery_street1; ?></h4>
                                    <h4><?php echo $order->delivery_city; ?></h4>
                                    <h4><?php echo $order->delivery_postal_code; ?></h4>
                                    <h4><?php echo $order->delivery_country; ?></h4>
                                </div>
                                <div class="reciving_adress_right_block">
                                	<h1>Reference Chinese version</h1>
                                    <h2><?php echo t($order->delivery_first_name.' '.$order->delivery_last_name); ?></h2>
                                    <h4><?php echo t($order->delivery_street1); ?></h4>
                                    <h4><?php echo t($order->delivery_city); ?></h4>
                                    <h4><?php echo t($order->delivery_postal_code); ?></h4>
                                    <h4><?php echo t($order->delivery_country); ?></h4>
                                </div>
                            </div>
                            <form id="shipit_form">
                            <input type="hidden" name="oids" id="oids" value="<?php echo arg(2); ?>" />
                            <div class="reciving_adress_block">
                            	<div class="reciving_adress_left_block2">
                                	<h1>2. SHIPPING TRACK NUMBER</h1>
                                    <h4>Help</h4>
                                    <h5>you don't know track number<br>i lost my shiping receipt</h5>
                                </div>
                                <div class="reciving_adress_moddle_block2">

                                </div>
                                <div class="reciving_adress_middle_block2">
                                
                                <div class="shpping_block_input_block">
                                    	<span><h1>Transaction ID</h1></span>
                                        <span>
                                        	<div class="reciving_adress_middle_textarea">
            <input type="text" id="tranid" name="tranid"  value="<?php echo $shipment->transaction_id; ?>" class="reciving_adress_middle_textarea_input required" <?php echo $m; ?> />
                                            </div>
                                        </span>
                                    </div>
                                    
                                	<div class="shpping_block_input_block">
                                    	<span><h1>Shipping Servicer</h1></span>
                                        <span>
                                        	<div class="reciving_adress_middle_textarea">
            <input type="text" id="shipservicer" name="shipservicer"  value="<?php echo $shipment->shipping_method; ?>" class="reciving_adress_middle_textarea_input required" <?php echo $m; ?> />
                                            </div>
                                        </span>
                                    </div>
                                    <div class="shpping_block_input_block">
                                    	<span><h1>Other Company's Name</h1></span>
                                        <span>
                                        	<div class="reciving_adress_middle_textarea">
           <input type="text" id="othercompname" name="othercompname"  value="<?php echo $shipment->carrier; ?>" class="reciving_adress_middle_textarea_input required" <?php echo $m; ?> />
                                            </div>
                                        </span>
                                    </div>
                                    
                                    
                                    <div class="shpping_block_input_block">
                                    	<span><h1>Track Number</h1></span>
                                        <span>
                                        	<div class="reciving_adress_middle_textarea">
           <input type="text" id="trackno" name="trackno"  value="<?php echo $shipment->tracking_number; ?>" class="reciving_adress_middle_textarea_input2 required" <?php echo $m; ?> />
                                            </div>
                                        </span>
                                    </div>
                                    
                                    
                                    <div class="shpping_block_input_block">
                                    	<span><h1>Shipping Date</h1></span>
                                        <span>
                                        	<div class="reciving_adress_middle_textarea">
           <input type="text" id="shippingdate" name="shippingdate" value="<?php echo $shipped; ?>"  class="reciving_adress_middle_textarea_input3" <?php echo $m; ?> />
                                            </div>
                                        </span>
                                    </div>
                                    
                                    
                                         
                                </div>
                            </div>
                            
                            
                            
                            <div class="reciving_adress_block">
                            	<div class="reciving_adress_left_block3">
                                	<h1>3. ARRIVING DATE</h1>
                                    <h4>Help</h4>
                                    <h5>you don't know arriving dater<br>international shipping</h5>
                                </div>
                                
                                
                             <div class="reciving_cover_block">  
                                <div class="reciving_adress_middle_block2">
                                    <div class="shpping_block_input_block">
                                    	<span><h1>Estimated arriving date from</h1></span>
                                        <span>
                                        	<div class="reciving_adress_middle_textarea">
          <input type="text" id="expdelfrm" name="expdelfrm"  class="reciving_adress_middle_textarea_input3 required" value="<?php echo $exp_del;   ?>" <?php echo $m; ?> />
                                            </div>
                                        </span>
                                    </div>
                                    
                                    <div class="shpping_block_input_block">
                                    	<span><h1>to</h1></span>
                                        <span>
                                        	<div class="reciving_adress_middle_textarea">
            <input id="expdelto" name="expdelto" type="text" value="<?php echo $exp_del_frm_to;   ?>"  class="reciving_adress_middle_textarea_input3 required" <?php echo $m; ?> />
                                            </div>
                                        </span>
                                    </div>  
                                </div>
                                </div>
                              </form>  
                                
                                <?php if($shipment != '') {?>
                                <div class="recive_close_block">
                                	<a href="javascript:void(0);" class="closebtn">Close the Window</a>
                                </div>
                                <?php } 
																else { ?>
                                <div class="recive_close_block">
                                	<a href="javascript:void(0);" id="shipitbtn">Make Shipment</a>
                                  <img class="closebtn" src="<?php echo $base_url.'/sites/all/themes/BreeseeUK/images/dd_close_00.png'; ?>">
                                </div>
                                
                                <?php } ?>
                            </div>
                           	<div class="reciving_note_block">
                            	<div class="reciving_note_left"><img src="<?php echo $base_url.'/sites/all/themes/BreeseeUK/images/Reader-LoginPurchase02/LoginPurchase02-note.png'; ?>"></div>
                                <div class="reciving_note_right">
                                	<p>Note:Only after you confirm you reciver your order.This box turn off red and let shop
                                       owner know that .Or after  7days of the estimated dated and you didn"t report any wrong this 
                                       box will turn off red automatically.bree see will regard  you have recived your order.
                                    </p>
                                </div>
                            </div>
                        </div>
</div>
<?php } 
if(($order->order_status == 'feedback') || ($order->order_status == 'feedbackseller') ){ 
?>

<div class="login_purchase_feedback_block">
                        	<div class="purchase_feedback_content">
                            	<h2>Great,your transaction<a href="#"> <?php echo $shipment->transaction_id; ?></a> completed.</h2>
                                <h2>breesee wil transfer the your rest 50% money to seller<a href="#"> Ter Ekarach</a>	</h2>
                                <h1>To improve breesee service to be the best Choose your <br>feedback for seller from below 	check box</h1>
                            </div>
                            <?php print drupal_get_form('breesee_purchase_feedback_form');  ?>

                            <div class="feedback_help_block">
                        	<h1>Help</h1>
                            <span><a href="#">Can i change my feedback</a></span>|
                            <span><a href="#">Can i change negative feedback</a></span>|
                            <span><a href="#">Why does seller leave a feedback to me</a></span>
                        </div>
                        <div class="feedback_close_block">
                        	<a href="#"><img src="<?php echo $base_url.'/sites/all/themes/BreeseeUK/images/Reader-LoginPurchase06/Reader-LoginPurchase_close.png'; ?>"></a></div>
                        </div>

<?php } 
if($order->order_status == 'completed'){ 

	$psql = "SELECT uid, vote, comment from breesee_feedback where rolee = 'store' and oid = ".arg(2);
	$result = db_query($psql);
	$rowone = db_fetch_array($result);
		$sell_uid = $rowone['uid'];
		$sell_vote = $rowone['vote'];
		$sell_comment = $rowone['comment'];
	
	$psqlm = "SELECT uid, vote, comment from breesee_feedback where rolee != 'store' and oid = ".arg(2);
	$resultsd = db_query($psqlm);
	$rowtwo = db_fetch_array($resultsd);
		$buy_uid = $rowtwo['uid'];
		$buy_vote = $rowtwo['vote'];
		$buy_comment = $rowtwo['comment'];
		
?>
	<table width="600" border="0" cellspacing="0" cellpadding="3">
  <tr>
    <td colspan="2"><h3>Buyer Feedback</h3></td>
    </tr>
  <tr>
    <td width="87" align="right"><strong>Rating</strong></td>
    <td width="505"><?php echo _breesee_get_votestst($buy_vote); ?></td>
  </tr>
  <tr>
    <td align="right"><strong>Comment</strong></td>
    <td><?php echo $buy_comment; ?></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><h3>Your Feedback </h3></td>
    </tr>
  <tr>
    <td align="right"><strong>Rating</strong></td>
    <td><?php echo _breesee_get_votestst($sell_vote); ?></td>
  </tr>
  <tr>
    <td align="right"><strong>Comment</strong></td>
    <td><?php echo $sell_comment; ?></td>
  </tr>
</table>

<?php } ?>