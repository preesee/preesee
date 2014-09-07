<?php 

global $user;
if($user->uid == 0 ) {
//drupal_goto('user/register/audience');
}
 if(arg(1)=='add' || arg(2)=='edit' || arg(1)=='settings'){ ?>

<?php  //print drupal_render($form); ?>
<div class="city_store_login_one_container_sub"><!-----[city-login-info-cover-div-starts-here]---->
    
          	
  <div class="reader_profile_top_main"></div>


  
   <div class="city_store_login_name_block">
   
      <h2><?php print $form['field_fname']['#title']; ?></h2>
      
        <?php  
				   unset($form['field_fname'][0]['value']['#title']);
				   $form['field_fname'][0]['value']['#attributes'] = array("class"=>"city_store_login_name_block_input");  // Add Class
           print drupal_render($form['field_fname']); // Render Field
				 ?>
        
   </div>

   <div class="city_store_login_name_block">
   
      <h2><?php print $form['field_lname']['#title']; ?></h2>
      
        <?php  
				   unset($form['field_lname'][0]['value']['#title']);
				   $form['field_lname'][0]['value']['#attributes'] = array("class"=>"city_store_login_name_block_input");  // Add Class
           print drupal_render($form['field_lname']); // Render Field
				 ?>
        
   </div>
 
  <div class="city_store_your_store_name_cover2">
      <h2>Your store name:</h2>
        <div class="your_store_name_text_area_cover">
           <?php
					    unset($form['title']['#title']);
							 $form['title']['#attributes'] = array('readonly'=>'readonly');
							 print drupal_render($form['title']);
					 ?>
        </div>
      <div class="warning_main_block2">
          <span class="warning_main_left2">
             <a href="#" >WARN</a>
          </span>
          <span class="warning_main_right2">
            <p>
              Once you set up your store name, you cannot change again. If you want to 
              update the account to seller account later, Please sure you store name 
              should not conflict to the other real store in your country. For more info 
              please read preesee's city store policy
            </p>
          </span>
      </div>
     <h3>Your Personal URL: http://www.preesee.com/creator/<span style="text-decoration:underline"><?php print $form['title']['#value']; ?></span></h3>
     
    <div class="warning_main_right_sub">
        <p> URL will NOT be activated until all required fields are filled out on this
 						page and you have uploaded at least one image to your portfolio. </p>
   </div>
                             
 </div>
 
 <div class="city_store_login_name_block">
   
      <h2><?php print $form["taxonomy"][13]['#title']; ?></h2>
      
        <?php  
				   unset($form["taxonomy"][13]['#title']);
					 //$form["taxonomy"][13]['#attributes']  = array("class"=>"city_store_login_name_block_input");  // Add Class
           print drupal_render($form["taxonomy"]); // Render Field
				 ?>
        
   </div>
      
  <div class="city_store_login_name_block">
   
      <h2><?php print $form['field_city']['#title']; ?></h2>
      
        <?php  
				   unset($form['field_city']['value']['#title']);
				   $form['field_city']['value']['#attributes'] = array("class"=>"city_store_login_name_block_input");  // Add Class
           print drupal_render($form['field_city']); // Render Field
				 ?>
        
   </div>
 
 

  <div class="city_store_login1_save_change_password_block">
  
       <?php print drupal_render($form['buttons']['submit']); ?>
  
  </div>
  
                  
<div style="display:none;"><?php print drupal_render($form); ?></div>

</div> 

<?php  } else { ?>






<?php } ?>