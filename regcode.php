<?php

$con=mysqli_connect("localhost","root","","collagelibrary");
$a=$_POST['txt1'];
$b=$_POST['txt2'];
$c=$_POST['txt3'];
$d=$_POST['txt4'];
$e=$_POST['txt5'];
 
 date_default_timezone_set("asia/kolkata");
$datetime=date("d/m/y")." ".date("h:i:sa");

$ins="insert into registration(name,email,password,mobile,dateofbirth,datetime) values('$a','$b','$c','$d','$e','$datetime')";
if(mysqli_query($con,$ins))
{
echo "<script>window.location.href='index.php';alert('Registration Success');</script>";
}
else
{
 echo "<script>window.location.href='adminlogin.php';alert('Registration not success please try again');</script>";
}

?>