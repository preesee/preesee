<!--<div class="left_discription_continentals">
<div id="scroller-header">
  < ?php $i = 1; foreach($data['address']  as $key=>$val) {?>
    <a href="#panel-< ?php echo $i; ?>" rel="panel" class="selected">< ?php echo _breesee_uc_get_country($val->country);  ?></a>
< ?php $i++; }  ?>
</div>

<div id="scroller-body">
    <div id="mask">
        <div id="panel">
        
< ?php  $i = 1; foreach($data['address']  as $key=>$val) {?>
			

< ?php $i++; } ?>
</div>
    </div>
</div>
</div>-->

<div class="left_discription_continentals">	
<ul class="str_othr_locn">
<?php  $i = 1; foreach($data['address']  as $key=>$val) {?>
	<li>
  	<div id="panel-<?php echo $i; ?>">
          <b><?php echo $val->first_name; ?></b>
          <p><?php echo $val->last_name; ?></p>
          <p><?php echo $val->street1; ?></p>
          <p><?php echo $val->city; ?></p>
          <p><?php echo _breesee_uc_get_zone($val->zone); ?></p>
          <p><?php echo $val->postal_code; ?></p>
    </div>
  </li>
<?php $i++; } ?>
</ul>
</div>