<div>
<?php 
foreach($view->style_plugin->rendered_fields as $key=>$val){
//print_r($val);
//die();
$profileimage = _breesee_get_profileimage($val['uid'])

?>
<div class="dat_main"><span><?php print theme('imagecache', 'blog_owner', $profileimage); ?></span> <span>
  <p><?php print $val['created'];   ?></p>
  <h1><?php print l($val['title'], $val['path']);   ?></h1>
</span> </div>

<div class="whole_content_midd">
  <div class="whole_content_middle_p"><?php $blog = node_load($val['nid']); print $blog->body;   ?></div>
</div>
<div class="clear"></div>
<?php } ?>
<div id="pager"><?php print $pager; ?></div>
</div>