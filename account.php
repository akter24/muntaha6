<?php
	include('dbconnect.php');
	  if (isset($_POST['upload'])){
	  $email_address=$_POST['email_address'];
	  $password=$_POST['password'];
	  $sql="INSERT INTO registration(email_address,password) values('$email_address','$password')";
	  $query=mysqli_query($conn,$sql);
	  
	  }
	  
	  ?>
<!doctype html>
<html>
<head>
<title> Login page</title>
<style>
h1
{
text-align:center;
}
@media screen and (max-width:650px) {
  .loginpage{
		    width: 100%;
		    display: block;
			background-color:white;
			margin-left:0px;
		   }
		   }
  .loginpage
	  {
	  height:360px;
	  padding-top:20px;
	  width:600px;
	  border:2px solid green;
	  background-color:#d0e0e2; 
	  position:center;
	  margin-left:180px;
	 border-radius: 10px;
	  }
</style>
</head>
<body>

<div class="loginpage">
		<h1>Account create Page</h1>
		<form  method="POST" action="account.php">
			<table width="35%" bgcolor="0099CC" align="center" height="200px">
				  <tr>
				   <td colspan=2><center><font size=4><b>Please Create your account</b></font></center></td>
				</tr>

				<tr>
					<td>Username/mail:</td>
					<td><input type="text" size=25 name="email_address" autocomplete=off required></td>
				</tr>

				<tr>
					<td>Password:</td>
					<td><input type="Password" size=25 name="password" autocomplete=off required></td>
				</tr>

				<tr>
					
					<td><input type="submit" value="Create Account" name="upload"></td>
					<td><a href="index.php">Back</a></td>
				</tr>
				
			</table>
		
		</form>
		
	</div>
</body>
</html>