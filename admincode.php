<?php

$con=mysqli_connect("localhost","root","","collagelibrary");
$a=$_POST['txt1'];
$b=$_POST['txt2'];
$c=$_POST['txt3'];
$d=$_POST['txt4'];
 
 
$sel="select * from adminlogin where email='$a'";
$r=mysqli_query($con,$sel);
$k=mysqli_fetch_array($r,MYSQLI_BOTH);

if($k['1']==$a)
{
	if($k['2']==$b)
	{
		if($c==$d)
		{
			

			echo "<script>window.location.href='dashboard.php';alert('login success');</script>";
		}
		else
		{
			echo "<script>window.location.href='admin.php';alert('Captha Invalid');</script>";
		}
	}
	else
	{
		echo "<script>window.location.href='admin.php';alert('Password Invalid');</script>";
	}
}
else
{
	echo "<script>window.location.href='admin.php';alert('Email Invalid');</script>";
}
?>



