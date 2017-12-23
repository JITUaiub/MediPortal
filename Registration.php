<!DOCTYPE>
<html>
<head>
	<title> Registration</title>
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
              background-image: url(images/new1.jpg);
              background-size: cover;
	}
	
	.container .inner table
	{
		width: 420px;
		height: 50px; 
		background-color: rgba(0,0,0,0);
		background-size: cover;

	}
	.inner .inner2
	{
		width: 80%;
		height: 60%;
		
		margin: auto;
		background-color: rgba(0,0,0,0.3);
		
	}
	


</style>

<body class="container">
	<table>
	<div>
				<div>
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

<div>
				<h1 align="center">Its time to be a part with us.<br>Thank You</h1>
			</div>
  <div class="inner">
  	<fieldset class="inner2">
  	<h3 align="center">Register yourself as</h3>
  	<table align="center">
  		<tr>
  			<td width="20%">
  				&nbsp;
  			</td>
  			<table align="center">
  				<div >
									<tr>
										<td>
											<label style="color: #F0F8FF"><b>Name</b></label>
										</td>
										<td>:</td>
										<td>
											<input type="text" name="name" value="Dr. XYZ"  />
										</td>
									</tr>
									<tr>
										<td>
											<label style="color: #F0F8FF">User Name</label>
										</td>
										<td>:</td>
										<td>
											<input type="text" name="UserName" value="xyz"/>
										</td>
									</tr>
									<tr>
										<td>
											<label style="color: #F0F8FF">Password</label>
										</td>
										<td>:</td>
										<td>
											<input type="password" name="password" value="12345678" />
										</td>
									</tr>
									<tr>
										<td>
											<label style="color: #F0F8FF">Confirm Password</label>
										</td>
										<td>:</td>
										<td>
											<input type="password" name="ConfirmPassword" value="12345678" />
										</td>
									</tr>
																		
									<tr>
										<td><label style="color: #F0F8FF">Gender</label></td>
										<td>:</td>
										<td style="color: #F0F8FF">
											<input name="Gender" type="radio" value="Male" checked="true" />Male
											<input name="Gender" type="radio" value="Female"/>Female
											<input name="Gender" type="radio" value="Other"/>Other
										</td>
									</tr>
									<tr>
										<td><label style="color: #F0F8FF">Date Of Birth</label></td>
										<td>:</td>	
										<td>
											<input type="date" name="Dob" value="2013-01-08" />	
										</td>
										
									</tr>
									<tr>
										<td><label style="color: #F0F8FF">Email</label></td>
										<td>:</td>
										<td><input type="text" name="email" value="xyz@example.com" /></td>
									</tr>
									<tr>
										<td>
											<label style="color: #F0F8FF">User Type</label>
										</td>
										<td>:</td>
										<td style="color: #F0F8FF">
											<input type="radio" name="user_type" >Doctor
											<input type="radio" name="user_type">Patient
										</td>
									</tr>
									<tr>
										<td colspan="3">
											<input type="checkbox" name="check"/>Agree with the <a href="../privacypolicy.php">Privacy Policy</a>
										<td>
									</tr>
									<tr><td></td></tr>
									<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
									
									<tr align="center">
										<td align="center" colspan="3">
											<button>Register</button>
											<button>Reset</button>
										</td>
									</tr>
									
								</td>
							</td>
						</tr>
					</div>
					</table>
				</tr>
			</table>
		</fieldset>
	</div>
	
<br>
<br>
	<div align="center">
		<i><b>Follow Us In </b></i>
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
		
		<table align="center">
			<tr>
				<td align="center" colspan="3">
				<a href="About_Us.php" style="color: #000000">About Us   </a>
			</td>
			<td align="center" colspan="3">
				<a href="Contact_Us.php" style="color:  #000000">Contact Us   </a>
			</td>
			<td align="center" colspan="3">
				<a href="privacyPolicy.php" style="color:  #000000">Privacy Policy   </a>
			</td>
			<td align="center" colspan="3">
				<a href="faq.php" style="color:  #000000">FAQ</a>
			</td>
			</tr>
		</table>
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
</html>