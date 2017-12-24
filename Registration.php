<!DOCTYPE>
<html>
<head>
	<title> Registration</title>
	<style>
		.error {color: #FF0000;}
	</style>
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
					 <?php

$nameErr = $emailErr = $genderErr = $unameErr =$passErr=$compassErr=$dobErr= "";
$name = $email = $gender = $pass = $uname =$compass=$dob= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    if (empty($_POST["password"])) {
    $passErr = "Password is required";
  } else {
    $pass = test_input($_POST["password"]);
    
    if (!preg_match("/^d{10}$|^d{12}$/",$pass)) {
      $passErr = "Passport must be 10 or 12 digits";
    }
  }
  if (empty($_POST["compass"])) {
    $compassErr = "Password didn't match";
  }
  
  	else{
  		$compass=test_input($_POST("compass"));
  		if($compass!=$pass)
  		{
  			$compassErr="Password didn't match";
  		}
  }

  if (empty($_POST["Dob"])) {
    $dobErr = "Enter a DOB";
  } /*else {
    $uname = test_input($_POST["uname"]);
    // check if URL address syntax is valid
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }    
  }*/
   if (empty($_POST["uname"])) {
    $unameErr = "Enter a valid user name";
  }


  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
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
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div class="inner">
  	<fieldset class="inner2">
  	<h3 align="center">Register yourself as</h3>

  	<table align="center">
  		 	<tr><td><p><span class="error">* required field.</span></p></td></tr>
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
											<input type="text" name="name" value=""  />
											<span class="error">* <?php echo $nameErr;?></span>
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
											<input type="password" name="password" value="" />
											<span class="error">* <?php echo $passErr;?></span>
										</td>
									</tr>
									<tr>
										<td>
											<label style="color: #F0F8FF">Confirm Password</label>
										</td>
										<td>:</td>
										<td>
											<input type="password" name="compass" value="" />
											<span class="error">* <?php echo $compassErr;?></span>
										</td>
									</tr>
																		
									<tr>
										<td><label style="color: #F0F8FF">Gender</label></td>
										<td>:</td>
										<td style="color: #F0F8FF">
											<input name="gender" type="radio" value="Male" checked="true" />Male
											<input name="gender" type="radio" value="Female"/>Female
											<input name="gender" type="radio" value="Other"/>Other
											<span class="error">* <?php echo $genderErr;?></span>
										</td>
									</tr>
									<tr>
										<td><label style="color: #F0F8FF">Date Of Birth</label></td>
										<td>:</td>	
										<td>
											<input type="date" name="dob" value="" />	
											<span class="error">* <?php echo $dobErr;?></span>
										</td>
										
									</tr>
									<tr>
										<td><label style="color: #F0F8FF">Email</label></td>
										<td>:</td>
										<td><input type="text" name="email" value="" /><span class="error">* <?php echo $emailErr;?></span></td>
										
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
											<input type="Submit" name="Submit" value="Next" >
											<button>Reset</button>
										</td>
									</tr>
									
								</td>
							</td>
						</tr>
					</div>
					</table>
				</form>
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