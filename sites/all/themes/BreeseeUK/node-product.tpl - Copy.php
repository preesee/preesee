<div class="product_page">
<?php 
global $theme_path, $base_url, $user;
$theme_path_full = $base_url.'/'.$theme_path;
if(arg(1) == 'add' || arg(2) == 'edit') {
drupal_add_js(drupal_get_path('theme', 'BreeseeUK') . '/js/filestyle.js');
drupal_add_js(drupal_get_path('theme', 'BreeseeUK') . '/js/ahahsuccess.js');
drupal_add_js(drupal_get_path('theme', 'BreeseeUK') . '/js/add_product.js');

//print_r($form);
//exit();
?>

<div class="product_add">

<div class="add_steps" id="stepone">
        		<div class="sell_now_right_container"><!-----[city-login-info-cover-div-starts-here]---->
                	<div class="button_login"><!-----[city-login-info-menu-tab-starts-here]---->
                    	<a href="#">Add New Item</a>
                    </div><!-----[city-login-info-menu-tab-closed-here]---->
                	<div class="items_onyour"><!-----[city-login-info-1st-block-starts-here]---->
                    	<ul class="breesee_item_info"><!-----[city-login-info-status-manu-starts-here]---->
                        	<li class="active_breesee_info"><a href="#">1. Item Info</a></li>
                            <li class="normal_breesee_info"><a href="#">2. images & Sort your item </a></li>
                            <li class="normal_breesee_info"><a href="#">3. Selling Info</a></li>
                            <li class="normal_breesee_info"><a href="#">4. Review & Post</a></li>
                        </ul><!-----[city-login-info-status-manu-closed-here]---->
                        <span><p>Your current language is</p></span>
                        <span><a href="#">English</a></span>
                    </div><!-----[city-login-info-1st-block-closed-here]---->
                    <div class="clear"></div>
                    <div class="breesee_login_info_blocks5">
                    
                    
                    
                    
                    <div class="item_info_box">
                    <div class="item_info_main_box"></div>
                    <div class="item_info_text_box">
                        <h1 class="add_new_product_name">Product Name</h1>
                        <p class="product_name_sub">A short, descriptive title works best.</p>
                       <?php 
					   $form['title']['#title']= '';
					   print drupal_render($form['title']);  ?>
                        <h1 class="add_new_url_priview">URL Preview</h1>
                        <p class="view_preview_sub">See how your listing title appears in the URL:</p>
                        <div class="link_color">
                        	<span>www.thebreesee.com/listing/</span><span id="srurl"> </span>
                            </div>
                        <h1 class="add_new_style">Style</h1>
                        <p class="style_sub">
                            Let  readers know the idea behind this work. Did you invite it, 
                            use traditional way or bring new tech to the traditional work?<br />
                            Please choose the right option from below drop-down menu.
                        </p>
                        <?php 
			                 $form['taxonomy'][14]['#title'] = '';
			                 print drupal_render($form['taxonomy'][14]);
			             ?>
                        <h1 class="product_discription">Product Description</h1>
                        <p class="product_discription_sub">
                            Start with the most important information and provide enough detail 
                            for shoppers to feel comfortable buying.
                        </p>
                        <?php 
						     $form['body_field']['body']['#title'] = '';
						     print drupal_render($form['body_field']['body']);?>
                        <p class="product_discription_sub_2">&nbsp;</p>
                        <h1></h1>
                    </div>
                    <div class="dott_line"></div>
                    <div class="product_story">Product Story</div>
                    <div class="product_story_box">
                        <p>
                            Tell your audience the story how you create this product from your concept 
                            to a product. 
                        </p>
                          <?php 
						      $form['field_product_story']['#title'] = '';
						      print drupal_render($form['field_product_story']);?>
                        
                    </div>
                    <div class="dott_line"></div> 
         
                    <div class="Materials"> Materials</div>
                    <div class="materials_box">
                        <p>List the materials used in your item, separating each with a comma.</p>
                        <?php 
						$form['field_materials']['#title']='';
						print drupal_render($form['field_materials']);?>
                    </div>
                    <div class="color">Color</div> 
                    <div class="color_box">
                        <P>You can choose five color at most for your items</P>
                    <div class="colorpicker_main_box">
                    	<div class="colorbox_left">
                        	<ul class="top_name_col_pic">
                            	<li><p>Red</p></li>
                                <li><p>Orange</p></li>
                                <li><p>Yellow</p></li>
                                <li><p>Green</p></li>
                                <li><p>Azure</p></li>
                                <li><p>Blue</p></li>
                                <li><p>Purple</p></li>
                                <li><p>White</p></li>
                                <li><p>Black</p></li>
                            </ul> 
                            <ul id="colorpalette">
                            	<li class="bg_red" id="DA0B09">&nbsp;</li>
                                <li class="bg_orange" id="FB6603">&nbsp;</li>
                                <li class="bg_yellow" id="F8EF08">&nbsp;</li>
                                <li class="bg_d_green" id="349765">&nbsp;</li>
                                <li class="bg_skyblue" id="03A9E7">&nbsp;</li>
                                <li class="bg_blue" id="3667FC">&nbsp;</li>
                                <li class="bg_purple" id="CB9AFD">&nbsp;</li>
                                <li class="bg_white" id="CB9AFD">&nbsp;</li>
                                <li class="bg_black" id="000000">&nbsp;</li>
                                <li class="bg_rose" id="EF0B83">&nbsp;</li>
                                <li class="bg_light_orange" id="FB9703">&nbsp;</li>
                                <li class="bg_light_yellow" id="FDFD9A">&nbsp;</li>
                                <li class="bg_light_green" id="97C903">&nbsp;</li>
                                <li class="bg_light_blue" id="9ACBFD">&nbsp;</li>
                                <li class="bg_dark_blue" id="0303D1">&nbsp;</li>
                                <li class="bg_dark_purple" id="0303D1">&nbsp;</li>
                                <li class="bg_light_gray" id="C0C0C0">&nbsp;</li>
                                <li class="bg_drak_gray" id="636363">&nbsp;</li>
                                <li class="bg_light_red" id="FD9ACB">&nbsp;</li>
                                <li class="bg_light_orange_2" id="FBC903">&nbsp;</li>
                                <li class="bg_light_yello_2" id="F5FDCC">&nbsp;</li>
                                <li class="bg_light_green_2" id="CCFECC">&nbsp;</li>
                                <li class="bg_light_blue_2" id="CCFEFE">&nbsp;</li>
                                <li class="bg_dark_blue_2" id="02028E">&nbsp;</li>
                                <li class="bg_dark_purple_2" id="343497">&nbsp;</li>
                                <li class="bg_dark_white_2" id="969696">&nbsp;</li>
                                <li class="bg_dark_balck_2" id="848282">&nbsp;</li>
                                
                            </ul>           
                     	</div>
                     	<div class="colorbox_right">
                     		<h1>Your chosen color</h1>
                        	<ul id="pal_selected">
                            		<li class="selected_clrs empty" id="1">&nbsp;</li>
                                <li class="selected_clrs" id="2">&nbsp;</li>
                                <li class="selected_clrs" id="3">&nbsp;</li>
                                <li class="selected_clrs" id="4">&nbsp;</li>
                                <li class="selected_clrs" id="5">&nbsp;</li>
                            </ul>
                            <p>These color will be appear 
                            when you custumer look at
                            your item.</p>
                            <div id="style" style="display:none;" class="error">You can only select 5 Colors</div>
                      	</div>
                    </div>
                        <div class="colorpicker_main_box">
                            <div class="color_left_box"></div>
                            <div class="color_right_box"></div>
                        </div>
                    </div>
                    <div class="dott_line"></div>
                    <div class="creator_creation">
                        Creator and creation information of this item
                    </div>
                    <div class="creator_creation_box">
                        <p>It is a good idea to let custome know the creator’s name.</p>
                        <div class="Creator_Name_main_box">
                        	<div class="creator_tab_box_1">
                            	<h1>1</h1>
                                <div class="bottom_list_item">List Item’s Creator’s Name</div>
                                
                                </div>
                            <div class="creator_tab_box_2">
                            	<img src="<?php print $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/city_store_loginSellnow01Creator_page/list_item_creator_logo.png" />
                            </div>
                            <div class="creator_tab_box_3">
                            	<h1>2</h1>
                                <p>Creation link</p>
                            </div>
                            
                            </div>
                      <div class="creator_search_main_box">
                       		<div class="creator_search_left">
                            	<ul>
                                	<li class="creator_search_leftbox">
                                    	<?php print drupal_render($form['field_buyer']); ?>
                                  </li>
                                  <h5 class="creator_creation_sub">Or input the creator’s name directly</h5>    
                                  <div class="creater_search_input_main">
                                  	<?php print drupal_render($form['base']['field_buyer']);?>
                                  </div>
                                </ul>
                        </div>
                            <div class="creator_search_right">
                            	
                              <div class="brows_cover">
                              <?php 
							  $form['field_findimage']['#title']= '';
							  print drupal_render($form['field_findimage']);?>  
                              </div>
                              <div class="invite_creator_cover">
                         		<ul>
                                    <li>
                                        <a href="#"><img src="<?php print $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/city_store_loginSellnow01Creator_page/fb.png" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?php print $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/city_store_loginSellnow01Creator_page/twtr.png" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?php print $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/city_store_loginSellnow01Creator_page/mail.png" />
                                        </a>
                                    </li>
                            	</ul>
                               
                          	</div>
                            <h6>
                            	Invite the creator to be a member if they don’t have<br /> account yet.
                            </h6>
                            </div>
                            
                        </div>
                        
                      
                              
                    </div>
                    <div class="clear"></div>
                    <div class="next_previous"><a href="javascript:void(0);" onclick="javascript:stepnext(1)"><img src="<?php print $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/city_store_login_sellnow02a/next_tag.jpg" /></a>
                            </div>
                </div>
                    
                    
                    
                   
                    </div>
                    
                </div><!-----[city-login-info-cover-div-closed-here]---->
      	</div>
   
<div class="add_steps" id="steptwo"><!-----[middle-container-starts-here]---->
        		<div class="sell_now_right_container"><!-----[city-login-info-cover-div-starts-here]---->
                	<div class="button_login"><!-----[city-login-info-menu-tab-starts-here]---->
                    	<a href="#">Add New Item</a>
                    </div><!-----[city-login-info-menu-tab-closed-here]---->
                	<div class="items_onyour"><!-----[city-login-info-1st-block-starts-here]---->
                    	<ul class="breesee_item_info"><!-----[city-login-info-status-manu-starts-here]---->
                        	<li class="completed_breesee_info completed_breesee_info_add_class"><a href="#">1.  Item Info</a></li>
                            <li class="active_breesee_info"><a href="#">2. images & Sort your item </a></li>
                            <li class="normal_breesee_info"><a href="#">3. Selling Info</a></li>
                            <li class="normal_breesee_info"><a href="#">4. Review & Post</a></li>
                        </ul><!-----[city-login-info-status-manu-closed-here]---->
                        <span><p>Your current language is</p></span>
                        <span><a href="#">English</a></span>
                    </div><!-----[city-login-info-1st-block-closed-here]---->
                    <div class="clear"></div>
                    <div class="breesee_login_info_blocks">
                    	<h1>Upload Your  Product Image</h1>
                        <div class="upload_your_images_here">
                        	<div class="slider_strip_top">
														<?php print drupal_render($form['field_image_cache']); ?>
                            </div>
                            <div class="slider_strip_bottom">
                            	<h1>Find Your Images</h1>
                                <p>Use .jpg, .gif or .png files no larger than 1MB.<br />Images  width over 1,000 pixels can be englarge</p>
                            </div>
                        </div>
                        <div class="product_details_original">
                        	<div class="left_original">
                            	<h1>Completed Your Item Icon Intro</h1>
                                <div class="original_product_show">
                                	<img id="img_prev" src="<?php print $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/image_01.gif">
                                    <div class="place_name_red">Sanfransisco</div>
                                    <h2 id="prod_sampl">Aqua Surf Store</h2>
                                   <?php 
								   print drupal_render($form['field_surf']); ?>
                                </div>
                            </div>
                            <div class="right_original">
                            <h2>Find Your Images</h2>
                                <p>Use .jpg, .gif or .png files no larger than 500K.<br />Suggesting Images  size is  240px(W) X 180 px(H)</p>
                                <div class="blank_spacing_div"></div>
                                <h2>Tell Buyer the Creator’s Name if You Like</h2>
                                <p>We recommand you add creator’s name if you bought this one from <br />breesee instie creators. This will help breesee protects creator’s <br />intellectual property.</p>
                                <?php 
								$form['field_buyer']['#title']= '';
								print drupal_render($form['field_buyer']); ?>
                            </div>
                        </div>
                        <div class="categories_tag">
                        	<h1>Categories and Tags</h1>
                            <p>breesee is a marketplace for creative people and theri product only.</p>
                            <div class="star_p">
                            	<p>* Handmade: Items made by you. Choose the Category that best suits your item.</p>
                                <p>* Vintage: Items at least 20 years old. May be commercially made. Choose Vintage.</p>
                                <p>* Supplies: Crafting supplies. May be commercially made. Choose Supplies.</p>
                            </div>
                            <div class="need_help2">
                            	<p>Need help? See our Tagging Tips and Rules for Tagging.</p>
                            </div>
                            <h1>Categories and Tags</h1>
                            <div class="step_one_tag">
                            	<p><b>Step 1:</b>Choose a top-level Category.</p>
                            </div>
                            <div class="star_p2">
                           	<p>
                                	<b>1.</b>
                           <?php 
			                             $form['taxonomy'][17]['#title'] = '';
			                             print drupal_render($form['taxonomy'][17]);
			                        ?>
                                </p>
                            </div>
                            <div class="star_p2">
                              <p>
                                  <b>2.</b><span class="add_subcateory">Add a subcategory or tag</span>
                                 <?php 
																 		$form['taxonomy']['tags'][17]['#title'] = '';
																	 print drupal_render($form['taxonomy']['tags'][31]);
																	 ?>
                                </p>
                            </div>
                            <div class="need_help">Need help? Check out image uploading help topics and advanced image help.</div>
                        </div>
                        <div class="cover_back_to_top">
                          <div class="next_previous">
                            	<a href="javascript:void();" onclick="javascript:step_prevoius(1);"><img src="<?php print $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/city_store_login_sellnow02a/previousd_tag.jpg" /></a>
                                <a href="javascript:void(0);" onclick="javascript:stepnext(2);"><img src="<?php print $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/city_store_login_sellnow02a/next_tag.jpg" /></a>
                            </div>
                        </div>
                    </div>
                    
                </div><!-----[city-login-info-cover-div-closed-here]---->
      		</div>
  
<div class="add_steps" id="stepthree">
        		<div class="sell_now_right_container"><!-----[city-login-info-cover-div-starts-here]---->
                	<div class="button_login"><!-----[city-login-info-menu-tab-starts-here]---->
                    	<a href="#">Add New Item</a>
                    </div><!-----[city-login-info-menu-tab-closed-here]---->
                	<div class="items_onyour"><!-----[city-login-info-1st-block-starts-here]---->
                    	<ul class="breesee_item_info"><!-----[city-login-info-status-manu-starts-here]---->
                        	<li class="completed_breesee_info2"><a href="#">1.  Item Info</a></li>
                            <li class="completed_breesee_info"><a href="#">2. images & Sort your item </a></li>
                            <li class="active_breesee_info"><a href="#">3. Selling Info</a></li>
                            <li class="normal_breesee_info"><a href="#">4. Review & Post</a></li>
                        </ul><!-----[city-login-info-status-manu-closed-here]---->
                        <span><p>Your current language is</p></span>
                        <span><a href="#">English</a></span>
                    </div><!-----[city-login-info-1st-block-closed-here]---->
                    <div class="clear"></div>
                    <div class="breesee_login_info_blocks">
                        <div class="upload_your_images_here3 top_padding_upload">
                        	<div class="price_strip1">
                                <div class="left_price">Price:</div>
                                <div class="left_price4">$</div>
                                <div class="left_price2">
                                     <span  id="left_price22">
                                         <?php 
										      // $form['base']['prices']['sell_price']['#field_suffix']='';
										      print drupal_render($form['base']['prices']['sell_price']);?>
							         </span>
                                     <span>	
                                        
								         <?php 
										       //Print_r($form);
								               $form['taxonomy'][19]['#title']='';
								               print drupal_render($form['taxonomy'][19]);
			                                   ?>
                                          
                                     </span>
                                    </div>
                                <div class="left_price3">USD (each )<a href="#">Manager Shop Currency</a></div>
                            </div>
                            <div class="clear"></div>
                            <div class="price_strip2">
                                <div class="left_price">Quantity:</div>
                                <div class="left_price4">&nbsp;</div>
                                <div class="left_price2"><?php 
								$form['base']['default_qty']['#title']='';
								print drupal_render($form['base']['default_qty']);
			                        ?></div>
                                <div class="left_price3"></div>
                          </div>
                            <div class="clear"></div>
                        </div>
                        <h1>Your accepted forms of payment</h1>
                        <div class="your_account_preference">
                        	<div class="manage_payment"><a href="#">Manage Payment methods</a></div>
                            <div class="account_mail"><b>PayPal account: breeseebusiness@gmail.com</b></div>
                        </div>
                        <div class="for_border">&nbsp;</div>
                        <h1>You can load a shipping menu from your database
                        	<div class="manage_profile"><a href="#">Manage Shipping Profiles</a></div>
                        </h1>
						<div class="load_shipping">
                        	<div class="left_shipping">
                            	<select class="select_boc_shipping">
                                	<option>Load a Shipping Profile</option>
                                    <option></option>
                                </select>
                                <h2>Shipping Info Center</h2>
                                <div class="shipping_info_icons">
                                	<a href="#"><img src="<?php print $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/city_store_login_sellnow03a/shipping_agens_03.jpg" /></a>
                                    <a href="#"><img src="<?php print $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/city_store_login_sellnow03a/shipping_agens_05.jpg" /></a>
                                    <a href="#"><img src="<?php print $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/city_store_login_sellnow03a/shipping_agens_07.jpg" /></a>
                                    <a href="#"><img src="<?php print $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/city_store_login_sellnow03a/shipping_agens_09.jpg" /></a>
                                </div>
                            </div>
                        </div>
                        
                        <img src="<?php print $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/city_store_login_sellnow03a/totla.jpg" />
                        <div class="cover_back_to_top">
                          <div class="next_previous">
                            	<a href="javascript:void();" onclick="javascript:step_prevoius(2);"><img src="<?php print $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/city_store_login_sellnow02a/previousd_tag.jpg" /></a>
                                
                                <?php 
								$form['buttons']['submit']['#attributes']=array('class' => 'reg_submit_button');
								$form['buttons']['submit']['#value']= '';
                                print drupal_render($form['buttons']['submit']); 
								?>
                            </div>
                        </div>
                    </div>
                </div><!-----[city-login-info-cover-div-closed-here]---->
      	</div>
        
<div class="clear" style="display:none;" ><?php print drupal_render($form); ?></div>
</div></div>
<?php //print_r($form);
}
else {
drupal_add_js(drupal_get_path('module', 'breesee') . '/js/imag_replace.js');
global $theme_path, $base_url, $user;
$data = drupal_clone($node);

//print_r($node);
//die();


drupal_set_title($data->title);
?>
<div class="claim_1_cover_block"><!-----[clame_cover_block-starts-here]---->
                	<div class="translate_language"><!-----[language-trnslation-block-starts-here]---->
                    	<div class="trnaslate_breesee">
                    		<h1>Help breesee translate this to</h1>
                            <a class="green_breesee" href="#">Spanish</a>
                            <?php echo l('EDIT', 'node/'.$data->nid.'/edit', array('attributes' => array('class' => 'grey_breesee'))); ?>
                        </div>
                        <p>Please login before your translate, we will show your name in your chosen language version.</p>
                    </div><!-----[language-trnslation-block-closed-here]---->
                    <div class="clear"></div>
                    <div class="product_details">
                    	<div class="product_title">
                    		<h1>Name: <?php echo $data->title; ?></h1>
                        	<h2>Sold by <?php echo $data->name; ?></h2>
                        </div>
                        <div class="product_slider">
                        	<div class="display_product"><?php $attributes = array('id' => 'prod_big'); print theme('imagecache', 'product_detail_big', $data->field_image_cache[0]['filepath'], $alt, $title, $attributes);  ?></div>
                            <ul class="thumbnail_product">
                            <?php foreach($data->field_image_cache as $key => $val) { 
														$imgurl = imagecache_create_path('product_detail_big',$val['filepath']);
															?>
                            	<li>
                                	<a href="javascript:void(0);" rel="<?php echo $base_url.'/'.$imgurl; ?>"><?php  print theme('imagecache', 'product_detail_thumbs', $val['filepath']);  ?></a>
                                	<div class="arrow_up_product"><img src="<?php print $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/claim_1/arrow_up.jpg" /></div>
                               </li>
                               <?php } ?>
                            </ul>
                        </div>
                        <div class="clear"></div>
                        <div class="product_discription"><!-----[product-discription-starts-here]---->
                        	<h1>Product Description</h1>
                          	<p><?php echo $data->content['body']['#value']; ?></p>
                            <p><?php echo $data->field_pdescription[0]['value']; ?></p><!-----[discription-pending-closed-here]---->
                        </div><!-----[product-discription-closed-here]---->
                        <div class="project_story"><!-----[projects-story-starts-here]---->
                        	<h1>Project Story</h1>
                            <p><?php echo $data->field_product_story[0]['value']; ?></p>
                            <p>This bag is made to be used again and again and is perfect for anything from books to groceries. </p>
                            <div class="read_full_story">
                            	<ul class="pagination_story">
                                	<span>Page</span>
                                	<li><a class="active" href="#">1</a></li><span>|</span>
                                    <li><a href="#">2</a></li><span>|</span>
                                    <li><a href="#">3</a></li>
                                </ul>
                                <a class="read_fullstory" href="#">Read full story </a>
                            </div>
                        </div><!-----
                        
                        
                        
                        <div class="shping_from">
                        	<h1>Ships from United State</h1>
                            <ul>
                                <li class="under_border">
                                    <span class="ship_column_1"><h2>SHIP TO</h2></span>
                                    <span class="ship_column_2"><h2>COST</h2></span>
                                    <span class="ship_column_3"><h2>WITH ANOTHER ITEM</h2></span>
                                    <span class="ship_column_4"><h2>TIME COST(Business day)</h2></span>
                                    <span class="ship_column_5"><h2>FASTER OPTION</h2></span>
                                </li>
                                <div class="clear"></div>
                                <li class="under_border">
                                    <span class="ship_column_1">United States</span>
                                    <span class="ship_column_2">$4.95<b>USD</b></span>
                                    <span class="ship_column_3">$0.00<b>USD</b></span>
                                    <span class="ship_column_4">6- 10 Business days</span>
                                    <span class="ship_column_5 ship_column_3_padding">ups</span>
                                </li>
                                <div class="clear"></div>
                                <li class="under_border">
                                    <span class="ship_column_1">Australia</span>
                                    <span class="ship_column_2">$11.50<b>USD</b></span>
                                    <span class="ship_column_3">$1.00<b>USD</b></span>
                                    <span class="ship_column_4">2- 5 Business days</span>
                                    <span class="ship_column_5 ship_column_3_padding">ups</span>
                                </li>
                                <div class="clear"></div>
                                <li class="under_border">
                                    <span class="ship_column_1">Canada</span>
                                    <span class="ship_column_2">$7.00<b>USD</b></span>
                                    <span class="ship_column_3">$1.00<b>USD</b></span>
                                    <span class="ship_column_4">1- 2 Business days</span>
                                    <span class="ship_column_5 ship_column_3_padding">ups</span>
                                </li>
                                <div class="clear"></div>
                                <li class="under_border">
                                    <span class="ship_column_1">United Kingdom</span>
                                    <span class="ship_column_2">$11.50<b>USD</b></span>
                                    <span class="ship_column_3">$1.00<b>USD</b></span>
                                    <span class="ship_column_4">10- 20 Business days</span>
                                    <span class="ship_column_5 ship_column_3_padding">ups</span>
                                </li>
                                <div class="clear"></div>
                                <li>
                                    <span class="ship_column_1">Everywhere Else</span>
                                    <span class="ship_column_2">$12.00<b>USD</b></span>
                                    <span class="ship_column_3">$1.00<b>USD</b></span>
                                    <span class="ship_column_4">10- 20 Business days</span>
                                    <span class="ship_column_5 ship_column_3_padding">ups</span>
                                </li>
                            </ul>
                         </div>---->
                         
                        <div class="clear"></div>
                        <div class="claim_tags"><!-----[claim-tabs-starts-here]---->
                         	<div class="left_block_tags">
                            	<h1>Tags</h1>
                                <div class="tag_type_block">
                                	<?php echo BreeseeUK_taxonomy_links($data, '17') ?> 
                                </div>
                            </div>
                            <div class="right_block_tags">
                            	<h1>Material</h1>
                                <div class="tag_material"><?php echo $data->field_materials[0]['value']; ?> </div>
                            </div>
                         </div><!-----[claim-tabs-closed-here]---->
                        <div class="clear"></div>
                        <div class="other_prtoduct_slider"><!-----[other-product-slider-starts-here]---->
                        	<h1><?php echo $data->name; ?>'s other product</h1>
                            <div class="slider_contant">
                            	<?php echo _breesee_othercreationfrom($data->uid, arg(1), 'product'); ?>
                            </div>
                        </div><!-----[other-product-slider-closed-here]---->
                        <div class="clear"></div>
                        <div class="store_places"><!-----[store-places-starts-here]---->
                        	<div class="store_inner_div"><!-----[store-places--title-starts-here]---->
                            	<h1>Nearest Store to Have</h1>
                                <input type="text" value="City" class="city_textfields" />
                            </div><!-----[store-places--title-closed-here]---->
                        	
                            <div class="all_continentals"><!-----[all-continental-menu-starts-here]---->
                            	<div class="left_discription_continentals">
                                	<ul class="navigation_coninental_menu">
                                    	<li class="n_menu sub_nav_menu">
                                        	<a class="active_conti_menu" href="#">Americ</a>
                                            <div class="sub_menu_navigation">
                                            	<a href="#">Berkeley University Wall's Store</a>
                                            	<p>985 Market Street,, Berkeley<br />Bay Area</p>
                                                
                                                <a href="#">San Francsico Art Gallery</a>
                                            	<p>985 Market Street, San Francisco</p>
                                                
                                                <a href="#">Berkeley University Wall's Store</a>
                                            	<p>985 Market Street,, Berkeley<br />Bay Area</p>
                                            </div>
                                        </li>
                                        <li class="n_menu sub_nav_menu">
                                        	<a href="#">Asia</a>
                                            <div class="sub_menu_navigation">
                                            	<a href="#">Berkeley University Wall's Store</a>
                                            	<p>985 Market Street,, Berkeley<br />Bay Area</p>
                                                
                                                <a href="#">San Francsico Art Gallery</a>
                                            	<p>985 Market Street, San Francisco</p>
                                                
                                                <a href="#">Berkeley University Wall's Store</a>
                                            	<p>985 Market Street,, Berkeley<br />Bay Area</p>
                                            </div>
                                        </li>
                                        <li class="n_menu sub_nav_menu">
                                        	<a href="#">Africa</a>
                                            <div class="sub_menu_navigation">
                                            	<a href="#">Berkeley University Wall's Store</a>
                                            	<p>985 Market Street,, Berkeley<br />Bay Area</p>
                                                
                                                <a href="#">San Francsico Art Gallery</a>
                                            	<p>985 Market Street, San Francisco</p>
                                                
                                                <a href="#">Berkeley University Wall's Store</a>
                                            	<p>985 Market Street,, Berkeley<br />Bay Area</p>
                                            </div>
                                        </li>
                                        <li class="n_menu sub_nav_menu">
                                        	<a href="#">Europe</a>
                                            <div class="sub_menu_navigation">
                                            	<a href="#">Berkeley University Wall's Store</a>
                                            	<p>985 Market Street,, Berkeley<br />Bay Area</p>
                                                
                                                <a href="#">San Francsico Art Gallery</a>
                                            	<p>985 Market Street, San Francisco</p>
                                                
                                                <a href="#">Berkeley University Wall's Store</a>
                                            	<p>985 Market Street,, Berkeley<br />Bay Area</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="google_map_continentals">
                                <?php 
																$store = content_profile_load('store', $data->uid);
																//print_r($store);
																?>
                                	<p>We are here</p>
                                    <?php echo $store->field_maphtml[0]['value']; ?>
                                </div>
                            </div><!-----[all-continental-menu-closed-here]---->
                        </div><!-----[store-places-closed-here]---->
                        <div class="clear"></div>
                        <div class="costumer_thought">
                        <h1>Costomers Thought</h1>
                        <?php //echo comment_render($data, $cid = 0) ?>
                        </div>
                    </div>
                </div><!-----[clame_cover_block-closed-here]---->


<?php } ?>
</div>