<?php 
global $base_url;
$themepath = drupal_get_path('theme','BreeseeUK'); 
//print_r($view);
//die;
?>
<div class="Showcase_ho">
<h1>Showcase List</h1>
 <?php 
	foreach($view->style_plugin->rendered_fields as $key => $val){  
	?>
                    <ul>
                    	<li class="left_r"><a href="<?php print $base_url.'/'.drupal_get_path_alias('user/'.$val['uid']); ?>"><?php echo theme('imagecache', 'showcase_list',_breesee_get_profileimage($val['uid'])); ?></a></li>
                        <li class="right_r">
                        	<h1><?php echo $val['title']; ?></h1>
                           <p><?php echo $val['field_city_value']; ?></p>
                        </li>
                    </ul>
                    <?php } ?>
</div>                    
 