<?php if( arg(1) == 'add' || (arg(2) == 'edit')) { 
//print_r($form);
//die();
unset($form['title']['#title']);
unset($form['field_add_one'][0]['value']['#title']);
unset($form['field_add_two'][0]['value']['#title']);
unset($form['field_phn'][0]['value']['#title']);
unset($form['country']['#title']);
unset($form['zone']['#title']);
unset($form['postal_code']['#title']);
$form['country']['#required'] = 1;
?>
<style type="text/css">
<!--
.style1 {color: #0099FF}
-->
</style>

<table width="500" border="0" cellspacing="0" cellpadding="3">
  <tr>
    <td width="154"><span class="style1"></span></td>
    <td width="14">&nbsp;</td>
    <td width="314">&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style1">Name</span></td>
    <td>&nbsp;</td>
    <td><?php echo drupal_render($form['title']); ?></td>
  </tr>
  <tr>
    <td><span class="style1">Adderss Line 1</span></td>
    <td>&nbsp;</td>
    <td><?php echo drupal_render($form['field_add_one']); ?></td>
  </tr>
  <tr>
    <td><span class="style1">Adderss Line 2</span></td>
    <td>&nbsp;</td>
    <td><?php echo drupal_render($form['field_add_two']); ?></td>
  </tr>
  <tr>
    <td><span class="style1">Country</span></td>
    <td>&nbsp;</td>
    <td><?php echo drupal_render($form['country']); ?></td>
  </tr>
  <tr>
    <td><span class="style1">Zone</span></td>
    <td>&nbsp;</td>
    <td><?php echo drupal_render($form['zone']); ?></td>
  </tr>
  <tr>
    <td><span class="style1">Postal code</span></td>
    <td>&nbsp;</td>
    <td><?php echo drupal_render($form['postal_code']); ?></td>
  </tr>
  <tr>
    <td><span class="style1">Phone</span></td>
    <td>&nbsp;</td>
    <td><?php echo drupal_render($form['field_phn']); ?></td>
  </tr>
  <tr>
    <td><span class="style1"></span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style1"></span></td>
    <td>&nbsp;</td>
    <td><?php echo drupal_render($form['buttons']['submit']); ?></td>
  </tr>
</table>
<div style="display:none;"> <?php echo drupal_render($form); ?></div>
<?php } ?>