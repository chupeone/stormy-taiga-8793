<!DOCTYPE html>
<html>

<head>
    <title>My SPD Plugins Site</title>
</head>

<body>
<p>
PROBANDO UNO DOS TRESS
</p>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=394124587331220";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="fb-root"></div>
<div class="fb-like" data-href="https://stormy-taiga-8793.herokuapp.com/" data-send="true" data-width="450" data-show-faces="true"></div>
<div class="fb-facepile" data-href="http://stormy-taiga-8793.herokuapp.com" data-action="any" data-max-rows="1" data-width="300"></div>

So we are trying stuff here... does it work?
<?php 
 echo "this blows";
 require_once('facebook-php-sdk/src/facebook.php');
 $facebook = new Facebook("394124587331220","63ac451c90d5102f8fe05b164187e537");
$feed = $facebook->api('me?fields=statuses.fields(message)');
 print_r($feed);
 echo "<pre>Debug:" . print_r($facebook,true) . "</pre>"; // debug info
 echo "this too";
?>
    
</body>
</html>
