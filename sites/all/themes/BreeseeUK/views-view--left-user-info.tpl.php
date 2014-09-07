<?php
$val = $view->style_plugin->rendered_fields[0]; 
$uimg = _breesee_get_profileimage($val['uid']);
?>
<div class="city_profile"><!-----[profile-photo-starts-here]---->
	<div class="city_profiles"><?php print theme('imagecache', 'user_picture', $uimg); ?></div>
  <h1><?php print _breesee_get_display_name(); ?></h1>
  <p><?php print _breesee_get_city($val['uid']); ?></p>
</div>
