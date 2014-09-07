<?php
global $theme_path, $base_url, $user;
$theme_path = $base_url.'/'.$theme_path;
$number_of_items = count(uc_cart_get_contents());

if($user->uid != 0 ) {
	header('Location: '.$base_url.'/user/home');
	exit;
}

if(isset($_SESSION['next']) && $user->uid != 0) {
	$path = $_SESSION['next'];
	unset($_SESSION['next']);
	drupal_goto('node/add/'.$path);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>" xmlns:fb="http://www.facebook.com/2008/fbml" >
<head>

<?php print $head; ?>
<?php print $styles; ?>
<?php print $scripts;  ?>    
<title><?php print $head_title ?></title>
<script language="javascript">
var base_url = '<?php echo $base_url; ?>';
</script>
</head>
<body<?php print phptemplate_body_class($left, $right); ?>>
<div class="wrapper">
    <div class="header"><!-----[header-starts-here]---->
    	<div class="logo"><a href="<?php print $base_url; ?>"><img src="<?php print $theme_path; ?>/images/logo.jpg" /></a></div>
        <div class="header_right"><!-----[header-right-side-starts-here]---->
        	<ul class="cart"><!-----[cart-starts-here]---->
            	<li>
              		<span><?php print l(t(Cart), 'cart') ?></span>
                	<span><b><?php print $number_of_items; ?></b></span>
            </li>
                <li>
                	<img src="<?php print $theme_path; ?>/images/cart.jpg" />
                </li>
								<?php if (breesee_count_pms($user->uid) > 0 ) { ?>
                <li><a href="<?php echo $base_url.'/user/mailbox'; ?>">
                 <span class="count-pms" id="pm_cnt"><?php print breesee_count_pms($user->uid); ?></span>
                  <img id="bounce" src="<?php print $theme_path; ?>/images/mail.png" /></a>
                 
                </li>
                <?php } ?>
          </ul><!-----[cart-closed-here]---->
            <ul class="sign_up"><!-----[signup-starts-here]---->

                <li style="text-align:right;">
      <?php 
			if ($user->uid != 0) {
			print '| '.l( t('Log Out'), $base_url.'/logout' );
			print '| '.l( t('Help'), $base_url.'/content/help' );
			?>
<!--                <li class="pop"><a href="#"><b>Buy</b></a></li>   remove 'sell ' 'buy' on entrance menu henry.hua 2014.4.20   issue 45-->
<!--              <li class="pop"><a href="#"><b>Sell</b></a></li>-->
      <li class="pop">  <?php $name = _breesee_get_display_name(); 
			//$alias = $base_url.'/'.drupal_get_path_alias('user/'.$user->uid);
			$alias = $base_url.'/user/home';
			$u_img = _breesee_get_profileimage($user->uid);
			print l('Welcome Back '.$name,$alias); print theme('imagecache', 'left_menu_img',$u_img );
			?> 
      
      <div class="slide_down">
                    	<div class="top_slide_dow"></div>
                      <?php print $dropdown ?>                    </div>
      </li>

      <?php 
			}
			else 	{
			?>
      
      <a href="javascript:void(0);" id="nopopup">Login</a> |
      <a href="<?php print $base_url.'/registration' ?>">Register</a> |
      <a href="<?php print $base_url.'/content/help' ?>">Help</a>
      <?php 
			}
			?>
       </li>
            </ul>
        </div>
  </div>
    <div class="clear"></div>
    <div id="map_canvas"></div>
    <div class="sliderimages"><?php print $sliders ?></div>
    <div class="clear"></div>
    <ul class="main_menu"><!-----[mainmenu-starts-here]---->
    <?php
		if ($user->uid != 0) { ?>
    <li><a class="new_button8" href="<?php print $base_url ?>/user/home">HOME</a></li>
    	<li><span>&nbsp;</span></li>
      <?php } ?>
      
    <li><a class="new_button9" href="<?php print $base_url ?>/shops">SHOP</a></li>
        <li><span>&nbsp;</span></li>
        <li><a class="new_button10" href="<?php print $base_url ?>/creators">CREATORS</a></li>
        <li><span>&nbsp;</span></li>
        <li><a class="new_button11" href="<?php print $base_url ?>/cities">CITIES</a></li>
        <li class="right_main_menu"><?php print $breeseesrch ?></li><!-----[search area]---->
    </ul>
    
<!-----[mainmenu-closed-here]---->
    <div class="clear"></div>
    <div class="bredcrumb"><!-----[bredcrumb-starts-here]---->
    	<?php print $breadcrumb; ?>
    </div>
<!-----[bredcrumb-closed-here]---->
    <div class="clear"></div>
    <!-----[developer div-closed-here]---->
    <span class="clbtn" style="display:none;">x</span>
		<div id="pmsg" class="modalframe-example-messages"></div>
    <div class="blank_dev"><?php print $messages; ?></div><!-----[developer div-closed-here]---->
    <div class="index"><!-----[index-starts-here]---->
    
<div id="user_registration">
<?php 
//print_r($form);
//die();
global $theme_path, $base_url, $user;
$theme_path_full = $base_url.'/'.$theme_path;
switch(arg(2)) {
case 'audience':
$breadcrumb = array();
$breadcrumb[] = l('Home', '<front>');
$breadcrumb[] = l('Register', 'registration');
$breadcrumb[] = 'Audience';
drupal_set_breadcrumb($breadcrumb);

?>
<div class="wrapper">
<div class="user_regi_step1_wrapper"><!-----[breesee user registration-step1-starts-here]---->
    	<div class="breesee_registration_new_step_cover"><!-----[breesee user header new-cover-starts-here]---->
    	<div class="breesee_account">
       		<div class="logo_accont"><img src="<?php echo $base_url.'/sites/all/themes/BreeseeUK/images/user_regi_step1/logo.jpg'; ?>" /></div>
            <div class="text_log_acc"><?php echo t('Preesee Account'); ?></div>
        </div>
        <div class="clear"></div>
        <div class="beco_apart_strip">
        	<h1><?php echo t('Become a part of the bigger creative community beyond your city') ?></h1>
          <p><?php echo t('Preesee Account is free. You can connect with other art enthusiasts, get updates from your favorite designers and shop products from local stores near you'); ?></p>
        </div>
        
        </div><!-----[breesee user header new-cover-closed-here]---->
        <div class="step1_index"><!-----[breesee complete cover-starts-here]---->
        	
            	<div class="left_block1">
<?php print $content; ?>
  </div>
         
        	<div class="right_step1"><!-----[breesee right-side-starts-here]---->
                <div class="or_box">&nbsp;</div><!-----[breesee OR box]---->
                
                <div class="new_right_left_step1"></div>
                 
                <div class="new_right_left_step1">
									<?php print drupal_get_form('breesee_user_login_form'); ?>
              	</div>
            
                <div class="new_right_left_step1">
                
     
                </div>
            </div>
        </div>
</div>
 
<div style="display:none">

</div>

</div>
<div class="breesee_reader_step_newblock">
      <h1><?php echo t('Why do we need to know where you live?'); ?></h1>
      <p> <?php echo t('We would like to recommend you the nearest stores that carry 
                            your interested artworks and creative products from your favorite 
                            designers. We will not sell any of your information to these local 
                            stores. Learn more about breesee accounts in'); ?> <a href="<?php echo $base_url; ?>/content/q-center"><?php echo t('FAQ section'); ?></a> </p>
    </div>
</div>

<?php 
	break;
	case 'creator':
		$_SESSION['next'] = 'creators';
		drupal_set_message('You need to have a Breesee account before you can apply for a Creator account. If you have already registered on Breesee, please log in or sign in with Facebook account.', 'status');
		drupal_goto('user/register/audience');
		break;
	case 'store':
		$_SESSION['next'] = 'store';
		drupal_set_message('You need to have a Breesee account before you can apply for a Store account. If you have already registered on Breesee, please log in or sign in with Facebook account', 'status');
		drupal_goto('user/register/audience');
		break;

}

?>
  </div>
<!-----[index-closed-here]---->
    <div class="clear"></div>
    <div class="pre_footer"><!-----[pre-footer-starts-here]---->
    	<div class="pre_foo_left"><!-----[pre-footer-left]---->
        	<?php print $leftbottomfb; ?>
        
          
      </div><!-----[pre-footer-left]---->
        <div class="pre_foo_right"><!-----[pre-footer-right]---->
        	<div class="down_box"></div>
            <div class="down_text">
            	<?php print $translation ?>
            </div>
        </div><!-----[pre-footer-right]---->
    </div><!-----[prefooter-closed-here]---->
    <div class="footer"><!-----[footer-starts-here]---->
    	<ul>
            <li class="left_footer">
								<?php print $footer_lmenu;  ?>
                <p>Copyright @ 2010 Breesee Inc. All right Reserved </p>
            </li>
            <li class="right_footer">
              <p>Take a breesee and share with friends</p>
              <div class="social">
              	<?php print $footer_social;  ?>
              </div>  
            </li>
      </ul>
    </div>
</div>
<?php //print $feed_icons ?>
<?php print $closure; ?>
</body>
</html>