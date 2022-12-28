<?php
include('authenticate1cpv2.php');
//if (isset($_SESSION['login_stat']))
//{
  //      echo "Welcome " . $_SESSION['logged_user'] . "!";
//}
//	session_start();
/*
<?php
$_SESSION['login_stat'] = true;
$_SESSION['username'] = '';
?>*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<h1>Surveillance System</h1>
	<div class="loginBox">
	    <form name="loginForm" action="" method="POST">
	    	<label><b>Username</b></label>
	    	<input type="text" id="user" name="user" placeholder="Enter Username"/><br><br>
	    	<label>PIN</label>
	    	<input type="password" id="pass" name="pass" placeholder="Enter PIN"/><br><br>
	    	<input type="submit" id="btn" value="Login"/>
	    </form>
	</div>
	<footer>
	<div class="end">
		<p>Developed for TPJ-655 Final Project<br>
		<a href="About.html" target="_blank"><--About Us--></a>	
		</p>
	</div>
</footer>
</body>
</html>


