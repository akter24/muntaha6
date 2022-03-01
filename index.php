<!DOCTYPE html>
<html lang="en">
<head>
	<title> Muntaha Agro Food</title> 
	<meta charset="UTF-8">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="images/favicon.png" />
	<!-- font awesome cdn link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<!-- custom css file  link -->
	<link rel="stylesheet" href="style.css" type="text/css" media="all" />
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
	<link href="myscripts.js" rel="stylesheet"  crossorigin="anonymous" type="text/css"> 
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
	<link rel="shortcut icon" type="image/x-icon" href="photo/Image.jpg">
</head>
<body> 
	<!-- header section starts-->
	<header class="header">
		<img src="photo/logo7.png" alt="image" style="height:60px;width:150px;">
		<nav class="navber">
			<a href="#home">home</a>
			<a href="#categories">catagories</a>
			<a href="#products">products</a>
			<a href="#review">review</a>
			<a href="#offers">offers</a>
			<a href="#blogs">blogs</a>
			<a href="#location">location</a>
			<a href="login.php">login</a>
		</nav>
		<div class="icons">
			<div class="fas fa-bars" id="menu-btn"></div>
		</div>
		<!--   <?php 
		$sql="SELECT * FROM offertable";
		$result=mysqli_query($conn,$sql);
		$queryResults=mysqli_num_rows($result);
		if ($queryResults>0){
		while($row=mysqli_fetch_assoc())
		{
		
		}
		}
		?>
	         -->
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

	
	<!-- offers  section start-->
	 <div class="slider" style="float:left;padding-left:150px;padding-top:10px;color:red;"> <?php include 'slider.php';?></div><br><br><br>
	<br><br>
	<section class="offers" id="offers">
	  <h1 class="heading">Running <span>offer products</span></h1>	  
		<div class="swiper offer-slider"> <!-- style="box-shadow:var(--box-shadow);">-->
					<div class="swiper-wrapper"><!-- style="list-style-type:none;background-color:white;"> -->
						<?php
							include 'dbconnect.php';
							
							$sql1="SELECT * from offertable";
							$query1=mysqli_query($conn,$sql1);
							while($info=mysqli_fetch_array($query1))
							{
							?>
						<div class="swiper-slide box" style="height:350px;width:300px;background-color:white;text-align:center;"> <!-- style="float:left;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); color:black;text-align:center; background-color:#FAF5EF; margin:10px;border:0px solid black;border-radius:6px;max-width:300px;max-height:300px;"> -->
							<img src="image/<?php echo $info['image'];?>" alt=""> 
							<h3 style="font-size:20px;position:center;"><?php echo $info['product_name'];?></h3>
							<div class="price" style="font-size:18px;position:center;"><?php echo $info['product_price'];?></div>
							<p><a href="riceorder.php" class="btn">Buy Now</a></p>
						</div>
				        <?php
				        }
				        ?>
				    </div>
				
			
		</div>
	</section>
	<!-- offers  section ends-->
	<br>
	<!-- slider  section start-->
	<section class="slider" id="slider">
		<h1 class="heading"> Our<span>shop </span></h1>
		<div class="row">
		<div class="image">
			<?php include 'slider3.php';?>
			</div>
	    </div>
	</section>
	<!-- slider section ends-->
	
	<br><br><br><br>
	<!-- products  section start-->
	<section class="products" id="products">
	    <h1 class="heading">our <span>products</span></h1>
		<div class="swiper product-slider">
			<div class="swiper-wrapper">
				<div class="swiper-slide box">
				<img src="photo/rice/r4.jpg" alt="">
				<h3>Muntaha Minikete Rice</h3>
				 <div class="price"> Tk.65/- per kg</div>
				 <div class="stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
				 </div>
				 <a href="addtochart.php" class="btn">add to cart</a>
		       </div>
			   
			   <div class="swiper-slide box">
				<img src="photo/rice/r5.jpg" alt="">
				<h3>Muntaha attash Rice</h3>
				 <div class="price"> Tk.55/- per kg</div>
				 <div class="stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
				 </div>
				 <a href="addtochart.php" class="btn">add to cart</a>
		       </div>
			   <div class="swiper-slide box">
				<img src="photo/rice/r6.jpg" alt="">
				<h3>Muntaha Bashmoti Rice</h3>
				 <div class="price"> Tk.74/- per kg</div>
				 <div class="stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
				 </div>
				 <a href="addtochart.php" class="btn">add to cart</a>
		       </div>
			   <div class="swiper-slide box">
				<img src="photo/rice/r7.jpg" alt="">
				<h3>Muntaha Special Bashmoti</h3>
				 <div class="price"> Tk.75/- per kg</div>
				 <div class="stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
				 </div>
				 <a href="addtochart.php" class="btn">add to cart</a>
		       </div>
		    </div>
		</div>
		
		<!-- Oil product  -->
		<div class="swiper product-slider">
			<div class="swiper-wrapper">
				<div class="swiper-slide box">
				  <img src="photo/oil/o1.jpg" alt="">
				  <h3>Muntaha Khati Shoriser Oil</h3>
				  <div class="price"> Tk.220/- per Ltr</div>
				 <div class="stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
				 </div>
				 <a href="oilorder.php" class="btn">add to cart</a>
		       </div>
			   
			   <div class="swiper-slide box">
				<img src="photo/oil/o2.jpg" alt="">
				<h3>Muntaha Khati Shoriser Oil</h3>
				  <div class="price"> Tk.220/- per Ltr</div>
				 <div class="stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
				 </div>
				 <a href="oilorder.php" class="btn">add to cart</a>
		       </div>
			   <div class="swiper-slide box">
				<img src="photo/oil/o3.jpg" alt="">
				<h3>Muntaha Khati Shoriser Oil</h3>
				  <div class="price"> Tk.220/- per Ltr</div>
				 <div class="stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
				 </div>
				 <a href="oilorder.php" class="btn">add to cart</a>
		       </div>
			   <div class="swiper-slide box">
				<img src="photo/oil/o4.jpg" alt="">
				<h3>Muntaha Khati Shoriser Oil</h3>
				  <div class="price"> Tk.220/- per Ltr</div>
				 <div class="stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
				 </div>
				 <a href="oilorder.php" class="btn">add to cart</a>
		       </div>
		    </div>
		</div>
		
		<!-- Moricher Gura  product  -->
		<div class="swiper product-slider">
			<div class="swiper-wrapper">
				<div class="swiper-slide box">
				  <img src="photo/morich/m1.jpg" alt="">
				  <h3>Muntaha Moricher Gura</h3>
				  <div class="price"> Tk.280/- per kg</div>
				 <div class="stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
				 </div>
				 <a href="morichorder.php" class="btn">add to cart</a>
		       </div>
			   
			   <div class="swiper-slide box">
				<img src="photo/morich/m2.jpg" alt="">
				<h3>Muntaha Moricher Gura</h3>
				  <div class="price"> Tk.280/- per kg</div>
				 <div class="stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
				 </div>
				 <a href="morichorder.php" class="btn">add to cart</a>
		       </div>
			   <div class="swiper-slide box">
				<img src="photo/morich/m3.jpg" alt="">
				<h3>Muntaha Moricher Gura</h3>
				  <div class="price"> Tk.280/- per kg</div>
				 <div class="stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
				 </div>
				 <a href="morichorder.php" class="btn">add to cart</a>
		       </div>
			   <div class="swiper-slide box">
				<img src="photo/morich/m4.jpg" alt="">
				<h3>Muntaha Moricher Gura</h3>
				  <div class="price"> Tk.280/- per kg</div>
				 <div class="stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
				 </div>
				 <a href="morichorder.php" class="btn">add to cart</a>
		       </div>
		    </div>
		</div>
		
		<!-- Holuder Gura  product  -->
		<div class="swiper product-slider">
			<div class="swiper-wrapper">
				<div class="swiper-slide box">
				  <img src="photo/holud/holud.jpg" alt="">
				  <h3>Muntaha Holuder Gura</h3>
				  <div class="price"> Tk.260/- per kg</div>
				 <div class="stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
				 </div>
				 <a href="holudorder.php" class="btn">add to cart</a>
		       </div>
			   
			   <div class="swiper-slide box">
				<img src="photo/holud/holud1.jpg" alt="">
				<h3>Muntaha Holuder Gura</h3>
				  <div class="price"> Tk.260/- per kg</div>
				 <div class="stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
				 </div>
				 <a href="holudorder.php" class="btn">add to cart</a>
		       </div>
			   <div class="swiper-slide box">
				<img src="photo/holud/holud2.jpg" alt="">
				<h3>Muntaha Holuder Gura</h3>
				  <div class="price"> Tk.260/- per kg</div>
				 <div class="stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
				 </div>
				 <a href="holudorder.php" class="btn">add to cart</a>
		       </div>
			   <div class="swiper-slide box">
				<img src="photo/holud/holud3.jpg" alt="">
				<h3>Muntaha Holuder Gura</h3>
				  <div class="price"> Tk.260/- per kg</div>
				 <div class="stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
				 </div>
				 <a href="holudorder.php" class="btn">add to cart</a>
		       </div>
		    </div>
		</div>
		
	</section>
	<!-- products  section ends-->
	
	
	<!-- catagorise  section start-->
	<section class="categories" id="categories">
		<h1 class="heading"> product<span>categories</span></h1>
		<div class="box-container">
			 <div class="box">
				<img src="photo/rice/combianminiket.jpg" alt="">
				<h3> Muntaha Rice</h3>
				<p>If get bulk amount then up to 10% off</p>
				<a href="riceorder.php" class="btn"> shop now</a>
			 </div>
			  <div class="box">
				<img src="photo/oil/combainoil.jpg" alt="">
				<h3> Muntaha Khati Shoriser Oil.</h3>
				<p>If get bulk amount then up to 10% off</p>
				<a href="oilorder.php" class="btn"> shop now</a>
			 </div>
			 <div class="box">
				<img src="photo/holud/combinholud.jpg" alt="">
				<h3> Muntaha Khati holuder Gura.</h3>
				<p>If get bulk amount then up to 10% off</p>
				<a href="holudorder.php" class="btn"> shop now</a>
			 </div>
			 <div class="box">
				<img src="photo/morich/combiamorich.jpg" alt="">
				<h3>  Muntaha Khati Moricher Gura.</h3>
				<p>If get bulk amount then up to 10% off</p>
				<a href="morichorder.php" class="btn"> shop now</a>
			 </div>
		</div>
	</section>
	<!-- catagorise  section ends-->
	
	
	<!-- review  section start-->
	<section class="review" id="review">
		<h1 class="heading">customer's <span>review</span> </h1>
		<div class="swiper review-slider"> 
					<div class="swiper-wrapper">
						<?php
							include 'dbconnect.php';
							
							$sql1="SELECT * from command";
							$query1=mysqli_query($conn,$sql1);
							while($info=mysqli_fetch_array($query1))
							{
							?>
						<div class="swiper-slide box" style="height:350px;width:300px;background-color:white;text-align:center;"> <!-- style="float:left;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); color:black;text-align:center; background-color:#FAF5EF; margin:10px;border:0px solid black;border-radius:6px;max-width:300px;max-height:300px;"> -->
							<img src="image/<?php echo $info['image'];?>" alt="" style="border-radius:50%;"> 
							<p style="font-size:15px;position:center;"><?php echo $info['message'];?></p>
							<h3 style="font-size:20px;position:center;"><?php echo $info['name'];?></h3>
						</div>
				        <?php
				        }
				        ?>
				    </div>
				
			
		</div>
	</section>
	<!-- review  section ends-->
	
		<!-- blogs  section start-->
		<section class="blogs" id="blogs">
		  <h1 class="heading">our<span>blogs</span></h1>
			<div class="box-container">
				<div class="box">
				<img src="photo/rice/r11.jpg" alt="">
					<div class="content">
						<div class="icons">
							<a href="#"><i class="fas fa-user"></i>by user</a>
							<a href="#"><i class="fas fa-calendar"></i>1st may,2021</a>
						</div>
						<h3> fresh and organic food</h3>
						<p>fresh and organic food.fresh and organic food.fresh and organic food</p>
						<a href="#" class="btn">read more..</a>
					</div>
				</div>
				<div class="box">
				<img src="photo/rice/r12.jpg" alt="">
					<div class="content">
						<div class="icons">
							<a href="#"><i class="fas fa-user"></i>by user</a>
							<a href="#"><i class="fas fa-calendar"></i>1st may,2021</a>
						</div>
						<h3> fresh and organic food</h3>
						<p>fresh and organic food.fresh and organic food.fresh and organic food</p>
						<a href="#" class="btn">read more..</a>
					</div>
				</div>
				<div class="box">
				<img src="photo/rice/r13.jpg" alt="">
					<div class="content">
						<div class="icons">
							<a href="#"><i class="fas fa-user"></i>by user</a>
							<a href="#"><i class="fas fa-calendar"></i>1st may,2021</a>
						</div>
						<h3> fresh and organic food</h3>
						<p>fresh and organic food.fresh and organic food.fresh and organic food</p>
						<a href="#" class="btn">read more..</a>
					</div>
				</div>
				<div class="box">
				<img src="photo/rice/r14.jpg" alt="">
					<div class="content">
						<div class="icons">
							<a href="#"><i class="fas fa-user"></i>by user</a>
							<a href="#"><i class="fas fa-calendar"></i>1st may,2021</a>
						</div>
						<h3> fresh and organic food</h3>
						<p>fresh and organic food.fresh and organic food.fresh and organic food</p>
						<a href="#" class="btn">read more..</a>
					</div>
				</div>
			</div>
		</section>
		<!-- blogs  section ends-->
	<?php
	  include('dbconnect.php');
	  if (isset($_POST['upload'])){
	  $name=$_POST['name'];
	  $email=$_POST['email'];
	  $address=$_POST['address'];
	  $message=$_POST['message'];
	  $image=$_FILES['image']['name'];
	  $image_size=$_FILES['image']['size'];
	  $image_temp_loc=$_FILES['image']['tmp_name'];
	  $image_store="image/".$image;
	  move_uploaded_file($image_temp_loc,$image_store);
	  
	  $sql="INSERT INTO command(name,email,image,address,message) values('$name','$email','$image','$address','$message')";
	  $query=mysqli_query($conn,$sql);
	  
	  }
	  ?>
	<!-- Location  section start-->
	<section class="location" id="location">
		<h1 class="heading"> Our<span>shop location</span></h1>
		<div class="row">
			<div class="image">
			  <img src="photo/map.jpg" alt="Location">
			</div>
			<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
				<p style="font-size:25px;color:orange;">write about our shop: </p>
				 <div class="inputBox">
					 <input type="text" name="name" placeholder="name" required>
					 <input type="email" name="email" placeholder="email" required>
				 </div>
				 <div class="inputBox">
					 <input type="file" name="image" placeholder="image" required>
					 <input type="text" name="address" placeholder="address" required>
			 </div>
				 <textarea placeholder="message" name="message" id="" clos="30" rows="10" required></textarea>
				 <input type="submit" value="Subscribe" class="btn" name="upload">
			</form>
	    </div>
	</section>
	<!-- Location section ends-->
			
			
			
			
			
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
		
	<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"> </script>
	<!-- custom js file link -->
	 <script src="myscripts.js"> </script> 
</body>
</html>