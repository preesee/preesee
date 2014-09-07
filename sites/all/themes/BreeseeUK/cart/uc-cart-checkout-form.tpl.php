<?php 
$form['continue']['#attributes'] = array('onClick' => 'stepnext(2)');					
drupal_add_js(drupal_get_path('theme', 'BreeseeUK') . '/js/cartanim.js');
global $base_url, $user;
unset($form['panes']['delivery']['delivery_address_select']['#title']);
unset($form['panes']['billing']['billing_address_select']['#title']);
?>

<script type="text/javascript">
$(document).ready(function() {
	if($('#edit-panes-billing-copy-address').attr('checked',true) ) {
		$('#edit-panes-billing-copy-address').attr('checked',false)
	}
	
	$('#edit-panes-billing-copy-address').click(function() {
		$('#edit-panes-billing-billing-first-name').val($('#edit-panes-delivery-delivery-first-name').val());
		$('#edit-panes-billing-billing-last-name').val($('#edit-panes-delivery-delivery-last-name').val());
		$('#edit-panes-billing-billing-company').val($('#edit-panes-delivery-delivery-company').val());
		$('#edit-panes-billing-billing-street1').val($('#edit-panes-delivery-delivery-street1').val());
		$('#edit-panes-billing-billing-street2').val($('#edit-panes-delivery-delivery-street2').val());
		$('#edit-panes-billing-billing-city').val($('#edit-panes-delivery-delivery-city').val());
		$('#edit-panes-billing-billing-country').val($('#edit-panes-delivery-delivery-country').val());
		$('#edit-panes-billing-billing-zone').val($('#edit-panes-delivery-delivery-zone').val());
		$('#edit-panes-billing-billing-postal-code').val($('#edit-panes-delivery-delivery-postal-code').val());
		$('#edit-panes-billing-billing-phone').val($('#edit-panes-delivery-delivery-phone').val());
	});
	
});


