<?php 
global $base_url;
$themepath = drupal_get_path('theme','BreeseeUK'); 
?>
<div id="contact_placeholder"></div>
<div id="store_introduction" > 
<div>Please login before you translate </div>
<!--    --><?php //print $val['field_introduction']?>
<?php 
foreach($view->style_plugin->rendered_fields as $key => $val){  
//
?>
<!--    <div class="introduction">-->
<!--        --><?php //print $val['field_about_value']; ?>
<!--    </div>-->
<div class="strtitlediv"> 
<?php print $val['title']; ?>
</div>

<div class="strimgdiv"> 
<?php print $val['field_2ext_fid']; ?>
</div>

<div  id="findonmap"> 
<img src="<?php print $base_url.'/'.$themepath; ?>/images/green-dot.png" /><span class="findonmap">Show Map</span>
</div>

<div class="strbodydiv"> 
<?php print $val['field_about_value']; ?>
</div>

<div class="strbodydiv"> 
<?php print $val['body']; ?>
</div>

<div class="strmapdiv" id="mapurl"> 
<?php print htmlspecialchars_decode($val['field_maphtml_value']); ?>
</div>

<div class="strtellusdiv"> 
<?php print $val['field_pls_value']; ?>
</div>

<div class="strtellusdiv"> 
<?php print $val['field_zpc_value']; ?>
</div>

<?php } ?>
</div>