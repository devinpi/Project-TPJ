<?php
//ini_set("display_errors", "1");
//error_reporting(E_ALL);
	session_start();
	if(empty($_POST['user']) || empty($_POST['pass']))
	{
		$error = "Username and PIN not valid!!";
	}
	else
	{
		$username=$_POST["user"];
		$pin=$_POST["pass"];
		//Connection with the database
		$con = mysqli_connect("localhost", "devin", "piis314") or die('Could not connect: ' . mysqli_error());
		mysqli_select_db($con, "tpjProjectDB") or die('Could not select database: ' . mysqli_error());
		$result=mysqli_query($con, "select*from login where Username = '$username' and PIN = '$pin'");
		$n_rows = mysqli_num_rows($result);
		while($n_rows > 0)
		{
			$flag1 = 0;
			$row = mysqli_fetch_array($result);
			$db_user=$row["Username"];
			$db_pin=$row["PIN"];
			if(strcmp($db_user, $username) == 0){ //Comparing the entered username and PIN with the entry in the database.
			    if(strcmp($db_pin, $pin) == 0){
					$flag1 = 1;
					break;
					}
			}
			$n_rows--;
		}
		if($flag1 == 1)
		{
			$_SESSION['logged_user']=$username; //Stores the username in the session variable "logged_user"
			header("Location: getImages.php");
		}
		else
		{
			//echo '<center><font color = "#BFFF00">Invalid Username or PIN!!</font></center>';
			header("Location: unsuccessful.html");
			
		}
		mysqli_close($con);
	}
?>
