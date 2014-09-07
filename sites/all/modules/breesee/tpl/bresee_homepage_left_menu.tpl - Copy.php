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
		$store_txt = 'Mail';
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
                	<div class="pro_my_account"><!-----[profile-heading]---->
                    MY ACCOUNT
                  </div><!-----[profile-heading]---->
                    <div class="pro_block_one"><!-----[profile-block_01]---->
                        <ul class="pro_cat_block_1"><!----------[pro_left_menu_active]------->
                            <a class="pro" href="<?php echo $base_url; ?>/user/home">
                                <li>
                                    <img src="<?php echo $base_url.'/sites/all/themes/BreeseeUK/images/city_login_page/icon_set1_img1.png'; ?>" />
                                    <h1>My Page</h1>
                                    <p>blogs, my activity</p>
                                </li>
                            </a>
                        </ul><!----------[pro_left_menu_active]------->
                        <div class="clear"></div>
                        <ul class="pro_cat_block_1"><!----------[pro_left_menu]------->
                            <a class="pro" href="<?php echo $base_url; ?>/user/myfollowers">
                                <li>
                                  <img src="<?php echo $base_url.'/sites/all/themes/BreeseeUK/images/city_login_page/icon_set1_img2.png'; ?>" />
                                    <h1>Followers </h1>
                                    <p>My fan list</p>
                                </li>
                            </a>
                        </ul><!----------[pro_left_menu]------->
                        <div class="clear"></div>
                        <ul class="pro_cat_block_1"><!----------[pro_left_menu]------->
                            <a class="pro" href="<?php echo $base_url; ?>/user/mailbox">
                                <li>
                                  <img src="<?php echo $base_url.'/sites/all/themes/BreeseeUK/images/city_login_page/icon_set1_img3.png'; ?>" />
                                    <h1><?php echo 	$store_txt; ?></h1>
                                    <p>My mailbox</p>
                                </li>
                            </a>
                        </ul><!----------[pro_left_menu]------->
                        <div class="clear"></div>
                        
                        <?php 	if (in_array('audience', $role_arr ) || in_array('creator', $role_arr ) )	{ ?>
                        <ul class="pro_cat_block_1"><!----------[pro_left_menu]------->
                            <a class="pro" href="<?php echo $base_url;?>/user/purchase">
                                <li>
                                  <img src="<?php echo $base_url.'/sites/all/themes/BreeseeUK/images/city_login_page/icon_set1_img5.png'; ?>" />
                                    <h1>Purchase List</h1>
                                    <p>My Shopping History</p>
                                </li>
                            </a>
                        </ul><!----------[pro_left_menu]------->
                        <div class="clear"></div>
                        <?php } ?>
                        
                        <ul class="pro_cat_block_1"><!----------[pro_left_menu]------->
                            <a class="pro" href="#">
                                <li>
                                  <img src="<?php echo $base_url.'/sites/all/themes/BreeseeUK/images/city_login_page/icon_set1_img4.png'; ?>" />
                                    <h1>Review </h1>
                                    <p>Manage Comments</p>
                                </li>
                            </a>
                        </ul><!----------[pro_left_menu]------->
                        <div class="clear"></div>
                        <ul class="pro_cat_block_1"><!----------[pro_left_menu]------->
                            <a class="pro" href="#">
                                <li>
                                  <img src="<?php echo $base_url.'/sites/all/themes/BreeseeUK/images/city_login_page/icon_set1_img5.png'; ?>" />
                                    <h1>Finance</h1>
                                    <p>Check my accounting</p>
                                </li>
                            </a>
                        </ul><!----------[pro_left_menu]------->
                        <div class="clear"></div>
                        <ul class="pro_cat_block_1"><!----------[pro_left_menu]------->
                            <a class="pro" href="<?php echo $base_url; ?>/user/settings">
                                <li>
                                  <img src="<?php echo $base_url.'/sites/all/themes/BreeseeUK/images/city_login_page/icon_set1_img6.png'; ?>" />
                                    <h1>Your Settings</h1>
                                    <p><?php echo $prof_txt; ?></p>
                                </li>
                            </a>
                        </ul><!----------[pro_left_menu]------->
                        <div class="clear"></div>
                        <ul class="pro_cat_block_1"><!----------[pro_left_menu]------->
                            <a class="pro" href="#">
                                <li>
                                  <img src="<?php echo $base_url.'/sites/all/themes/BreeseeUK/images/city_login_page/icon_set1_img7.png'; ?>" />
                                    <h1>Creator Account</h1>
                                    <p>Manage Create Account</p>
                                </li>
                            </a>
                        </ul><!----------[pro_left_menu]------->
                        <div class="clear"></div>
                        <!----------<ul class="pro_cat_block_1">[pro_left_menu]
                            <a class="pro" href="#">
                                <li>
                                  <img src="/sites/all/themes/BreeseeUK/images/city_login_page/icon_set1_img8.png" />
                                    <h1>Breesee Tool</h1>
                                    <p>Promotional features</p>
                                </li>
                            </a>
                        </ul><!----------[pro_left_menu]------->
                    </div><!-----[profile-block_01-closed]---->
                </div>
                <div class="pro_bottom_cat"></div>
