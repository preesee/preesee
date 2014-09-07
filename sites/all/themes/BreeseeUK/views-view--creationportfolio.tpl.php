 <?php 
 //print_r($view);
 global $user, $base_url;
 $uid = $user->uid;
 $timezone = variable_get('date_default_timezone', 0);

 ?>                 <div class="items_onyour">
                    	<h1>There are currently <?php echo count($view->style_plugin->rendered_fields); ?> items on your creation portfolio <br /><a href="<?php print $base_url.'/'.drupal_get_path_alias('user/'.$uid); ?>">view your creations</a></h1>
                    </div>
                    <div class="contants_login_sh">
                    	<ul class="nami_remark">
                        	<li class="scntr_1">Item</li>
                            <li class="scntr_2">Description</li>
                            <li class="scntr_5">Created Date </li>
                            <li class="scntr_6">Sold in</li>
                        </ul>
                        <div class="clear"></div>
                        <?php foreach($view->style_plugin->rendered_fields as $key => $val) {  
												 
												 //$dispdateone = format_date($val['created'], 'custom', 'M d Y', $timezone, "en");
												 ?>
                        <ul class="contts_disply">
                        	<li class="scntr_1"><?php echo $val['field_upload_fid']; ?></li>
                            <li class="scntr_2">
                            	<p><?php echo $val['title']; ?></p>
                            	<?php echo $val['delete_node']; ?>
                              <?php echo $val['edit_node']; ?>                           
                            </li>
                            
                            <?php 
$date1 = $val['created'];
$date2 = date('Y-m-d h:i:s');	
								
$datediff = dateDiff($date2, $date1).'fghfhfg';
$origdatediff = explode(',', $datediff)
//printf("%d years, %d months, %d days\n", $years, $months, $days);

														?>
                           <li class="scntr_5">
                            	<p><b> <?php echo $origdatediff[0];?> </b></p>
                            </li>
                            <li class="scntr_6 creation_soldin">
                            	<?php echo _breesee_get_claimstore_lost($val['nid']); ?>
                            </li>
                            
                        </ul>
                        <div class="clear"></div>
                        <?php } ?>
              </div>
                    <div class="clear"></div>
                    <div class="blank_spacing">&nbsp;</div>
<div class="right_pagination">
<div id="pager"><?php print $pager; ?></div>
</div>

<?php 

function dateDiff($time1, $time2, $precision = 6) {
    // If not numeric then convert texts to unix timestamps
    if (!is_int($time1)) {
      $time1 = strtotime($time1);
    }
    if (!is_int($time2)) {
      $time2 = strtotime($time2);
    }
 
    // If time1 is bigger than time2
    // Then swap time1 and time2
    if ($time1 > $time2) {
      $ttime = $time1;
      $time1 = $time2;
      $time2 = $ttime;
    }
 
    // Set up intervals and diffs arrays
    $intervals = array('year','month','day','hour','minute','second');
    $diffs = array();
 
    // Loop thru all intervals
    foreach ($intervals as $interval) {
      // Set default diff to 0
      $diffs[$interval] = 0;
      // Create temp time from time1 and interval
      $ttime = strtotime("+1 " . $interval, $time1);
      // Loop until temp time is smaller than time2
      while ($time2 >= $ttime) {
	$time1 = $ttime;
	$diffs[$interval]++;
	// Create new temp time from time1 and interval
	$ttime = strtotime("+1 " . $interval, $time1);
      }
    }
 
    $count = 0;
    $times = array();
    // Loop thru all diffs
    foreach ($diffs as $interval => $value) {
      // Break if we have needed precission
      if ($count >= $precision) {
	break;
      }
      // Add value and interval 
      // if value is bigger than 0
      if ($value > 0) {
	// Add s if value is not 1
	if ($value != 1) {
	  $interval .= "s";
	}
	// Add value and interval to times array
	$times[] = $value . " " . $interval;
	$count++;
      }
    }
 
    // Return string with times
    return implode(", ", $times);
  }
	?>