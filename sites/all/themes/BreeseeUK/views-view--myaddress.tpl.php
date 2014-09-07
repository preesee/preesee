<ul class="myaddress_view">

		<?php 
		foreach($view->style_plugin->rendered_fields as $key => $val){  
		?>
    
    <li> 
    <input type="radio" class="addrad" name="def_add" value="<?php echo $val['nid'] ?>" title="Set As Default" />
    <div class="add_wrap">
    	<h3><?php echo $val['title'] ?></h3>
      <h4><?php echo $val['field_add_one_value']; ?></h4>
      <h5><?php echo $val['field_add_two_value']; ?></h5>
      <p><?php echo $val['field_phn_value']; ?></p>
      <p><?php echo _breesee_uc_get_zone($val['field_uc_zone_value']); ?></p>
      <p><?php echo _breesee_uc_get_country($val['field_uc_country_value']); ?></p>
      <p><?php echo $val['field_uc_post_value']; ?></p>
      <span><?php echo $val['edit_node'] ?></span>&nbsp;&nbsp;<span><?php echo $val['delete_node']; ?></span>
    </div>
    </li>
    <?php 
		} 
		?>
  
</ul>