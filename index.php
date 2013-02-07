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
<?php 
 $result = $facebook->api_client->fql_query("SELECT status FROM user WHERE uid = YOURIDNUMBER");
 // OR --- they both get the same data
 $result = $facebook->api_client->users_getInfo(YOURIDNUMBER,'status');
 print_r($result);
 echo "<pre>Debug:" . print_r($facebook,true) . "</pre>"; // debug info
?>
    
</body>
</html>
