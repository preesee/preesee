<?php
global $base_url;
if( arg(1) == 'add' || (arg(2) == 'edit')) { ?>
<style type="text/css">
<!--
.style1, .form-required {color: #FF0000 !important;}
-->
</style>

<div class="login_shelf creations_add_form from_class">
    <div class="button_login button_loginactive">
        <a href="#" class="current">New Creation</a>
      </div>
      <div class="clear"></div>
<?php 
/*print_r($form);
die();*/
unset($form['title']['#title']);
unset($form['taxonomy'][23]['#title']);
unset($form['body_field']['body']['#title']);
unset($form['field_upload'][0]['#title']);
$form['buttons']['submit']['#value'] = 'Save Changes';
?>
<div><span>Creation Title <span class="style1">*</span> </span> <span> <?php echo drupal_render($form['title']); ?></span></div>
<div><span>Creation Category <span class="style1">*</span></span> <span> <?php print drupal_render($form['taxonomy'][23]); ?></span></div>
<div id="creation_img_upload"><span> <?php print drupal_render($form['field_upload']); ?></span></div>
<div><span>Description</span>
<div> <?php echo drupal_render($form['body_field']); ?></div>
</div>
<div> <?php echo drupal_render($form['buttons']['submit']); ?> <span> 
<input type="button" onclick="javascript:parent.location='<?php echo $base_url.'/user/mycreations'; ?>'" value="Cancel" />
<div style="display:none;"> <?php echo drupal_render($form); ?></div>
</div>
<?php } else { 

//print_r($node);
//die;
$attributes = array('id' => 'creation_big_img');
drupal_add_js(drupal_get_path('theme', 'BreeseeUK') . '/js/jquery.mCustomScrollbar.js');
drupal_add_js(drupal_get_path('theme', 'BreeseeUK') . '/js/shadowbox.js');

?>
<div class="creation_detail_page">
<h1><?php echo $node->title; ?></h1>
<div class="cre_cover_div">
<div class="c_main_img"><?php print theme('imagecache', 'maximage', $node->field_upload[0]['filepath'], $alt, $title, $attributes);  ?></div>
<div id="mcs_container" class="more_imgs">
<div class="customScrollBox">
<div class="container">
<div class="content">
<ul class="more_imgs_ul">
<?php foreach($node->field_upload as $key=>$val) { 
$imgurl = imagecache_create_path('maximage',$val['filepath']); 
$attris = array('rel' => 'shadowbox '.$base_url.'/'.$imgurl); 
?>
	<li><?php print theme('imagecache', 'creator_other_product', $val['filepath'], $alt, $title, $attris);  ?></li>
<?php } ?>


</ul></div>
</div>
<div class="dragger_container">
<div class="dragger"></div>
</div>
</div>
</div>



<div class="clear"></div>
<strong></strong>
<script type="text/javascript">
$(document).ready(function(){ 
Shadowbox.init();
	  $('.more_imgs_ul li img').click(function(e) {
			e.preventDefault();
			$('.more_imgs_ul li img').removeClass('highlighted');
			$(this).addClass('highlighted');
			var newimgsrc = $(this).attr('rel');
			$('#creation_big_img').attr("src",newimgsrc);
		});
});  
$(window).load(function() {
    $("#mcs_container").mCustomScrollbar("vertical",400,"easeOutCirc",1.05,"auto","yes","yes",10);
});

</script>

<div><?php echo $node->content['body']['#value']; ?></div>
<?php } ?>
<?php //print_r($node);?>
</div>
</div>