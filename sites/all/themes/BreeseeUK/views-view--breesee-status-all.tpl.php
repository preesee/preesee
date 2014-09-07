<?php
drupal_add_css(drupal_get_path('theme', 'BreeseeUK') . '/css/fb_custom.css');
drupal_add_js(drupal_get_path('theme', 'BreeseeUK').'/js/tabhelper.js');
global $user;
?>
<div class="clear"></div>
<div class="facebook_status_box view-id-breesee_status_all" id="fb_status_messages" >
<?php 
//print_r($view);
//die();

//foreach($view->style_plugin->rendered_fields as $key=>$val) { $pict = _breesee_get_profileimage($val['uid']);?>
	<div class="creator_history_block">
<!--                    	<div class="creator_history_left_block">-->
<!--                        	<div class="creator_user_block">-->
<!--                            	<div class="creator_user">-->
<!--                                	--><?php //echo theme('imagecache', 'fb_status_img', $pict) ?>
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="creator_history_right_block">-->
<!--                        	<div class="creator_history_title">-->
<!--                            	<span class="wrap_around">--><?php //echo _breesee_get_display_name($val['uid']); ?><!--</span>-->
<!--<!--                              <div class="stat_links facebook-status-links">-->
<!--<!--                              	--><?php ////echo $val['edit']; ?>
<!--<!--                                --><?php ////echo $val['delete']; ?>
<!--<!--                              </div>-->
<!--                          </div>-->
                           	<div class="creator_wrap_content">
<!--                                <p>--><?php //echo $val['message']; ?><!--</p>-->
                                <?php echo breesee_getBlogByuid($user->uid)   ?>
<!--                                <div class="creator_comment_block">-->
<!--                                	--><?php //if ($val['attachment'] != "") { ?>
<!--                                  	<div>--><?php //echo $val['attachment']; ?><!--</div>-->
<!--                                  --><?php //} ?>
<!--                                </div>-->
<!--                                <div class="creator_block_more">-->
<!--                                	--><?php //echo $val['comment-box']; ?>
<!--                                </div>-->
                            </div>           
<!--                        </div>-->
                    </div>
  <?php// } ?>
  <div id="tabhelper_useractivity">      
  <div id="pager"><?php echo $pager; ?></div>          
  </div>
</div>




<!--<div>-->
<!--    --><?php
//    foreach($view->style_plugin->rendered_fields as $key=>$val){
////print_r($val);
////die();
//       // $profileimage = _breesee_get_profileimage($val['uid'])
//
//        ?>
<!--        <div class="dat_main"><span>--><?php //print theme('imagecache', 'blog_owner', $profileimage); ?><!--</span> <span>-->
<!--  <p>--><?php //print $val['created'];   ?><!--</p>-->
<!--  <h1>--><?php //print l($val['title'], $val['path']);   ?><!--</h1>-->
<!--</span> </div>-->
<!---->
<!--        <div class="whole_content_midd">-->
<!--            <div class="whole_content_middle_p">--><?php //$blog = node_load($val['nid']); print $blog->body;   ?><!--</div>-->
<!--        </div>-->
<!--        <div class="clear"></div>-->
<!--    --><?php //} ?>
<!--    <div id="pager">--><?php //print $pager; ?><!--</div>-->
<!--</div>-->