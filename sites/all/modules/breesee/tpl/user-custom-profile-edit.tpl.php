<?php global $user, $base_url; ?>
<div class="profile_edit_cust" id="profile_edit_cust">
<div id="overlay"> </div>
<div id="editsuccess">Changes Saved Successfully. <!--<a href="< ?php echo $base_url; ?>/user/settings">Reload</a> to see it--></div>
<div id="preview"></div>
<?php 
drupal_add_js(drupal_get_path('module', 'breesee') .'/js/axuploader-min.js');
$form['account']['mail']['#attributes'] = array('readonly' => 'readonly', 'class' => 'readonly');
$form['captcha']['captcha_widgets']['captcha_response']['#attributes'] = array('class' => 'captchafld');
$rolk = _breesee_get_role($user->uid);
switch($rolk) {
	case 'audience': 
	$form['title']['#value'] = uniqid();
	unset($form['field_fname'][0]['value']['#title']);
	unset($form['field_lname'][0]['value']['#title']);
	unset($form['account']['mail']['#title']);
    unset($form['field_email1'][0]['value']['#title']);
	unset($form['account']['pass']['pass1']['#title']);
	unset($form['account']['pass']['pass2']['#title']);
	//unset($form['account']['pass']['pass2']['#title']);
	unset($form['field_city']['value']['#title']);
	unset($form['language']['#title']);
	unset($form['picture']['picture_upload']['#title']);
	unset($form['captcha']['captcha_widgets']['captcha_response']['#title']);
	?>
  <div class="profile_edit_audience">
  <table width="600" border="0" cellspacing="0" cellpadding="3">
  <tr>
    <td width="151" align="right" valign="top"><span class="style1">First Name</span></td>
    <td width="298" valign="top" class="edit_value"><?php echo $form['field_fname'][0]['value']['#value']; ?></td>
    <td width="133" valign="top"><a href="javascript:void(0);" class="editinline">Edit</a></td>
  </tr>
  <tr class="hiddentd">
    <td align="right" valign="top">&nbsp;</td>
    <td valign="top"><?php echo drupal_render($form['field_fname']); ?><a href="javascript:void(0);" class="i_edit">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="right" valign="top"><span class="style1">Last Name</span></td>
    <td valign="top" class="edit_value"><?php echo $form['field_lname'][0]['value']['#value']; ?></td>
    <td valign="top"><a href="javascript:void(0);" class="editinline">Edit</a></td>
  </tr>
  <tr class="hiddentd">
    <td align="right" valign="top">&nbsp;</td>
    <td valign="top"><?php echo drupal_render($form['field_lname']); ?><a href="javascript:void(0);" class="i_edit">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="right" valign="top"><span class="style1">Email</span></td>
    <td valign="top" class="edit_value"><?php echo drupal_render($form['account']['mail']); ?></td>
<!--      <td valign="top" class="edit_value">--><?php //echo $form['field_email1'][0]['value']['#value']; ?><!--</td>-->
    <td valign="top">&nbsp;</td>
<!--      <td valign="top"><a href="javascript:void(0);" class="editinline">Edit</a></td>-->
  </tr>

  <tr>
    <td align="right" valign="top"><span class="style1">Password</span></td>
    <td valign="top"><a href="javascript:void(0);" class="editinline">Change Password</a></td>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr class="hiddentd">
    <td align="right" valign="top">&nbsp;</td>
    <td colspan="2" valign="top"><table width="90%" border="0" cellspacing="0" cellpadding="2">
        <tr>
          <td colspan="2"><div id="pass_msg"></div></td>
          </tr>
        <tr>
          <td width="32%">Password</td>
          <td width="68%" class="edit_value"><?php echo drupal_render($form['account']['pass']['pass1']); ?></td>
        </tr>
        <tr>
          <td>Re type Password</td>
          <td><?php echo drupal_render($form['account']['pass']['pass2']); ?> </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><a class="linkasbtn active" id="change_pass" href="javascript:void(0);" >Change Password</a></td>
        </tr>
      </table></td>
    </tr>
  <tr>
    <td align="right" valign="top"><span class="style1">Current City</span></td>
    <td valign="top" class="edit_value"><?php echo $form['field_city']['#value']['value']; ?></td>
    <td valign="top"><a href="javascript:void(0);" class="editinline">Edit</a></td>
  </tr>
  <tr class="hiddentd">
    <td align="right" valign="top">&nbsp;</td>
    <td valign="top" class="edit_value"><?php echo drupal_render($form['field_city']); ?><a href="javascript:void(0);" class="i_edit">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="right" valign="top"><span class="style1">Country</span></td>
    <td valign="top" class="edit_value"><?php echo $form['field_new_country']['value']['#options'][$form['field_new_country']['#value']['value']]; ?></td>
    <td valign="top"><a href="javascript:void(0);" class="editinline">Edit</a></td>
  </tr>
  <tr class="hiddentd">
    <td align="right" valign="top">&nbsp;</td>
    <td valign="top"><?php echo drupal_render($form['field_new_country']); ?><a href="javascript:void(0);" class="i_edit_op">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="right" valign="top"><span class="style1">Language</span></td>
    <td valign="top" class="edit_value"><?php echo $form['language']['#options'][$form['language']['#value']]; ?></td>
    <td valign="top"><a href="javascript:void(0);" class="editinline">Edit</a></td>
  </tr>
  
  
  
    <tr class="hiddentd">
      <td align="right" valign="top">&nbsp;</td>
      <td valign="top"><?php echo drupal_render($form['language']); ?><a href="javascript:void(0);" class="i_edit_op">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
    <td align="right" valign="top"><span class="style1">Avatar</span></td>
    <td valign="top">
   <?php echo drupal_render($form['picture']['current_picture']); ?>
	 <?php // echo drupal_render($form['picture']['picture_upload']); ?>    </td>
    <td valign="top">&nbsp;</td>
    </tr>
   
    <tr>
      <td align="right" valign="top">&nbsp;</td>
      <td valign="top"><div id="upload_img"></div></td>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
    <td align="right" valign="top"><span class="style1"></span></td>
    <td valign="top"><?php //echo drupal_render($form['submit']); ?></td>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="right" valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top"><div class="ax-progress-div"></div></td>
  </tr>
</table>

  </div>
  <?php 
		break;
	 case 'creator':
		//echo drupal_render($form); 
//		print_r($form);
//		die;
		unset($form['account']['mail']['#title']);
		unset($form['account']['pass']['pass1']['#title']);
		unset($form['account']['pass']['pass2']['#title']);
		unset($form['field_city']['value']['#title']);
		unset($form['captcha']['captcha_widgets']['captcha_response']['#title']);
		unset($form['picture']['picture_upload']['#title']);
		unset($form['locale']['language']['#title']);
//		unset($form['field_award']['#title']);        henry.hua 2014.4.6
		unset($form['title']['#title']);

		unset($form['field_award'][0]['value']['#title']);//
		unset($form['field_backg'][0]['value']['#title']);//
		unset($form['field_fname'][0]['value']['#title']);//
		unset($form['field_lname'][0]['value']['#title']);//
		unset($form['field_mywebsite'][0]['value']['#title']);//
        unset($form['field_current_location'][0]['value']['#title']);
		unset($form['taxonomy']['13']['#title']);
		unset($form['taxonomy']['16']['#title']);
		unset($form['taxonomy']['15']['#title']);
	?>
		
         <div class="profile_edit_creator city_store_login1a02_brows_right">
  <table width="600" border="0" cellspacing="0" cellpadding="3">
  <tr class="tropen">
    <td width="151" align="right" valign="middle"><span class="style1">First Name</span></td>
    <td width="298" valign="middle"  class="edit_value"><?php echo $form['field_fname'][0]['value']['#value']; ?></td>
    <td width="133" valign="middle"><a href="javascript:void(0);" class="editinline">Edit</a></td>
  </tr>
  <tr class="hiddentd">
    <td align="right" valign="middle">&nbsp;</td>
    <td valign="middle"><?php echo drupal_render($form['field_fname']); ?><a href="javascript:void(0);" class="i_edit">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>
    <td valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td align="right" valign="middle"><span class="style1">Last Name</span></td>
    <td valign="middle"  class="edit_value"><?php echo $form['field_lname'][0]['value']['#value']; ?></td>
    <td valign="middle"><a href="javascript:void(0);" class="editinline">Edit</a></td>
  </tr>
   <tr class="hiddentd">
     <td align="right" valign="middle">&nbsp;</td>
     <td valign="middle"><?php echo drupal_render($form['field_lname']); ?><a href="javascript:void(0);" class="i_edit">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>
     <td valign="middle">&nbsp;</td>
   </tr>
  
   <tr>
    <td align="right" valign="middle"><span class="style1">Creator name</span></td>
    <td valign="middle"  class="edit_value"><?php echo $form['title']['#default_value']; ?></td>
    <td valign="middle"><a href="javascript:void(0);" class="editinline">Edit</a></td>
  </tr>
   <tr class="hiddentd">
     <td align="right" valign="middle">&nbsp;</td>
     <td valign="middle"><?php echo drupal_render($form['title']); ?><a href="javascript:void(0);" class="i_edit">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>
     <td valign="middle">&nbsp;</td>
   </tr>
   <tr>
    <td align="right" valign="middle"><span class="style1">Email address</span></td>
<!--    <td valign="middle" class="edit_value">--><?php //echo drupal_render($form['account']['mail']); ?><!--</td>           henry.hua enable modify email address -->
       <td valign="middle" class="edit_value"><?php echo $form['field_email1'][0]['value']['#value']; ?></td>
       <td valign="middle"><a href="javascript:void(0);" class="editinline">Edit</a></td>
<!--    <td valign="middle">&nbsp;</td>-->
  </tr>
  <tr class="hiddentd">
      <td align="right" valign="middle">&nbsp;</td>
<!--      <td valign="middle">--><?php //echo drupal_render($form['account']['mail']); ?><!--<a href="javascript:void(0);" class="i_edit">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>-->
      <td valign="middle"><?php echo drupal_render($form['field_email1']); ?><a href="javascript:void(0);" class="i_edit">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>
      <td valign="middle">&nbsp;</td>
  </tr>
   <tr>
    <td align="right" valign="middle"><span class="style1">Password</span></td>
    <td valign="middle"><a href="javascript:void(0);" class="editinline">Change
        Password</a></td>
    <td valign="middle">&nbsp;</td>
  </tr>
   <tr class="hiddentd">
     <td align="right" valign="middle">&nbsp;</td>
     <td colspan="2" valign="middle"><table width="90%" border="0" cellspacing="0" cellpadding="2">
       <tr>
         <td colspan="2"><div id="pass_msg2"></div></td>
       </tr>
       <tr>
         <td width="32%">Password</td>
         <td width="68%"><?php echo drupal_render($form['account']['pass']['pass1']); ?></td>
       </tr>
       <tr>
         <td>Re type Password</td>
         <td><?php echo drupal_render($form['account']['pass']['pass2']); ?> </td>
       </tr>
       <tr>
         <td>&nbsp;</td>
         <td><a class="linkasbtn active" id="change_pass" href="javascript:void(0);">Change Password</a></td>
       </tr>
     </table></td>
     </tr>

  <tr>
      <td align="right" valign="top"><span class="style2">Mother Language</span></td>
      <td align="left" valign="top" class="edit_value"><?php echo $form['language']['#options'][$form['language']['#value']]; ?></td>
      <td align="left" valign="top"><a href="javascript:void(0);" class="editinline">Edit</a></td>
  </tr>
  <tr class="hiddentd">
      <td align="right" valign="top">&nbsp;</td>
      <!--     <td align="left" valign="top" class="edit_value">--><?php //echo drupal_render($form['taxonomy'][18]); ?><!--<a href="javascript:void(0);" class="i_edit_op">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>-->
      <td align="left" valign="top"><?php echo drupal_render($form['language']); ?><a href="javascript:void(0);" class="i_edit_op">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>
      <!--       <td align="left" valign="top"  >--><?php //echo drupal_render($form['taxonomy'][18]); ?><!--<a href="javascript:void(0);" class="i_edit_op">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>-->
      <td align="left" valign="top">&nbsp;</td>
  </tr>

  <tr>
      <td align="right" valign="top"><span class="style2">Second Language</span></td>
      <td align="left" valign="top" class="edit_value"><?php echo $form['field_sec_language']['value']['#options'][$form['field_sec_language']['#value']['value']]; ?></td>
      <td align="left" valign="top"><a href="javascript:void(0);" class="editinline">Edit</a></td>
  </tr>
  <tr class="hiddentd">
      <td align="right" valign="top">&nbsp;</td>
      <td align="left" valign="top"><?php echo drupal_render($form['field_sec_language']); ?><a href="javascript:void(0);" class="i_edit_op">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>
      <td align="left" valign="top">&nbsp;</td>
  </tr>


  <tr>
      <td>Current Location</td>
  </tr>

  <tr>
      <td align="right" valign="middle"><span class="style1">Country</span></td>
      <td valign="middle" class="edit_value"><?php echo $form['field_current_country']['value']['#options'][$form['field_current_country']['#value']['value']]; ?></td>
      <td valign="middle"><a href="javascript:void(0);" class="editinline">Edit</a></td>
  </tr>
  <tr class="hiddentd">
      <td align="right" valign="middle">&nbsp;</td>
      <td valign="middle"><?php echo drupal_render($form['field_current_country']); ?><a href="javascript:void(0);" class="i_edit_op">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>
      <td valign="middle">&nbsp;</td>
  </tr>
  <tr>
      <td align="right" valign="middle"><span class="style1">City</span></td>
      <td valign="middle" class="edit_value"><?php print $form['field_current_city']['#value']['value']; ?>
      </td>
      <td valign="middle"><a href="javascript:void(0);" class="editinline">Edit</a></td>
  </tr>

  <tr class="hiddentd">
      <td align="right" valign="middle">&nbsp;</td>
      <td valign="middle"><?php echo drupal_render($form['field_current_city']); ?><a href="javascript:void(0);" class="i_edit">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>
      <td valign="middle">&nbsp;</td>
  </tr>

    <tr>
      <td>Home Town</td>
  </tr>
   <tr>
    <td align="right" valign="middle"><span class="style1">Country</span></td>
    <td valign="middle" class="edit_value"><?php echo $form['field_new_country']['value']['#options'][$form['field_new_country']['#value']['value']]; ?></td>
    <td valign="middle"><a href="javascript:void(0);" class="editinline">Edit</a></td>
  </tr>
   <tr class="hiddentd">
     <td align="right" valign="middle">&nbsp;</td>
     <td valign="middle"><?php echo drupal_render($form['field_new_country']); ?><a href="javascript:void(0);" class="i_edit_op">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>
     <td valign="middle">&nbsp;</td>
   </tr>
  <tr>
      <td align="right" valign="middle"><span class="style1">City</span></td>
      <td valign="middle" class="edit_value"><?php print $form['field_city']['#value']['value']; ?>
      </td>
      <td valign="middle"><a href="javascript:void(0);" class="editinline">Edit</a></td>
  </tr>

  <tr class="hiddentd">
      <td align="right" valign="middle">&nbsp;</td>
      <td valign="middle"><?php echo drupal_render($form['field_city']); ?><a href="javascript:void(0);" class="i_edit">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>
      <td valign="middle">&nbsp;</td>
  </tr>
<!--   <tr>-->
<!--    <td align="right" valign="middle"><span class="style1"> Country</span></td>-->
<!--    <td valign="middle" class="edit_value">--><?php //print $form[' 	field_current_country']['#value']['value']; ?>
<!--    </td>-->
<!--    <td valign="middle"><a href="javascript:void(0);" class="editinline">Edit</a></td>-->
<!--  </tr>-->
<!---->
<!--  <!--<tr>-->
<!--    <td align="right" valign="middle"><span class="style1">Home Town</span></td>-->
<!--    <td valign="middle">< ?php echo drupal_render($form['taxonomy'][13]['hierarchical_select']['selects'][0]); ?></td>-->
<!--    <td valign="middle"><a href="javascript:void(0);" class="editinline">Edit</a></td>-->
<!--  </tr>-->
<!--  <tr class="hiddentd">-->
<!--    <td align="right" valign="middle">&nbsp;</td>-->
<!--    <td valign="middle">--><?php //echo drupal_render($form['field_city']); ?><!--<a href="javascript:void(0);" class="i_edit">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>-->
<!--    <td valign="middle">&nbsp;</td>-->
<!--  </tr>-->
<!--  <tr>-->
<!--      <td align="right" valign="middle"><span class="style1">City </span></td>-->
<!--      <td valign="middle" class="edit_value">--><?php //print $form['field_current_location'][0]['#value']['value']; ?>
<!--      </td>-->
<!--      <td valign="middle"><a href="javascript:void(0);" class="editinline">Edit</a></td>-->
<!--  </tr>-->
<!---->
<!--  <tr class="hiddentd">-->
<!--      <td align="right" valign="middle">&nbsp;</td>-->
<!--      <td valign="middle">--><?php //echo drupal_render($form['field_current_location']); ?><!--<a href="javascript:void(0);" class="i_edit">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>-->
<!--      <td valign="middle">&nbsp;</td>-->
<!--  </tr>-->
  <tr>
    <td align="right" valign="middle"><span class="style1">Avatar</span></td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" align="left" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="41%"><?php 
		//echo drupal_render($form['picture']['picture_delete']);
		
		global $user;
		print '<div class="editcustdd"><div class="replac_pic">'.theme('imagecache', 'store_list',$user->picture).'
		</div><div class="place_name_red">'._gettermsname($form['field_city']['#default_value'][0]['value']).'</div>
    <h1>'.$form['title']['#default_value'].'</h1>
		'. drupal_render($form['field_intro']).'
		<a href="javascript:void(0);" class="i_edit_op_multext">Save Intrduction</a>
  </div>';
	$form['picture']['picture_upload']['#attributes']['size'] = 20;
		?></td>
          <td width="59%"><h3>Set Your Icon by the below tool</h3>
              <h2>Buy the Showcase time</h2>
            <h4>Notic: Your Shop Icon should obey breesee&rsquo;s <a href="#">rules</a></h4>
            <h1>Find Your Images</h1>
            <?php //echo drupal_render($form['picture']['picture_upload']); ?>
            <div id="upload_img"></div>
            <h5> Use .jpg, .gif or .png files no larger than 500K. Suggesting Images  size is 240px(W) X 180 px(H) </h5>
            <p> Your intro should not be more than 3 lines and 200 characters. </p></td>
        </tr>
      </table>      </td>
    </tr>
  <tr>
    <td colspan="3" align="right" valign="middle"><hr /></td>
  </tr>

  <tr>
    <td align="right" valign="middle"><span class="style1">Your web Site</span></td>
    <td valign="middle" class="edit_value"><?php echo $form['field_website'][0]['#default_value']['value']; ?></td>
    <td valign="middle"><a href="javascript:void(0);" class="editinline">Edit</a></td>
  </tr>
   <tr class="hiddentd">
     <td align="right" valign="middle">&nbsp;</td>
     <td valign="middle"><?php echo drupal_render($form['field_website']); ?><a href="javascript:void(0);" class="i_edit">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>
     <td valign="middle">&nbsp;</td>
   </tr>

<!--   <tr>-->
<!--    <td align="right" valign="middle"><span class="style1">Specialties</span></td>-->
<!--<!--    <td valign="middle">--><?php ////print BreeseeUK_taxonomy_links(node_load($user->nid), 16); ?><!--<!--</td>-->
<!--       <td valign="middle" class="edit_value"> --><?php //echo _breesee_get_SpecialtiesName($user->uid) ?><!--</td>-->
<!--    <td valign="middle"><a href="javascript:void(0);" class="editinline">Edit</a></td>-->
<!--  </tr>-->
<!--  -->
<!--   <tr class="hiddentd">-->
<!--     <td align="right" valign="middle">&nbsp;</td>-->
<!--     <td valign="middle">--><?php //echo drupal_render($form['taxonomy'][16]); ?><!--<a href="javascript:void(0);" class="i_edit_op">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>-->
<!--     <td valign="middle">&nbsp;</td>-->
<!--   </tr>-->
  <tr >
      <td align="right" valign="middle"><span class="style1">Profession</span></td>
      <!--    <td valign="middle" class="edit_value">--><?php //echo $form['taxonomy'][22]['hierarchical_select']['selects'][0]['#options'][$form['taxonomy'][22]['hierarchical_select']['selects'][0]['#value']]; ?><!--</td>-->
      <td valign="middle" class="edit_value"><?php echo $form['taxonomy'][22]['hierarchical_select']['selects'][0]['#options'][$form['taxonomy'][22]['hierarchical_select']['selects'][0]['#value']]; ?></td>
      <td valign="middle"><a href="javascript:void(0);" class="editinline">Edit</a></td>
  </tr>
  <tr class="hiddentd">
      <td align="right" valign="middle">&nbsp;</td>
      <td valign="middle" ><?php echo drupal_render($form['taxonomy'][22]['hierarchical_select']['selects'][0]); ?><a href="javascript:void(0);" class="i_edit_op_tax">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>
      <td valign="middle">&nbsp;</td>
  </tr>
   <tr >



<!--    <td align="right" valign="middle"><span class="style1">Proffession</span></td>-->
<!--<!--    <td valign="middle" class="edit_value">--><?php ////echo BreeseeUK_taxonomy_links(node_load($user->nid), 15); ?><!--<!--</td>-->
<!--       <td valign="middle" class="edit_value">--><?php //print _gettermsname($form['taxonomy'][15]['#default_value'][0]); ?><!--</td>-->
<!--    <td valign="middle"><a href="javascript:void(0);" class="editinline">Edit</a></td>-->
<!--  </tr>-->
<!--  -->
<!--   <tr class="hiddentd">-->
<!--     <td align="right" valign="middle">&nbsp;</td>-->
<!--     <td valign="middle">--><?php //echo drupal_render($form['taxonomy']['15']); ?><!--<a href="javascript:void(0);" class="i_edit_op">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>-->
<!--     <td valign="middle">&nbsp;</td>-->
<!--   </tr>-->



   <tr>
    <td align="right" valign="middle"><span class="style1">Award</span></td>
    <td valign="middle"><?php echo $form['field_award'][0]['#value']['value']; ?></td>
    <td valign="middle"><a href="javascript:void(0);" class="editinline">Edit</a></td>
  </tr>
<!--     --><?php
//
//
//	 ?>

    <tr class="hiddentd">
      <td align="right" valign="middle">&nbsp;</td>
      <td valign="middle"><?php echo drupal_render($form['field_award']); ?><a href="javascript:void(0);" class="i_edit_op_multext">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>
      <td valign="middle">&nbsp;</td>
    </tr>
  <tr >
      <td align="right" valign="middle"><span class="style1"></span></td>
      <td valign="middle"><?php //echo drupal_render($form['buttons']['submit']); ?></td>
      <td valign="middle">&nbsp;</td>
  <tr>
      <td colspan="3" align="right" valign="middle"><hr /></td>
  </tr>
  </tr>
  <tr>
      <td align="right" valign="top"><span class="style1">Back Ground</span></td>
      <td valign="top" class="edit_value"><?php echo $form['field_backg'][0]['#default_value']['value']; ?></td>
      <td aalign="right" valign="top"><a href="javascript:void(0);" class="editinline">Edit</a></td>
  </tr>
  <tr class="hiddentd">
      <td align="right" valign="top">&nbsp;</td>
      <td align="right" valign="top"><?php echo drupal_render($form['field_backg']); ?><a href="javascript:void(0);" class="i_edit_op_multext">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>
      <td align ="right" valign="top">&nbsp;</td>
  </tr>


    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td valign="middle">&nbsp;</td>
      <td valign="middle">&nbsp;</td>
    </tr>
</table>

  </div>
        
		 
		
       
<?php	
break;
        case 'store':
		drupal_add_js(drupal_get_path('module', 'breesee') . '/js/imag_replace.js');
		///echo drupal_render($form);
		//print_r($form); die;
//		unset($form['account']['mail']['#title']);
        unset($form['field_email1'][0]['value']['#title']);           // replace email field
		unset($form['account']['pass']['pass1']['#title']);
		unset($form['account']['pass']['pass2']['#title']);
		unset($form['taxonomy'][18]['#title']);
		unset($form['locale']['language']['#title']);
		unset($form['picture']['picture_upload']['#title']);
		unset($form['field_addr1'][0]['value']['#title']);
		unset($form['field_about'][0]['value']['#title']);
		unset($form['field_addr2'][0]['value']['#title']);
		unset($form['field_surf'][0]['value']['#title']);
		unset($form['field_zpc'][0]['value']['#title']);
		unset($form['field_phn'][0]['value']['#title']);
		unset($form['field_maphtml'][0]['value']['#title']);
		unset($form['field_city']['value']['#title']);
        unset($form['field_about']['#value'][0]['#title']);              // add introduction field
		unset($form['captcha']['captcha_widgets']['captcha_response']['#title']);
		unset($form['title']['#title']);
		?>
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
    map = new google.maps.Map(document.getElementById("onemap_canvash"), myOptions);
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
  <div class="profile_edit_store">
   <table width="100%" border="0" cellspacing="0" cellpadding="3">          
   <tr>
    <td width="240" align="right" valign="top"><span class="style2">Store Name</span></td>
    <td align="left" valign="top" class="edit_value"><?php echo $form['title']['#default_value']; ?></td>
    <td align="left" valign="top">
<!--        <a href="javascript:void(0);" class="editinline">Edit</a>               henry.hua 2014.3.20-->
    </td>
  </tr>      
   <tr class="hiddentd">
     <td align="right" valign="top">&nbsp;</td>
     <td align="left" valign="top"><?php echo drupal_render($form['title']); ?><a href="javascript:void(0);" class="i_edit">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>
     <td align="left" valign="top">&nbsp;</td>
   </tr>

    <td align="right" valign="top"><span class="style2">Email address</span></td>
<!--    <td width="567" align="left" valign="top">--><?php //echo drupal_render($form['account']['mail']); ?><!--</td>-->
       <td width="567" align="left" valign="top" class="edit_value"><?php echo $form['field_email1'][0]['value']['#value']; ?></td>
<!--    <td width="133" align="left" valign="top">&nbsp;</td>-->
       <td align="left" valign="top"><a href="javascript:void(0);" class="editinline">Edit</a></td>
  </tr>
       <tr class="hiddentd">
           <td align="right" valign="top">&nbsp;</td>
           <td align="left" valign="top"><?php echo drupal_render($form['field_email1']); ?><a href="javascript:void(0);" class="i_edit">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>
           <td align="left" valign="top">&nbsp;</td>
       </tr>
 <tr>
    <td align="right" valign="top"><span class="style2">Password</span></td>
    <td align="left" valign="top"><a href="javascript:void(0);" class="editinline">Change
        Password</a></td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
   <tr class="hiddentd">
     <td align="right" valign="top">&nbsp;</td>
     <td colspan="2" align="left" valign="top"><table width="90%" border="0" cellspacing="0" cellpadding="2">
       <tr>
         <td colspan="2"><div id="pass_msg3"></div></td>
       </tr>
       <tr>
         <td width="32%">Password</td>
         <td width="68%"><?php echo drupal_render($form['account']['pass']['pass1']); ?></td>
       </tr>
       <tr>
         <td>Re type Password</td>
         <td><?php echo drupal_render($form['account']['pass']['pass2']); ?> </td>
       </tr>
       <tr>
         <td>&nbsp;</td>
         <td><a class="linkasbtn active" id="change_pass" href="javascript:void(0);" >Change
             Password</a></td>
       </tr>
     </table></td>
     </tr>
   <tr>
    <td align="right" valign="top"><span class="style2">Categorizes</span></td>
<!--    <td align="left" valign="top">--><?php //echo BreeseeUK_taxonomy_links(node_load($user->nid), 18); ?><!--</td>-->
<!--           <td align="left" valign="top" class="edit_value">--><?php //print $form['taxonomy'][18]['hierarchical_select']['selects'][0]['#options'][$form['taxonomy'][18]['hierarchical_select']['selects'][0]['#value']]; ?><!--</td>-->
                  <td align="left" valign="top" class="edit_value"><?php print _gettermsname($form['taxonomy'][18]['#default_value'][0]); ?></td>

    <td align="left" valign="top"><a href="javascript:void(0);" class="editinline">Edit</a></td>
  </tr>
   <tr class="hiddentd">
     <td align="right" valign="top">&nbsp;</td>
<!--     <td align="left" valign="top" class="edit_value">--><?php //echo drupal_render($form['taxonomy'][18]); ?><!--<a href="javascript:void(0);" class="i_edit_op">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>-->
       <td align="left" valign="top" class="edit_value" ><?php echo drupal_render($form['taxonomy'][18]); ?><a href="javascript:void(0);" class="i_edit_op">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>
     <td align="left" valign="top">&nbsp;</td>
   </tr>
   <tr>
    <td align="right" valign="top"><span class="style2">Language</span></td>
    <td align="left" valign="top" class="edit_value"><?php echo $form['language']['#options'][$form['language']['#value']]; ?></td>
    <td align="left" valign="top"><a href="javascript:void(0);" class="editinline">Edit</a></td>
  </tr>
   <tr class="hiddentd">
       <td align="right" valign="top">&nbsp;</td>
       <!--     <td align="left" valign="top" class="edit_value">--><?php //echo drupal_render($form['taxonomy'][18]); ?><!--<a href="javascript:void(0);" class="i_edit_op">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>-->
       <td align="left" valign="top"><?php echo drupal_render($form['language']); ?><a href="javascript:void(0);" class="i_edit_op">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>
<!--       <td align="left" valign="top"  >--><?php //echo drupal_render($form['taxonomy'][18]); ?><!--<a href="javascript:void(0);" class="i_edit_op">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>-->
       <td align="left" valign="top">&nbsp;</td>
   </tr>
   <tr>
     <td height="25" align="left" valign="top"><span class="style2">Avatar:</span></td>
     <td align="left" valign="top">&nbsp;</td>
     <td align="left" valign="top">&nbsp;</td>
   </tr>
   <tr align="right">
    <td height="24" colspan="3" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="36%"><?php 
		//echo drupal_render($form['picture']['picture_delete']);
		
		global $user;
		print '<div class="editcustdd" ><div class="replac_pic">'.theme('imagecache', 'store_list',$user->picture).'
		</div><div class="place_name_red">'._gettermsname($form['field_city']['#default_value'][0]['value']).'</div>
    <h1>'.$form['title']['#default_value'].'</h1>
		'. drupal_render($form['field_introduction']).'
  <a href="javascript:void(0);" class="i_edit_op_multext">Save Intrduction</a></div>';
$form['picture']['picture_upload']['#attributes']['size'] = 20;
		?></td>
          <td width="64%"><h3>Set Your Icon by the below tool</h3>
            <h2>Buy the Showcase time</h2>
            <h4>Notic: Your Shop Icon should obey 										breesee&rsquo;s <a href="#">rules</a></h4>
            <h1>Find Your Images</h1>
            <?php //echo drupal_render($form['picture']['picture_upload']); ?>
            <div id="upload_img"></div>
            <h5> Use .jpg, .gif or .png files no larger than 500K.                                             Suggesting Images  size is                                              240px(W) X 180 px(H) </h5>
            <p> Your intro should not be more than 3 lines and  											200 characters. </p></td>
        </tr>
      </table></td>
    </tr>
<!--   <tr>
     <td colspan="3" align="left" valign="top"><h2>Your Store Location</h2></td>
     </tr>
   <tr>
     <td colspan="3" align="left" valign="top">< ?php 
		 $block = module_invoke('views', 'block', 'view', 'myaddress-block_1');
	print $block['content'];
	?></td>
     </tr>
   <tr>
     <td colspan="3" align="right" valign="top"><a href="< ?php echo $base_url; ?>/node/add/address" class="myButton">Add New Address</a></td>
   </tr>
   <tr>
     <td colspan="3" align="right" valign="top"><hr /></td>
     </tr>-->
   <tr>
    <td align="right" valign="top"><span class="style2">Address Line 1</span></td>
    <td align="left" valign="top" class="edit_value"><?php echo $form['field_addr1'][0]['value']['#value']; ?></td>
    <td align="left" valign="top"><a href="javascript:void(0);" class="editinline">Edit</a></td>
  </tr>
   <tr class="hiddentd">
     <td align="right" valign="top">&nbsp;</td>
     <td align="left" valign="top" ><?php echo drupal_render($form['field_addr1'][0]['value']); ?><a href="javascript:void(0);" class="i_edit">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>
     <td align="left" valign="top">&nbsp;</td>
   </tr>
   <tr>
    <td align="right" valign="top"><span class="style2">Address Line 2</span></td>
    <td align="left" valign="top" class="edit_value"><?php echo $form['field_addr2'][0]['value']['#value']; ?></td>
    <td align="left" valign="top"><a href="javascript:void(0);" class="editinline">Edit</a></td>
  </tr>
   <tr class="hiddentd">
     <td align="right" valign="top">&nbsp;</td>
     <td align="left" valign="top" ><?php echo drupal_render($form['field_addr2'][0]['value']); ?><a href="javascript:void(0);" class="i_edit">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>
     <td align="left" valign="top">&nbsp;</td>

   </tr>


<!--   <div class="store_step1_map">-->
<!--       --><?php //print drupal_render($form['field_maphtml']); ?>
<!--       <p>You can paste HTML link from here (<a href="http://maps.google.co.in">http://maps.google.co.in</a>) to show your locations</p>-->
<!--       <p>-->
<!---->
<!---->
<!--   </div>-->
   <tr>
       <td align="right" valign="middle"><span class="style1">Country</span></td>
       <td valign="middle" class="edit_value"><?php echo $form['field_new_country']['value']['#options'][$form['field_new_country']['#value']['value']]; ?></td>
       <td valign="middle"><a href="javascript:void(0);" class="editinline">Edit</a></td>
   </tr>
   <tr class="hiddentd">
       <td align="right" valign="middle">&nbsp;</td>
       <td valign="middle"><?php echo drupal_render($form['field_new_country']); ?><a href="javascript:void(0);" class="i_edit_op">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>
       <td valign="middle">&nbsp;</td>
   </tr>
   <tr>
     <td align="right" valign="top"><span class="style2">City</span></td>
     <td align="left" valign="top"  class="edit_value"><?php print $form['field_city']['#value']['value']; ?></td>
     <td align="left" valign="top"><a href="javascript:void(0);" class="editinline">Edit</a></td>
   </tr>
   <tr class="hiddentd">
     <td align="right" valign="top">&nbsp;</td>
     <td align="left" valign="top"><?php echo drupal_render($form['field_city']); ?><a href="javascript:void(0);" class="i_edit">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>
     <td align="left" valign="top">&nbsp;</td>
   </tr>
   <tr>
    <td align="right" valign="top"><span class="style2">ZIP code</span></td>
    <td align="left" valign="top" class="edit_value"><?php echo $form['field_zpc'][0]['value']['#value']; ?></td>
    <td align="left" valign="top"><a href="javascript:void(0);" class="editinline">Edit</a></td>
  </tr>
   <tr class="hiddentd">
     <td align="right" valign="top">&nbsp;</td>
     <td align="left" valign="top"><?php echo drupal_render($form['field_zpc'][0]['value']); ?><a href="javascript:void(0);" class="i_edit">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>
     <td align="left" valign="top">&nbsp;</td>
   </tr>
   <tr>
    <td align="right" valign="top"><span class="style2">Telephone</span></td>
    <td align="left" valign="top" class="edit_value"><?php echo $form['field_phn'][0]['value']['#value']; ?></td>
    <td align="left" valign="top"><a href="javascript:void(0);" class="editinline">Edit</a></td>
  </tr>
   <tr class="hiddentd">
     <td align="right" valign="top">&nbsp;</td>
     <td align="left" valign="top"><?php echo drupal_render($form['field_phn'][0]['value']); ?><a href="javascript:void(0);" class="i_edit">Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>
     <td align="left" valign="top">&nbsp;</td>
   </tr>
   <tr>
    <td align="right" valign="top"><span class="style2">Open since</span></td>
    <td align="left" valign="top" class="edit_value" ><?php print date("Y", $user->created);  ?></td>
    <td align="left" valign="top"><input id="latitude" type="hidden" />
      <input id="longitude" type="hidden" />
      <input id="zoom" type="hidden" value="12" /></td>
  </tr>
   <tr>
       <td width="240" align="right" valign="top"><span class="style2">Introduction for your store</span></td>
       <td align="left" valign="top" class="edit_value"><?php print $form['field_about'][0]['value']['#value']; ?></td>
       <td align="left" valign="top"><a href="javascript:void(0);" class="editinline">Edit</a></td>
       <td align="left" valign="top">

       </td>
   </tr>
   <tr class="hiddentd">
       <td align="right" valign="top">&nbsp;</td>
       <td align="left" valign="top" hight="100px"><?php echo drupal_render($form['field_about']);print drupal_render($form['submit']); ?><a href="javascript:void(0);" class='i_edit_op_mce'>Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a></td>
       <td align="left" valign="top">&nbsp;</td>

   </tr>
   <tr>
  <tr>
    <td height="44" align="right" valign="top"><span class="style2">If you had not only one store,please</span></td>
    <td colspan="2" align="left" valign="top">  </tr>

   <tr>
    <td align="right" valign="middle"><span class="style1"></span></td>
    <td valign="middle"><?php //echo drupal_render($form['buttons']['submit']); ?></td>
    <td valign="middle">&nbsp;</td>
  </tr>
   <tr>
     <td align="right" valign="middle">&nbsp;</td>
     <td valign="middle">&nbsp;</td>
     <td valign="middle">&nbsp;</td>
   </tr>
</table>
   <div id="onemap_canvash" style="height:300px; width:658px; float:right; margin:5px 0px;"></div>
   <input id="latitude" type="hidden" />
   <input id="longitude" type="hidden" />
   <input id="zoom" type="hidden" value="12" />
   <div class="clear"></div>
   <?php print drupal_render($form['field_maphtml']); ?><a href="javascript:void(0);" class='i_edit'>Save</a><a href="javascript:void(0);" class="i_cancel">Cancel</a>
</div>
		
<?php break; 
}
?>
<div style="display:none;"><?php echo drupal_render($form); ?></div>

</div>

<script type="text/javascript">
//$('.profile_edit_cust :input').focus(function() {
//	$(this).addClass('clicked');
//});
//$('.profile_edit_cust :input').blur(function() {
//	$(this).removeClass('clicked');
//});
//$('.editinline').click(function(e) {
//	e.preventDefault();
//	$(':input').removeClass('clicked');
//	var elem = $(this).parent().parent().find(':input');
//	elem.addClass('clicked');
//	elem.focus();
//});


$('.editinline').click(function() {
	$('.hiddentd').fadeOut();
	$(this).parent().parent().next('.hiddentd').fadeIn();
});


$(document).ready( function () {
  $('#edit-field-intro-0-value-wrapper').css({'marginLeft':'3%'});
		$('a.i_edit').click(function() {
			var element = $(this).parent().children('div').children(':input');
            var editValue=$(this).parent().parent().prev().children('.edit_value');  // add by henry.hua
			$(element).addClass('processing_save');
			var elem_name = element.attr('name');
			var elem_val = encodeURIComponent(encodeURIComponent(encodeURIComponent(element.val())));

			var substrs = elem_name.split('[');
			var theUrl = Drupal.settings.breesee.base_url + '/breesee/custom_profile_edit/' + substrs[0] + '/' + elem_val;
			$.ajax({
				url: theUrl,
				success: function(msg){		
					$('html, body').animate({scrollTop: '120px'}, 400);
					$(element).removeClass('processing_save');
					$('#editsuccess').fadeIn();
					setTimeout(function() {
    				$('#editsuccess').fadeOut();
                        if(!editValue.is('option'))
                            editValue.html(decodeURIComponent(decodeURIComponent(decodeURIComponent(elem_val))));    // add by henry.hua
                        else
                        {
                           // alert(element.tagName);
                            editValue.html($("#select option[selected]").text());
                        }

                        $('a.i_cancel').click();
					}, 2000);

				}
			});

			return false;
		});

        $('a.i_edit_op').click(function() {
            var element = $(this).parent().children('div').children(':input');
            var editValue=$(this).parent().parent().prev().children('.edit_value');  // add by henry.hua
            $(element).addClass('processing_save');
            var elem_name = element.attr('name');
            var elem_val = element.val();

            var substrs = elem_name.split('[');
            var theUrl = Drupal.settings.breesee.base_url + '/breesee/custom_profile_edit/' + substrs[0] + '/' + elem_val;
            $.ajax({
                url: theUrl,
                success: function(msg){
                    $('html, body').animate({scrollTop: '120px'}, 400);
                    $(element).removeClass('processing_save');
                    $('#editsuccess').fadeIn();
                    setTimeout(function() {
                        $('#editsuccess').fadeOut();
                            editValue.html(element.find('option:selected').text());
                        $('a.i_cancel').click();
                    }, 2000);

                }
            });
            return false;
        });

        $('a.i_edit_op_tax').click(function() {                      // add by henry.hua    fort taxnomy
            var element = $(this).parent().children(':input');
            var editValue=$(this).parent().parent().prev().children('.edit_value');  // add by henry.hua
            $(element).addClass('processing_save');
            var elem_name = element.attr('name');
            var elem_val = element.val();
            var substrs = elem_name.split('[');
            var theUrl = Drupal.settings.breesee.base_url + '/breesee/custom_profile_edit/' + substrs[0] + '/' + elem_val;
            $.ajax({
                url: theUrl,
                success: function(msg){
                    $('html, body').animate({scrollTop: '120px'}, 400);
                    $(element).removeClass('processing_save');
                    $('#editsuccess').fadeIn();
                    setTimeout(function() {
                        $('#editsuccess').fadeOut();
                        editValue.html(element.find('option:selected').text());
                        $('a.i_cancel').click();
                    }, 2000);

                }
            });
            return false;
        });

    $('a.i_edit_op_multext').click(function() {                      // add by henry.hua    fort mulText
        var element = $(this).parent().children('div').children('div').children('span').children('textarea');
        var editValue=$(this).parent().parent().prev().children('.edit_value');  // add by henry.hua
        $(element).addClass('processing_save');
        var elem_name = element.attr('name');
        var elem_val = element.val();
        var substrs = elem_name.split('[');
        var theUrl = Drupal.settings.breesee.base_url + '/breesee/custom_profile_edit/' + substrs[0] + '/' + elem_val;
        $.ajax({
            url: theUrl,
            success: function(msg){
                $('html, body').animate({scrollTop: '120px'}, 400);
                $(element).removeClass('processing_save');
                $('#editsuccess').fadeIn();
                setTimeout(function() {
                    $('#editsuccess').fadeOut();
                    editValue.html(element.val());
                    $('a.i_cancel').click();
                }, 2000);
            }
        });
        return false;
    });
    $('a.i_edit_op_mce').click(function() {                      // add by henry.hua    fort mulText
        var element  =$(window.frames["edit-field-about-0-value_ifr"].document).find("#tinymce");
        var editValue=$(this).parent().parent().prev().children('.edit_value');  // add by henry.hua
        $(element).addClass('processing_save');
        var elem_name = element.attr('name');
        var elem_val =  decodeURIComponent(encodeURIComponent(element.html()));
        var substr = 'field_about';
        var theUrl = Drupal.settings.breesee.base_url + '/breesee/custom_profile_edit/' + substr + '/' + elem_val;

        $.ajax({
            url: theUrl,
            success: function(msg){
                $('html, body').animate({scrollTop: '120px'}, 400);
                $(element).removeClass('processing_save');
                $('#editsuccess').fadeIn();
                setTimeout(function() {
                    $('#editsuccess').fadeOut();
                    editValue.html(element.val());
                    $('a.i_cancel').click();
                }, 2000);
            }
        });
        return false;

      //  function ajaxSave() {
//            var ed = tinyMCE.get('content');
//
//            // Do you ajax call here, window.setTimeout fakes ajax call
//            ed.setProgressState(1); // Show progress
//            window.setTimeout(function() {
//                ed.setProgressState(0); // Hide progress
//                alert(ed.getContent());
//            }, 3000);
      //  }
    });
    $('a.i_cancel').click(function() {                   //add by henry.hua 2014.3.1
        $('.hiddentd').fadeOut();
    });
		
	$('#change_pass').click(function() {
		$(this).append('<span class="throbber" id="throbber"></span>');
		var passone = $('#edit-pass-pass1').val();
		var passtwo = $('#edit-pass-pass2').val();
		
		if (passone == passtwo ) { 
			
			if(passtwo.length >=6 ) { 
		
					var theUrl = Drupal.settings.breesee.base_url + '/breesee/custom_profile_edit/pass/' + passone + '/' + passtwo;
					$.ajax({
						url: theUrl,
						success: function(msg){		
							$('html, body').animate({scrollTop: '220px'}, 400);
							$('#pass_msg').html(msg);
							$('#editsuccess').fadeIn();
                            setTimeout(function() {
                                $('#editsuccess').fadeOut();   // henry add 2014/3/15
                                $('.hiddentd').fadeOut();
                            }, 2000);
						}
					});
				}
				else 
				$('#pass_msg').html('<span style="color:red;">Minimum length is 6</span>');
		}
	
		else {
			$('#pass_msg').html('<span style="color:red;">Password Mismatch</span>');
		}
			
		$('#throbber').remove();
	});
    function html_encode(str)
    {
        var s = "";
        if (str.length == 0) return "";
        s = str.replace(/&/g, "&amp;");
        s = s.replace(/</g, "&lt;");
        s = s.replace(/>/g, "&gt;");
        s = s.replace(/ /g, "&nbsp;");
        s = s.replace(/\'/g, "&#39;");
        s = s.replace(/\"/g, "&quot;");
        s = s.replace(/\n/g, "<br/>");
        return s;
    }


    function html_decode(str)
    {
        var s = "";
        if (str.length == 0) return "";
        s = str.replace(/&amp;/g, "&");
        s = s.replace(/&lt;/g, "<");
        s = s.replace(/&gt;/g, ">");
        s = s.replace(/&nbsp;/g, " ");
        s = s.replace(/&#39;/g, "\'");
        s = s.replace(/&quot;/g, "\"");
        s = s.replace(/<br\/>/g, "\n");
        return s;
    }
});

</script>

<script type="text/javascript">
console.log(999999999999999999)
$(document).ready(function(){
$('#upload_img').axuploader({
  url: Drupal.settings.breesee.base_url + '/breesee/ajax_image_upload',
  finish:function(x,files){ 
		$('.city_profiles').html('<img width="160" height="160" src="' + '<?php echo $base_url; ?>/' + x +'" >');
		$('td div.picture').html('<img width="160" height="160" src="' + '<?php echo $base_url; ?>/' + x +'" >');
		$('div.replac_pic').html('<img width="241" height="178" src="' + '<?php echo $base_url; ?>/' + x +'" >');
		$('div.topsmallimg').html('<img width="15" height="15" src="' + '<?php echo $base_url; ?>/' + x +'" >');
	 },
  enable:true
});
});
</script>
