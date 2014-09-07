<div id="user_registration">
<?php 
//print_r($form);
//die();
global $theme_path, $base_url, $user;
$theme_path_full = $base_url.'/'.$theme_path;
switch(arg(2)) {
case 'audience':

$breadcrumb[] = l('Home', '<front>');
$breadcrumb[] = l('Register', 'registration');
$breadcrumb[] = 'Audience';
drupal_set_breadcrumb($breadcrumb);

?>
<div class="wrapper" id="regn_audience">
<div class="user_regi_step1_wrapper">
  <div class="left_block1">
    <div class="city_store_your_store_name_cover2">
      <h2><?php echo t('Your desired username:'); ?></h2>
      <div class="your_store_name_text_area_cover">
        <div id="edit-title-wrapper" class="form-item">
          <?php 
														//print_r($form['account']['mail']);
														unset($form['account']['pass']['#description']);
														unset($form['account']['mail']['#description']);
														unset($form['account']['name']['#prefix']);
														unset($form['account']['name']['#suffix']);
														unset($form['account']['name']['#description']);
														print drupal_render($form['account']['name']);
														?><span id="u_stat"></span>
        </div>
      </div>
      <div class="clear"></div>
      <div class="warning_main_block2"> <span class="warning_main_left2"> <a href="#"><?php echo t('WARNING'); ?></a> </span> <span class="warning_main_right2">
        <p>
          <?php
				echo t(' Once you set up your username name, you cannot change again. If you want to 
              update the account to seller account later, Please sure you store name 
              should not conflict to the other real store in your country. For more info 
              please read breesee?s city store policy');
			?>
        </p>
      </span> </div>
      <div class="warning_main_right_sub">
        <p>
          <?php
			echo t('URL will NOT be activated until all required fields are filled out on this page.');
		?>
        </p>
      </div>
    </div>
    <div class="left_step1">
      <span class="name_step1"><?php echo t('First Name'); ?><b>*</b></span> <span> <?php print drupal_render($form['field_fname']); ?> </span> </div>
    <div class="left_step1">
      <span class="name_step1"><?php echo t('Last Name'); ?><b>*</b></span> <span> <?php print drupal_render($form['field_lname']); ?> </span> </div>
      
    <div class="left_step1">
      <span class="name_step1"><?php echo t('Password'); ?><b>*</b></span> <span> <?php print drupal_render($form['account']['pass']['pass1']); ?> </span> </div>
      <div class="left_step1">
      <span class="name_step1"><?php echo t('Retype Password'); ?><b>*</b></span> <span> <?php print drupal_render($form['account']['pass']['pass2']); ?> </span> </div>
    <div class="left_step1">
      <span class="name_step1"><?php echo t('Email address'); ?><b>*</b></span> <span> <?php print drupal_render($form['account']['mail']); ?> </span> </div>

    <div class="left_step1">
      <span class="name_step1"><?php echo t('Country'); ?><b>*</b></span> <span> <?php print drupal_render($form['field_new_country']); ?> </span> </div>
           <div class="cover_btn_sub">
        <?php $form['submit']['#attributes']=array('class' =>'join_breez' );
						      $form['submit']['#value']='Join Preesee';
						       print drupal_render($form['submit']); ?>
      </div>
  </div>

</div>
<div style="display:none;">
<?php print drupal_render($form); ?>
</div>

</div>
</div>

<?php 
	break;
	case 'creator':
		$_SESSION['next'] = 'creators';
        $_SESSION['creatorName'] = $form['account']['name'];
		drupal_set_message('You need to have a Breesee account before you can apply for a Creator account. If you have already registered on Preesee, please log in or sign in with Facebook account.', 'status');
		drupal_goto('user/register/audience');
		break;
	case 'store':
		$_SESSION['next'] = 'store';
        $_SESSION['storeName'] = $form['account']['name'];
		drupal_set_message('You need to have a Breesee account before you can apply for a Store account. If you have already registered on Preesee, please log in or sign in with Facebook account', 'status');
		drupal_goto('user/register/audience');
		break;

}

?>