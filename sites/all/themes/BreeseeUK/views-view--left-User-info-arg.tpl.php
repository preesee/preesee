<?php
global $theme_path, $base_url, $user;
$theme_path = $base_url.'/'.$theme_path;
$val = $view->style_plugin->rendered_fields[0]; 
$uimg = _breesee_get_profileimage($val['uid']);
//$my_prof = content_profile_load('creators', $user->uid);
//$my_Car=$my_prof->taxonomy;

$role = _breesee_get_role($val['uid']);
switch ($role) {
	case 'audience':
		$xx =_breesee_get_categoryName($val['uid']);            // henry.hua 2014/4/1
		break;
	case 'store':
		$xx = _breesee_get_categoryName($val['uid']);           // henry.hua 2014/4/1
		break;
	case 'creator':
		$xx =_breesee_get_categoryName($val['uid']);             // henry.hua 2014/4/1
		break;
}
?>
<div class="category_container">
        	<div class="city_profile"><!-----[profile-photo-starts-here]---->
              <?php print theme('imagecache', 'user_picture', $uimg); ?>
            	<h1><?php print _breesee_get_display_name($val['uid']) ?></h1>
              <h2><?php echo $xx; ?></h2>
<!--              <p>--><?php //print _gettermsname(2449); ?><!--</p>-->
            </div>
</div>

<?php if ($role == 'store' ) { ?>

<div class="contact_creator">
	<span><img src="<?php print $theme_path; ?>/images/map_contact.jpg" /></span>
    <span>
        <a class="findonmap" href="javascript:void(0);">Show Map</a>
        <p>Show the store ad</p>
    </span>
</div>
<div class="contact_creator">
	<span><img src="<?php print $theme_path; ?>/images/msg_send.jpg" /></span>
    <span>
        <a id="contact_user" href="javascript:void(0);" rel="<?php echo $base_url; ?>/user/contact/<?php echo arg(1); ?>" >Contact Store</a>
        <p>Send a message</p>
    </span>
</div>
<?php } else if ($role == 'creator' ) { ?>
<div class="contact_creator">
	<span><img src="<?php print $theme_path; ?>/images/msg_send.jpg" /></span>
    <span>
         <a id="contact_user" href="javascript:void(0);" rel="<?php echo $base_url; ?>/user/contact/<?php echo arg(1); ?>" >Contact Creator</a>
        <p>Send a message</p>
    </span>
</div>
<?php } ?>