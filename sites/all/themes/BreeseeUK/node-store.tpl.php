<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
$(document).ready( function () {
googleMaps(44.44516004517235, 327.3088560408203, 1);

$('#edit-field-addr1-0-value').blur(function() {
	makemap();
});
$('#edit-field-addr2-0-value').blur(function() {
	makemap();
});
$('#edit-field-state-pro-reg-0-value').blur(function() {
	makemap();
});
	
});


function makemap() {
	
var totaddress = $('#edit-field-addr1-0-value').val() + ' '+ $('#edit-field-addr2-0-value').val() + ' ' + $('#edit-field-state-pro-reg-0-value').val()
	geocoder.geocode({"address": totaddress }, function(results, status) { 
    if (status == google.maps.GeocoderStatus.OK) { 
      map.setZoom(14); 
      map.setCenter(results[0].geometry.location); 
    } else { 
      // alert("Geocode was not successful for the following reason: " + status); 
    } 
  }); 

}

function googleMaps (lat, lng, zoom) { 
    geocoder = new google.maps.Geocoder(); 
    var myLatlng = new google.maps.LatLng(lat, lng); 
    var myOptions = { 
      zoom: zoom, 
      center: myLatlng, 
      mapTypeId: google.maps.MapTypeId.TERRAIN 
    } 
    map = new google.maps.Map(document.getElementById("onemap_canvas"), myOptions); 
    var marker = new google.maps.Marker({ 
        position: myLatlng,  
        map: map 
    }); 
    google.maps.event.addListener(map, "center_changed", function(){ 
      document.getElementById("latitude").value = map.getCenter().lat(); 
      document.getElementById("longitude").value = map.getCenter().lng(); 
			$('#edit-field-maphtml-0-value').val(map.getCenter().lat() +'#'+ map.getCenter().lng() +'#'+ map.getZoom());
      marker.setPosition(map.getCenter()); 
      document.getElementById("zoom").value = map.getZoom(); 
    }); 
    google.maps.event.addListener(map, "zoom_changed", function(){ 
      document.getElementById("zoom").value = map.getZoom(); 
    }); 
  } 
 </script>
<?php 

global $theme_path, $base_url, $user;
$theme_path_full = $base_url.'/'.$theme_path;

