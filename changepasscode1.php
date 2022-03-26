<?php
session_start();
$sesid=$_SESSION['user'];
$con=mysqli_connect("localhost","root","","collagelibrary");
$a=$_POST['txt1'];
$b=$_POST['txt2'];
$c=$_POST['txt3'];
// echo $a;
// echo $b;
// echo $c;
$sel="select * from registration where email='$sesid'";
$r=mysqli_query($con,$sel);
$k=mysqli_fetch_array($r,MYSQLI_BOTH);

if($k['3']==$a)
{
	if($b==$c)
	{
$up="update registration set password='$b' where email='$sesid'";
if(mysqli_query($con,$up))
{
	echo "<script>alert('password changed');
		window.location.href='changepassword1.php';
	</script>";
}
	
	else
	{
		echo "password not change";
	}
}
else
{
	echo "new and confirm password are not match";
}
}
?>