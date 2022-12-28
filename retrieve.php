<?php
include('authenticate1cpv2.php');
if (isset($_SESSION['logged_user']) && $_SESSION['logged_user'] != '')
{
        echo '<center><font color = "#BFFF00">Welcome ' . $_SESSION['logged_user'] . '!</font></center>';
}
else
{
        echo "No User Logged in!!";
        header("Location: Login.php");
}

$image_date = $_POST["img_date"];

define('DB_NAME', 'tpjProjectDB');
define('DB_USER', 'devin');
define('DB_PASSWORD', 'piis314');
define('DB_HOST', 'localhost');

$pdo = new PDO("mysql:host=" . DB_HOST . "; dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

$sql = "SELECT image FROM images WHERE img_date='$image_date'";
$stmt = $pdo->prepare($sql);
$stmt->execute();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Images Retrieved</title>
	<link rel="stylesheet" type="text/css" href="retrieve.css"/>
	<style>
	a{
		color: #BFFF00;
	}
	</style>
</head>
<body>
	<h1>Images retrieved from the database for date: <?php echo $image_date; ?></h1>
	<p><font color = #C8C8C8>End this Session-></font> <a href="Logout.php">LOGOUT</a></p>
</body>
</html>
<?php

while($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
	echo '<img src = "data:image/png;base64,' .base64_encode($row['image']) . '" width = "400px" height = "400px"/>'; 
}
if($stmt->rowCount() == 0) 
{
	echo '<center><font color = "#BFFF00">No images found for the selected date</font></center>';
}
?>