</div>
            
            <div class="clear"></div>
 <?php global $user; 
 $role_arr = $user->roles;
 if (in_array('store', $role_arr ) ) {

	?>           
            <div class="pro_shop_centre"><!-----[product shop centre-starts-here]---->
            	<div class="pro_sh_c_block1"><!-----[block1-starts-here]---->
                	<div class="pr_blo1_head">
                   	<img src="<?php echo $base_url.'/sites/all/themes/BreeseeUK/images/city_login_page/add_new_item.jpg'; ?>" />
                    	<h1>Shop center </h1>
                </div>
                    <div class="pr_blo1_links">
                    	<a class="pro" href="<?php echo $base_url.'/node/add/product'?>">Add New Item</a>
                        <a class="pro" href="<?php echo $base_url.'/user/myshelf'?>">On my shelf</a>
                        <a class="pro" href="<?php echo $base_url.'/user/shop-setting'?>">Online shop setting</a>                    </div>
              </div><!-----[block1-starts-here]---->
                <div class="pro_sh_c_block1"><!-----[block1-starts-here]---->
                	<div class="pr_blo1_head">
                   	<img src="<?php echo $base_url.'/sites/all/themes/BreeseeUK/images/city_login_page/buy.jpg'; ?>" />
                    	<h1>Orders </h1>
                  </div>
                    <div class="pr_blo1_links">
                    	<a class="pro" href="<?php echo $base_url.'/order/soldorders'?>">Sold orders</a>
                        <a class="pro" href="#">Cancel an order</a>                    </div>
                </div><!-----[block1-starts-here]---->
                <div class="pro_sh_c_block1"><!-----[block1-starts-here]---->
                	<div class="pr_blo1_head">
                   	<img src="<?php echo $base_url.'/sites/all/themes/BreeseeUK/images/city_login_page/shipping.jpg'; ?>" />
                    	<h1>Shipping </h1>
                  </div>
                    <div class="pr_blo1_links">
                    	<a class="pro" href="#">Your shipping Menu</a>
                        <a class="pro" href="#">Shipping help</a>                    </div>
                </div><!-----[block1-starts-here]---->
                <div class="pro_sh_c_block1"><!-----[block1-starts-here]---->
                	<div class="pr_blo1_head">
                   	<img src="<?php echo $base_url.'/sites/all/themes/BreeseeUK/images/city_login_page/breezee.jpg'; ?>" />
                    	<h1>Breesee Tips </h1>
                  </div>
                    <div class="pr_blo1_links">
                    	<a class="pro" href="#">Seller handbook</a>
                      <a class="pro" href="#">Breesee Apps</a>
                    </div>
                </div><!-----[block1-starts-here]----> 
            </div>          
            <?php } 
						
  if (in_array('audience', $role_arr ) ) {

	?>           
            <div class="pro_shop_centre"><!-----[product shop centre-starts-here]----><!-----[block1-starts-here]---->
                <div class="pro_sh_c_block1"><!-----[block1-starts-here]---->
                	<div class="pr_blo1_head">
                   	<img src="<?php echo $base_url ?>/sites/all/themes/BreeseeUK/images/city_login_page/lamb.jpg" >
                    <span class="qtip-link">
                    	<div class="qtip-tooltip">You can upgrade to Creator Account and show your portfolio</div>
                    	<h1>Upgrade</h1>
                    </span>
                  </div>
                    
              </div>
                <!-----[block1-starts-here]----> 
</div>          
<?php }  if (in_array('creator', $role_arr ) ) {?>
            <div class="pro_shop_centre"><!-----[product shop centre-starts-here]----><!-----[block1-starts-here]---->
                <div class="pro_sh_c_block1"><!-----[block1-starts-here]---->
                	<div class="pr_blo1_head">
                   	<img src="<?php echo $base_url.'/sites/all/themes/BreeseeUK/images/city_login_page/lamb.jpg'; ?>" />
                    	<h1>Creations</h1>
                  </div>
                    <div class="pr_blo1_links">
                    	<a href="<?php echo $base_url?>/node/add/creations">Add new Creation</a>
                      <a href="<?php echo $base_url?>/user/mycreations">Creation Portfolio</a>
                    </div>
              </div><!-----[block1-starts-here]----> 
</div> 
<?php } ?>
</div>