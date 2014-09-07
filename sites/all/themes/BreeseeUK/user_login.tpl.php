 <!--Login page by suman --> 

<?php
global $base_url;
//print_r($form);
//die();
?>
<div class="registration">
    <!-----[registration-starts-here]---->
    <h1>Please Log in or register for a Preesee.com account</h1>
    <div class="regi_cover">
      <!-----[registration-covering-starts-here]---->
      <div class="left_regi">
        <h1>I'm a Returning Member, Sign in</h1>
          <div class="for_registration">
          <span><?php echo 'Email or Username:'; ?></span>
          <span><label>
                <?php
									$form['name']['#title']=''; 
									$form['name']['#description']='';
									$form['name']['#required']='';
									$form['name']['#attributes']['class'] = 'reg_text_field';
									print drupal_render($form['name']); 
								?>
            </label>
          </span> </div>
          <div class="for_registration"> 
          <span> <?php echo 'Your Password:'; ?> </span>
           <span>
            <label>
                           <?php 
															$form['pass']['#required']='';
															$form['pass']['#description']='';
															$form['pass']['#title']='';
															$form['pass']['#attributes']['class'] = 'reg_text_field';
															print drupal_render($form['pass']); 
														?>
            </label>
        </span> </div>
          <p>Remember, your password is case sensitive</p>
          <div class="for_registration">
            <label>
            
              <?php 
						   $form['submit']['#attributes']['class'] = 'regi_log_inn';
						   print drupal_render($form['submit']); 
							?>
            </label>
          </div>
          
                     
          <a href="<?php echo $base_url; ?>/user/password">Forgot your password?</a>
          <div class="or_u"> <span><b>Or</b> use a shortcut:</span> </div>
          
          <div id="fb_login_div">
<?php 
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
</div>
          </div>
                        
                            
                            
         <div class="right_reg">
           
       
          <h1>I'm a New Member</h1>
          <p> You will need a Preesee acoount if you want to buy on Preesee.
            Wanna sell? please Register a creator or city store account.
            You can update from Preesee account to creator or city store account
            Joinning is free and easy. All you need is a valid email address. </p>
          <label>   
                                                      
      <div name="button" class="regi_log_inn2" onclick="location.href='<?php echo $base_url .'/registration'; ?>'" style="cursor:pointer;"> </div>
          </label>
          <a href="<?php echo $base_url . '/content/get-started';?>">How do I get started?</a>
          <a href="<?php echo $base_url . '/content/difference';?>">Difference among reesee, creator and city store account</a>
          <a href="<?php echo $base_url . '/content/do-and-not';?>">The DOs and DON'Ts of reesee</a>
        
      </div>
    </div>
  </div>
 
    <?php
		print drupal_render($form); 
	?>

    <!-----[registration-covering-closed-here]---->
  
  
<script type="text/javascript">
<!--//--><![CDATA[//><!--
/*jQuery.extend(Drupal.settings, {"fb":{"ajax_event_url":"http:\/\/192.168.1.3\/2011\/Breesee\/fb\/ajax","apikey":"230590756980626","label":"displayed","perms":"","reload_url":"http:\/\/192.168.1.3\/2011\/Breesee\/user\/claim\/login\/212%3Fdestination%3D\/claim\/212","fb_init_settings":{"xfbml":false,"status":false,"cookie":true,"apiKey":"230590756980626","appId":"230590756980626","session":null,"channelUrl":"http:\/\/192.168.1.3\/2011\/Breesee\/fb\/channel"},"controls":"","js_sdk_url":"http:\/\/connect.facebook.net\/en_US\/all.js"}});
var e = document.createElement('script');
e.async = true;
e.src = Drupal.settings.fb.js_sdk_url;
document.getElementById('fb-root').appendChild(e);*/

//--><!]]>

</script>

<div class="clear"></div>