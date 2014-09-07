<style>
.ad_links {
margin:2px 5px;
}
.ad_links a {
    border: 1px solid #FFFFFF;
    cursor: pointer;
    font-size: 96%;
    font-weight: bold;
    margin: 0;
    outline: 1px solid #9BABB0;
    padding: 1px 4px;
    text-decoration: none;
    text-transform: uppercase;
		float:right;
		margin: 0 10px;
}
.ad_links a.activ {
    background:#3A8BBE;
		color:#FFFFFF;
    border: 1px solid #FFFFFF;
    cursor: pointer;
    font-size: 96%;
    font-weight: bold;
    outline: 1px solid #9BABB0;
    padding: 1px 4px;
    text-decoration: none;
    text-transform: uppercase;
}
</style>
<?php 
//print_r($data);
global $user, $base_url;
if(arg(3) != 'all') { 
?>
<h2>PENDING PAYMENTS</h2>
<h5>Click on Pay Now button after completing payment</h5>
<div class="ad_links">
<a href="<?php echo $base_url; ?>/admin/breesee/salereport/all">All Orders</a>
<a href="<?php echo $base_url; ?>/admin/breesee/salereport" class="activ">Payment Pending Orders</a>
<br />
</div>
<?php } else { ?>
<h2>ALL ORDERS</h2>
<div class="ad_links">
<a href="<?php echo $base_url; ?>/admin/breesee/salereport/all" class="activ">All Orders</a>
<a href="<?php echo $base_url; ?>/admin/breesee/salereport">Payment Pending Orders</a>
</div>
<?php } ?>
<br />

<table width="600" border="0" cellpadding="3" cellspacing="0">
  <thead><tr>
    <th width="43" align="left" valign="top" scope="col">Sl No</th>
    <th width="76" align="left" valign="top" scope="col">UID</th>
    <th width="182" align="left" valign="top" scope="col">NAME</th>
    <th width="109" align="right" valign="top" scope="col">AMOUNT</th>
    <?php if(arg(3) != 'all') { ?>
    <th width="160" align="center" valign="top" scope="col">PAY NOW</th>
    <?php } ?>
  </tr>
  </thead>
  <tbody>
  <?php 
	$i = 1;
	foreach($data['results'] as $result) { ?>
  <tr>
    <td align="left" valign="top"><?php echo $i; ?></td>
    <td align="left" valign="top"><?php echo $result['user']; ?></td>
    <td align="left" valign="top"><?php echo _breesee_get_display_name($result['user']); ?></td>
    <td align="right" valign="top"><?php echo round($result['amount'],3); ?></td>
    <?php if(arg(3) != 'all') { ?>
    <td align="center" valign="top"><input type="checkbox" class="paynow" name="paynow<?php echo $i; ?>" value="<?php echo $result['user']; ?>" /></td>
    <?php } ?>
  </tr>
  <?php $i++; } ?>
  </tbody>
  <tfoot>
  <?php 
	$cspan = 4;
	if(arg(3) != 'all')
		$cspan = 5;
	
	?>
  <tr>
    <td colspan="<?php echo $cspan; ?>" align="left" valign="top"><hr /></td>
    </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="right" valign="top"><?php echo round($data['total'], 3); ?></td>
    <td align="center" valign="top">&nbsp;</td>
  </tr>
  </tfoot>
</table>
<?php echo drupal_render($data['pager']); ?>


