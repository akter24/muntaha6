<?php
   include('dbconnect.php');
   error_reporting(0);
	if(strtoupper($_SERVER['REQUEST_METHOD']) === 'POST'){
	if(isset($_POST['statusupdate']))
	{
	$re =$_POST['Remarks'];
	$ids = $_POST['id'];
	$sql="UPDATE ordertable SET Remarks= '$re' where ID='$ids'";
	$query=mysqli_query($conn,$sql);
    $conn->close();
     }
	 }
	?>
	
<!DOCTYPE html>
<html>
<head>
<title>Muntaha Agro food </title>
<meta charset="UTF-8">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="images/favicon.png" />
	<!-- font awesome cdn link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<!-- custom css file  link -->
	<link rel="stylesheet" href="style.css" type="text/css" media="all" />
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
	<link href="menuscript.js" rel="stylesheet"  crossorigin="anonymous" type="text/css"> 
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
	<link rel="shortcut icon" type="image/x-icon" href="photo/Image.jpg">

<style>

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}


@media screen and (max-width: 450px) {
  .tableview,.update{
    width: 100%;
    display: block;
	background-color:white;
  }
}
	table{
	border:1px solid black;
	border-collapse:collapse;
	width:800px;
	margin-top:30px;
	font-size:15px;
	margin-bottom:20px;
	padding-left:20px;
	}
		th{
		border:1px solid black;
		padding:10px;
		}
		td{
		border:1px solid black;
		padding:6px;
		text-align:center;
		}
	.tableview
	{
	height:auto;
	width:100%;
	}
	h1{
	text-align:center;
	}
	.update
	{
	border:1px solid green;
	height:200px;
	width:300px;
	padding:30px;
	background-color:#dcf1f4;
	float:left;
	font-size:12px;
	}
	.belowtable
	{
	height:400px;
	padding-left:100px;
	}
	.select1{
	width:230px;
	padding:3px;
	}
</style>
</head>
<body>
<img src="photo/banner.jpg" alt="Forest" width="100%" height="300px" style="overflow:hidden;padding-top:100px;">
       <!-- header section starts-->
	<header class="header">
		<div>
		<img src="photo/rice/r11.jpg" alt="image" style="height:50px;width:100px;"> 
		</div> 
		<img src="photo/logo7.png" alt="image" style="height:60px;width:150px;">
		<nav class="navber">
			<a href="index.php">home</a>
			<a href="insertofferproduct.php">insertofferpro</a>
			<a href="insertnewproduct.php">insertnewpro</a>
			<a href="offerproducttable.php">offertable</a>
			<a href="newproducttable.php">newtable</a>
			<a href="admin.php">admin</a>
		</nav>
		
		<div class="icons">
			<div class="fas fa-bars" id="menu-btn"></div>
		</div>
		
	</header>
	<!-- header section ends-->
<div class="tableview">
	<h1> Customer Order List</h1>
	   <?php 
	   include('dbconnect.php');
		?>
		<div class="table-responsive">
		<table>
			<th>ID </th>
			<th>Customer_Name </th>
			<th>Mobile_Number </th>
			<th> Product_Name</th>
			<th>Product_Quantity </th>
			<th>Total_Amount </th>
			<th>Transition_ID </th>
			<th>Transaction_Date </th>
			<th>Payment_Type </th>
			<th>Delivary_Address </th>
			<th>Remarks</th>
			<th>Operation</th>
			<?php
			$sql="SELECT * from ordertable";
			$query=mysqli_query($conn,$sql);
			while($info=mysqli_fetch_array($query))
			{
			?>
			<tr>
			<td> <?php echo $info['id']; ?> </td> 
			<td> <?php echo $info['customer_name']; ?> </td> 
			<td> <?php echo $info['mobile']; ?> </td> 
			<td> <?php echo $info['product_name']; ?> </td> 
			<td> <?php echo $info['quantity']; ?> </td> 
			<td> <?php echo $info['amount']; ?> </td> 
			<td> <?php echo $info['transition_id']; ?> </td> 
			<td> <?php echo $info['transition_date']; ?> </td> 
			<td> <?php echo $info['transition_type']; ?> </td> 
			<td> <?php echo $info['address']; ?> </td> 
			<td> <?php echo $info['remarks']; ?> </td> 
			<td style="color:green;font-size:12px;"> <a href="deleteorder.php?Del=<?php echo $info['id']?>"><input style="color:red;font-size:15px;" type="button" class="btn btn-primary" value="Delete" onclick="return confirm('Are you sure you want to delete this item')" ></a> </td> 
			</tr>
			<?php
			}
			?>
		</table>
		</div>
	</div>
	<br>
	<div class= "belowtable">
		<div class="update">
			<form  method="POST">
			        <label for=""> ID:</label><br>
					<input class="input1" type="text" name="id" value="" placeholder="Enter Delivery Id" autocomplete=off required><br><br>
					<label for=""> Remarks:</label><br>
					<select class="select1" name="Remarks">
					   <option selected hidden> Choose status</option>
						<option value="Delivary and paid">Delivary and paid</option>
						<option value="no Delivary">no Delivary</option>
						<option value="pendding">pendding</option>
				    </select><br><br>
					<br><input  class="submit1" type="submit" name="statusupdate" value="Confirm Delivery" onclick="myFunction()"><br>
			</form>
		
		</div>
		</div>
	<br><br><br>
	
<!-- footer section start-->
		<section class="footer">
			<div class="box-container">
				<div class="box">
				 <h3> Muntaha <i class="fas fa-shopping-basket"></i></h3>
				 <p>Muntaha agro food .Muntaha agro food .Muntaha agro food.
				 Muntaha agro food is collect from direct farmer.Its very natural and organic.So this is good for you.</p>
				 <div class="share">
				 <a href="#" class="fab fa-facebook-f"></a>
				 <a href="#" class="fab fa-twitter"></a>
				 <a href="#" class="fab fa-instagram"></a>
				 <a href="#" class="fab fa-linkedin"></a>
				 </div>
				</div>
				<div class="box">
					 <h3> Contact info</h3>
					 <a href="links"><i class="fas fa-phone"></i> 01912133660</a>
					 <a href="links"><i class="fas fa-phone"></i> 01912133660</a>
					 <a href="links"><i class="fas fa-envelope"></i> muntaha@gmail.com</a>
					 <a href="links"><i class="fas fa-map-marker-alt"></i> South Banashree,Dhaka.</a>
				</div>
				<div class="box">
					 <h3> quick link</h3>
					 <a href="#home"><i class="fas fa-arrow-right"></i> home</a>
					 <a href="#features"><i class="fas fa-arrow-right"></i> features</a>
					 <a href="#products"><i class="fas fa-arrow-right"></i> products</a>
					 <a href="#categories"><i class="fas fa-arrow-right"></i> catagories</a>
					 <a href="#review"><i class="fas fa-arrow-right"></i> review</a>
					 <a href="#blogs"><i class="fas fa-arrow-right"></i> blogs</a>
				</div>
				
				<div class="box">
					 <h3> newsletter</h3>
					 <p> subscribe for latest updates</p>
					 <input type="email" placeholder="your email" class="email">
					 <input type="submit" value="subscribe" class="btn" style="color:white;">
					 <img src="photo/nb.jpg" class="payment-img" alt="">
				</div>
			</div>
		</section>
		<!-- footer section ends-->
<div class="footerbottom">
 Copy@right -2021.
</div>
<!-- custom js file link -->
	 <script src="menuscript.js"> </script> 
</body>
</html>