<?php

$con=mysqli_connect("localhost","root","","collagelibrary");
     $delid=$_REQUEST['id'];
     $del="delete from issuebook where id=$delid";
     if(mysqli_query($con,$del))
     {
     	echo "<script>window.location.href='allissuebook.php';alert('data deleted');</script>";
     }
   else
   {
   	echo "data not deleted";
   }

?>