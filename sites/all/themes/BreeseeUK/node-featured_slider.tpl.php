<?php 

//print_r($form);
//die();
global $theme_path, $base_url, $user;
$theme_path = $base_url.'/'.$theme_path;
$form['title']['#value'] = uniqid();
//$form['buttons']['submit']['#value'] = 'Upload';
unset($form['#field_info']['widget']['label']);
unset($form['field_featured_slider']['#title']);
unset($form['field_featured_slider']['#title']);
?>

                    <div class="city_logi_block1">
                       <div class="left_cares">
											 <?php 
											 $blockm = module_invoke('bresee_home', 'block', 'view', 10);
												print $html = $blockm['content'];
												?>    
                        </div>                 
                    	<div class="right_cares">
                    	<h1>Shop Banner preview:</h1>
                        <p>
                            Your slide show time setting is
                            Your page reader can slso click the 
                            below blue point to read back and 
                            forth.
                        </p>
                    </div>
                </div>
                	<div class="clear"></div>
                	<div class="choos_img">
                    	
                        <a class="choos2" href="#">
                        	<div class="ch_inner1">
                            	<span class="ch1"><h1>3</h1></span>
                                <span class="ch2"><p>Change slides<br />order</p></span>
                        </div>
                        </a>
                    
                    	<a class="choos2" href="#">
                        	<div class="ch_inner1">
                            	<span class="ch1"><h1>2</h1></span>
                                <span class="ch2"><p>Upload<br />image</p></span>
                      </div>
                    </a>
                        
                    	<a class="choos1" href="#">
                        	<div class="ch_inner">
                            	<span class="ch1"><h1>1</h1></span>
                                <span class="ch2"><p>choose your<br />Image</p></span>
                      </div>
                    </a>
                        
                       
  </div>
                    <div class="clear"></div>
                    <div class="choos_img">
                    	<div class="now_1">Now</div>
                        <div class="now_1">Next</div>
                        <div class="now_1">Final</div>
                    </div>
                    <div class="clear"></div>
                    <div class="city_sett_step">
                    	<h1>Step 1: Find Your /images</h1>
                        <div class="img_law">
                        	<div class="left_img_low">
                            	<p>Use .jpg, .gif or .png files no larger than 2MB.<br />Banner /images is  490 pixels wide and 285 pixels high.</p>
                          </div>
                            <div class="right_img_low">
                            	<h1>Categories and Tags</h1>
                            </div>
                            
                        </div>
                        <div class="cover_upload_shopping">
                        	<?php 
													print drupal_render($form['field_featured_slider']); 
													?>
                          <div class="actions">
                          <h1>Step 2 : upload</h1>
                          <?php echo drupal_render($form['buttons']['submit']);  ?>
                          <h1>Step 3 : Click  and drag to reorder above images</h1>
                          </div>
                          
                        </div>
                    </div>
<div style="display:none;" > 
<?php 
print drupal_render($form); 
?>         
</div>