<?php 
global $theme_path, $base_url, $user;
$theme_path_full = $base_url.'/'.$theme_path;
drupal_add_js(drupal_get_path('module', 'breesee') . '/js/leftmenu.js');

$role_arr = $user->roles;
	if (in_array('audience', $role_arr ) )	{
		$css_class = 'audience';
		$store_txt = 'Mail Me';
		$prof_txt = 'Profile';
	}
	else if (in_array('store', $role_arr ) )	{
		$css_class = 'store';
		$store_txt = 'Store Mail';
		$prof_txt = 'Settings';
	}
	else if (in_array('creator', $role_arr ) )	{
		$css_class = 'creators';
		$store_txt = 'Mail ';
		$prof_txt = 'Settings';
	}
	else 	{
		$css_class = 'audience';
		$prof_txt = 'Settings';
	}
	
?>
<div class="<?php echo $css_class; ?>"> 
<div class="pro_cate" id="left_menu_one">
            	<div class="pro_top_cat"></div>
                <div class="pro_middle_cat">
                	<div class="pro_my_account">
                    MY ACCOUNT
                  </div>
                    <div class="pro_block_one">
                        <ul class="pro_cat_block_1">
                            <a class="pro" href="<?php echo $base_url; ?>/user/home">
                                <li>
                                    <img src="<?php echo $base_url.'/sites/all/themes/BreeseeUK/images/city_login_page/icon_set1_img1.png'; ?>" />
                                    <h1>My Page</h1>
                                    <p>blogs, my activity</p>
                                </li>
                            </a>
                        </ul>
                        <div class="clear"></div>
                        <ul class="pro_cat_block_1">
                            <a class="pro" href="<?php echo $base_url; ?>/user/myfollowers">
                                <li>
                                  <img src="<?php echo $base_url.'/sites/all/themes/BreeseeUK/images/city_login_page/icon_set1_img2.png'; ?>" />
                                    <h1>Followers </h1>
                                    <p>My fan list</p>
                                </li>
                            </a>
                        </ul>
                        <div class="clear"></div>
                        <ul class="pro_cat_block_1">
                            <a class="pro" href="<?php echo $base_url; ?>/user/mailbox">
                                <li>
                                  <img src="<?php echo $base_url.'/sites/all/themes/BreeseeUK/images/city_login_page/icon_set1_img3.png'; ?>" />
                                    <h1><?php echo 	$store_txt; ?></h1>
                                    <p>My mailbox</p>
                                </li>
                            </a>
                        </ul>
                        <div class="clear"></div>
                        
<!--                        --><?php //	if (in_array('audience', $role_arr ) || in_array('creator', $role_arr ) )	{ ?>
<!--                        <ul class="pro_cat_block_1">-->
<!--                            <a class="pro" href="--><?php //echo $base_url;?><!--/user/purchase">-->
<!--                                <li>-->
<!--                                  <img src="--><?php //echo $base_url.'/sites/all/themes/BreeseeUK/images/city_login_page/icon_set1_img5.png'; ?><!--" />-->
<!--                                    <h1>Purchase List</h1>-->
<!--                                    <p>My Shopping History</p>-->
<!--                                </li>-->
<!--                            </a>-->
<!--                        </ul>-->
<!--                        <div class="clear"></div>-->
<!--                        --><?php //} ?>
                        
