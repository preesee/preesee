<?php 
global $base_url;
if($data['type'] == 'creations') {

if(! empty($data['otherdesign_from'])) {

$attributes = array("width" => '130', "height" => '135',); ?>
<div id="wrap"> 
<h1>Other Creations </h1>
<ul id="mycarousel" class="jcarousel-skin-tango"> 
<?php 
foreach($data['otherdesign_from'] as $key=>$val){?>
    <li><a href="javascript:void(0);" rel="<?php echo $val->nid; ?>" class="creations"><?php print theme('imagecache', 'creator_other_product', $val->field_upload[0]['filepath'], $alt, $title, $attributes); ?> </a></li> 
<?php } ?>
</ul> 
</div>
<?php } } else { global $theme_path, $base_url, $user; if( ! empty($data['otherdesign_from'])) {?>
<div >
<h1>Other Product </h1>
  <ul id="mycarousel" class="jcarousel-skin-tango slide_ul_li">
  	<?php foreach($data['otherdesign_from'] as $key=>$val){ if(file_exists($val->field_image_cache[0]['filepath']))  { ?>
    <li><a href="<?php print $base_url.'/'.drupal_get_path_alias('node/'.$val->nid); ?>"><?php print theme('imagecache', 'other_product', $val->field_image_cache[0]['filepath']);  ?></a></li>
    <?php }  } ?>
  </ul>
</div>
<?php } } ?>