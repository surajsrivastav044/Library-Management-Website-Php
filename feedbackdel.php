<?php

$con=mysqli_connect("localhost","root","","collagelibrary");
     $delid=$_REQUEST['id'];
     $del="delete from feedback where id=$delid";
     if(mysqli_query($con,$del))
     {
     	echo "<script>window.location.href='allfeedback.php';alert('data deleted');</script>";
     }
   else
   {
   	echo "data not deleted";
   }

?>