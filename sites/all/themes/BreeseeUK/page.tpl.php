<?php
global $theme_path, $base_url, $user;
$theme_path = $base_url.'/'.$theme_path;
$number_of_items = count(uc_cart_get_contents());
if($number_of_items == '')
	$number_of_items = 0;
	
	
if(isset($_SESSION['next']) && $user->uid != 0 && ($_SESSION['newuserid'] == '')) {
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

<?php 
$_SESSION['cr_prelad'];
if(isset($_SESSION['cr_prelad'])) {
	echo '<script type="text/javascript"> 
	jQuery("#creation_page_block").html("Loading ...");
	jQuery(document).ready(function () { 
		jQuery.ajax({
							url: Drupal.settings.breesee.base_url + "/creation/" + '.$_SESSION['cr_prelad'].',
							success: function(msg){		
								jQuery("#creation_page_block").html(msg);	
								jQuery("#creation_page_block").show("slow");
								backward();
								pre_step();
								listcreations();
								init_imagebig();
								jQuery("#mycarousel").jcarousel({ });
						}
		}); }); </script>';
		unset($_SESSION['cr_prelad']);
}
?>


<!-- < ?php if (arg(0) == 'creator') { ?>
< script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false">< / script>
< ?php } ?> -->
<?php 
if (arg(0) == 'user' && _breesee_get_role(arg(1)) == 'store' ){ 
$strinfo = content_profile_load('store', arg(1));
$maps = $strinfo->field_maphtml[0]['value'];
$mapcoords = explode("#", $maps);

?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
$(document).ready( function () {
			function initialize() {
				var latlng = new google.maps.LatLng(<?php echo $mapcoords[0]; ?>, <?php echo $mapcoords[1]; ?>);
				var settings = {
					zoom: 15,
					center: latlng,
					mapTypeControl: true,
					mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
					navigationControl: true,
					navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
					mapTypeId: google.maps.MapTypeId.ROADMAP};
				var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
				var contentString = '<div id="content">'+
					'<div id="siteNotice">'+
					'</div>'+
					'<h1 id="firstHeading" class="firstHeading"><?php echo $strinfo->title; ?></h1>'+
					'<div id="bodyContent">'+
					'<p><?php echo substr(trim($strinfo->field_about[0]['value']), 0, 150); ?>...</p>'+
					'</div>'+
					'</div>';
				var infowindow = new google.maps.InfoWindow({
					content: contentString
				});
				
				var companyImage = new google.maps.MarkerImage('<?php echo $base_url; ?>/images/store_loc.png',
					new google.maps.Size(100,50),
					new google.maps.Point(0,0),
					new google.maps.Point(50,50)
				);

				var companyPos = new google.maps.LatLng(<?php echo $mapcoords[0]; ?>, <?php echo $mapcoords[1]; ?>);
				var companyMarker = new google.maps.Marker({
					position: companyPos,
					map: map,
					icon: companyImage,
					title:"<?php echo $strinfo->title; ?>",
					zIndex: 3});
					google.maps.event.addListener(companyMarker, 'click', function() {
					infowindow.open(map,companyMarker);
					// toggleBounce(companyMarker);
				});
			}
			
			function toggleBounce(marker) {
				if (marker.getAnimation() != null) {
				marker.setAnimation(null);
				} else {
				marker.setAnimation(google.maps.Animation.BOUNCE);
				}
			}

			$('.findonmap').click(function(e) {
				var current = $('#map_canvas').height();
				if(current == 0 ) {
					$('.findonmap').html('Hide Map');
					e.preventDefault();
					$('html, body').animate({scrollTop: '100px'}, 600);

					initialize();
					$("#map_canvas").animate(
								{"height": "250px"},
								"fast");
					$("#close_gmap").fadeIn();
				}
                else if (current==1)
                {
                    $('.findonmap').html('Hide Map');
                    e.preventDefault();
                    $('html, body').animate({scrollTop: '100px'}, 600);

                    //initialize();
                    $("#map_canvas").animate(
                        {"height": "250px"},
                        "fast");
                    $("#close_gmap").fadeIn();
                }
				else { 
					$('.findonmap').html('Show Map');
					$("#map_canvas").fadeOut();
					$("#close_gmap").fadeOut();
					$('#map_canvas').height(1);
				}
			 
			
			});	
});	



</script>
<?php } 

if(arg(1) == 'home') {
 ?>
 <script type="text/javascript">
 $(document).ready(function(){
	$('#wysiwyg-toggle-edit-body').click();
});
 </script>
<?php
	
}

?>

<title><?php print $head_title ?></title>


<script language="javascript">
var base_url = '<?php echo $base_url; ?>';
</script>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4e967b840f512c34"></script> 
</head>
<body<?php print phptemplate_body_class($left, $right); ?>>
<!-----[main-layout-starts-here]---->
<div class="wrapper">
    <div class="header"><!-----[header-starts-here]---->
    	<div class="logo"><a href="<?php print $base_url; ?>"><img src="<?php print $theme_path; ?>/images/logo.jpg" /></a></div><!-----[logo]---->
        <div class="header_right"><!-----[header-right-side-starts-here]---->
        	<ul class="cart"><!-----[cart-starts-here]---->
            	<li>
<!--              		<span>--><?php //print l(t(Cart), 'cart') ?><!--</span>    2014/4/12 henry.hua remove cart  -->
<!--                	<span><b>--><?php //print $number_of_items; ?><!--</b></span> 2014/4/12 henry.hua remove cart-->
                </li>
                <li>
<!--                	<img src="--><?php //print $theme_path; ?><!--/images/cart.jpg" />              2014/4/12 henry.hua remove cart-->
                </li>
								<?php if (privatemsg_unread_count() > 0 ) { ?>
                <li><a href="<?php echo $base_url.'/user/mailbox'; ?>">
                 <span class="count-pms" id="pm_cnt"><?php print privatemsg_unread_count(); ?></span>
                  <div class="topsmallimg" style="float:right;"><img id="bounce" src="<?php print $theme_path; ?>/images/mail.png" /></a></div>
                </li>
                <?php } else { ?>
                <li><span class="count-pms" id="pm_cnt"></span></li>
                <?php }?>
            </ul><!-----[cart-closed-here]---->
            <ul class="sign_up"><!-----[signup-starts-here]---->

                <li style="text-align:right;">
      <?php 
			if ($user->uid != 0) {
			print '| '.l( t('Log Out'), $base_url.'/logout' );
			print '| '.l( t('Help'), $base_url.'/content/help' );
			?>
<!--               <li class="pop"><a href="#"><b>Buy</b></a></li>   remove 'sell ' 'buy' on entrance menu henry.hua 2014.4.20    issue 45-->
<!--              <li class="pop"><a href="#"><b>Sell</b></a></li>-->
              <li class="pop">
<?php               $u_img = _breesee_get_profileimage($user->uid);?>
        	<a href="#"><?php  print theme('imagecache', 'left_menu_img',$u_img ); ?></a>
        </li>
      <li class="pop">  <?php $name = _breesee_get_display_name(); 
			//$alias = $base_url.'/'.drupal_get_path_alias('user/'.$user->uid);
			$alias = $base_url.'/user/home';
			
			print l('Welcome Back '.$name,$alias);
			?> 
      
      <div class="slide_down">
                    	<div class="top_slide_dow"></div>
                      <?php print $dropdown ?>                    </div>
      </li>
		
      <?php 
			$class = 'login';
			}
			else 	{
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
            </ul><!-----[signup-closed-here]---->
        </div><!-----[header-right-side-closed-here]---->
  </div><!-----[header-closed-here]---->
    <div class="clear"></div>
    <?php if ($sliders) {?>
    <div class="sliderimages"><?php print $sliders ?></div>
    <?php }  ?>
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
    </ul><div class="clear"></div>
    <!--<span id="close_gmap"></span>-->
    <div id="map_canvas"></div>
<!-----[mainmenu-closed-here]---->
    <div class="clear"></div>
    <div class="bredcrumb"><!-----[bredcrumb-starts-here]---->
    	<?php print $breadcrumb; ?>
    </div>
<!-----[bredcrumb-closed-here]---->
    <div class="clear"></div>
    <div class="blank_dev"><?php print $messages; ?></div><!-----[developer div-closed-here]---->
    <span class="clbtn" style="display:none;">x</span>
    <div id="pmsg" class="modalframe-example-messages"></div>
    <div class="index"><!-----[index-starts-here]---->
    <div class="content_area">
    <?php if($left != '') :  ?>
    <div class="category left_cat <?php echo arg(0); ?>"><!-----[category-starts-here]---->
    <?php print $left; ?>    </div>
    <!-----[category closed-here]---->
    <?php endif; ?>   
      
      <div class="centre">
        <div class="main_container"><!-----[middle-container-starts-here]---->
        <?php if ($user->uid == 1) {  ?>
                  <div class="tabs"><ul class="tabs"><?php print $tabs ?></ul></div>
                  <?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
         <?php } ?> 
         <?php if ((arg(1) != '300') && ($node->type == 'page' )) {  ?>
         <h1 class="title"><?php echo $node->title; ?></h1>
         <?php } ?>
            <div id="homeblog">
						<?php print $contentarea; ?>
            <?php print $content; ?>
             <div class="back_top"><a href="javascript:void(0);" id="backtotop">Back to Top</a></div>
             </div>
                  </div><!-----[middle-container-closed-here]---->
      </div>
<?php if($right != ''):  ?>
        <div class="right_category"><!-----[right-container-closed-here]---->
        	<?php print $right; ?>

            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- preesee200 -->
            <ins class="adsbygoogle"
                 style="display:inline-block;width:200px;height:200px"
                 data-ad-client="ca-pub-7427292104545097"
                 data-ad-slot="4699320368"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>

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
<!--<div id="please_wait" class="please_wait">
	<div class="please_wait_content"></div>
</div>-->
<!-----[main-layout-closed-here]---->
<?php //print $feed_icons ?>
<?php print $closure; ?>
</body>
</html>