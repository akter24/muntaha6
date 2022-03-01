	<?php 
	  include 'dbconnect.php';
	  $id=$_GET['Getid'];
	  $query="select * from product where id='".$id."'";
	  $result=mysqli_query($conn,$query);
	  while($info=mysqli_fetch_array($result))
	  {
	  $id=$info['id'];
	  $product_name=$info['product_name'];
	  $product_price=$info['product_price'];
	  }
	?>
<!DOCTYPE html>
<html>
<head>
<title>Offer table Edit </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css" type="text/css" media="all" />

<style>
 .update
	{
	height:300px;
	width:400px;
	border:2px solid green;
	margin-left:400px;
	background-color:#d3f1f0;
	}
	form
	{
	position:center;
	margin-left:50px;
	padding:5px;
	}
	.submit{
	background-color:#fff;
	font-size:16px;
	}
	.label{
	font-size:16px;
	}
</style>
</head>
<body>
			<br><div class="update">
				<h2> Update Specifice Row data</h2>
				<form  method="POST" action="updatenew.php?ID=<?php echo $id ?>">
				        <label class="label"> ID:</label><br>
						<input class="input" type="text" name="id" value="<?php echo $id ?>" placeholder="Enter Product Id" autocomplete=off required><br><br>
						 <label class="label"> Product Name:</label><br>
						<input class="input" type="text" name="product_name" value="<?php echo $product_name ?>" placeholder="Enter Product Name" autocomplete=off required><br><br>
						<label class="label"> Product price:</label><br>
						<input class="input" type="text" name="product_price" value="<?php echo $product_price ?>" placeholder="Enter Product Status" autocomplete=off required><br>
						<br><input  class="submit" type="submit" name="update" value="Confirm Update" onclick="myFunction()">
			         	<a href="newproducttable.php" style="padding-left:10px;" > <input class="button" type="button" name="" value="View Update"></a>
				</form>
			
		</div>
</body>
</html>