<div id="creatorlist">
<?php 
drupal_get_messages($type = NULL, $clear_queue = TRUE);
global $user, $base_url; 
if (arg(2)) { ?>
<div class="stofilters"><strong>Filters :</strong> <?php foreach ($_SESSION['creator'] as $key => $val ) { echo ucfirst($key) .' : '._gettermsname($val).'&nbsp;&nbsp;'; }  ?></div>
<?php } ?>
<ul class="city_index_contant">
	<?php 
		$stores = $data['creators'];
		if(! empty($data['creators'])) {
		foreach($stores as $key=>$val){
			$uid = $val->uid;
			$udet      = user_load($uid);
			$udet_prof = content_profile_load('creators', $uid);
//			print_r($udet_prof);
//			die();
			$terms = taxonomy_node_get_terms_by_vocabulary($udet_prof, 27, $key = 'tid');
  ?>
  <li>
   <a href="<?php print $base_url.'/'.drupal_get_path_alias('user/'.$uid); ?>"><?php  print theme('imagecache', 'store_list', $udet_prof->picture);  ?></a>
    <div class="place_name_red"><?php foreach($terms as $term){
echo $term->name;
} ?></div>
    <a href="<?php print $base_url.'/'.drupal_get_path_alias('user/'.$uid); ?>"><h1><?php print $udet_prof->title; ?></h1></a>
    <p> <?php print substr($udet_prof->field_backg[0]['value'], 0, 80); ?></p>
  </li>
  <?php } 
	 }
	 else 
	 echo '<div class="sorry">Sorry No data Found !!</div>';
		 ?>
</ul>
</div>
<div class="right_pagination">
<div id="pager"><?php print drupal_render($data['pager']); ?></div>
</div>