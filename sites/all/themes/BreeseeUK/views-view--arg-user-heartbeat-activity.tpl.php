<?php drupal_add_css(drupal_get_path('theme', 'BreeseeUK') . '/css/fb_custom.css');?>
<div class="clear"></div>
<div class="my_activity" id="my_activity_section">
<?php  
$fields = $view->result;
if( count($fields) !=  0) {
//print_r($view);
//die;
foreach($fields as $key=>$val) {
	$val->message;
		if(is_numeric($val->message)) {
		$sid = facebook_status_load($val->message);
		print facebook_status_show($sid, $options = array('extras' => TRUE ));
	}
	else {
		
		$pos = strpos($val->message,'myownprodshowsd');
		if($pos === false) {
			 echo $val->message;
		}
				
	}
}
?>
<div id="pager"><?php echo $pager; ?></div>
<?php } else { 
print $view->display['default']->display_options['empty'];
} ?>
</div>