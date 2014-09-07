<?php 
$val = $view->style_plugin->rendered_fields[0]; 
?>
<div class="contact_placeholder"></div>
<div class="creator_profile_tab"> 
<h1>Profile</h1>
<div class="prof_content"><?php echo $val['field_backg_value']; ?></div>
<h2>Resume</h2>
<div class="prof_content_p"><p><?php echo $val['field_sch1_value']; ?></p><p><?php echo $val['field_sch2_value']; ?></p></div>
</div>