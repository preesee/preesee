<?php 
global $theme_path, $base_url, $user;
//print_r($data);
//exit();
drupal_set_title($data->title);

$breadcrumb[] = l('Home', '<front>');
$breadcrumb[] = $data->title; // Link to current URL
drupal_set_breadcrumb($breadcrumb);
	
?>
<div class="claim_1_cover_block"><!-----[clame_cover_block-starts-here]---->
                	<div class="translate_language"><!-----[language-trnslation-block-starts-here]---->
                    	<div class="trnaslate_breesee">
                    		<h1>Help breesee translate this to</h1>
                            <a class="green_breesee" href="#">Spanish</a>
                            <?php echo l('EDIT', 'node/'.$data->nid, array('attributes' => array('class' => 'grey_breesee'))); ?>
                        </div>
                        <p>Please login before your translate, we will show your name in your chosen language version.</p>
                    </div><!-----[language-trnslation-block-closed-here]---->
                    <div class="clear"></div>
                    <div class="product_details">
                    	<div class="product_title">
                    		<h1>Name: <?php echo $data->title; ?></h1>
                        	<h2>Sold by <?php echo _breesee_get_store_name($data->uid); ?></h2>
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
                          	<p><?php echo $data->body; ?></p>
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
                        </div><!-----[projects-story-closed-here]---->
                        <div class="shping_from"><!-----[shipping form-starts-here]---->
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
                        <div class="claim_tags"><!-----[claim-tabs-starts-here]---->
                         	<div class="left_block_tags">
                            	<h1>Tags</h1>
                                <div class="tag_type_block">
                                	<?php echo BreeseeUK_taxonomy_links($data, '17'); ?> 
                                </div>
                            </div>
                            <div class="right_block_tags">
                            	<h1>Material</h1>
                                <div class="tag_material"><?php echo $data->field_materials[0]['value']; ?> </div>
                            </div>
                         </div><!-----[claim-tabs-closed-here]---->
                        <div class="clear"></div>
                        <div class="other_prtoduct_slider"><!-----[other-product-slider-starts-here]---->
                        	<h1><?php echo _breesee_get_store_name($data->uid); ?>'s other product</h1>
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
