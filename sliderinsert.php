<?php
	include('dbconnect.php');
	  if (isset($_POST['upload'])){
	  $name=$_POST['name'];
	  $image=$_FILES['image']['name'];
	  $image_size=$_FILES['image']['size'];
	  $image_temp_loc=$_FILES['image']['tmp_name'];
	  $image_store="image1/".$image;
	  move_uploaded_file($image_temp_loc,$image_store);
	  $sql="INSERT INTO slider1(name,image) values('$name','$image')";
	  $query=mysqli_query($conn,$sql);
	  
	  }
	  
	  ?>
	  <br>
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

	h1{
	text-align:center;
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
			<a href="orderview.php">orderview</a>
		</nav>
		
		<div class="icons">
			<div class="fas fa-bars" id="menu-btn"></div>
		</div>
		
	</header>
	<!-- header section ends-->
	  <br>
	  <div style="width:360px;height:300px;background-color:#d3f1f0;margin-left:100px;border:2px solid green;border-radius:5px;padding-top:0px;">
	       <h2 style="height:50px;width:100%;background-color:green;padding-top:0px;text-align:center;"> Insert slider Image</h2>
		  <form style="margin-left:50px;" action="sliderinsert.php" method="POST" enctype="multipart/form-data">
			  <label for=""> Product Name:</label><br>
			  <input class="input" type="text" name="name" value="" placeholder=" Enter Product Name" required><br><br>
			  <label for=""> Choose an Image:</label><br>
			  <input type="file" name="image" value="" required><br><br><br>
			   <input class="btn" type="submit" name="upload" value="Upload Image" style="width:100px;font-size:12px;" required>
			    <a href="offerproducttable.php"> <input class="btn" type="button" name="" value="View Insert" style="width:100px;font-size:12px;"></a>
		  </form>
		  
	   </div>
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
<div class="footerbottom">
 Copy@right -2021.
</div>
<!-- custom js file link -->
	 <script src="menuscript.js"> </script> 
</body>
</html>