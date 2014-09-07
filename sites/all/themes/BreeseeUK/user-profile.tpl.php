<?php
global $user, $base_url;
$my_id = $user->uid;
$uid = arg(1);
if($uid == $my_id) {
	$names = _breesee_get_display_name();
	$alias = $base_url.'/'.drupal_get_path_alias('user/'.$my_id);
	$breadcrumb[] = l('Breesee', '<front>');
	$breadcrumb[] = l($names, $alias);
	drupal_set_breadcrumb($breadcrumb);
	drupal_set_title($names);
}
else {
	$names = _breesee_get_display_name(arg(1));
	$alias = $base_url.'/'.drupal_get_path_alias('user/'.arg(1));
	$breadcrumb[] = l('Breesee', '<front>');
	$breadcrumb[] = l($names, $alias);
	drupal_set_breadcrumb($breadcrumb);
	drupal_set_title($names);
}
?>