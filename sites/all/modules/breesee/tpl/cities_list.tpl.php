<div id="citylist">
<?php 
drupal_get_messages($type = NULL, $clear_queue = TRUE);
global $user, $base_url; 
if (arg(2)) { ?>
<div class="stofilters"><strong>Filters :</strong> <?php foreach ($_SESSION['city'] as $key => $val ) { echo ucfirst($key) .' : '._gettermsname($val).'&nbsp;&nbsp;'; }  ?></div>
<?php } ?>
<ul class="city_index_contant">
	<?php 
		$stores = $data['stores'];
		foreach($stores as $key=>$val){
			$uid = $val->uid;
			$udet      = user_load($uid);
			$udet_prof = content_profile_load('store', $uid);
//			print_r($udet_prof);
//			die();
			$terms = taxonomy_node_get_terms_by_vocabulary($udet_prof, 27, $key = 'tid');
  ?>
  <li>
<!--   <a href="--><?php //print $base_url.'/'.drupal_get_path_alias('user/'.$uid); ?><!--">--><?php // print theme('imagecache', 'store_list', $udet->picture);  ?><!--</a>-->
      <a href="<?php print $base_url.'/'.drupal_get_path_alias('user/'.$uid); ?>"><img width="241px" height="178px" src ="<?php print $base_url.'/'. $udet->picture;  ?>"></a>
    <div class="place_name_red"><?php foreach($terms as $term){
echo $term->name;
} ?></div>
    <h1><?php print _breesee_get_display_name($udet->uid); ?></h1>
    <p> <?php print substr($udet_prof->field_introduction[0]['value'], 0, 100); ?> ...</p>
  </li>
  <?php } ?>
</ul>
</div>
<div id="pager"><?php print drupal_render($data['pager']); ?></div>