<?php

$con=mysqli_connect("localhost","root","","collagelibrary");
$a=$_POST['txt1'];
$b=$_POST['txt2'];
$c=$_POST['txt3'];
$d=$_POST['txt4'];
$e=$_POST['txt5'];
$f=$_POST['txt6'];
 date_default_timezone_set("asia/kolkata");
$datetime=date("d/m/y")." ".date("h:i:sa");

$ins="insert into issuebook(name,mobile,email,bookname,authorname,ibnnumber,datetime) values('$a','$b','$c','$d','$e','$f','$datetime')";
if(mysqli_query($con,$ins))
{
echo "<script>window.location.href='dashboard.php';alert('issue book success');</script>";
}
else
{
 echo "<script>window.location.href='issuebook.php';alert('issue book not success');</script>";
}

?>