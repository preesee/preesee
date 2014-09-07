<?php //print_r($view); ?>
<div id="fb_status_messages" class="view-id-facebook_status_stream fbmessges">
<?php
if (is_array($view->style_plugin->rendered_fields))
{
foreach($view->style_plugin->rendered_fields as $key => $val){
$picture = _breesee_get_profileimage_from_status($val['sid']);
?>
<div class="image"><?php print theme('imagecache', 'followers_list_big', $picture)?></div>
<div class="name"><?php print $val['name']; ?></div>
<div class="message"><?php print $val['message']; ?></div>
<div class="links"><?php print $val['edit'].$val['delete'].$val['repost']; ?></div>
<div class="created"><?php print $val['created']; ?></div>
<div class="comment-box"><?php print $val['comment-box']; ?></div>
<div class="attachment"><?php print $val['attachment']; ?></div>
<div class="clear"></div>
<?php } } ?>
</div>