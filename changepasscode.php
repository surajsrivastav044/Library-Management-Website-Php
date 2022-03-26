<?php

$con=mysqli_connect("localhost","root","","collagelibrary");
$a=$_POST['txt1'];
$b=$_POST['txt2'];
$c=$_POST['txt3'];

$sel="select * from adminlogin where id=1";
$r=mysqli_query($con,$sel);
$k=mysqli_fetch_array($r,MYSQLI_BOTH);

if($k['2']==$a)
{
	if($b==$c)
	{
$up="update adminlogin set password='$b' where id=1";
if(mysqli_query($con,$up))
{
echo "<script>window.location.href='admin.php';alert('success change password');</script>";
}
	}
	else
	{
		echo "new and confirm password are not match";
	}
}
else
{
echo "password not change";
}
?>