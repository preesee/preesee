<div class="login_shelf">
  <div class="button_login">
  <a href="#" class="current"><?php echo t('My Shelf'); ?></a>
  </div>
    <div class="items_onyour">
    <h2><?php echo t('Thanks for listing an Item! Share your item by'); ?> <a href="#">facebook</a></h2>
    </div>
        <div class="contants_login_sh">
          <ul class="nami_remark">
            <li class="scntr_1">Item</li>
            <li class="scntr_2">Description</li>
            <li class="scntr_3">Quantity</li>
            <li class="scntr_4">Price</li>
            <li class="scntr_5">Released time</li>
            <li class="scntr_6">Claim</li>
<!--            <li class="scntr_7">Translate  to</li>
-->          </ul>
        <div class="clear"></div>
        <?php 
        global $user, $base_url;
        foreach($data['products'] as $key=>$val){
        //print_r($val);
        ?>
        <ul class="contts_disply">
          <li class="scntr_1"><a href="<?php echo $base_url.'/'.drupal_get_path_alias('node/'.$val->nid); ?>"><?php print theme('imagecache', 'store_shlef_thumb', $val->field_image_cache[0]['filepath']);  ?></a></li>
          <li class="scntr_2">
          <p><?php echo $val->title; ?></p>
          <a href="<?php echo $base_url.'/node/'.$val->nid.'/edit'; ?>"><?php echo t('Edit'); ?></a>
          <a href="<?php echo $base_url.'/node/'.$val->nid.'/delete'; ?>"><?php echo t('Delete'); ?></a>
          </li>
          <li class="scntr_3">
          <p><?php echo $val->pkg_qty; ?></p>
          </li>
          <li class="scntr_4">
          <p><strong> $<?php echo round($val->sell_price, 2); ?> USD</strong></p>
          </li>
          <li class="scntr_5">
          <p><b><?php echo format_date($val->created - $timezone, 'custom', 'M d Y', $timezone, "en"); ?></b></p>
          </li>
          <li class="scntr_6">
          <p><?php echo _breeseeCheckClaim($val->nid); ?></p>
          </li>
<!--          <li class="scntr_7">
          <a href="#">english</a>
          </li>-->
        </ul>
        <?php } ?>
        <div class="clear"></div>
        </div>
<div id="pager"><?php print drupal_render($data['pager']); ?></div>
<div class="clear"></div>
  <div class="congradu">
  <div class="congradili_text"><p><?php //echo t('Congratulation! would you like to Translate this to'); ?></p></div>
  </div>
<div class="blank_spacing">&nbsp;</div>
</div>