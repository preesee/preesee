<?php
global $user;
$val = $view->style_plugin->rendered_fields[0]; 
//print_r($val);
//$my_prof = content_profile_load('store', $user->uid);
?>
<div class="hom_cat storeleft city_left_new_class">
            	<h3>Information</h3>
 	<div class="ho_cat_contan store_info">
                    <h2>Current Location</h2>
                    <p><?php print $val['field_city_value']; ?></p>
<!--                        <p>--><?php //print _breesee_get_city($user->uid); ?><!--</p>-->
                    <h2>Local Time</h2>
                    <p>
                    <?php 
										$city = urlencode($val['field_city_value']);
										$xml = file_get_contents('http://www.worldweatheronline.com/feed/tz.ashx?key=62d7931c2e062138112410&q='.$city);
										$timee = strtotime(_breesee_xmltoArray($xml));
										print $date = format_date($timee, 'custom', 'H:i:s', "en");
										?>
                    </p>
 </div>
</div>