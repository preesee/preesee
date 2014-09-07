<div style="display:none"><?php drupal_render($form['path']); drupal_render($form['buttons']['preview']);?> </div>
<?php 
print drupal_render($form);
if((arg(0) == 'node' && arg(1) == 'add' ) || (arg(2) == 'edit') || (arg(1) == 'home')) { ?>
<div style="display:none"><?php drupal_render($form['path']); drupal_render($form['buttons']['preview']);?> </div>
<?php
}  else {

	drupal_set_title(t($node->title));
	$breadcrumb[] = l('Preesee', '<front>');
	$breadcrumb[] = t($node->title);
	drupal_set_breadcrumb($breadcrumb);
	global $base_url, $user;
	$img_nody = node_load($node->nid);
?>
<div class="blog_detail">
<div class="dat_main"><span><a href="<?php print $base_url.'/'.drupal_get_path_alias('user/'.$node->uid); ?>"><?php print theme('imagecache', 'blog_owner',  _breesee_get_profileimage($node->uid)); ?></a></span> <span>
  <p><?php print date("m.d.y", $node->created);   ?></p>
  <h1><?php print $node->title;   ?></h1>
</span> </div>
<div class="blog_body"><?php print $img_nody->body;   ?></div>
<div class="blog_terms"><?php echo BreeseeUK_taxonomy_links($node, 12); ?></div>
<div class="clear"></div>
<?php if ($node->uid == $user->uid) { ?>
<div class="button-wrapper">
	<a href="<?php echo $base_url; ?>/node/<?php echo $node->nid; ?>/edit" class="round-button">Edit</a>
</div>
<?php } ?>
</div>
<?php } ?>