<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
$username=$_POST["user"];
$pin=$_POST["pass"];
//if($_POST["btn"] != NULL)
//{
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
			
			if(strcmp($cuser, $username) == 0)
			    if(strcmp($cpass, $pin) == 0){
					$flag = 1;
					break;
					
					}
			$num_rows--;
	}
	if($flag == 1)
		echo "<h1>Success</h1>";
	else
		echo"<h1>Unsuccess</h1>";
	mysqli_close($con);
/*
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$count = mysqli_num_rows($result);
	
	if($count == 1){
		echo"<h1><center>Login success</center></h1>";
	} 
	
	else{
		echo"<h1><center>Login failed</center></h1>";
		
	}*/
//}
?>
