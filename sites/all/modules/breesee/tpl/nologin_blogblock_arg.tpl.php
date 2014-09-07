<div class="contact_placeholder"></div>
<div id="extra_filter">
<?php 
global $base_url, $user;
	$uisd = $user->uid;
	$role = _breesee_get_role($uisd);
	
	if((arg(0) == 'user') && ($role != 'audience')) {
		$html .='<div class="viewblk" id="storetab3btm">';
		$block = module_invoke('bresee_home', 'block', 'view', 4);
		$html .= $block['content'];
		$html .='</div>';
		print $html;
	}
?>
</div>

<div id="nologin_blog_block" class="divgrow-wrapper">
<?php 
drupal_get_messages('warning');

if(! empty($data['blogs'])) {
foreach($data['blogs'] as $key=>$val){
	//print_r($val);
$user_det = user_load($val->uid);
?>
<div class="dat_main"><span><a href="<?php print $base_url.'/'.drupal_get_path_alias('user/'.$val->uid); ?>"><?php print theme('imagecache', 'blog_owner', $user_det->picture); ?></a></span> <span>
  <p><?php print date("m.d.y", $val->created);   ?></p>
  <h1><?php print l($val->title, $val->path);   ?></h1>
</span> </div>

<div class="whole_content_midd">
  <div class="whole_content_middle_p"><?php print $val->body;   ?></div>
</div>
<div class="clear"></div>
<?php } } ?>
<div id="pager"><?php print drupal_render($data['pager']); ?></div>
</div>