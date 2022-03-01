<?php
		   include 'dbconnect.php';
		   if(isset($_GET['Del']))
		   {
		   $id=$_GET['Del'];
		   $query="delete from product where id='".$id."'";
		   $result=mysqli_query($conn,$query);
		   if($result)
		   {
		   header("location:newproducttable.php");
		   }
		   else
		   {
		   echo 'please check';
		   }
		   }  
			else
			{
			header("location:newproducttable.php");
			}
		?>