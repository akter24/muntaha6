<?php
		   include 'dbconnect.php';
		   if(isset($_GET['Del']))
		   {
		   $id=$_GET['Del'];
		   $query="delete from ordertable where id='".$id."'";
		   $result=mysqli_query($conn,$query);
		   if($result)
		   {
		   header("location:orderview.php");
		   }
		   else
		   {
		   echo 'please check';
		   }
		   }  
			else
			{
			header("location:orderview.php");
			}
		?>