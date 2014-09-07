<div id="user_next">
  <ul>
  <?php 
	$uarray = $data['nextproduct'];
	$result = array_reverse($uarray);
	//print_r($uarray);
	global $user, $base_url;
	$txt = '< Previous Fun';
	if(! empty($result)) {
	foreach($result as $key => $val)
  {
	$imtgk = $val->field_image_cache[0]['filepath'];
  ?>
  <li class="right_user_text"><a href="<?php echo $base_url.'/'.drupal_get_path_alias('node/'.$val->nid); ?>"><?php  print theme('imagecache', 'showcase_list', $imtgk);  ?> <h3><?php echo $txt; ?></h3></a></li>
  <?php $txt = 'Next Fun >';} } ?>
  </ul>
</div>