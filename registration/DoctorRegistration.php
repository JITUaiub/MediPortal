<!DOCTYPE>
<html>
<head>
	<title>Doctor Registration</title>
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
    $dobErr = "Enter a valid DOB";
  } 
   if (empty($_POST["UserName"])) {
    $unameErr = "Enter a valid UserName";
  }else {
    $uname = test_input($_POST["UserName"]);
    
    if (!preg_match("/^[a-zA-Z0-9]{5}$/",$uname)) {
      $unameErr = "can contain alphanumeric & longer than or equals 5 chars";
    }    
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
			 <table align="right">
                                <td><strong>Logged in as </strong></td>
                                <td><a href="viewprofile.php">Bob<img src="images/user.png"></a></td>
                                <td><hr width="1" size="15"></td>
                                 <td><a href="../Registration/DocRegAddEducation.html">Profile</a></td>
                                <td><hr width="1" size="15"></td>
                                <td><a href="../index.html">Logout<img src="images/logout.png"></a></td>

                            </table> 
			</div>
			<div>
				<h1 align="center">Doctor Registration Form</h1>
			</div>
			<div>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<table width="60%" align="center">
					<tr>
						<td>
							
							<fieldset>
								<table align="center">
									<tr><td><p><span class="error">* required field.</span></p></td></tr>
									<tr>
										<td>
											<label>Name</label>
										</td>
										<td>:</td>
										<td>
											<input type="text" name="name" value="" />
											<span class="error">* <?php echo $nameErr;?></span>
										</td>
									</tr>
									<tr>
										<td>
											<label>User Name</label>
										</td>
										<td>:</td>
										<td>
											<input type="text" name="UserName" value=""/>
											<span class="error">* <?php echo $unameErr;?></span>
										</td>
									</tr>
									<tr>
										<td>
											<label>Password</label>
										</td>
										<td>:</td>
										<td>
											<input type="password" name="password" value="" />
											<span class="error">* <?php echo $passErr;?></span>
										</td>
									</tr>
									<tr>
										<td>
											<label>Confirm Password</label>
										</td>
										<td>:</td>
										<td>
											<input type="password" name="compass" value="" />
											<span class="error">* <?php echo $compassErr;?></span>
										</td>
									</tr>
																		
									<tr>
										<td><label>Gender</label></td>
										<td>:</td>
										<td>
											<input name="Gender" type="radio" value="Male" checked="true" />Male
											<input name="Gender" type="radio" value="Female"/>Female
											<input name="Gender" type="radio" value="Other"/>Other
										</td>
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
										<td><input type="text" name="email" value="" />
											<span class="error">* <?php echo $emailErr;?></span>
										</td>
										
									</tr>
									<tr>
										<td><label>BMDC Registration Number</label></td>
										<td>:</td>
										<td><input type="text" name="reg_number" value="B556S555656S5" /></td>
									</tr>
									<tr>
										<td><label>Profile Picture</label></td>
										<td>:</td>
										<td><input type="file"/></td>
									</tr>
									<tr>
										<td colspan="3">
											<input type="checkbox" name="check"/>Agree with the <a href="../privacypolicy.html">Privacy Policy</a>
										<td>
									</tr>
									<tr>
										
										<td colspan="3" align="center">
											<input type="Submit" name="Submit" value="Next Step" align="center" >
											<input type="reset" name="reset" value="reset" align="center">
										</td>
									</tr>	
								</table>
							</fieldset>		
						</form>
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