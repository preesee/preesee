<div class="clear"></div>
<div id="creation_page_block">
<?php //echo _bree_creation_filter(); ?>
<div id="user_creations">
<ul class="stor_tab3produl sidenavgation">
<?php 
global $base_url;
$creations = $data['fav_pro'];
$i = 1;
if(! empty($creations)) {
foreach($creations as $key=>$val){ 
$node = node_load($val->nid);
$pict = $val->field_image_cache[0]['filepath'];
		$c = $i%3;
		$x = ($c == 0) ? "right": "left";
?>
<li class="<?php echo $x; ?> makeabs">
<a class="makerel" href="<?php echo $base_url; ?>/favorite_nodes/delete/<?php echo $val->nid; ?>" title="Remove from Favorites"> x </a>
<a href="<?php echo $base_url.'/'.drupal_get_path_alias('node/'.$val->nid); ?>" rel="<?php echo $val->nid; ?>" class="creations"><?php print theme('imagecache', 'store_page_product_images', $pict); ?></a>
<h1><?php print $val->title; ?></h1>
<span><?php echo BreeseeUK_taxonomy_links($node, 17) ?></span>
</li>
<?php $i++; } } ?>
</ul>
</div>
</div>
</div>

<script type="text/javascript" language="javascript">
$(function() {
        // Add Confirmation dialogs for all Deletes
        $("a.makerel").live('click', function(event) {
            return fConfirmDelete();
        });
});

function fConfirmDelete( ) {
    return confirm('Are you sure you wish to delete this ?');
} 
</script>