<?php
global $user;
$val = $view->style_plugin->rendered_fields[0];
$view->result[0]->uid

?>
<div class="hom_cat storeleft city_left_new_class">
            	<h3>Information</h3>
 	<div class="ho_cat_contan store_info">

                    <h2>WebSite</h2>
                    <p><?php print $val['field_website_value']; ?></p>
<!--                	<h2>Specialities</h2>-->
<!--                    <p>--><?php //echo _breesee_get_SpecialtiesName($view->result[0]->uid); ?><!--</p>-->
                    <h2>Current Location</h2>
                    <p><?php print $val['field_current_country_value']; ?></p>
                    <p><?php print $val['field_current_city_value']; ?></p>
                    <h2>Hometown</h2>
                    <p><?php print $val['field_new_country_value']; ?></p>
                    <p><?php print $val['field_city_value']; ?></p>
                    <h2>Language</h2>
                    <p><?php print $val['language']; ?></p>
                    <h2>Second Language</h2>
                    <p><?php print $val['field_sec_language_value']; ?></p>
                    <h2>Awards</h2>
                    <p><?php print $val['field_award_value']; ?></p>
<!--                    <h2>Local Time</h2>-->
<!--                    <p></p>-->

<!--            issue67 remove skill 2014.05.27        <h2>Skill</h2>-->
<!--                    <p>--><?php //print $val['field_skill_value']; ?><!--</p>-->
                    
<!--                    <h2>Local Time</h2>-->
<!--                    <p>-->
<!--                    --><?php //
//										$city = urlencode($val['field_city_value']);
//										$xml = file_get_contents('http://www.worldweatheronline.com/feed/tz.ashx?key=62d7931c2e062138112410&q='.$city);
//										$timee = strtotime(_breesee_xmltoArray($xml));
//										print $date = format_date($timee, 'custom', 'H:i:s', "en");
//
//										?>
<!--                    </p>-->
 </div>
</div>