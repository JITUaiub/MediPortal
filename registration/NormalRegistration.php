<!DOCTYPE>
<html>
<head>
	<title>Patient Registration</title>
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body>

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

	<table>
	<div>
				<div>
				<table align="center" width="100%">
					<tr align="right">
						<td width="30%">
							<a href="../Home.html"><img src="../images/logo.png" align="left"></a>
						</td>
						<td width="30%">&nbsp;</td>
						<td>
							<a href="../Home.html" >Home <img src="../images/home.png"></a>
						</td>
						<td width="10%">
							<a href="../Registration.html">Registration<img src="../images/registration.png"></a>
						</td>
						<td width="10%">
							<a href="../Login.html">Login<img src="../images/login.png"></a>
						</td>
					</tr>
				</table>
		</div>

			<div>
				
				<h1 align="center">General Member Registration Form</h1>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<table align="center" width="60%">
					<tr>
						<td>
							<fieldset>
								
									<table align="center">
										<tr><td><p><span class="error">* required field.</span></p></td></tr>
							<tr>
								<td><label>Name</label></td>
								<td>:</td>
								<td><input type="text" name="name" value="" /><span class="error">* <?php echo $nameErr;?></span></td>
							</tr>
							<tr>
								<td><label>User Name</label></td>
								<td>:</td>
								<td><input type="text" name="uname" value="" /><span class="error">* <?php echo $unameErr;?></span></td>
								  
							</tr>
							<tr>
								<td><label>Password</label></td>
								<td>:</td>
								<td><input type="password" name="password" value="" /><span class="error">* <?php echo $passErr;?></span></td>
							</tr>
							<tr>
								<td><label>Confirm Password</label></td>
								<td>:</td>
								<td><input type="password" name="compass" value="" /><span class="error">* <?php echo $compassErr;?></span></td>
							</tr>

							<tr>
								<td><label>Gender</label></td>
								<td>:</td>
								<td>
									<input name="gender" type="radio" value="Male" checked="true" />Male
					                <input name="gender" type="radio" value="Female"/>Female
					                <input name="gender" type="radio" value="Other"/>Other
					            <span class="error">* <?php echo $genderErr;?></span></td>
							</tr>
							<tr>
								<td><label>Date Of Birth</label></td>
								<td>:</td>	
								<td>
									<input type="date" name="Dob" value="" />	
									 <span class="error">* <?php echo $dobErr;?></span>
								</td>
												
							</tr>
							<tr>
								<td><label>Email</label></td>
								<td>:</td>
								<td><input type="text" name="email" value="" /><span class="error">* <?php echo $emailErr;?></span></td>
							</tr>
							<tr>
								<td><label>Profile Picture</label></td>
								<td>:</td>
								<td><input type="file"/></td>
							</tr>
							
							<tr>
								<td colspan="3">
									<input type="checkbox" name="check"/>Are you agree with the <a href="../privacypolicy.html">Privacy Policy</a>
								<td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							
							<tr>
								<td colspan="3" align="center">
							
							<input type="Submit" name="Submit" value="Next" >
							</form>
						</td>
						</table>
								
							</fieldset>
						</td>
					</tr>
				</table>	

			</div>
	

	<div>
		<table align="center">
			<tr align="center">
				<td>
				<a href="https://www.facebook.com/">
				<img src="../images/facebook.png">
                 </a>
             </td>
				<td>
						<a href="https://www.twitter.com/">
						<img src="../images/twitter.png">
					</a>
				</td>
			</tr>
		</table>
		
		<table align="center">
			<tr>
				<td align="center" colspan="3">
				<a href="../About_Us.html">About Us   </a>
			</td>
			<td align="center" colspan="3">
				<a href="../Contact_Us.html">Contact Us   </a>
			</td>
			<td align="center" colspan="3">
				<a href="../privacyPolicy.html">Privacy Policy   </a>
			</td>
			<td align="center" colspan="3">
				<a href="../faq.html">FAQ</a>
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