  <?php 
  
  $nid = arg(1);  
  global $theme_path, $base_url, $user;
  $theme_path_full = $base_url.'/'.$theme_path;
  $breadcrumb[] = l('Breesee', '<front>');
  $breadcrumb[] = l($user->name, 'user/home');
  $breadcrumb[] = 'Product detail';
  drupal_set_breadcrumb($breadcrumb);

if($data->type == 'product') {
 ?> 
       
        <div class="add_steps" id="stepfour">
        		<div class="sell_now_right_container"><!-----[city-login-info-cover-div-starts-here]---->
                	<div class="button_login"><!-----[city-login-info-menu-tab-starts-here]---->
                    	<a href="#">Add New Item</a>
                    </div><!-----[city-login-info-menu-tab-closed-here]---->
                	<div class="items_onyour"><!-----[city-login-info-1st-block-starts-here]---->
                    	<ul class="breesee_item_info"><!-----[city-login-info-status-manu-starts-here]---->
                        	<li class="completed_breesee_info2"><a href="#">1.  Item Info</a></li>
                            <li class="completed_breesee_info3"><a href="#">2. images & Sort your item </a></li>
                            <li class="completed_breesee_info"><a href="#">3. Selling Info</a></li>
                            <li class="active_breesee_info2"><a href="#">4. Review & Post</a></li>
                        </ul><!-----[city-login-info-status-manu-closed-here]---->
                        <span><p>Your current language is</p></span>
                        <span><a href="#">English</a></span>
                    </div><!-----[city-login-info-1st-block-closed-here]---->
                    <div class="clear"></div>
                    <div class="breesee_login_info_blocks">
                    	<div class="review_finish_btn">
                            <div class="reviewing_your_list">
                                <h1>Review Your Listing</h1>
                            </div>
                            <div class="next_previous_cover">
                                <div class="finish_previous">
                                    <a href="#"><img src="<?php echo $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/city_store_login_sellnow02a/previousd_tag.jpg" /></a>
                                    <a href="#"><img src="<?php echo $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/city_store_login_sellnow04a/finish_btn.jpg" /></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="upload_your_images_here4">
                         	<p><b>This listing will cost a non-refundable fee of $0.20</b> USD<br />By clicking Finish you agree to pay this listing fee.</p>
                            <p>Your listing will not be live on Etsy until you click Finish. It may take up to 24 hours for newly listed item<br />to appear in Categories and Search.</p>
                         </div>
                         
                        <div class="product_editing_wrapper">
                        	<div class="h1_strip">
                            	<div class="left_edit_strip">
                                    <h2>Name: Chairman Mao</h2>
                                    <div class="edit_rightplaces pose_one">
                                    	<div class="edit_block">
                                        	<a href="<?php echo $base_url.'/node/'.$data->nid.'/edit'; ?>">Edit</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="right_edit_strip">
                                	<p><b>Price $25</b>USD</p>
                                    <div class="edit_rightplaces pose_two">
                                    	<div class="edit_block">
                                        	<a href="<?php echo $base_url.'/node/'.$data->nid.'/edit'; ?>">Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>	
                            <h3>Sold BY Giant Robot + Created by Shirtflag</h3>
                            <div class="product_photo_place_holder">
                            	<img src="<?php echo $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/city_store_login_sellnow04a/shirt_images.jpg" />
                                <div class="edit_rightplaces pose_three">
                                	<div class="edit_block">
                                		<a href="<?php echo $base_url.'/node/'.$data->nid.'/edit'; ?>">Edit</a>
                                	</div>
                                </div>	
                            </div>
                            <ul class="thumbnail_product">
                            	<li>
                                	<a href="#"><img src="<?php echo $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/claim_1/product_img.jpg" /></a>
                                	<div class="arrow_up_product"><img src="<?php echo $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/claim_1/arrow_up.jpg" /></div>
                                </li>
                                <li>
                                	<a href="#"><img src="<?php echo $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/claim_1/product_img.jpg" /></a>
                                	<div class="arrow_up_product"><img src="<?php echo $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/claim_1/arrow_up.jpg" /></div>
                                </li>
                                <li>
                                	<a href="#"><img src="<?php echo $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/claim_1/product_img.jpg" /></a>
                                	<div class="arrow_up_product"><img src="<?php echo $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/claim_1/arrow_up.jpg" /></div>
                                </li>
                                <li>
                                	<a href="#"><img src="<?php echo $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/claim_1/product_img.jpg" /></a>
                                	<div class="arrow_up_product"><img src="<?php echo $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/claim_1/arrow_up.jpg" /></div>
                                </li>
                            </ul>
                            <div class="clear"></div>
                            <div class="product_discription edit_product_position top_padding_border"><!-----[product-discription-starts-here]---->
                            <div class="edit_rightplaces pose_six">
                                	<div class="edit_block">
                                		<a href="<?php echo $base_url.'/node/'.$data->nid.'/edit'; ?>">Edit</a>
                                	</div>
                                </div>
                            <h1>Product Description</h1>
                            <p>
                            It was stated in late 2007, three of colleagues thought to do their own bussiness for reliving nervous from 
                            working in the company. In December 1st, it’s the birthday of Wrap Around.nAlmost 3 years had passed, 3 
                            partners confront with many obstrucles and crisis but Wrap Around still doing well on the bussiness. 
                            Thanks for all, customers, problems and other things we didn’t mention that make Wrap Around be here 
                            today.
                            </p>
                            <p class="discription_padding"><!-----[discription-pending-starts-here]---->
                            <span>Sizes</span>XS, S, M, M/L, L, XL<br />
                            <span>Colors</span><span>Composite/White/Blue</span><br />
                            <span>Frame</span>Advanced SL-Grade Composite, Integrated
                            Seatpost,     Custom for Shimano DI2 Electronic Fork 	
                            Advanced SL-Grade Composite, Full-Composite Over
                            Drive Steerer
                            </p><!-----[discription-pending-closed-here]---->
                            </div><!-----[product-discription-closed-here]---->
                            <div class="project_story edit_product_position top_padding_border2"><!-----[projects-story-starts-here]---->
                                <div class="edit_rightplaces pose_four">
                                	<div class="edit_block">
                                		<a href="<?php echo $base_url.'/node/'.$data->nid.'/edit'; ?>">Edit</a>
                                	</div>
                                </div>
                            	<h1>Project Story</h1>
                            	<p>
                                    Fox on a bike hand illustrated and then screen echoed on this 100% cotton cream colored tote.
                                    Flash your curves in this acutely awesome graphic tee! Vintage geometric theorems, shapes, 
                                    ofs illustrate how math can be fun! The retro drawings from French mathem
                            	</p>
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
                            </div><!-----[projects-story-closed-here]---->
                            <div class="shping_from edit_product_position top_padding_border3"><!-----[shipping form-starts-here]---->
                            	<div class="edit_rightplaces pose_four">
                                	<div class="edit_block">
                                		<a href="<?php echo $base_url.'/node/'.$data->nid.'/edit'; ?>">Edit</a>
                                	</div>
                                </div>
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
                            </div><!-----[shipping form-closed-here]---->
                            <div class="clear"></div>
                            <div class="claim_tags top_padding_border4"><!-----[claim-tabs-starts-here]---->
                                <div class="left_block_tags edit_product_position ">
                                
                                    <div class="edit_rightplaces pose_four">
                                        <div class="edit_block">
                                            <a href="<?php echo $base_url.'/node/'.$data->nid.'/edit'; ?>">Edit</a>
                                        </div>
                                    </div>
                                
                                    <h1>Tags</h1>
                                    <div class="tag_type_block">
                                        Leather   Bike  Freedom  Safe  handmade Made in US  
                                    </div>
                                </div>
                                <div class="right_block_tags edit_product_position">
                                
                                    <div class="edit_rightplaces pose_four">
                                        <div class="edit_block">
                                            <a href="<?php echo $base_url.'/node/'.$data->nid.'/edit'; ?>">Edit</a>
                                        </div>
                                    </div>
                                    
                                    <h1>Material</h1>
                                    <div class="tag_material">
                                        <a href="#">Leather</a>
                                        <a href="#">Metal</a>    
                                    </div>
                                </div>
                         </div><!-----[claim-tabs-closed-here]---->
                            <div class="clear"></div>
                            <div class="store_places top_padding_border5"><!-----[store-places-starts-here]---->
                        	<div class="store_inner_div bg_less_store_inner_div"><!-----[store-places--title-starts-here]---->
                            	<h1>Nearest Store to Have</h1>
                                <div class="right_edit_profile">
                                	<div class="edit_rightplaces pose_four">
                                		<div class="edit_block">
                                			<a href="<?php echo $base_url.'/node/'.$data->nid.'/edit'; ?>">Edit</a>
                                		</div>
                                	</div>
                                </div>
                                <input type="text" value="City" class="city_textfields" />
                            </div><!-----[store-places--title-closed-here]---->
                        	
                            <div class="all_continentals"><!-----[all-continental-menu-starts-here]---->
                            	<div class="left_discription_continentals">
                                	<ul class="navigation_coninental_menu">
                                    	<li class="n_menu sub_nav_menu">
                                        	<a class="active_conti_menu" href="#">Americ</a>
                                            <div class="sub_menu_navigation">
                                            	<a href="#">Berkeley University Wall’s Store</a>
                                            	<p>985 Market Street,, Berkeley<br />Bay Area</p>
                                                
                                                <a href="#">San Francsico Art Gallery</a>
                                            	<p>985 Market Street, San Francisco</p>
                                                
                                                <a href="#">Berkeley University Wall’s Store</a>
                                            	<p>985 Market Street,, Berkeley<br />Bay Area</p>
                                            </div>
                                        </li>
                                        <li class="n_menu sub_nav_menu">
                                        	<a href="#">Asia</a>
                                            <div class="sub_menu_navigation">
                                            	<a href="#">Berkeley University Wall’s Store</a>
                                            	<p>985 Market Street,, Berkeley<br />Bay Area</p>
                                                
                                                <a href="#">San Francsico Art Gallery</a>
                                            	<p>985 Market Street, San Francisco</p>
                                                
                                                <a href="#">Berkeley University Wall’s Store</a>
                                            	<p>985 Market Street,, Berkeley<br />Bay Area</p>
                                            </div>
                                        </li>
                                        <li class="n_menu sub_nav_menu">
                                        	<a href="#">Africa</a>
                                            <div class="sub_menu_navigation">
                                            	<a href="#">Berkeley University Wall’s Store</a>
                                            	<p>985 Market Street,, Berkeley<br />Bay Area</p>
                                                
                                                <a href="#">San Francsico Art Gallery</a>
                                            	<p>985 Market Street, San Francisco</p>
                                                
                                                <a href="#">Berkeley University Wall’s Store</a>
                                            	<p>985 Market Street,, Berkeley<br />Bay Area</p>
                                            </div>
                                        </li>
                                        <li class="n_menu sub_nav_menu">
                                        	<a href="#">Europe</a>
                                            <div class="sub_menu_navigation">
                                            	<a href="#">Berkeley University Wall’s Store</a>
                                            	<p>985 Market Street,, Berkeley<br />Bay Area</p>
                                                
                                                <a href="#">San Francsico Art Gallery</a>
                                            	<p>985 Market Street, San Francisco</p>
                                                
                                                <a href="#">Berkeley University Wall’s Store</a>
                                            	<p>985 Market Street,, Berkeley<br />Bay Area</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="google_map_continentals">
                                	<p>We are here</p>
                                    <a href="#"><img src="<?php echo $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/claim_1/google_map.jpg" /></a>
                                </div>
                            </div><!-----[all-continental-menu-closed-here]---->
                        </div><!-----[store-places-closed-here]---->
                        	<div class="clear"></div>
                            <div class="need_checkout">
                            	<div class="product_checkout_lisiting">
                                	<div class="edit_rightplaces pose_five">
                                		<div class="edit_block">
                                			<a href="<?php echo $base_url.'/node/'.$data->nid.'/edit'; ?>">Edit</a>
                                		</div>
                                	</div>
                                    
                                    
                                	<h3>Item Icon Intro</h3>
                                    <div class="producted_selected"><!-----[place-01]---->
                                        <img src="<?php echo $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/images_home_03.gif" />
                                        <div class="place_name_red">Tokyo</div>
                                        <h1>Aqua Surf Store</h1>
                                        <p>
                                            From movie stars, musicians, and skate-boa-
                                            ders to toys, technology,and history, Giant 
                                            Robot magazine cove
                                        </p>
                                    </div><!-----[place-01]---->
                              	</div>
                            	<div class="need_cover_checkout">
                            		<p>Need help? Check out image uploading help topics and advanced image help.</p>
                                </div>
                            </div>
                        </div>
                        
                    
                        <div class="cover_back_to_top">
                          <div class="next_previous">
                            	<a href="#"><img src="<?php echo $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/city_store_login_sellnow02a/previousd_tag.jpg" /></a>
                                <a href="#"><img src="<?php echo $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/city_store_login_sellnow04a/finish_btn.jpg" /></a>
                            </div>
                        </div>
                    </div>
                    
                </div><!-----[city-login-info-cover-div-closed-here]---->
      	</div>
        
        
        <?php }?>