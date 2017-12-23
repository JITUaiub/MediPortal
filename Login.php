<!DOCTYPE>
<html>
<head>
	<title>Login</title>
</head>
<style type="text/css">
	body{
		margin:0;
		padding: 0;
	}
	.container{
              width: 100%;
              height: 100vh;
              position: relative;
              background-image: url(images/new.jpg);
              background-size: cover;
	}
	.container .inner
	{
		position: absolute;
		width: 100%;
		
		
	}
	.container .inner table
	{
		width: 420px;
		height: 150px; 
		background-color: rgba(0,0,0,0);

	}
	.footer
	{
		
		
	}


</style>
<body class="container">
	<table>
		<div id="page">
			<div >
				<table align="center" width="100%">
					<tr align="right">
						<td width="10%">
							<a href="Home.php"><img src="images/logo.png" align="left"></a>
						</td>
						<td width="30%">&nbsp;</td>
						<td align="center" width="10%">
							<fieldset><a href="Home.php" >Home <img src="images/home.png"></a></fieldset>
						</td>
						<td width="10%" align="center">
							<fieldset><a href="Registration.php">Registration<img src="images/registration.png"></a></fieldset>
						</td>
						<td width="10%" align="center">
							<fieldset><a href="service.php">Our Service<img src="images/service.png"></a></fieldset>
						</td>
						<td width="10%" align="center">
							<fieldset><a href="Login.php">Login<img src="images/login.png"></a></fieldset>
						</td>
					</tr>
				</table>
			</div>

			<div align="center">
				<h1><i>Please Login with your username and password</i></h1>
			</div>
       		
			<script>
				function login() {
			        var id = document.getElementById("name").value;
			        var pass = document.getElementById("password").value;
			        if (id == "admin" && pass == "admin")
			            {
			            	window.location.href = "user_admin/dashboard.php";
			            } 
			        else if (id == "member" && pass == "member")
						{
							window.location.href = "user_member/dashboard.php";
						}
					else if (id == "doctor" && pass == "doctor")
						{
							window.location.href = "user_doctor/dashboard.php";
						}
				}
			</script>

			<div class="inner">
				<form name="myForm" onsubmit="return validateForm()" method="POST" action="#" >
					<table align="center" width="100%">
						<tr>
							<td>
								<fieldset>
									<legend style="color: darkblue">Login</legend>
									<table align="center">
										<tr>
											<td><label>User Name</label></td>
											<td>:</td>
											<td><input type="name" id="name" name="name" value="admin" placeholder="Enter username"/></td>
											<td><img src="images/person.png"></td>
										</tr>
										<tr>
											<td><label>Password</label></td>
											<td>:</td>
											<td><input type="password" id="password" name="password" value="admin" placeholder="Enter Password" /></td>
											<td><img src="images/password.png"></td>
										</tr>
										<tr>
											<td align="center" colspan="4">
												<input type="button" value="Login" onClick="login()" />
												<input type="reset" name="reset" value="Reset">
										</tr>
										<tr>
											<td colspan="4" align="center">
												<a href="ForgetPassword.php" style="color: black">Forget Password</a>
												<a href="Registration.php" style="color: black">Sign Up
											</td>
										</tr>
									</table>
								</fieldset>
							</td>
						</tr>
					</table>
				</form>
			</div>
<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br>

			<div  class="footer">
				<table align="center">
					<tr align="center">
						<td>
							<a href="https://www.facebook.com/">
								<img src="images/facebook.png">
							</a>
						</td>
						<td>
							<a href="https://www.twitter.com/">
								<img src="images/twitter.png">
							</a>
						</td>
					</tr>
				</table>
				
				<table align="center" >
					<tr>
						<td align="center" colspan="3">
							<a href="About_Us.php" style="color: #fff">About Us   </a>
						</td>
						<td align="center" colspan="3">
							<a href="Contact_Us.php" style="color: #fff">Contact Us   </a>
						</td>
						<td align="center" colspan="3">
							<a href="privacyPolicy.php" style="color: #fff">Privacy Policy   </a>
						</td>
						<td align="center" colspan="3">
							<a href="faq.php" style="color: #fff">FAQ</a>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</table>
    <div>
<table align="center" width="100%" border="1">
<tr>
<td align="center" colspan="3">
<b>&copy;2017 MediPortal. All rights reserved</b>
</td>
</tr>
</table>
</div>
</body>