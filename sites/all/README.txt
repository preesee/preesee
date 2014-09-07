
This directory should be used to place downloaded and custom modules
and themes which are common to all sites. This will allow you to
more easily update Drupal core files. These modules and themes should
be placed in subdirectories called modules and themes as follows:

  sites/all/modules
  sites/all/themes



global $user;
$my_id = $user->uid;
$uid = arg(1);
if( (arg(0) == 'user') && ($uid == $my_id) || (arg(1) == 'mailbox'))
return true;
else 
return false;
