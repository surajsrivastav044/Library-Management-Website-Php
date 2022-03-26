<?php
session_start();
$con=mysqli_connect("localhost","root","","collagelibrary");
$a=$_POST['txt1'];
$b=$_POST['txt2'];
 
 
$sel="select * from registration where email='$a'";
//echo $sel;	
$r=mysqli_query($con,$sel);
$k=mysqli_fetch_array($r,MYSQLI_BOTH);

if($k['2']==$a)
{
	if($k['3']==$b)
	{
		$_SESSION['user']=$a;
		echo $_SESSION['user'];
		echo "<script>window.location.href='dashboard1.php';alert('login success');</script>";
	}
	else
	{
		echo "<script>window.location.href='userlogin.php';alert('password invalid check again');</script>";
	}
}
else
{
	echo "<script>window.location.href='userlogin.php';alert('email invalid try again');</script>";
}
?>