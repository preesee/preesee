<?php
global $theme_path, $base_url, $user;
$number_of_items = count(uc_cart_get_contents());
$theme_path = $base_url.'/'.$theme_path;
if($number_of_items == '')
	$number_of_items = 0;
//print_r($_SESSION);

	
				if( $_SESSION['next'] == 'creator') {
				//drupal_set_message('Redirected on your request');
				unset($_SESSION['next']);
				drupal_goto('node/add/creators');
				}
				if( $_SESSION['next'] == 'store') {
				//drupal_set_message('Redirected on your request');
				unset($_SESSION['next']);
				drupal_goto('node/add/store');
				}
				
				
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
    <?php print $head ?>
<title><?php print $head_title ?></title>
    <?php print $styles ?>
    <?php print $scripts; 
		drupal_add_js(drupal_get_path('theme', 'BreeseeUK') . '/js/blog.js');
		?>
    <!--[if lt IE 7]>
      <?php print phptemplate_get_ie_styles(); ?>
    <![endif]-->
<script language="javascript">
var base_url = '<?php echo $base_url; ?>';
</script>
</head>
<body<?php print phptemplate_body_class($left, $right); ?>>
<!-----[main-layout-starts-here]---->
<div class="wrapper">
    <div class="header"><!-----[header-starts-here]---->
    	<div class="logo"><a href="<?php print $base_url; ?>"><img src="<?php print $theme_path; ?>/images/logo.jpg" /></a></div><!-----[logo]---->
        <div class="header_right"><!-----[header-right-side-starts-here]---->
        	<ul class="cart"><!-----[cart-starts-here]---->
            	<li>
<!--              		<span>--><?php //print l(t(Cart), 'cart') ?><!--</span>-->
<!--                	<span><b>--><?php //print $number_of_items; ?><!--</b></span>-->
                </li>
                <li>
<!--                	<img src="--><?php //print $theme_path; ?><!--/images/cart.jpg" />-->
                </li>
								<?php if (privatemsg_unread_count() > 0 ) { ?>
                <li><a href="<?php echo $base_url.'/user/mailbox'; ?>">
                 <span class="count-pms" id="pm_cnt"><?php print privatemsg_unread_count(); ?></span>
                  <img id="bounce" src="<?php print $theme_path; ?>/images/mail.png" /></a>
                </li>
                <?php } else { ?>
                <li><span class="count-pms" id="pm_cnt"></span></li>
                <?php }?>
            </ul>
          <!-----[cart-closed-here]---->
            <ul class="sign_up"><!-----[signup-starts-here]---->

                <li style="text-align:right;">
      <?php 
			if ($user->uid != 0) {
			print '| '.l( t('Log Out'), $base_url.'/logout' );
			print '| '.l( t('Help'), $base_url.'/content/help' );
			
			?>
<!--                <li class="pop"><a href="#"><b>Buy</b></a>          remove 'sell ' 'buy' on entrance menu henry.hua 2014.4.20   issue 45-->
                </li> 
<!--                <li class="pop"><a href="#"><b>Sell</b></a>-->
                </li>
                 <li class="pop">
<?php               $u_img = _breesee_get_profileimage($user->uid);?>
        	<a href="#"><?php  print theme('imagecache', 'left_menu_img',$u_img ); ?></a>
        </li>
      <li class="pop"> <?php $name = _breesee_get_display_name(); 
			//$alias = $base_url.'/'.drupal_get_path_alias('user/'.$user->uid);
			$alias = $base_url.'/user/home';
			$u_img = _breesee_get_profileimage($user->uid);
			print l('Welcome Back '.$name,$alias); 
			?> 
      
      <div class="slide_down">
                    	<div class="top_slide_dow"></div>
                         <?php print $dropdown ?>
                    </div>
      
      </li> 

      <?php 
			$class = 'login';
			}
			else 
			{
			//print 'Hi Guest';
			?>
      
      <a href="javascript:void(0);" id="nopopup">Login</a> |
      <a href="<?php print $base_url.'/registration' ?>">Register</a> |
      <a href="<?php print $base_url.'/content/help' ?>">Help</a>
      <?php 
			$class = arg(0);
			}
			?>
       </li>
              <!-----[pop-menu]---->
            </ul>
            <!-----[signup-closed-here]---->
        </div><!-----[header-right-side-closed-here]---->
  </div><!-----[header-closed-here]---->
   
    <div class="clear"></div>
     <?php $rolee = _breesee_get_role($user->uid);?>
    <ul class="main_menu <?php echo $rolee; ?> <?php echo $class; ?>"><!-----[mainmenu-starts-here]---->
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
    <div class="sliderimages"><?php print $sliders ?></div>
<!-----[bredcrumb-closed-here]---->
    <div class="clear"></div>
    <div class="blank_dev"><?php print $messages ?></div><!-----[developer div-closed-here]---->
    <div id="pmsg" class="modalframe-example-messages"></div>
    <div class="clear"></div>
    
    
    <div class="index"><!-----[index-starts-here]---->
    <div class="content_area">
    
    <?php if($left != '') :  ?>
    <div class="category"><!-----[category-starts-here]---->
   		<?php print $left; ?>
    </div>
    <!-----[category closed-here]---->
    <?php endif; ?>   
      
      <div class="centre">
        <div class="main_container"><!-----[middle-container-starts-here]---->
        <div id="pmsg" class="modalframe-example-messages"></div>
                  <div class="tabs"><?php //print $tabs ?></div>
                  <?php print $help ?>
                    <div id="homeblog"  class="index_page_cover">
											<?php print $contentarea ?>
                    </div>
                  </div><!-----[middle-container-closed-here]---->
      </div>
      
    <?php if($right != ''):  ?>
        <div class="right_category"><!-----[right-container-closed-here]---->
        <?php print $right ?>
        </div>
     <!-----[right-container-closed-here]---->
       <?php endif; ?>
    </div>

    </div><!-----[index-closed-here]---->
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
            <li class="left_footer"><!-----[footer-left-starts-here]---->
								<?php print $footer_lmenu;  ?>
                <p>Copyright @ 2014 Preesee Inc. All right Reserved </p>
            </li><!-----[footer-left-closed-here]---->
            <li class="right_footer"><!-----[footer-right-starts-here]---->
              <p>Take a Preesee and share with friends</p>
              <div class="social">
              	<?php print $footer_social;  ?>
              </div>  
            </li><!-----[footer-right-closed-here]---->
        </ul>
    </div><!-----[footer-closed-here]---->
</div>
<!-----[main-layout-closed-here]---->
<?php //print $feed_icons ?>
<?php print $closure ?>
</body>
</html>