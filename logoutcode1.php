<?php 

$sesid=$_REQUEST['id'];
if($sesid==1)
{
	echo "<script>window.location.href='admin.php';alert('logout success');</script>";
}
else
{
	echo "logout failed";
}
?>