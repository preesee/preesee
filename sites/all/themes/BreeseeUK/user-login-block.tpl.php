<style type="text/css">
<!--
.style1 {
	color: #0099FF;
	font-weight: bold;
}
-->
</style>
<div id="reg_login_block">
<?php 

unset($form['links']);
$form['breesee_submit']['#attributes'] = array('class'=>'breesee_login_btn') ?>
<table width="90%" border="0" cellpadding="2" cellspacing="0">
  <tr>
    <td align="left" valign="middle"><span class="style1">Already Have an Account ?</span></td>
    </tr>
  <tr>
    <td align="left" valign="middle"><div id="c_login_info"></div></td>
  </tr>
  <tr>
    <td align="left" valign="middle"><strong>Email or Username :</strong></td>
  </tr>
  <tr>
    <td align="left" valign="middle"><?php echo drupal_render($form['breesee_uname']); ?></td>
  </tr>
  <tr>
    <td align="left" valign="middle"><strong>Your Password : </strong></td>
  </tr>
  <tr>
    <td align="left" valign="middle"><?php echo drupal_render($form['breesee_password']); ?></td>
  </tr>
  <tr>
    <td align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="middle"><?php echo drupal_render($form['breesee_submit']); ?></td>
  </tr>
  <tr>
    <td align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="middle">Have a Facebook Account ?</td>
  </tr>
  <tr>
    <td align="left" valign="middle">
    <div id="fb_login_div">
<?php 
	global $base_url;
	module_load_include('php', 'breesee_fb', 'facebook');
  $config = array();
  $config['appId'] = variable_get('fbappid', '300412483359298');
  $config['secret'] = variable_get('fbappsecret','40349843c8a23aa341b5bc79a77aa464');
  $config['fileUpload'] = false; // optional

  $facebook = new Facebook($config);
	$user_id = $facebook->getUser();
	if($user_id) {
      try {
        $user_profile = $facebook->api('/me','GET');
				$logoutUrl = $facebook->getLogoutUrl();
      	echo '<a href="' . $logoutUrl . '" id="fb_login_a">Disconnect from Facebook</a>';
      } 
			catch(FacebookApiException $e) {
			$login_param = array(
				'redirect_uri' => $base_url.'/fb_signup',
				'scope' => 'email,read_stream',
			);
			$user_id = $facebook->getUser();
			$login_url = $facebook->getLoginUrl($login_param);
			echo '<a href="' . $login_url . '" id="fb_login_a" >Connect With Facebook</a>';
			error_log($e->getType());
			error_log($e->getMessage());
      }   
    } else {
			$login_param = array(
				'redirect_uri' => $base_url.'/fb_signup',
				'scope' => 'email,read_stream',
			);
      $login_url = $facebook->getLoginUrl($login_param);
      echo '<a href="' . $login_url . '" id="fb_login_a" >Connect With Facebook</a>';

    }

?>
</div>    </td>
  </tr>
  <tr>
    <td align="left" valign="middle">We promise that we will not post anything
      in your wall.</td>
  </tr>
</table>
<?php
print drupal_render($form);
?>


</div>
