<?php
session_start();
$sesid=$_SESSION['user'];
$con=mysqli_connect("localhost","root","","collagelibrary");
$sel="select * from registration where email='$sesid'";
$r=mysqli_query($con,$sel);
$k=mysqli_fetch_array($r,MYSQLI_BOTH);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="changepassword1.php">CHANGE PASSWORD</a><BR><BR>
<a href="">LOGOUT</a><BR><BR>
<h1>welcome &emsp;<?php echo $k['k']; ?></h1>
</body>
</html>