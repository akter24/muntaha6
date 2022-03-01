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
		<h1>Login Restricted Page</h1>
		<form name="loginForm" method="post" action="admin.php">
			<table width="35%" bgcolor="0099CC" align="center" height="200px">
				  <tr>
				   <td colspan=2><center><font size=4><b>login for see the Order status</b></font></center></td>
				</tr>

				<tr>
					<td>Username:</td>
					<td><input type="text" size=25 name="user" autocomplete=off required></td>
				</tr>

				<tr>
					<td>Password:</td>
					<td><input type="Password" size=25 name="pass" autocomplete=off required></td>
				</tr>

				<tr>
					<td ><input type="Reset"></td>
					<td><input type="submit" onclick="return check(this.form)" value="Login"></td>
					<td><a href="index.php">Back</a></td>
				</tr>
				
			</table>
		
		</form>
		<script language="javascript">
				function check(form)
				{

				if(form.user.value == "akter" && form.pass.value == "akter")
				{
					return true;
				}
				else
				{
					alert("Error Password or Username")
					return false;
				}
				}
	    </script>
	</div>
</body>
</html>