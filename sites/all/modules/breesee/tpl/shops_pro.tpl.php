<div id="shops_pro">
<?php 
drupal_get_messages($type = NULL, $clear_queue = TRUE);
print_r($data['fil_arr']);
global $user, $base_url; 
if (arg(2)) { ?>
<div class="stofilters" style="display:none;"><strong>Filters :</strong> <?php //foreach ($_SESSION['shoppro'] as $key => $val ) { echo ucfirst($key) .' : '._gettermsname($val).'&nbsp;&nbsp;'; }  ?></div>
<?php } ?>
<ul class="city_index_contant">
	<?php 
		$stores = $data['shops_pro'];
		if(is_array($stores)) {
            foreach($stores as $key=>$val){
                $nid = $val->nid;
                $product = node_load($nid);

                //print_r($product);
                //die();
                if($product->type=='product')
                {
                    ?>
                    <li>
                        <a href="<?php echo drupal_get_path_alias('node/'.$nid); ?>"><?php  print theme('imagecache', 'store_list', $product->field_image_cache[0]['filepath']);  ?></a>
                        <div class="place_name_red"><?php  print ucfirst(_breesee_get_cityname($product->uid, 'store')); ?></div>
                        <a href="<?php echo drupal_get_path_alias('node/'.$nid); ?>"><h1><?php print $product->title; ?></h1></a>
                        <p> <?php print substr($product->field_surf[0]['value'], 0, 100); ?> ...</p>
                    </li>
                <?php
                }elseif($product->type=='creations')
                {
                ?>
                    <li>
                        <a href="<?php echo drupal_get_path_alias('node/'.$nid); ?>"><?php  print theme('imagecache', 'creations_list', $product->field_upload[0]['filepath']);  ?></a>
                        <div class="place_name_red"><?php  print ucfirst(_breesee_get_cityname($product->uid, 'creator')); ?></div>
                        <a href="<?php echo drupal_get_path_alias('node/'.$nid); ?>"><h1><?php print $product->title; ?></h1></a>
                        <p> <?php print substr($product->field_surcr[0]['value'], 0, 100); ?> ...</p>
                    </li>
<?php
                }
            }
        }
	else 	 
	echo '<div class="sorry">Sorry No Results Found !!</div>';
 ?>
</ul>
</div>
<div id="pager"><?php print drupal_render($data['pager']); ?></div>
