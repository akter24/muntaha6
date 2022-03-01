<?php
		   include 'dbconnect.php';
		   if(isset($_GET['Del']))
		   {
		   $id=$_GET['Del'];
		   $query="delete from offertable where id='".$id."'";
		   $result=mysqli_query($conn,$query);
		   if($result)
		   {
		   header("location:offerproducttable.php");
		   }
		   else
		   {
		   echo 'please check';
		   }
		   }  
			else
			{
			header("location:offerproducttable.php");
			}
		?>