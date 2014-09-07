<?php 
//print_r($data);
global $user, $base_url;
$uid = $user->uid;
drupal_add_js(drupal_get_path('module', 'breesee') . '/js/getsomefollowers.js');
drupal_add_js(drupal_get_path('module', 'breesee') . '/js/followfilter.js');
$folnos = _breesee_count_followers($uid);
$folwingnos = _breesee_count_following($uid);
$rolee = _breesee_get_role($uid);
?>
  <div class="right_claim_block1 home_right_home">	
  
  	<?php if($rolee != 'store') {?>
      <h1>Your Following <span><?php echo $folnos; ?></span></h1>
      <div class="order_format">
        <div class="foll_filter"> 
          <ul id="following" class="followfiltersclass">
            <li><a href="javascript:void(0);" class="fltr folo" rel="5">Creator</a></li>
            <li> | </li>
            <li><a href="javascript:void(0);" class="fltr folo" rel="6">City Store</a></li>
            <li> | </li>
            <li><a href="javascript:void(0);" class="fltr folo" rel="4">Members</a></li>
          </ul>
          </div>
          <div id="following_list_home" class="now_cont asdfghj" ></div>
          <div id="followers_filter_content_folo"></div>
      </div>
      <div class="clear"></div>
    <?php } ?>
    <h1>Your Followers <span><?php echo $folwingnos; ?></h1>
    <div class="order_format">
    <div class="love_icon"></div>
    	<div class="foll_filter"> 
        <ul id="follower" class="followfiltersclass">
          <li><a href="javascript:void(0);" class="fltr folw" rel="5">Creator</a></li>
          <li> | </li>
          <li><a href="javascript:void(0);" class="fltr folw" rel="6">City Store</a></li>
          <li> | </li>
          <li><a href="javascript:void(0);" class="fltr folw" rel="4">Members</a></li>
        </ul>
        </div>
        <div id="follower_list_home" class="now_cont qwertyu"></div>
        <div id="followers_filter_content_folw"></div>
    </div>
    
  </div>
