
  <?php
  // Remember to copy files from the SDK's src/ directory to a
  // directory in your application on the server, such as php-sdk/
 error_reporting('E_ALL');
  require_once('facebook-php-sdk/src/facebook.php') or die('asdasdasd');

  $config = array(
    'appId' => '394124587331220',
    'secret' => '63ac451c90d5102f8fe05b164187e537',
  );
Echo "this is annoying";
  $facebook = new Facebook($config);
  print_r($facebook);
Echo "this is more annoying";
  $params = array(
  'scope' => 'user_status',
  'redirect_uri' => 'https://stormy-taiga-8793.herokuapp.com/ '
);
  $user_id = $facebook->getUser();
$loginUrl = $facebook->getLoginUrl($params);
  $access_token = $facebook->getAccessToken();
  
?>
<html>
  <head></head>
  <body>
	dobidobididom
  <?php
  echo $access_token;
    if($user_id) {

      // We have a user ID, so probably a logged in user.
      // If not, we'll get an exception, which we handle below.
      try {

        $user_profile = $facebook->api('/me','GET');
        echo "Name: " . $user_profile['name'];

      } catch(FacebookApiException $e) {
        // If the user is logged out, you can have a 
        // user ID even though the access token is invalid.
        // In this case, we'll get an exception, so we'll
        // just ask the user to login again here.
        $login_url = $facebook->getLoginUrl(); 
        echo 'Please <a href="' . $login_url . '">login.</a>';
        error_log($e->getType());
        error_log($e->getMessage());
      }   
    } else {

      // No user, print a link for the user to login
      $login_url = $facebook->getLoginUrl();
      echo 'Please <a href="' . $login_url . '">login.</a>';

    }

  ?>

  </body>
</html>

