<?php
    include('dbconnect.php');
	if(isset($_POST['insert']))
	{
	$customer_name=$_POST['customer_name'];
	$mobile=$_POST['mobile'];
	$product_name=$_POST['product_name'];
	$quantity=$_POST['quantity'];
	$amount=$_POST['amount'];
	$transition_id=$_POST['transition_id'];
	$transition_date=$_POST['transition_date'];
	$transition_type=$_POST['transition_type'];
	$address=$_POST['address'];
	
	$sql="INSERT INTO ordertable(customer_name,mobile,product_name,quantity,amount,transition_id,transition_date,transition_type,address)
	values('$customer_name','$mobile','$product_name','$quantity','$amount','$transition_id','$transition_date','$transition_type','$address')";
	$query=mysqli_query($conn,$sql);
	}
	?>
	
<!DOCTYPE html>
<html>
<head> 
    <title> Muntaha agro food </title>
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
    <header class="header">
		<img src="photo/logo7.png" alt="image" style="height:60px;width:150px;">
		<nav class="navber">
			<a href="index.php">home</a>
			<a href="index.php">catagories</a>
			<a href="index.php">products</a>
			<a href="index.php">review</a>
			<a href="index.php">offers</a>
			<a href="index.php">blogs</a>
			<a href="index.php">location</a>
			<a href="login.php">login</a>
		</nav>
		<div class="icons">
			<div class="fas fa-bars" id="menu-btn"></div>
		</div>
	</header>
	<br><br><br><br><br>
<!-- Location  section start-->
	<section class="location" id="location">
		<h1 class="heading"> Please<span>Confirm your order</span></h1>
		<div class="row">
			<div class="image">
			  <img src="photo/rice/combianminiket.jpg" alt="Location">
			</div>
			<form action="riceorder.php" method="POST" enctype="multipart/form-data">
				<p style="font-size:25px;color:orange;">Insert your Information:  <span id="datetime" style="font-size:15px;padding-left:250px;color:black;"></span></p>

				<script>
			       var dt = new Date();
			       document.getElementById("datetime").innerHTML = (("0"+dt.getDate()).slice(-2)) +"."+ (("0"+(dt.getMonth()+1)).slice(-2)) +"."+ (dt.getFullYear()) +" "+ (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+dt.getMinutes()).slice(-2));
			     </script>
				 <div class="inputBox">
					 <input type="text" name="customer_name" placeholder="Type your Name" autocomplete=off required>
					 <input type="number" name="mobile" placeholder="Type your mobile number" required autocomplete=off>
				 </div>
				 <div class="inputBox">
				
					 <select class="select" name="product_name" style="justify-content:space-between;font-size:20px;width:300px;background-color:white;padding:2px;" required>
					   <option selected hidden> Choose your product</option>
						<option value="Bashumoti Rice">Bashumoti Rice</option>
						<option value="Minikete Rice">Minikete Rice</option>
						<option value="Attach Rice">Attach Rice</option>
						<option value="Normal Minikete">Normal Minikete</option>
						<option value="Holud">Holud</option>
						<option value="Shorisar Oil">Shorisar Oil</option>
						<option value="Moricher Gura">Moricher Gura</option>
						<option value="Onion">Onion</option>
						<option value="Masoorer dal Chikun">Masoorer dal Chikun</option>
						<option value="Masoorer dal mota">Masoorer dal mota</option>
						<option value="Rosun deshi">Rosun deshi</option>
						<option value="Rosun china">Rosun china</option>
				    </select> 
				   
					<select class="select1" name="quantity" style="justify-content:space-between;font-size:20px;width:300px;background-color:silver;padding:2px;" required>
				   <option selected hidden> Choose quantity</option>
					<option value="1kg">1kg</option>
					<option value="2kg">2kg</option>
					<option value="3kg">3kg</option>
					<option value="4kg">4kg</option>
					<option value="5kg">5kg</option>
					<option value="6kg">6kg</option>
					<option value="7kg">7kg</option>
					<option value="8kg">8kg</option>
					<option value="9kg">9kg</option>
					<option value="10kg">10kg</option>
					<option value="15kg">15kg</option>
					<option value="20kg">20kg</option>
					<option value="25kg">25kg</option>
					<option value="50kg">50kg</option>
				</select>
			     </div>
				 <div class="inputBox">
					 <input type="text" name="amount" placeholder="Total amount" required autocomplete=off>
					 <input type="text" name="transition_id" placeholder="transition id" required autocomplete=off>
			     </div>
				 <div class="inputBox">
					 <input type="date" name="transition_date" placeholder="transition_date" required autocomplete=off>
					 <input type="text" name="transition_type" placeholder="transition_type" required autocomplete=off>
			     </div>
				 <textarea placeholder="Write delivary address" name="address" id="" clos="30" rows="10" required></textarea>
				 <input type="submit" value="Confirm Order" class="btn" name="insert" onclick="myFunction()">
				 <img src="photo/bkash.png" alt="Jane" style="width:13%;padding-left:10px;"> 
			     <img src="photo/nagad.png" alt="Jane" style="width:13%;padding-left:10px;">
				 <p style="font-size:20px;color:red;font-weight:bold;">Please Pay by Bkash or Nagad: 01912133660.</p>
				 <script>
				     function myFunction() {
				     alert("Successfully Submitted and Delivery within 2 hours");
				     }
			     </script>
			</form>
	    </div>
	</section>
	<!-- Location section ends-->
	
	
	<!-- More product  section start-->
	<section class="more" id="more">
	    <h1 class="heading">Related <span> More products</span></h1>
		<div class="swiper more-slider">
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
	</section>
	<!-- products  section end-->
	
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