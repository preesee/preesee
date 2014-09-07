<div id="loginform" style="display:none;">
... need the login form here, but the following code does not work
<?php
print render($form['name']); // prints the username field
?>
<?php
print drupal_render($form['pass']); // print the password field
?>
<?php
print drupal_render($form['submit']); // print the submit button
?>
<?php
print drupal_render($form); //print remaining form elements like "create new account"
?>
</div>
<a class="loginlink" href="#loginform"><?php print $block->subject ?></a>