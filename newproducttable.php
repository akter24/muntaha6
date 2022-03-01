
		
	<?php
	include('dbconnect.php');
	  if (isset($_POST['upload'])){
	  $title=$_POST['title'];
	  $price=$_POST['price'];
	  $image=$_FILES['image']['name'];
	  $image_size=$_FILES['image']['size'];
	  $image_temp_loc=$_FILES['image']['tmp_name'];
	  $image_store="image/".$image;
	  move_uploaded_file($image_temp_loc,$image_store);
	  
	  $sql="INSERT INTO offerproduct(title,price,image) values('$title','$price','$image')";
	  $query=mysqli_query($conn,$sql);
	  
	  }
	  
	  ?>
	  
			
  <!DOCTYPE html>
  <html>
  <head>
  <title>Add to new Product </title>
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
	  .tableview
		{
		height:auto;
		weight:100%;
		padding-top:0 px;
		}
			table{
					border:1px solid white;
					border-collapse:collapse;
					width:900px;
					margin-top:30px;
					font-size:17px;
					margin-bottom:20px;
					padding-left:20px;
					margin-left:100px;
					color:black;
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

  
@media screen and (max-width: 650px) {
  .tableview{
    width: 100%;
    display: block;
	background-color:white;
  }
}

  </style>
  </head>
  <body class="body">
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
			<a href="orderview.php">orderview</a>
		</nav>
		
		<div class="icons">
			<div class="fas fa-bars" id="menu-btn"></div>
		</div>
		
	</header>
	<!-- header section ends-->
	
	
	<!-- home section start-->
	<section class="home" id="home"> 
		<div class="content">
			<h3> fresh an <span>organic </span>product for your</h3>
			<p>Muntaha Agro food is a good food collection of your area and its collect direct from rice mill.</p>
			<a href="#" class="btn">shop now</a>
		</div>
	</section>
	<!-- home section ends-->
	
	
	  <div class="tableview">
		<h1 style="color:green;text-align:center;"> Our New Product  Table List</h1>
				<table>
				<th>ID </th>
				<th>Product Name </th>
				<th>Product Price</th>
				<th> Picture</th>
				<th> Delete</th>
				<th> Edit</th>
				<?php
				
				include 'dbconnect.php';
				$sql="SELECT * from product";
				$query=mysqli_query($conn,$sql);
				while($info=mysqli_fetch_array($query))
				{
				?>
				<tr>
				<td> <?php echo $info['id']; ?> </td> 
				<td> <?php echo $info['product_name']; ?> </td> 
				<td> <?php echo $info['product_price']; ?> </td> 
				<td> <?php echo $info['image']; ?> </td>  
				<td> <a href="deletenew.php?Del=<?php echo $info['id']?>"><input style="color:red;" type="button" class="btn btn-primary" value="Delete" onclick="return confirm('Are you sure you want to delete this item')" ></a></td> 
				<td> <a href="editnew.php?Getid=<?php echo $info['id']?>"><input type="button" class="btn btn-primary" value="Edit"></a></td> 
				</tr>
				<?php
				}
				
				?>
				

				</table>
			
	  </div><br>
	
		<br>
	
	
	          
   
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

		
	<!-- custom js file link -->
	 <script src="menuscript.js"> </script> 
  </body>
  </html>