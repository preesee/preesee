<div class="form_cover_p_edit"> 
<?php 
//print_r($form);
//die;
$form['title']['#title'] = 'First Name';
echo drupal_render($form['title']);
echo drupal_render($form['field_lastname']);
echo drupal_render($form['field_company']);
echo drupal_render($form['field_street_add_1']);
echo drupal_render($form['field_street_add_2']);
echo drupal_render($form['field_street_add_2']);
echo drupal_render($form['field_bill_city']);
echo drupal_render($form['country']);
echo drupal_render($form['zone']);
echo drupal_render($form['postal_code']);
echo drupal_render($form['field_phone_no']);
echo drupal_render($form['buttons']['submit']);
?>
<div style="display:none;"><?php echo drupal_render($form); ?></div>
</div>