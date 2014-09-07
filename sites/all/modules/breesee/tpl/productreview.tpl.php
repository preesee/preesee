<?php 
$node = arg(1);
$data = drupal_clone(node_load($node));
$strinfo = content_profile_load('store', $data->uid);
$maps = $strinfo->field_maphtml[0]['value'];
$mapcoords = explode("#", $maps);
?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
$(document).ready( function () {
			function initialize() {
				var latlng = new google.maps.LatLng(<?php echo $mapcoords[0]; ?>, <?php echo $mapcoords[1]; ?>);
				var settings = {
					zoom: 15,
					center: latlng,
					mapTypeControl: true,
					mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
					navigationControl: true,
					navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
					mapTypeId: google.maps.MapTypeId.ROADMAP};
				var map = new google.maps.Map(document.getElementById("map_canvasddd"), settings);
				var contentString = '<div id="content">'+
					'<div id="siteNotice">'+
					'</div>'+
					'<h1 id="firstHeading" class="firstHeading"><?php echo $strinfo->title; ?></h1>'+
					'<div id="bodyContent">'+
					'<p><?php echo substr(trim($strinfo->field_about[0]['value']), 0, 150); ?>...</p>'+
					'</div>'+
					'</div>';
				var infowindow = new google.maps.InfoWindow({
					content: contentString
				});
				
				var companyImage = new google.maps.MarkerImage('<?php echo $base_url; ?>/images/store_loc.png',
					new google.maps.Size(100,50),
					new google.maps.Point(0,0),
					new google.maps.Point(50,50)
				);

				var companyPos = new google.maps.LatLng(<?php echo $mapcoords[0]; ?>, <?php echo $mapcoords[1]; ?>, 8);
				var companyMarker = new google.maps.Marker({
					position: companyPos,
					map: map,
					icon: companyImage,
					title:"<?php echo $strinfo->title; ?>",
					zIndex: 3});
					google.maps.event.addListener(companyMarker, 'click', function() {
					infowindow.open(map,companyMarker);
					// toggleBounce(companyMarker);
				});
			}
			
			function toggleBounce(marker) {
				if (marker.getAnimation() != null) {
				marker.setAnimation(null);
				} else {
				marker.setAnimation(google.maps.Animation.BOUNCE);
				}
			}
			initialize();
});	

</script>


<?php 

drupal_add_js(drupal_get_path('module', 'breesee') . '/js/imag_replace.js');
global $theme_path, $base_url, $user;
$theme_path_full = $base_url.'/'.$theme_path;

?>
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
                                    <a href="<?php echo $base_url.'/node/'.$data->nid.'/edit'; ?>"><img src="<?php print $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/city_store_login_sellnow02a/previousd_tag.jpg" /></a>
                                    <a href="<?php print $base_url.'/publishme/'.$data->nid ?>" class="submitme"><img src="<?php print $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/city_store_login_sellnow04a/finish_btn.jpg" /></a>
                                </div>
                            </div>
                      </div>
                <div class="product_editing_wrapper">
                        	<div class="h1_strip">
                            	<div class="left_edit_strip">
                                    <h2>Name: <?php echo $data->title; ?></h2>
                                    <div class="edit_rightplaces pose_one">
                                    	<div class="edit_block">
                                        	<?php echo l('Edit','node/'.$data->nid.'/edit/1') ?>
                                      </div>
                                    </div>
                            </div>
                                <div class="right_edit_strip">
                                	<p><b>Price $ <?php echo floatval(round($data->sell_price, 2)); ?>
                                  </b>USD</p>
                                    <div class="edit_rightplaces pose_two">
                                    	<div class="edit_block">
                                        	<?php echo l('Edit','node/'.$data->nid.'/edit/3') ?>
                                      </div>
                                    </div>
                                </div>
                          </div>	
                            <h3>Sold BY <?php echo _breesee_get_display_name($data->uid); ?></h3>
                          <div class="product_slider">
                        	<div class="display_product"><?php $attributes = array('id' => 'prod_big'); print theme('imagecache', 'product_detail_big', $data->field_image_cache[0]['filepath'], $alt, $title, $attributes);  ?></div>
                           <?php if (count($data->field_image_cache) >= 2) { ?>
                            <ul class="thumbnail_product">
                            <?php foreach($data->field_image_cache as $key => $val) { 
														$imgurl = imagecache_create_path('product_detail_big',$val['filepath']);
															?>
                            	<li>
                                	<a href="javascript:void(0);" rel="<?php echo $base_url.'/'.$imgurl; ?>"><?php  print theme('imagecache', 'product_detail_thumbs', $val['filepath']);  ?></a>
                                	<div class="arrow_up_product"><img src="<?php print $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/claim_1/arrow_up.jpg" /></div>
                              </li>
                               <?php  } ?>
                            </ul>
                             <?php } ?>
                        </div>
                        <div class="clear"></div>
                        
                       
                            <div class="edit_product_position top_padding_border"><!-----[product-discription-starts-here]---->
                            <div class="edit_rightplaces pose_six">
                                	<div class="edit_block">
                                		<?php echo l('Edit','node/'.$data->nid.'/edit/1') ?>
                                	</div>
                              </div>
                            <h1>Product Description</h1>
                            <div><?php //echo $data->content['body']['#value']; 
														echo $data->body; ?></div>
                        
                            </div><!-----[product-discription-closed-here]---->
                            <div class="clear"></div>
                            <div class="project_story edit_product_position top_padding_border2"><!-----[projects-story-starts-here]---->
                                <div class="edit_rightplaces pose_four">
                                	<div class="edit_block">
                                		<?php echo l('Edit','node/'.$data->nid.'/edit/1') ?>
                                	</div>
                                </div>
                            	<h1>Product Story</h1>
                            	<div><?php echo $data->field_product_story[0]['value']; ?></div>
                 	</div><!-----[projects-story-closed-here]---->
                            	<!-----[shipping form-closed-here]---->
