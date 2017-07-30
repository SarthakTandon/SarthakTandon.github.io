<?php
session_start();
?>
<html>
<head>
	<title>Education 2.0 | Home</title>
	<link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
<div id="polina">
<h1>Education 2.0</h1>
<p>Life is fundamentally a mental state.</p>
<p>Research in Psychology shows that automated personality judgments based on Facebook Likes are more accurate than those made by users’ friends or even their spouses</p>
<p></p>
<button><a href="page2.php" class="button">GET STARTED</a></button>
<script>
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    if (response.status === 'connected') {
      var ab =1;
      testAPI();
    } else {
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    }
  }
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }
  window.fbAsyncInit = function() {
  FB.init({
    appId      : '414997352227902',
    cookie     : true,  
    xfbml      : true, 
    version    : 'v2.8' 
  });
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
  };
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10&appId=414997352227902";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
  }
</script>
<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>
<?php
$connection=mysqli_connect('localhost','root','','monitor');
if(isset($_POST['post']))
{
$_SESSION["name"]=array(response.name);
}
?>

<div id="status">
</div>
  <div class="fb-login-button" data-width="330" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="true"></div>

</div>
</body>
</html>