if(arg(1) == 'add' || arg(2) == 'edit') {

//$chksql = db_result(db_query("SELECT count(*) FROM node where type = 'store' and uid =  ". $user->uid));
//if($chksql != 0 ) {
//	drupal_set_message("There is already an application pending for Breesee's review. Please be patient");
//	drupal_goto('user/home');
//}

$breadcrumb[] = l('Breesee', '<front>');
$breadcrumb[] = l($user->name, 'user/home');
$breadcrumb[] = 'Apply for Store Account';
drupal_set_breadcrumb($breadcrumb);
drupal_set_title(t('Apply for Store Account'));
if ( $user->uid == 0) {
	drupal_goto('user/register/store');
}
drupal_add_js(drupal_get_path('theme', 'BreeseeUK') . '/js/str_upgrade.js');
$form['field_email1']['#attributes'] = array('class' => 'required');

?>
<div class="upgrade_to_store"> 
            <div class="main_container" id="storstepone" ><!-----------[middle-container-starts-here]----------->
        		<div class="creator_regstep1"><!-----------[Creator Account wrapper first block starts-here]----------->
                	<div class="breesee_account"><!-----------[Creator Account wrapper starts-here]----------->
       					<div class="logo_creator_acc"><!-----------[Creator Account logo-starts-here]----------->
            			<a href="#">
                        	<img src="<?php echo $base_url.
'/sites/all/themes/BreeseeUK/images/store_reg_step1/store_reg_logo.jpg'; ?>" />
                        </a>
                    	</div><!-----------[Creator Account logo closed starts-here]----------->
            			<div class="text_log_creator_acc">Store Account</div><!-----------[Creator  starts starts-here]----------->
                	</div><!-----------[Creator Account wrapper closed-here]----------->
                    <div class="clear"></div>
                    <div class="apps_steps"><!-----------[Application process cover starts here]----------->
                		<div class="applic_proces">Application Process</div><!-----------[Application text starts here]----------->
                   		<div class="stepsss"> <!-----------[steps starts here]----------->
                    	
                        <a class="tabs2 corner" href="javascript:void(0);">
                        	<div class="ch_inner1">
                            	<span class="ch1"><h1>3</h1></span>
                                <span class="ch4"><p>Review & Submit</p></span>
                            </div>
                        </a>
                    
                    	<a class="tabs3 corner2 two" href="javascript:void(0);">
                        	<div class="ch_inner1">
                            	<span class="ch1"><h1>2</h1></span>
                                <span class="ch4"><p>YOUR ARTWORK</p></span>
                            </div>
                        </a>
                        
                    	<a class="tabs1 corner3 one" href="javascript:void(0);">
                        	<div class="ch_inner1">
                            	<span class="ch1"><h1>1</h1></span>
                                <span class="ch4"><p>YOUR Expertise</p></span>
                            </div>
                        </a>
                        
                    </div><!-----------[steps closed here]----------->
                	</div><!-----------[Application process cover closed here]----------->
                </div><!-----------[Creator Account wrapper first block closed-here]---------->
                <div class="clear"></div>
                <div class="steps_coverdiv"><!-----------[Creator Account first step whole wrapper starts-here]---------->
                 <div class="storecoverdiv">
                	<h1>Pick Your Desired Store Name</h1>
                    <div class="warning"><!-----------[Warning block starts-here]---------->
                    	<div style="overflow:hidden; clear:both;"><?php  $form['title']['#value']=$user->name; print drupal_render($form['title']); ?><span id="u_stat" class="uname_val"></span></div>
                        
                        <div class="warn_cover">
                        	<span class="war_atag"><a href="#">warning</a></span>
                            <span class="text_ptag">
                            	<p>
                               		Once you set your store name, you will not be able to change it again. 
For more information, please read Preesee's<a href="#">application policy</a>.
                                </p>
                            </span>
                        </div>
                        
                        <h2>Your Personal URL: <a href="javascript:return false;"><?php echo $base_url; ?>/city/<span id="srurl"></span></a></h2>
                        <p>Your URL will NOT be active until your store application is approved.</p>
                        
                    </div><!-----------[Warning block closed-here]---------->
                    <h6>About your store</h6>
                    <div class="forms_steps"><!-----------[Required fields starts-here]---------->
                    	<ul class="store_field_steps">
                            <li>
                            	<?php print drupal_render($form['field_about']); ?>
                            </li>
                        </ul>
                    </div><!-----------[Required fields closed-here]---------->
                    <!-----------[Required fields closed-here]---------->
                    <div class="forms_steps adjusted"><!-----------[Required fields starts-here]---------->
                        	<span>Store Email <b>*</b></span>
                            <span>
                            	<?php print drupal_render($form['field_email1']); ?>
                            </span>
                    </div>
                    
<!--                    <h1>Do you own any Physical Stores?</h1>-->
<!--               	  	<div class="store_radio_box">-->
<!--                    	20140502 issue 53-->
<!--                       	 -->
<!--                        	--><?php // print drupal_render($form['field_own']); ?>
<!--                       	 -->
<!--                  	</div>-->
                    <div id="optioanl_step_str">
                  	<div class="border_box"></div>
                  	<h6>Your Physical Store Address</h6>
                  	<h3><b>*</b>Required fields</h3>
                    <!-----------[Required fields closed-here]---------->
                    <div class="clear"></div>
                               
                    <div class="forms_steps"><!-----------[Required fields starts-here]---------->
                    	<ul class="store_field_steps">
                        	<li class="store_first_leftnames">Store Category</li>
                            <li class="store_second_rightfields">
                            	<?php print drupal_render($form['taxonomy']['18']); ?>
                            	<b>*</b>
                            </li>
                        </ul>
                    </div><!-----------[Required fields closed-here]---------->
                    <div class="clear"></div>
                    <div class="forms_steps"><!-----------[Required fields starts-here]---------->
                    	<ul class="store_field_steps">
                        	<li class="store_first_leftnames">Avatar</li>
                            <li class="store_second_rightfields">
                            	<?php 
													$form['picture']['picture_upload_register']['#size'] = 0;
													print drupal_render($form['field_avtr']);
													?>
                            	<b>*</b>
                            </li>
                        </ul>
                    </div><!-----------[Required fields closed-here]---------->
                    <div class="clear"></div>
                    <?php //if(arg(2)=="edit"){ ?>
                  	<div class="forms_steps"><!-----------[Required fields starts-here]---------->
                    	<ul class="store_field_steps">
                        	<li class="store_first_leftnames">Country</li>
                            <li class="store_second_rightfields">
                            	<?php $form['taxonomy'][13]['#title'] = '';
			print drupal_render($form['field_new_country']); ?> 
                            	<b>*</b>
                            </li>
                        </ul>
                    </div><!-----------[Required fields closed-here]---------->
                    <div class="clear"></div>
                    <?php // } ?>
                    <div class="forms_steps"><!-----------[Required fields starts-here]---------->
                    	<ul class="store_field_steps">
                        	<li class="store_first_leftnames">Address Line 1</li>
                            <li class="store_second_rightfields">
                            	<?php print drupal_render($form['field_addr1']); ?>
                            	</li>
                        </ul>
                    </div><!-----------[Required fields closed-here]---------->
                    <div class="clear"></div>
                    <div class="forms_steps"><!-----------[Required fields starts-here]---------->
                    	<ul class="store_field_steps">
                        	<li class="store_first_leftnames">Address Line 2</li>
                            <li class="store_second_rightfields">
                            	<?php print drupal_render($form['field_addr2']); ?>
                            	<b>*</b>
                            </li>
                        </ul>
                    </div><!-----------[Required fields closed-here]---------->
<!--                    --><?php //if(arg(2)=="edit"){ ?>
                    <div class="clear"></div>
                    <div class="forms_steps"><!-----------[Required fields starts-here]---------->
                    	<ul class="store_field_steps">
                        	<li class="store_first_leftnames">City</li>
                            <li class="store_second_rightfields">
                            	 <?php print drupal_render($form['field_city']); ?>
                            	<b>*</b>
                            </li>
                        </ul>
                    </div><!-----------[Required fields closed-here]---------->
<!--                    --><?php //} ?>
                    <div class="clear"></div>
                    <div class="forms_steps"><!-----------[Required fields starts-here]---------->
                    	<ul class="store_field_steps">
                        	<li class="store_first_leftnames">State/ Province / Region</li>
                            <li class="store_second_rightfields">
                            	<?php print drupal_render($form['field_state_pro_reg']); ?>
                            	<b>*</b>
                            </li>
                        </ul>
                    </div><!-----------[Required fields closed-here]---------->
                    <div class="clear"></div>
                    <div class="forms_steps"><!-----------[Required fields starts-here]---------->
                    	<ul class="store_field_steps">
                        	<li class="store_first_leftnames">ZIP/ Post Code</li>
                            <li class="store_second_rightfields">
                            	<?php  print drupal_render($form['field_zpc']); ?>
                            	<b>*</b>
                            </li>
                        </ul>
                    </div><!-----------[Required fields closed-here]---------->
                    <div class="clear"></div>
                    <div class="forms_steps"><!-----------[Required fields starts-here]---------->
                    	<ul class="store_field_steps">
                        	<li class="store_first_leftnames">Phone Number</li>
                            <li class="store_second_rightfields">
                          <?php print drupal_render($form['field_phn']); ?>
                            </li>
                        </ul>
                    </div><!-----------[Required fields closed-here]---------->
                    <div class="clear"></div>
                    <div class="mapinfos">Start typing your Address so that we can locate you. Or drag the map so that your location get centered in the map.</div>
                     <div class="clear"></div>
                    <div id="onemap_canvas" style="height:300px; width:658px; float:right; margin:5px 0px;"></div>
                                <input id="latitude" type="hidden" />
                                <input id="longitude" type="hidden" />
                                <input id="zoom" type="hidden" value="12" />
                     <div class="clear"></div>           
                    <h1>Your Physical Store Images</h1>
                    <div class="physical_images"><!-----------[Physical exterior and interior images starts-here]---------->
                    	<div class="cover_physical_img"><!-----------[cover starts-here]---------->
                        	<span>
                            	<img src="<?php echo $base_url.
'/sites/all/themes/BreeseeUK/images/store_reg_step1/physical_image1.jpg'; ?>" />
                                2 shop exterior photos
                            </span>
                            <span>
                            	<img src="<?php echo $base_url.
'/sites/all/themes/BreeseeUK/images/store_reg_step1/physical_image2.jpg'; ?>" />
                            	3 shop interior photos
                            </span> 
                        </div><!-----------[cover closed-here]---------->
                        <div class="image_footer"><!-----------[discription starts-here]---------->
                        	<h1>SAMPLE IMAGES FOR STORE FRONT</h1>	
                            <p>
                                Use .jpg, .gif or .png images files no larger than 1MB. images has to be at least 500px X 500px<br />
                                Please upload 2 exterior images and 3 interior images of your physical store
                            </p>
                        </div><!-----------[discription closed-here]---------->
                        <div class="store_image_upload"><!-----------[image upload block starts-here]---------->
                        	<span class="title_store_photo"><p>2 Exterior images</p></span>
                            <span class="upload_store_photo">
                            	
                                	
                                	 <?php print drupal_render($form['field_2ext']); ?>
                                   
                                	<?php print drupal_render($form['field_2ext2']); ?>
                                    
                               
                            </span>
                        </div><!-----------[image upload block closed-here]---------->
                        <div class="store_image_upload"><!-----------[image upload block starts-here]---------->
                        	<span class="title_store_photo"><p class="padding_extream">3 Interior images</p></span>
                            <span class="upload_store_photo">
                            	
                                	 <?php print drupal_render($form['field_3ext3']); ?>
                                 
                                	 <?php print drupal_render($form['field_3ext4']); ?>
                                    
                                      <?php print drupal_render($form['field_3ext5']); ?>
                            </span>
                        </div><!-----------[image upload block closed-here]---------->
                    </div><!-----------[Physical exterior and interior images closed-here]---------->
                    <div class="clear"></div>
                    </div>
                    <div class="store_next_step_btn"><!-----------[Next step starts-here]---------->
                    	<a  id="crenext1" onclick="javascript:stepnext(1)" href="javascript:void(0)">Next Step</a>
                    </div><!-----------[Next step closed-here]---------->
                    <div class="clear"></div>
                 </div>
                </div><!-----------[Creator Account first step whole wrapper closed-here]---------->
                
          </div><!-----------[middle-container-closed-here]---------->
     
          <div class="clear"></div>  
      <div id="storsteptwo" class="regsteps">
          <div class="main_container"><!-----------[middle-container-starts-here]---------->
        		<div class="store_registration_step1"><!-----------[Creator Account wrapper first block starts-here]---------->
                	<div class="breesee_account"><!-----------[Creator Account wrapper starts-here]---------->
       					<div class="logo_creator_acc"><!-----------[Creator Account logo-starts-here]---------->
            				<a href="#">
                        		<img src="<?php echo $base_url.
'/sites/all/themes/BreeseeUK/images/store_reg_step1/store_reg_logo.jpg'; ?>" />
                        	</a>
                    	</div><!-----------[Creator Account logo closed -here]---------->
            			<div class="text_log_creator_acc">Store Account</div><!-----------[Creator Account logo_text starts starts-here]---------->
                	</div><!-----------[Creator Account wrapper closed-here]---------->
                    <div class="clear"></div>
                    <div class="apps_steps"><!--------------------[Application process cover starts here]------------------------->
                		<div class="applic_proces">Application Process</div><!--------------------[Application text starts here]------------------------->
                   		<div class="stepsss"><!--------------------[steps s here]------------------------->
                    	
                        <a class="tabs3 corner" href="javascript:void(0);">
                        	<div class="ch_inner1">
                            	<span class="ch1"><h1>3</h1></span>
                                <span class="ch4"><p>Review & Submit</p></span>
                            </div>
                        </a>
                    
                    	<a class="tabs1 corner2 two" href="javascript:void(0);">
                        	<div class="ch_inner1">
                            	<span class="ch1"><h1>2</h1></span>
                                <span class="ch4"><p>YOUR ARTWORK</p></span>
                            </div>
                        </a>
                        
                    	<a class="tabs2 corner3 one" href="javascript:void(0);">
                        	<div class="ch_inner1">
                            	<span class="ch1"><h1>1</h1></span>
                                <span class="ch4"><p>YOUR Expertise</p></span>
                            </div>
                        </a>
                        
                    </div><!--------------------[steps closed here]------------------------->
                	</div><!--------------------[Application process cover closed here]------------------------->
                </div><!-----------[Creator Account wrapper first block closed-here]---------->
                <div class="clear"></div>
                <div class="store_registration_step2">
                	<h1>Please tell us what types of products you are selling in your store</h1>
                    <?php print drupal_render($form['field_pls']); ?>
                    <h1>Your Product Images</h1>
                    <p>
                        Use .jpg, gif or .png image files no larger than 1MB. The images have to be at least 500px wide. 
                        Please upload 2 images from different angles.
                    </p>
                    <div class="store_step2_image_cover">
                    	<span class="store_step2_img"><img src="<?php echo $base_url.
'/sites/all/themes/BreeseeUK/images/user_regi_step3/art_angle1.jpg'; ?>" /></span>
                        <span class="store_step2_img"><img src="<?php echo $base_url.
'/sites/all/themes/BreeseeUK/images/user_regi_step3/art_angle2.jpg'; ?> " /></span>
                    </div>
                    <div class="store_step2_img_discription">
                    	SIMPLE IMAGES IN DIFFERENT ANGLES
                    </div>
                    <p>Upload images for at least one product in your store </p>
                    <div class="image_upload">
                    	<span class="img_uploader1">
                        	<p>Item</p>
                   	<b>*</b>
                        </span>
                        <span class="img_uploader2">
                        	<?php print drupal_render($form['field_itm1']); ?>
                        </span>
                        <span class="img_uploader3">
                        	<?php	print drupal_render($form['field_itm2']); ?>
                        </span>
                    </div>
                    
                    <div class="image_upload">
                    	<span class="img_uploader1">
                        	<p>Item2</p>
                      </span>
                        <span class="img_uploader2">
                        	<?php	print drupal_render($form['field_itm02']); ?>
                        </span>
                        <span class="img_uploader3">
                        	 <?php	 print drupal_render($form['field_item03']); ?>
                        </span>
                    </div>
                    
                    <div class="image_upload">
                    	<span class="img_uploader1">
                        	<p>Item3</p>
                      </span>
                        <span class="img_uploader2">
                        	<?php	 print drupal_render($form['field_itm3']); ?>
                        </span>
                        <span class="img_uploader3">
                        	<?php	 print drupal_render($form['field_itm04']); ?>
                        </span>
                    </div> 
                    
                    <div class="store_next_step2_btn"><!-----------[Next step starts-here]---------->
                    	<a id="crenext2" onclick="javascript:stepnext(2)" href="javascript:void(0)" >Next Step</a>
                  </div>
             </div><!-----[middle-container-closed-here]---->
 </div></div>         
<div style="display:none;" >
<?php print drupal_render($form); ?>
</div>

       </div>
  <?php } elseif(arg(1)=='settings'){
	

$breadcrumb[] = l('Preesee', '<front>');
$breadcrumb[] = l($user->name, 'user/home');
$breadcrumb[] = 'Apply for Store Account';
drupal_set_breadcrumb($breadcrumb);
drupal_set_title(t('Apply for Store Account'));
global $user;
if ( ! $user->uid ) {
	drupal_goto('user/register/store');
}
drupal_add_js(drupal_get_path('theme', 'BreeseeUK') . '/js/str_upgrade.js');


?>
<style>
.store_registration_step2{
 margin:0px;
}
.physical_images {
margin:0px;
}
</style>

<div class="upgrade_to_store"> 
            <div class="main_container" id="storstepone" ><!-----------[middle-container-starts-here]----------->
                <div class="steps_coverdiv"><!-----------[Creator Account first step whole wrapper starts-here]---------->
                 <div class="storecoverdiv">
                	<h1>Pick Your Desired Store Name</h1>
                    <div class="warning"><!-----------[Warning block starts-here]---------->
                    <?php $form['title']['#attributes'] = array('readonly'=>'readonly'); ?>
                    	<div style="overflow:hidden; clear:both;"><?php print drupal_render($form['title']); ?><span id="u_stat" class="uname_val"></span></div>
                        
                        <div class="warn_cover">
                        	<span class="war_atag"><a href="#">warning</a></span>
                            <span class="text_ptag">
                            	<p>
                               		Once you set your store name, you will not be able to change it again. 
For more information, please read Preesee's<a href="#">application policy</a>.
                                </p>
                            </span>
                        </div>
                        
                        <h2>Your Personal URL: <a href="#"><?php echo $base_url; ?>/city/<span id="srurl"></span></a></h2>
                        <p>Your URL will NOT be active until your store application is approved.</p>
                    </div><!-----------[Warning block closed-here]---------->
                    <h6>About your store</h6>
                    <div class="forms_steps"><!-----------[Required fields starts-here]---------->
                    	<ul class="store_field_steps">
                            <li>
                            	<?php print drupal_render($form['field_about']); ?>
                            </li>
                        </ul>
                    </div><!-----------[Required fields closed-here]---------->
                    
                  	<div class="border_box"></div>
                  	<h6>Your Physical Store Address</h6>
                  	<h3><b>*</b>Required fields</h3>
                  <div class="forms_steps"><!-----------[Required fields starts-here]---------->
                    	<ul class="store_field_steps">
                        	<li class="store_first_leftnames">Store Email</li>
                            <li class="store_second_rightfields"><b>*</b>
                            	<?php print drupal_render($form['field_email1']); ?>
                            	<b>*</b>
                            </li>
                        </ul>
                    </div><!-----------[Required fields closed-here]---------->
                    <div class="clear"></div>
                               
                    <div class="forms_steps"><!-----------[Required fields starts-here]---------->
                    	<ul class="store_field_steps">
                        	<li class="store_first_leftnames">Store Category</li>
                            <li class="store_second_rightfields">
                            	<?php print drupal_render($form['taxonomy']['18']); ?>
                            	<b>*</b>
                            </li>
                        </ul>
                    </div><!-----------[Required fields closed-here]---------->
                    <div class="clear"></div>
                    <div class="forms_steps"><!-----------[Required fields starts-here]---------->
                    	<ul class="store_field_steps">
                        	<li class="store_first_leftnames">Avatar</li>
                            <li class="store_second_rightfields">
                            	<?php 
													$form['picture']['picture_upload_register']['#size'] = 0;
													print drupal_render($form['field_avtr']);
													?>
                            	<b>*</b>
                            </li>
                        </ul>
                    </div><!-----------[Required fields closed-here]---------->
                    <div class="clear"></div>
                    <?php if(arg(2)=="edit"){ ?>
                  	<div class="forms_steps"><!-----------[Required fields starts-here]---------->
                    	<ul class="store_field_steps">
                        	<li class="store_first_leftnames">Country</li>
                            <li class="store_second_rightfields">
                            	<?php $form['taxonomy'][13]['#title'] = '';
			print drupal_render($form['taxonomy'][13]); ?> 
                            	<b>*</b>
                            </li>
                        </ul>
                    </div><!-----------[Required fields closed-here]---------->
                    <div class="clear"></div>
                    <?php } ?>
                    <div class="forms_steps"><!-----------[Required fields starts-here]---------->
                    	<ul class="store_field_steps">
                        	<li class="store_first_leftnames">Address Line 1</li>
                            <li class="store_second_rightfields">
                            	<?php print drupal_render($form['field_addr1']); ?>
                            	</li>
                        </ul>
                    </div><!-----------[Required fields closed-here]---------->
                    <div class="clear"></div>
                    <div class="forms_steps"><!-----------[Required fields starts-here]---------->
                    	<ul class="store_field_steps">
                        	<li class="store_first_leftnames">Address Line 2</li>
                            <li class="store_second_rightfields">
                            	<?php print drupal_render($form['field_addr2']); ?>
                            	<b>*</b>
                            </li>
                        </ul>
                    </div><!-----------[Required fields closed-here]---------->
<!--               issue 68 2014.5.27 henry.hua      --><?php //if(arg(2)=="edit"){ ?>
                    <div class="clear"></div>
                    <div class="forms_steps"><!-----------[Required fields starts-here]---------->
                    	<ul class="store_field_steps">
                        	<li class="store_first_leftnames">City</li>
                            <li class="store_second_rightfields">
                            	 <?php print drupal_render($form['field_city']); ?>
                            	<b>*</b>
                            </li>
                        </ul>
                    </div><!-----------[Required fields closed-here]---------->
<!--                    --><?php //} ?>
                    <div class="clear"></div>
                    <div class="forms_steps"><!-----------[Required fields starts-here]---------->
                    	<ul class="store_field_steps">
                        	<li class="store_first_leftnames">State/ Province / Region</li>
                            <li class="store_second_rightfields">
                            	<?php print drupal_render($form['field_state_pro_reg']); ?>
                            	<b>*</b>
                            </li>
                        </ul>
                    </div><!-----------[Required fields closed-here]---------->
                    <div class="clear"></div>
                    <div class="forms_steps"><!-----------[Required fields starts-here]---------->
                    	<ul class="store_field_steps">
                        	<li class="store_first_leftnames">ZIP/ Post Code</li>
                            <li class="store_second_rightfields">
                            	<?php  print drupal_render($form['field_zpc']); ?>
                            	<b>*</b>
                            </li>
                        </ul>
                    </div><!-----------[Required fields closed-here]---------->
                    <div class="clear"></div>
                    <div class="forms_steps"><!-----------[Required fields starts-here]---------->
                    	<ul class="store_field_steps">
                        	<li class="store_first_leftnames">Phone Number</li>
                            <li class="store_second_rightfields">
                          <?php print drupal_render($form['field_phn']); ?>
                            	<b>*</b>
                            </li>
                        </ul>
                    </div><!-----------[Required fields closed-here]---------->
                    <div class="clear"></div>
                    <div class="forms_steps"><!-----------[Required fields starts-here]---------->
                    	<ul class="store_field_steps">
                        	<li class="store_first_leftnames">&nbsp;</li>
                            <li class="store_second_rightfields">
                            	<div class="store_step1_map">
                                	<?php print drupal_render($form['field_maphtml']); ?>
                                <p>You can paste HTML link from here (<a href="http://maps.google.co.in">http://maps.google.co.in</a>) to show your locations</p>
                                <p>
                            </li>
                        </ul>
                    </div><!-----------[Required fields closed-here]---------->
                    
                    <div class="physical_images"><!-----------[Physical exterior and interior images starts-here]---------->
                    	<!-----------[cover closed-here]---------->
                        
                        <div class="store_image_upload"><!-----------[image upload block starts-here]---------->
                        	<span class="title_store_photo"><p>2 Exterior images</p></span>
                            <span class="upload_store_photo">
                            	
                                	
                                	 <?php print drupal_render($form['field_2ext']); ?>
                                   
                                	<?php print drupal_render($form['field_2ext2']); ?>
                                    
                               
                            </span>
                        </div><!-----------[image upload block closed-here]---------->
                        <div class="store_image_upload"><!-----------[image upload block starts-here]---------->
                        	<span class="title_store_photo"><p class="padding_extream">3 Interior images</p></span>
                            <span class="upload_store_photo">
                            	
                                	 <?php print drupal_render($form['field_3ext3']); ?>
                                 
                                	 <?php print drupal_render($form['field_3ext4']); ?>
                                    
                                      <?php print drupal_render($form['field_3ext5']); ?>
                            </span>
                        </div><!-----------[image upload block closed-here]---------->
                    </div><!-----------[Physical exterior and interior images closed-here]---------->
                    <div class="clear"></div>

                 </div>
                </div><!-----------[Creator Account first step whole wrapper closed-here]---------->
                
          </div><!-----------[middle-container-closed-here]---------->
     
          <div class="clear"></div>  
      <div id="storsteptwo" >

                <div class="store_registration_step2">
                	
                    <p>Upload images for at least one product in your store </p>
                    <div class="image_upload">
                    	<span class="img_uploader1">
                        	<p>Item</p>
                   	<b>*</b>
                        </span>
                        <span class="img_uploader2">
                        	<?php print drupal_render($form['field_itm1']); ?>
                        </span>
                        <span class="img_uploader3">
                        	<?php	print drupal_render($form['field_itm2']); ?>
                        </span>
                    </div>
                    
                    <div class="image_upload">
                    	<span class="img_uploader1">
                        	<p>Item2</p>
                      </span>
                        <span class="img_uploader2">
                        	<?php	print drupal_render($form['field_itm02']); ?>
                        </span>
                        <span class="img_uploader3">
                        	 <?php	 print drupal_render($form['field_item03']); ?>
                        </span>
                    </div>
                    
                    <div class="image_upload">
                    	<span class="img_uploader1">
                        	<p>Item3</p>
                      </span>
                        <span class="img_uploader2">
                        	<?php	 print drupal_render($form['field_itm3']); ?>
                        </span>
                        <span class="img_uploader3">
                        	<?php	 print drupal_render($form['field_itm04']); ?>
                        </span>
                    </div>
                     <?php $form['buttons']['submit']['#attributes'] = array('class'=>'round-button'); ?>
                      <?php unset($form['buttons']['preview']); ?>
                       <?php unset($form['buttons']['delete']); ?>
                    	<?php print drupal_render($form['buttons']); ?>


            </div><!-----[middle-container-closed-here]---->
            
</div>         
<div style="display:none;" >
<?php print drupal_render($form); ?>
</div>

       </div>
  <?php 

	
	}?>
   