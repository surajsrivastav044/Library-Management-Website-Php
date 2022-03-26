<?php

$con=mysqli_connect("localhost","root","","collagelibrary");
     $delid=$_REQUEST['id'];
     $del="delete from uploadbook where id=$delid";
     if(mysqli_query($con,$del))
     {
     	echo "<script>window.location.href='allupload.php';alert('data deleted');</script>";
     }
   else
   {
   	echo "data not deleted";
   }

?>