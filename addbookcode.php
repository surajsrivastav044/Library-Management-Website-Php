<?php

$con=mysqli_connect("localhost","root","","collagelibrary");
$a=$_POST['txt1'];
$b=$_POST['txt2'];
$c=$_POST['txt3'];
 date_default_timezone_set("asia/kolkata");
$datetime=date("d/m/y")." ".date("h:i:sa");

$ins="insert into addbook(bookname,authorname,uploadbook,datetime) values('$a','$b','$c','$datetime')";
if(mysqli_query($con,$ins))
{
echo "<script>window.location.href='dashboard.php';alert('thank you for upload  your book');</script>";
}
else
{
 echo "hello";
}

?>