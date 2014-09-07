<?php 
drupal_add_js(drupal_get_path('theme', 'BreeseeUK') . '/js/acivityhelper.js');
drupal_add_css(drupal_get_path('theme', 'BreeseeUK') . '/css/fb_custom.css');
?>
<?php if (arg(0) != 'activityfiltyer' ) { ?>
<!--<div id="activity_filter">
<form id="activity_filter_frm">
	<ul class="activity_filter">
  	<li><span id="ac_fil"></span></li>
     <li>
      <input class="acfilter" id="you" type="checkbox" value="3" checked="checked" />
      <label for="you">You</label>
    </li>
  <li>
      <input class="acfilter" id="yourshop" type="checkbox" value="2" checked="checked" />
      <label for="yourshop">Your Shop</label>
    </li>
    <li>
      <input class="acfilter" id="yourcircle" type="checkbox" value="1" checked="checked" />
      <label for="yourcircle">Your Circle</label>
    </li>
    <li class="txty">View Activity: </li>
  </ul>
</form>
</div>-->
<div class="clear"></div>
<?php } ?>
<div class="my_activity" id="my_activity_section">
<?php 
//print_r($view);
//die;
$fields = $view->result;
foreach($fields as $key=>$val) {
	$val->message;
		if(is_numeric($val->message)) {
		$sid = facebook_status_load($val->message);
		print facebook_status_show($sid, $options = array('extras' => TRUE ));
	}
	else {
		echo $val->message;
	}
}
?>
<div id="pager"><?php echo $pager; ?></div>
</div>