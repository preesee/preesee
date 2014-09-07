README.txt

This module enables custom registration emails per user role.  In order to work, the user role has to be fed into the user object on save.
It is configured to work with the registration_role_with_approval module

Configuration:
in admin/user/settings a new fieldset appears called User Registration Emails
Apply the email message you want for each different role in your system
When you submit the form, all three drupal email notification settings for user registration are unset (created by admin, no approval needed, and admin approval)
You will then need to apply some kind of role selection form to your user registration form, such as that supplied by the registration_role_with_approval module
The user_registration_mail module detects the applied user role on user_register submit and sends out the emails accordingly


hook_user_registration_mail_tokens can be used to add extra tokens to the email sent out.
