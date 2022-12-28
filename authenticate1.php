<?php
//session_start();
ini_set("display_errors", "1");
error_reporting(E_ALL);
include('Login.php');
if (isset($_SESSION['login_stat']))
{
        echo "Welcome " . $_SESSION['logged_user'] . "!";
}

	$username=$_POST["user"];
	$pin=$_POST["pass"];
	$con = mysqli_connect("localhost", "devin", "piis314") or die('Could not connect: ' . mysqli_error());
	mysqli_select_db($con, "tpjProjectDB") or die('Could not select database: ' . mysqli_error());
	$result=mysqli_query($con, "select*from login where Username = '$username' and PIN = '$pin'");
	$num_rows = mysqli_num_rows($result);
	while($num_rows > 0)
	{
		$flag = 0;
		$row = mysqli_fetch_array($result);
		$cuser=$row["Username"];
		$cpass=$row["PIN"];
		//echo $cuser['Username']
		if(strcmp($cuser, $username) == 0)
		    if(strcmp($cpass, $pin) == 0){
				$flag = 1;
				break;
				}
		$num_rows--;
	}
	if($flag == 1)
	{
		//$_SESSION['login_stat'] = true;
		$_SESSION['logged_user'] = $username;
//		echo $_SESSION['logged_user'];
		header("Location: getImages.php");
	}
	else
	{
		echo "Username and PIN not valid!!";
	}
	mysqli_close($con);

?>