</script>
<div class="checkoutform"> 
<div class="gianrobot_tshirtstep05">
            		<div class="chose_image_sub">
           
           				<div class="choos_img_sub">
                    	
                        <a class="choos2_sub" href="#" id="3">
                        	<div class="ch_inner1_sub">
                            	<span class="ch1_sub"><h1>3</h1></span>
                                <span class="ch2_sub"><p><?php echo t('Place order'); ?></p></span>
                            </div>
                        </a>
                    
                    	<a class="choos2_sub" href="#" id="2" onclick="stepnext(1)">
                        	<div class="ch_inner_sub">
                            	<span class="ch1_sub"><h1>2</h1></span>
                                <span class="ch2_sub"><p><?php echo t('Billing Info'); ?></p></span>
                            </div>
                        </a>
                        <a class="choos1_sub" href="#" id="1">
                        	<div class="ch_inner1_sub">
                            	<span class="ch1_sub"><h1>1</h1></span>
                                <span class="ch2_sub"><p><?php echo t('Shipping Info'); ?></p></span>
                            </div>
                        </a>
                       
                    </div>
                    <div class="choos_img_sub">
                    <div class="now_1_sub">Final</div>
                    <div class="now_1_sub">Next</div>
                    <div class="now_1_sub">Now</div>
                    
                        
                    </div>
                </div>
             </div>
             <div class="shipping_information_main">
             
             	<div class="shipping_information_left">
                    <h1><?php echo $form['panes']['customer']['#title']; ?></h1>
                    <div class="shipping_main_block"><?php echo $form['panes']['customer']['#description']; ?>
                   	 	<!--<span class="shipping_information_email">Your email is</span>-->
                        <?php echo drupal_render($form['panes']['customer']['primary_email']); ?>
                        
              <span class="shipping_information_email_sub"><?php echo $form['panes']['customer']['email_text']['#value']; ?></span>
                        <div class="shipping_email_field">
                    	<!--<input type="text" class="shipping_email_field_input" value="Enter another contact email if need" />-->
                    </div>
                    	<div class="shipping_checked">
                      		<span><?php echo t('Join our weekly newsletter?'); ?></span>
                            <p>
                            <?php echo t('It’s really prretty and is a great way to stay on top of the new<br/>
							creative works we introduce every day.'); ?>
                            </p>
                   		</div>
                    </div>
                   <?php  echo drupal_render($form['panes']['billing']['copy_address']); ?>  
                </div>
                <div class="shipping_information_right">
                	<div class="shipping_information_right_sub">
                    	<h1><?php echo t('How much is shipping?'); ?></h1>
                        <p>
                        <?php echo t('After you give us your shiipping address, we will present you with shipping<br />
						options and prices. We need to know your address in order to tell you how<br />
						much it will cost.'); ?>
                        </p>
                        <h1><?php echo t('Can Shipping address and billing address different?'); ?></h1>
                        <p>
                        <?php echo t('As long as the billing and shipping addresses are in the same country, you <br />
						can use different billing and shipping address.'); ?>
                        </p>
                    </div>
                </div>
             </div>
           <div class="shipping_information_billing_main" id="first" ></div>
             	  <div class="shipping_information_billing_main_sub" id="stepone">
                    <div class="faster_option_address_block">
                    	<h2><?php echo t('Enter your shipping address	'); ?> </h2>
                        <div class="faster_adress_main">
                        		<div class="faster_adress_left">
                                 Select From a saved Address
                                </div>
                        		<div class="faster_adress_right">
                                  <?php echo drupal_render($form['panes']['delivery']['delivery_address_select']); ?>
                                </div>
                                </div>
                                 
                         
                         
                         <div class="faster_adress_main">
                        		<div class="faster_adress_left">
                                 <?php print $form['panes']['delivery']['delivery_first_name']['#title']; ?> 
                                </div><span class="mand">*</span>
                        		<div class="faster_adress_right">
                                <?php unset($form['panes']['delivery']['delivery_first_name']['#title']); ?>
                                <?php $form['panes']['delivery']['delivery_first_name']['#attributes']=array('class'=>'faster_adress_right_text');?>
                                <?php print drupal_render($form['panes']['delivery']['delivery_first_name']); ?>
                               
                                </div>
                                </div>	
                                
                                
                                <div class="faster_adress_main">
                        		<div class="faster_adress_left">
                                	 <?php print $form['panes']['delivery']['delivery_last_name']['#title']; ?>
                                </div><span class="mand">*</span>
                        		<div class="faster_adress_right">
                                <?php unset($form['panes']['delivery']['delivery_last_name']['#title']); ?>
                                <?php $form['panes']['delivery']['delivery_last_name']['#attributes']=array('class'=>'faster_adress_right_text');?>
                                <?php print drupal_render($form['panes']['delivery']['delivery_last_name']); ?>
                                	<!--<input class="faster_adress_right_text" name="" type="text" />-->
                                    
                                </div>
                                </div>	
                                
                                <div class="faster_adress_main">
                        		<div class="faster_adress_left">
                                	 <?php print $form['panes']['delivery']['delivery_company']['#title']; ?>
                                </div><span class="mand">&nbsp;</span>
                        		<div class="faster_adress_right">
                                <?php unset($form['panes']['delivery']['delivery_company']['#title']); ?>
                                <?php $form['panes']['delivery']['delivery_company']['#attributes']=array('class'=>'faster_adress_right_text');?>
                                <?php print drupal_render($form['panes']['delivery']['delivery_company']); ?>
                                	<!--<input class="faster_adress_right_text" name="" type="text" />-->
                                    
                                </div>
                                </div>
                                
                                
                                <div class="faster_adress_main">
                        		<div class="faster_adress_left">
                                <?php print $form['panes']['delivery']['delivery_street1']['#title']; ?>
                                </div><span class="mand">*</span>
                        		<div class="faster_adress_right">
                                <?php unset($form['panes']['delivery']['delivery_street1']['#title']); ?>
                                <?php $form['panes']['delivery']['delivery_street1']['#attributes']=array('class'=>'faster_adress_right_text');?>
                                <?php print drupal_render($form['panes']['delivery']['delivery_street1']); ?>
                                	<!--<input class="faster_adress_right_text" name="" type="text" />-->
                                    
                                </div>
                                </div>	
                                
                                <div class="faster_adress_main">
                        		<div class="faster_adress_left">
                                <?php print $form['panes']['delivery']['delivery_street2']['#title']; ?>
                                </div><span class="mand">&nbsp;</span>
                        		<div class="faster_adress_right">
                                <?php unset($form['panes']['delivery']['delivery_street2']['#title']); ?>
                                <?php $form['panes']['delivery']['delivery_street2']['#attributes']=array('class'=>'faster_adress_right_text');?>
                                <?php print drupal_render($form['panes']['delivery']['delivery_street2']); ?>
                                	<!--<input class="faster_adress_right_text" name="" type="text" />-->
                                    
                                </div>
                                </div>
                                
                                
                                <div class="faster_adress_main">
                        		<div class="faster_adress_left">
                                	<?php print $form['panes']['delivery']['delivery_city']['#title']; ?>
                                </div><span class="mand">*</span>
                        		<div class="faster_adress_right">
                                <?php unset($form['panes']['delivery']['delivery_city']['#title']); ?>
                                <?php $form['panes']['delivery']['delivery_city']['#attributes']=array('class'=>'faster_adress_right_text_sub');?>
                                <?php print drupal_render($form['panes']['delivery']['delivery_city']); ?>
                                	<!--<input class="faster_adress_right_text_sub" name="" type="text" />-->
                                </div>
                                </div>	
                                <div class="faster_adress_main">
                        		<div class="faster_adress_left">
                                	<?php print $form['panes']['delivery']['delivery_country']['#title']; ?>
                                </div><span class="mand">*</span>
                        		<div class="faster_adress_right">
                                <?php unset($form['panes']['delivery']['delivery_country']['#title']); ?>
                                <?php $form['panes']['delivery']['delivery_country']['#attributes']=array('class'=>'faster_adress_right_input');?>
                                <?php print drupal_render($form['panes']['delivery']['delivery_country']); ?>
                                	<!--<select class="faster_adress_right_input" name=""></select>-->
                                </div>
                                </div>
                                
                                <div class="faster_adress_main">
                        		<div class="faster_adress_left">
                                	<?php print $form['panes']['delivery']['delivery_zone']['#title']; ?>
                                </div><span class="mand">*</span>
                        		<div class="faster_adress_right">
                                <?php unset($form['panes']['delivery']['delivery_zone']['#title']); ?>
                                <?php $form['panes']['delivery']['delivery_zone']['#attributes']=array('class'=>'faster_adress_right_input');?>
                                <?php print drupal_render($form['panes']['delivery']['delivery_zone']); ?>
                                	<!--<input class="faster_adress_right_text_sub" name="" type="text" />-->
                                </div>
                                </div>	
                                
                                
                                <div class="faster_adress_main">
                        		<div class="faster_adress_left">
                                	<?php print $form['panes']['delivery']['delivery_postal_code']['#title']; ?>
                                </div><span class="mand">*</span>
                        		<div class="faster_adress_right">
                                <?php unset($form['panes']['delivery']['delivery_postal_code']['#title']); ?>
                                <?php $form['panes']['delivery']['delivery_postal_code']['#attributes']=array('class'=>'faster_adress_right_text_sub');?>
                                <?php print drupal_render($form['panes']['delivery']['delivery_postal_code']); ?>
                                	<!--<input class="faster_adress_right_text_sub" name="" type="text" />-->
                                </div>
                                </div>	
                                
                                
                                <div class="faster_adress_main">
                        		<div class="faster_adress_left">
                                	<?php print $form['panes']['delivery']['delivery_phone']['#title']; ?>
                                </div><span class="mand">&nbsp;</span>
                        		<div class="faster_adress_right">
                                <?php unset($form['panes']['delivery']['delivery_phone']['#title']); ?>
                                <?php $form['panes']['delivery']['delivery_phone']['#attributes']=array('class'=>'faster_adress_right_text_sub');?>
                                <?php print drupal_render($form['panes']['delivery']['delivery_phone']); ?>
                                	<!--<select class="faster_adress_right_input_sub" name=""></select>-->
                                </div>
                               		 <div class="faster_adress_add_more"></div>
                                </div>
                                	  	                           
                            </div> 
                            
                            
                            
               <div class="adress_billing2_sub" onclick="stepnext(1)"> <a href="#"><?php echo t('Ship to this address'); ?></a>
                       
                      </div>             
                            
                            
           	    </div>
   	    <div class="shipping_information_billing_main_sub hideme" id="steptwo">
                  <div class="faster_option_address_block">
                    <h2> <?php echo t('Enter your Billing address '); ?></h2>
                   
	<div class="faster_adress_main">
                      <div class="faster_adress_left">Select From a saved Address </div>
                      <div class="faster_adress_right">
                       <?php echo drupal_render($form['panes']['billing']['billing_address_select']); ?>
                       </div>
                    
                   </div>  
                    
                    <div class="faster_adress_main">
                      <div class="faster_adress_left"> <?php print $form['panes']['billing']['billing_first_name']['#title']; ?> </div><span class="mand">*</span>
                      <div class="faster_adress_right">
                        <?php unset($form['panes']['billing']['billing_first_name']['#title']); ?> 
                        <?php $form['panes']['billing']['billing_first_name']['#attributes']=array('class'=>'faster_adress_right_text');?>
                        <?php print drupal_render($form['panes']['billing']['billing_first_name']); ?></div>
                    </div>
                    <div class="faster_adress_main">
                      <div class="faster_adress_left"> <?php print $form['panes']['billing']['billing_last_name']['#title']; ?> </div><span class="mand">&nbsp;</span>
                      <div class="faster_adress_right">
                        <?php unset($form['panes']['billing']['billing_last_name']['#title']); ?>
                        <?php $form['panes']['billing']['billing_last_name']['#attributes']=array('class'=>'faster_adress_right_text');?>
                        <?php print drupal_render($form['panes']['billing']['billing_last_name']); ?>
                        <!--<input class="faster_adress_right_text" name="" type="text" />-->
                      </div>
                    </div>
                    <div class="faster_adress_main">
                      <div class="faster_adress_left"> <?php print $form['panes']['billing']['billing_company']['#title']; ?> </div><span class="mand">&nbsp;</span>
                      <div class="faster_adress_right">
                        <?php unset($form['panes']['billing']['billing_company']['#title']); ?>
                        <?php $form['panes']['billing']['billing_company']['#attributes']=array('class'=>'faster_adress_right_text');?>
                        <?php print drupal_render($form['panes']['billing']['billing_company']); ?>
                        <!--<input class="faster_adress_right_text" name="" type="text" />-->
                      </div>
                    </div>
                    <div class="faster_adress_main">
                      <div class="faster_adress_left"> <?php print $form['panes']['billing']['billing_street1']['#title']; ?> </div><span class="mand">*</span>
                      <div class="faster_adress_right">
                        <?php unset($form['panes']['billing']['billing_street1']['#title']); ?>
                        <?php $form['panes']['billing']['billing_street1']['#attributes']=array('class'=>'faster_adress_right_text');?>
                        <?php print drupal_render($form['panes']['billing']['billing_street1']); ?>
                        <!--<input class="faster_adress_right_text" name="" type="text" />-->
                      </div>
                    </div>
                    <div class="faster_adress_main">
                      <div class="faster_adress_left"> <?php print $form['panes']['billing']['billing_street2']['#title']; ?> </div><span class="mand">&nbsp;</span>
                      <div class="faster_adress_right">
                        <?php unset($form['panes']['billing']['billing_street2']['#title']); ?>
                        <?php $form['panes']['billing']['billing_street2']['#attributes']=array('class'=>'faster_adress_right_text');?>
                        <?php print drupal_render($form['panes']['billing']['billing_street2']); ?>
                        <!--<input class="faster_adress_right_text" name="" type="text" />-->
                      </div>
                    </div>
                    <div class="faster_adress_main">
                      <div class="faster_adress_left"> <?php print $form['panes']['billing']['billing_city']['#title']; ?> </div><span class="mand">*</span>
                      <div class="faster_adress_right">
                        <?php unset($form['panes']['billing']['billing_city']['#title']); ?>
                        <?php $form['panes']['billing']['billing_city']['#attributes']=array('class'=>'faster_adress_right_text_sub');?>
                        <?php print drupal_render($form['panes']['billing']['billing_city']); ?>
                        <!--<input class="faster_adress_right_text_sub" name="" type="text" />-->
                      </div>
                    </div>
                    <div class="faster_adress_main">
                      <div class="faster_adress_left"> <?php print $form['panes']['billing']['billing_country']['#title']; ?> </div><span class="mand">*</span>
                      <div class="faster_adress_right">
                        <?php unset($form['panes']['billing']['billing_country']['#title']); ?>
                        <?php $form['panes']['billing']['billing_country']['#attributes']=array('class'=>'faster_adress_right_input');?>
                        <?php print drupal_render($form['panes']['billing']['billing_country']); ?>
                        <!--<select class="faster_adress_right_input" name=""></select>-->
                      </div>
                    </div>
                    <div class="faster_adress_main">
                      <div class="faster_adress_left"> <?php print $form['panes']['billing']['billing_zone']['#title']; ?> </div><span class="mand">*</span>
                      <div class="faster_adress_right">
                        <?php unset($form['panes']['billing']['billing_zone']['#title']); ?>
                        <?php $form['panes']['billing']['billing_zone']['#attributes']=array('class'=>'faster_adress_right_input');?>
                        <?php print drupal_render($form['panes']['billing']['billing_zone']); ?>
                        <!--<input class="faster_adress_right_text_sub" name="" type="text" />-->
                      </div>
                    </div>
                    <div class="faster_adress_main">
                      <div class="faster_adress_left"> <?php print $form['panes']['billing']['billing_postal_code']['#title']; ?> </div><span class="mand">*</span>
                      <div class="faster_adress_right">
                        <?php unset($form['panes']['billing']['billing_postal_code']['#title']); ?>
                        <?php $form['panes']['billing']['billing_postal_code']['#attributes']=array('class'=>'faster_adress_right_text_sub');?>
                        <?php print drupal_render($form['panes']['billing']['billing_postal_code']); ?>
                        <!--<input class="faster_adress_right_text_sub" name="" type="text" />-->
                      </div>
                    </div>
                    <div class="faster_adress_main">
                      <div class="faster_adress_left"> <?php print $form['panes']['billing']['billing_phone']['#title']; ?> </div><span class="mand">&nbsp;</span>
                      <div class="faster_adress_right">
                        <?php unset($form['panes']['billing']['billing_phone']['#title']); ?>
                        <?php $form['panes']['billing']['billing_phone']['#attributes']=array('class'=>'faster_adress_right_text_sub');?>
                        <?php print drupal_render($form['panes']['billing']['billing_phone']); ?>
                        <!--<select class="faster_adress_right_input_sub" name=""></select>-->
                      </div>
                      <div class="faster_adress_add_more"></div>
                    </div>
                  </div>
             	    
                  
 <div class="faster_adress_main continue">
                            <!--<div class="adress_billing2_sub">-->
                            	<!--<a href="javascript:void(0);" >Ship to this address</a>-->
                       <div class="faster_adress_left">
                      <?php print drupal_render($form['continue']); ?></div>
                      <div class="faster_adress_right">
                       <?php print drupal_render($form['cancel']); ?></div>
                       
                      <?php print drupal_render($form['cart_contents']); ?>
                      <?php print drupal_render($form['form_build_id']); ?>
                      <?php print drupal_render($form['form_id']); ?>
                      
                           
                            
                            
                            
                    </div>                 
                  
                  
             	    <div class="address_accuracy">
                    <h1> <?php echo t('Address Accuracy'); ?> </h1>
             	      <p> <?php echo t('Make sure you get your stuff! If the address is not entered correctly, your package 			 								may be returned as undeliverable You would then have to place a new order. Save time and avoid frustration by entering the address information in the appropriate boxes and double-checking for typos and other error. Need help? Click for  address tips:'); ?> </p>
           	      </div>
                    	
                </div>
                
<!--billing info-->              
               
    <div class="shipping_information_billing_main" id="second" style="display:block;"></div>               
<div class="add_cart_right_block" >  
             <div class="shipping_information_billing_right">
             	<div class="payment_in_your_cart_main">
                	<div class="payment_in_your_cart_main2">
                		<span class="payment_in_your_cart_main_sub1">
                        	<h1><?php echo t('In your cart'); ?></h1>
                        </span>
                        <span class="payment_in_your_cart_main_sub2"><a href="<?php echo $base_url ?>/cart"><?php echo t('Edit'); ?></a></span>
                    </div><?php  $a=unserialize($form['cart_contents']['#value']);	?>
		 
            <div class="payment_sub_1">
            <?php print $form['panes']['cart']['cart_review_table']['#value']; ?>
            </div>
             <div class="payment_sub_2 hidebtn">
              
                <span class="quote_button">
                  <?php 
				  
		
							unset($form['panes']['quotes']['#description']);
							unset($form['panes']['quotes']['#type']);
							echo drupal_render($form['panes']['quotes']);?>
                </span><br />
                <span class="quote_button">
                <?php 
							//unset($form['panes']['checkout_preview']);
							echo drupal_render($form['panes']['cart_review_table']);
							?>
                </span>
                </div>  
                
                <div class="payment_sub_2">
             	<h1><?php echo t('Payment Method'); ?></h1>
               
                <span class="quote_button">
                
                  <?php 
				  unset($form['panes']['payment']['payment_method']['#title']);
				 print drupal_render($form['panes']['payment']['payment_method']); ?>
                </span><br />
                <span class="quote_button">
                <?php 
							
							?>
                </span>
                </div>
                <div class="payment_sub_2">
             	<h1><?php echo t('Order Total Preview'); ?></h1>
               
                <h6><span class="quote_button">
                
                  <?php 
			 unset($form['panes']['checkout_preview']['#type']); 
			print drupal_render($form['panes']['checkout_preview']); ?>
                </span><br />
                <span class="quote_button">
             
                </span></h6>
                </div>
                
                
                
                
                
                
             </div>
              <div class="quote_button"></div>
              <div class="quote_button"></div>
              <div class="payment_message_block">
             	<h1>
               	<?php echo t('Please wrtie down you requet 
                in the below blanket to inform
                the seller know which type of 
                the items you prefer. '); ?>
				</h1>
                <div class="payment_message_block_input_main">
                <?php 
				unset($form['panes']['comments']['#title']);
				print drupal_render($form['panes']['comments']['comments']); ?>
                	<!--<textarea class="payment_message_block_input2">Tell seller the size, material and other things you prefer if there is a lot of options of the item.
                    </textarea>-->
               </div>
                
             </div>
             
           </div>  
    </div>
<div style="display:none;"> 
<?php 
echo drupal_render($form);
?>
</div></div>