<!--                         --><?php //global $user;
// $role_arr = $user->roles;
// if (in_array('store', $role_arr ) ) {
//
//	?><!--   <ul class="pro_cat_block_1">-->
<!--                            <a class="pro" href="--><?php //echo $base_url;?><!--/user/purchase">-->
<!--                                <li>-->
<!--                                  <img src="--><?php //echo $base_url.'/sites/all/themes/BreeseeUK/images/city_login_page/icon_set1_img5.png'; ?><!--" />-->
<!--                                    <h1>Purchase List</h1>-->
<!--                                    <p>My Shopping History</p>-->
<!--                                </li>-->
<!--                            </a>-->
<!--                        </ul>-->
<!--                        <div class="clear"></div>-->
<!--        --><?php //} ?>
<!--                        <div class="clear"></div>-->
<!--                        <ul class="pro_cat_block_1">-->
<!--                            <a class="pro" href="--><?php //echo $base_url; ?><!--/user/myfeedback">-->
<!--                                <li>-->
<!--                                  <img src="--><?php //echo $base_url.'/sites/all/themes/BreeseeUK/images/city_login_page/icon_set1_img6.png'; ?><!--" />-->
<!--                                    <h1>Feedback</h1>-->
<!--                                    <p>My Feedback</p>-->
<!--                                </li>-->
<!--                            </a>-->
<!--                        </ul>-->
<!--                  <div class="clear"></div>      -->
                 <ul class="pro_cat_block_1">
                            <a class="pro" href="<?php echo $base_url;?>/user/settings">
                                <li>
                                  <img src="<?php echo $base_url.'/sites/all/themes/BreeseeUK/images/city_login_page/icon_set1_img5.png'; ?>" />
                                    <h1>My Settings</h1>
                                    <p>My Profile Settings</p>
                                </li>
                            </a>
   </ul>
                        <?php 
	$uid = $user->uid;
	$rolee = _breesee_get_role();
	$sql     = "select aud_uid, cre_uid, str_uid from {breesee_users} where aud_uid = '$uid' OR cre_uid = '$uid' OR str_uid = '$uid' " ;
	$res     = db_query($sql);
	$row     = db_fetch_object($res);
	$aud_uid = $row->aud_uid;
	$cre_uid = $row->cre_uid;
	$str_uid = $row->str_uid;
	
//	if($aud_uid != '' && $rolee != 'audience' ) {
//	?>
<!--  <ul class="pro_cat_block_1">-->
<!--                            <a class="pro" href="--><?php //echo $base_url;?><!--/switch/audience">-->
<!--                                <li>-->
<!--                                  <img src="--><?php //echo $base_url.'/sites/all/themes/BreeseeUK/images/city_login_page/icon_set1_img5.png'; ?><!--" />-->
<!--                                    <h1>My Reader Profle</h1>-->
<!--                                    <p>Switch to Reader Profle</p>-->
<!--                                </li>-->
<!--                            </a>-->
<!--   </ul>-->
<!--  --><?php //}
//	if($cre_uid != '' && $rolee != 'creator' ) {
//	?>
<!--  <ul class="pro_cat_block_1">-->
<!--                            <a class="pro" href="--><?php //echo $base_url;?><!--/switch/creator">-->
<!--                                <li>-->
<!--                                  <img src="--><?php //echo $base_url.'/sites/all/themes/BreeseeUK/images/city_login_page/icon_set1_img5.png'; ?><!--" />-->
<!--                                    <h1>My Creator Profle</h1>-->
<!--                                    <p>Switch to Creator Profle</p>-->
<!--                                </li>-->
<!--                            </a>-->
<!--   </ul>-->
<!--  --><?php //}
//	if($str_uid != '' && $rolee != 'store') {
//	?>
<!--  <ul class="pro_cat_block_1">-->
<!--                            <a class="pro" href="--><?php //echo $base_url;?><!--/switch/store">-->
<!--                                <li>-->
<!--                                  <img src="--><?php //echo $base_url.'/sites/all/themes/BreeseeUK/images/city_login_page/icon_set1_img5.png'; ?><!--" />-->
<!--                                    <h1>My Store Profle</h1>-->
<!--                                    <p>Switch to Store Profle</p>-->
<!--                                </li>-->
<!--                            </a>-->
<!--   </ul>-->
<!--   --><?php //} ?>
   
   

                        <div class="clear"></div>
                    </div>
                </div>
                
                
                <div class="pro_bottom_cat"></div>
