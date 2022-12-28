<?php
include('authenticate1cpv2.php');
if (isset($_SESSION['logged_user']) && $_SESSION['logged_user'] != '')
//if (isset($_SESSION['login_stat']))
{
	echo '<center><font color = "#BFFF00">Welcome ' . $_SESSION['logged_user'] . '!</font></center>';
	//echo 'Welcome ' . $_SESSION['logged_user'] . '!</h3>';
}
else
{
	echo "No User Logged in!!";
	header("Location: Login.php");
}
?>
<html>
	<head>
	<title>Get Images</title>
	<link rel="stylesheet" type="text/css" href="getImages.css">
	</head>
<body>
	<h1>Get Images</h1><br>
	<div class="dateBox" align="center">
		<form name="imageForm" action="retrieve.php" method="POST">
			<label><b>Enter Date to Search for Images (YYYY-MM-DD)</b></label><br><br>
			<input type = "text" id = "img_date" name = "img_date" placeholder="Enter Date"/><br><br>
			<input type = "Submit" id = "button" value = "Get Images"/>
		</form>
	</div>
</body>
</html>
