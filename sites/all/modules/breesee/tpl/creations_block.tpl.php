<div class="clear"></div>
<div id="creation_page_block">
<div id="user_creations">
<ul class="stor_tab3produl sidenavgation">
<?php 
$creations = $data['creations'];
$i = 1;
if(! empty($creations)) {
foreach($creations as $key=>$val){ 
$node = node_load($val->nid);
$pict = $val->field_upload[0]['filepath'];
		$c = $i%3;
		$x = ($c == 0) ? "right": "left";
?>
<li class="<?php echo $x; ?>">
<a href="<?php echo $base_url.'/'.drupal_get_path_alias('node/'.$val->nid); ?>" target="_blank"><?php print theme('imagecache', 'store_page_product_images', $pict); ?></a>
<h1><?php print substr($val->title, 0, 40); ?>...</h1>
<span><?php echo BreeseeUK_taxonomy_links($node, 17) ?></span>
</li>
<?php $i++; } } 
else echo '<div class="sorry">Sorry No data Found !!</div>';
?>
</ul>
</div>
</div>
</div>
