<?php

$con=mysqli_connect("localhost","root","","collagelibrary");
$a=$_POST['txt1'];
$b=$_POST['txt2'];
$c=$_POST['txt3'];
$d=$_POST['txt4'];
 
 date_default_timezone_set("asia/kolkata");
$datetime=date("d/m/y")." ".date("h:i:sa");

$ins="insert into contact(name,email,subject,message,datetime) values('$a','$b','$c','$d','$datetime')";
if(mysqli_query($con,$ins))
{
echo "<script>window.location.href='index.php';alert('success');</script>";
}
else
{
 echo "<script>window.location.href='contact.php';alert('contact us not success please try again');</script>";
}

?>