</div>
            
            <div class="clear"></div>
 <?php global $user; 
 $role_arr = $user->roles;
 if (in_array('store', $role_arr ) ) {

	?>           
            <div class="pro_shop_centre">
            	<div class="pro_sh_c_block1">
                	<div class="pr_blo1_head">
                   	<img src="<?php echo $base_url.'/sites/all/themes/BreeseeUK/images/city_login_page/add_new_item.jpg'; ?>" />
                    	<h1>Shop center </h1>
                </div>
                    <div class="pr_blo1_links">
                    	<a class="pro" href="<?php echo $base_url.'/node/add/product'?>">Add New Item</a>
                        <a class="pro" href="<?php echo $base_url.'/user/myshelf'?>">On my shelf</a>
<!--                        <a class="pro" href="--><?php //echo $base_url.'/user/shop-setting'?><!--">Online shop setting</a>   issue 45.4 henry hua 2014/04/20 -->
                    </div>
              </div>
                <div class="pro_sh_c_block1">
<!--                	<div class="pr_blo1_head">-->
<!--                   	<img src="--><?php //echo $base_url.'/sites/all/themes/BreeseeUK/images/city_login_page/buy.jpg'; ?><!--" />-->
<!--                    	<h1>Orders </h1>-->
<!--                  </div>-->
<!--                    <div class="pr_blo1_links">-->
<!--                    	<a class="pro" href="--><?php //echo $base_url.'/order/soldorders'?><!--">Sold orders</a>-->
<!--                      <a class="pro" href="#">Cancel an order</a>-->
<!--                      <a class="pro" href="--><?php //echo $base_url.'/user/purchase'?><!--">My Purchase</a>-->
<!--                      </div>-->
                        
                        
                </div>
                <div class="pro_sh_c_block1">
<!--                	<div class="pr_blo1_head">-->
<!--                   	<img src="--><?php //echo $base_url.'/sites/all/themes/BreeseeUK/images/city_login_page/shipping.jpg'; ?><!--" />-->
<!--                    	<h1>Shipping </h1>-->
<!--                  </div>-->
<!--                    <div class="pr_blo1_links">-->
<!--                    	<a class="pro" href="#">Your shipping Menu</a>-->
<!--                        <a class="pro" href="#">Shipping help</a>-->
<!--                    </div>-->
                </div>
                <div class="pro_sh_c_block1">
<!--                	<div class="pr_blo1_head">-->
<!--                   	<img src="--><?php //echo $base_url.'/sites/all/themes/BreeseeUK/images/city_login_page/breezee.jpg'; ?><!--" />-->
<!--                    	<h1>Breesee Tips </h1>-->
<!--                  </div>-->
<!--                    <div class="pr_blo1_links">-->
<!--                    	<a class="pro" href="#">Seller handbook</a>-->
<!--                      <a class="pro" href="#">Breesee Apps</a>-->
<!--                    </div>-->
                </div>
            </div>          
            <?php } 
						
  if (in_array('audience', $role_arr ) ) {

	?>           
<div class="pro_shop_centre">

    <div class="pro_sh_c_block1" >
        <div class="pr_blo1_head">
        <img src="<?php echo $base_url ?>/sites/all/themes/BreeseeUK/images/city_login_page/lamb.jpg" >
            <br>
        <span class="qtip-link">
            <div class="qtip-tooltip">You can upgrade to Creator Account and show your portfolio</div>
            <h1>Upgrade to</h1>
            <div style="clear:both">
                <br>
            <ul class="upgrade_prompt">

                <li><a href="/node/add/creators" class="modalframe-processed" target="_new">Creator aAccount </a></li>

                <li><a href="/node/add/store" class="modalframe-processed" target="_new">City Store Account </a></li>
            </ul>
            </div>
        </span>
        </div>
    </div>
</div>
<?php }  if (in_array('creator', $role_arr ) ) {?>
            <div class="pro_shop_centre">
                <div class="pro_sh_c_block1">
                	<div class="pr_blo1_head">
                   	<img src="<?php echo $base_url.'/sites/all/themes/BreeseeUK/images/city_login_page/lamb.jpg'; ?>" />
                    	<h1>Creations</h1>
                  </div>
                    <div class="pr_blo1_links">
                    	<a href="<?php echo $base_url?>/node/add/creations">Add new Creation</a>
                      <a href="<?php echo $base_url?>/user/mycreations">Creation Portfolio</a>
                    </div>
              </div>
</div> 
<?php } ?>



</div>