<div class="clear"></div>
                            <div class="claim_tags top_padding_border4"><!-----[claim-tabs-starts-here]---->
                                <div class="left_block_tags edit_product_position ">
                                
                                    <div class="edit_rightplaces pose_four">
                                        <div class="edit_block">
                                            <?php echo l('Edit','node/'.$data->nid.'/edit/2') ?>
                                        </div>
                                    </div>
                                    <h1>Top Level</h1>
                                    <div class="tag_type_block">
                                       <?php echo BreeseeUK_taxonomy_links($data, '17'); ?> 
                                    </div>
                                    
                                
                                    <h1>Tags</h1>
                                    <div class="tag_type_block">
                                       <?php echo BreeseeUK_taxonomy_links($data, '31'); ?> 
                                    </div>
                                </div>
                                <div class="right_block_tags edit_product_position">
                                
                                    <div class="edit_rightplaces pose_four">
                                        <div class="edit_block">
                                            <?php echo l('Edit','node/'.$data->nid.'/edit/1') ?>
                                        </div>
                                    </div>
                                    
                                    <h1>Material</h1>
                                    <div class="tag_material">
                                        <?php echo $data->field_materials[0]['value']; ?>
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
                                	<!--		< ?php echo l('Edit','node/'.$data->nid.'/edit/images') ?>-->
                                		</div>
                                	</div>
                                </div>
                            <!--    <input type="text" value="City" class="city_textfields" />-->
                            </div><!-----[store-places--title-closed-here]---->
                        	
                            <div class="all_continentals"><!-----[all-continental-menu-starts-here]---->
                            	<div class="left_discription_continentals">
                                	<?php echo _breesee_store_other_locations();  ?>
                              </div>
                                <div class="google_map_continentals">
                                	<p>We are here</p>
                                    <div id="map_canvasddd" style="height:350px; width:248px;"></div>
                                </div>
                            </div><!-----[all-continental-menu-closed-here]---->
                        </div><!-----[store-places-closed-here]---->
                        	<div class="clear"></div>
                            <div class="need_checkout">
                            	<div class="product_checkout_lisiting">
                                	<div class="edit_rightplaces pose_five">
                                		<div class="edit_block">
                                			<?php echo l('Edit','node/'.$data->nid.'/edit/2') ?>
                                		</div>
                                	</div>
                                    
                                    
                                	<h3>Item Icon Intro</h3>
                                  <div class="producted_selected"><!-----[place-01]---->
                                  <?php  print theme('imagecache', 'store_list', $data->field_image_cache[0]['filepath']);  ?>
                                  <div class="place_name_red"><?php  print ucfirst(_breesee_get_cityname($data->uid, 'store')); ?></div>
                                  <h1 class="itemintro"><?php echo $data->title; ?></h1>
                                  <p><?php echo $data->field_surf[0]['value']; ?></p>
                                  </div><!-----[place-01]---->
                             	</div>
                            	<div class="need_cover_checkout">
                            		<p>Need help? Check out image uploading help topics and advanced image help.</p>
                              </div>
                            </div>
                </div>
                  <div class="cover_back_to_top">
                            <div class="back_to_top_leftblock">
                                <div class="back_top"> </div>
                            </div>
                            <div class="next_previous">
                            	<a href="#"><img src="<?php print $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/city_store_login_sellnow02a/previousd_tag.jpg" /></a>
                                <a href="<?php print $base_url.'/publishme/'.$data->nid ?>" class="submitme" ><img src="<?php print $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/city_store_login_sellnow04a/finish_btn.jpg" /></a>
                            </div>
                        </div>
                    </div>
                    
                </div><!-----[city-login-info-cover-div-closed-here]---->