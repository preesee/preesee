<?php 
global $base_url;
drupal_add_js(drupal_get_path('theme', 'BreeseeUK').'/js/recent_highlight.js');
?>
<div class="recent_add">
                	<div class="rec_heading">
                        <h1>Recently Listed Creators</h1>
                       <!-- <h2>See more</h2> -->
                    </div>
                    <ul class="photos_bootom" id="res_listed_stores">
                    <?php foreach($view->style_plugin->rendered_fields as $key => $val) { 
										//print_r($val);
										$user_d = user_load($val['uid']);
										?>
                    <li id="<?php echo $val['uid']; ?>"><a href="<?php print $base_url.'/'.drupal_get_path_alias('user/'.$val['uid']); ?>" rel="<?php print $base_url.'/store/'.$val['uid']; ?>">
										<?php  print theme('imagecache','recent_city_list', $user_d->picture);  ?></a></li>
                    <?php } ?>
                    </ul>
                    <div class="botto_plca_dis" id="botto_plca_dis">
                    <?php 
										$display = 'block';
										foreach($view->style_plugin->rendered_fields as $key => $val) { ?>
                    <div id="sss<?php echo $val['uid']; ?>" class="stor_info" style="display:<?php echo $display; ?>">
                    	<h1><?php //echo $val['field_fname_value'].' '.$val['field_lname_value'];
											echo _breesee_get_display_name($val['uid']); ?></h1>
                      <p><?php echo $val['field_backg_value']; ?></p>
                    </div>  
                      <?php $display = 'none'; } ?>
                    </div>
                    
                </div>