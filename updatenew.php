 <?php
		    include('dbconnect.php');
		    error_reporting(0);
			if(strtoupper($_SERVER['REQUEST_METHOD']) === 'POST'){
			if(isset($_POST['update']))
			{
			$product_name=$_POST['product_name'];
			$product_price=$_POST['product_price'];
			$id=$_POST['id'];
			$sql="UPDATE product SET product_price= '$product_price',product_name='$product_name' where id='$id'";
			$query=mysqli_query($conn,$sql);
			
		    $conn->close();
		     }
			 }
		?>