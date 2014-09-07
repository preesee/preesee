<div id="user_next">
  <ul>
  <?php 
	$uarray = $data['nextusers'];
	//print_r($uarray);
	global $user, $base_url;
	$txt = '< Previous Fun';
	if(! empty($uarray)) {
	foreach($uarray as $key => $val)  {
	$imtgk = $val->picture;
  ?>
  <li class="right_user_text"><a href="<?php echo $base_url.'/'.drupal_get_path_alias('user/'.$val->uid); ?>"><?php  print theme('imagecache', 'showcase_list', $imtgk);  ?> <h3><?php echo $txt; ?></h3></a></li>
  <?php $txt = 'Next Fun >';} } ?>
  </ul>
</div>