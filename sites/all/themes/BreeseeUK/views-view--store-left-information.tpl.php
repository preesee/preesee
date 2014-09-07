<?php 
global $base_url;$user;
$themepath = drupal_get_path('theme','BreeseeUK'); 
//krumo($view);
//print_r($view->style_plugin->rendered_fields);
//die;
?>
<div class="hom_cat storeleft">
  <h3>Information</h3>
 	<div class="ho_cat_contan store_info">
  <?php 
	foreach($view->style_plugin->rendered_fields as $key => $val){  
	//BreeseeUK_taxonomy_links($node, 12);
	?>
   	<h2>Category</h2>
    <p><?php print $val['tid_1']; ?></p>
    <h2>Open Since</h2>
    <p><?php print $val['created']; ?></p>
    <h2>Address</h2>
    <p><?php print $val['field_addr1_value']; ?> <br /> <?php print $val['field_addr2_value']; ?> </p>
    <h2>Country</h2>
    <p><?php print $val['field_new_country_value']; ?></p>
    <h2>City</h2>
    <p><?php print $val['field_city_value']; ?></p>
    <h2>Telephone</h2>
    <p><?php print $val['field_phn_value']; ?></p>
    <h2>Store Policy</h2>
    <a href="#">Click and see more</a>
    <?php 
		}
		?>
 	</div>
  
 <h3>Travel Tips</h3>
 	<div class="ho_cat_contan store_info">
   	<h2>Bus Stop</h2>
    <p>Line 37</p>
    <h2>Offer Language</h2>
    <p>English<br />
Spanish</p>
 	</div>
  
  <h3>Weather Report</h3>
 	<div class="ho_cat_contan store_info">
   	<h2>Bus Stop</h2>
    <p>Line 37</p>
 	</div>
</div>
