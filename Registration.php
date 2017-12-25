<?php
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	$nameErr = $emailErr = $genderErr = $unameErr =$passErr=$compassErr=$dobErr= $checkErr= $user_typeErr= "";
	$name = $email = $gender = $pass = $uname =$compass=$dob= $check = $user_type= "";
	$err1 =$err2 =$err3 =$err4 =$err5 =$err6 =$err7 = $err8 = $err9 = false;
	
	if (isset($_POST['submit'])) {
									$username=$_POST['UserName'];
									$name=$_POST['name'];
									$password=$_POST['password'];
									$gender=$_POST['gender'];
									$email=$_POST['email'];
									$dob=$_POST['dob'];
									$account_status="pending";
									$account_status_a="active";
									$currentDateTime = date('Y-m-d H:i:s');
									$last_login="$currentDateTime";
						if (empty($_POST["name"])) {
										$nameErr = "Name is required";
										$err1 = false;
						} else {
							$name = test_input($_POST["name"]);			
							if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
										  $nameErr = "Only letters and white space allowed";
										  $err1 = false;
							}
							else
							{
											$nameErr = "";
											$err1 = true;
							}
						}
									  
						if (empty($_POST["email"])) {
										$emailErr = "Email is required";
										$err2 = false;
						} else {
										$email = test_input($_POST["email"]);
										// check if e-mail address is well-formed
							if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
										  $emailErr = "Invalid email format";
										  $err2 = false;
							}else{
											$emailErr = "";
											$err2 = true;
								}
						}
						if (empty($_POST["password"])) {
						$passErr = "Password is required";
						$err3=false;
					  } else {
						$pass = test_input($_POST["password"]);
						
						if (!preg_match("/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/",$pass)) {
						  $passErr = "the password does not meet the requirements!";
						  $err3=false;
						}else{
							$passErr = "";
							$err3 = true;
						}
					  }
					  if (empty($_POST["compass"])) {
						$compassErr = "Password didn't match";
						$err4=false;
					  }
					  
						else{
							$compass= test_input($_POST["compass"]);
							if($compass!=$pass)
							{
								$compassErr="Password didn't match";
								$err4=false;
							}else{
							$passErr = "";
							$err4 = true;
						}
							
						}
					  if (empty($_POST["check"])) {
						$checkErr = "Field is required";
						$err5=false;
					  }else{
						  $err5 = true;
						  $checkErr = "";
					  }

						  if (empty($_POST["dob"])) {
							$dobErr = "Enter a DOB";
							$err7=false;
						  } else{
							  $dobErr="";
							  $err7=true;
						  }
						  
						  
						  
						  if (empty($_POST["UserName"])) {
							$unameErr = "Enter a valid UserName";
							$err8=false;
						  }else {
							$uname = test_input($_POST["UserName"]);
							$s = $_POST['UserName'];
							if (!preg_match("/^[a-zA-Z ]*$/",$uname)) {
							  $unameErr = "Only letters and white space allowed";
							  $err8=false;
							}    
							else if(strlen($s) < 5){
								$unameErr =" Minimum 5 character long.";
								$err8=false;
							}else
							{
								$uname="";
								$err8=true;
							}
						  }
						  
						  $user_type = $_POST['user_type'];
						  if($err1==true && $err2==true && $err4==true && $err5==true &&  $err7==true  && $err8==true ){
								   if ($user_type=='doctor') {
										$sql ="INSERT INTO `user`(`username`, `type`, `password`) VALUES ('$username','doctor','$password')";
										
										$sql1 ="INSERT INTO `doctor`(`username`, `name`, `gender`, `email`, `dob`, `account_status`, `last_login`) VALUES ('$username','$name','$gender','$email','$dob','$account_status','$last_login')";
										$conn = mysqli_connect("localhost", "root", "", "mediportal_db", 3306);
										$result = mysqli_query($conn, $sql);
										$result = mysqli_query($conn, $sql1);
										header("location: registration.php");
										exit;
									}

									else if($user_type=='patient') {
											$sql ="INSERT INTO user (username,type,password)  VALUES ('$username','$user_type','$password')";
											$sql1 ="INSERT INTO member (username,name,gender,email,dob,account_status,last_login)  VALUES ('$username','$name','$gender','$email','$dob','$account_status_a','$last_login')";
											$conn = mysqli_connect("localhost", "root", "", "mediportal_db", 3306);
											$result = mysqli_query($conn, $sql);
											$result = mysqli_query($conn, $sql1);
											
											header("location: registration.php");
											exit;
										}
								mysqli_close($conn);

						    }
					  
	}
?>

<!DOCTYPE>
<html>
	<head>
		<title> Registration</title>
		<style>
			//.error {color: #FF0000;}
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
				  //background-image: url(images/new1.jpg);
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
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
		
			<div>
				<table align="center" width="70%">
					<tr>
						<td>
							<fieldset>
		<table align="center" width="70%">
		
  		<tr>
			<td>
				<div >
  				<table align="center">
									<tr>
										<td>
											<label>Name</label>
										</td>
										<td>:</td>
										<td>
											<input type="text" name="name" value=""  />
											<br><span style="color : RED"><?php echo $nameErr;?></span>
										</td>
									</tr>
									<tr>
										<td>
											<label>User Name</label>
										</td>
										<td>:</td>
										<td>
											<input type="text" name="UserName" value=""/>
											<br><span style="color : RED"><?php echo $unameErr;?></span>
										</td>
									</tr>
									<tr>
										<td>
											<label>Password</label>
										</td>
										<td>:</td>
										<td>
											<input type="password" name="password" value="" />
											<br><span style="color : RED"><?php echo $passErr;?></span>
										</td>
									</tr>
									<tr>
										<td>
											<label>Confirm Password</label>
										</td>
										<td>:</td>
										<td>
											<input type="password" name="compass" value="" />
											<br><span style="color : RED"><?php echo $compassErr;?></span>
										</td>
									</tr>
																		
									<tr>
										<td><label>Gender</label></td>
										<td>:</td>
										<td >
											<input name="gender" type="radio" value="Male" checked="true" />Male
											<input name="gender" type="radio" value="Female"/>Female
											<input name="gender" type="radio" value="Other"/>Other
											<br><span style="color : RED"><?php echo $genderErr;?></span>
										</td>
									</tr>
									<tr>
										<td><label >Date Of Birth</label></td>
										<td>:</td>	
										<td>
											<input type="date" name="dob" value="" />	
											<br><span style="color : RED"><?php echo $dobErr;?></span>
										</td>
										
									</tr>
									<tr>
										<td><label>Email</label></td>
										<td>:</td>
										<td><input type="text" name="email" value="" /><br><span style="color : RED"><?php echo $emailErr;?></span></td>
										
									</tr>
									<tr>
										<td>
											<label>User Type</label>
										</td>
										<td>:</td>
										<td >
											<input type="radio" name="user_type" value="patient" checked="true">Patient
											<input type="radio" name="user_type" value="doctor" >Doctor
											<br><span style="color : RED"><?php echo $user_typeErr;?></span>
										</td>
									</tr>
									<tr>
										<td colspan="3">
											<input type="checkbox" name="check"/>Agree with the <a href="privacypolicy.php">Privacy Policy</a>
											<br><span style="color : RED"> <?php echo $checkErr;?></span>
										<td>
									</tr>
									
									
									<tr align="center">
										<td align="center" colspan="3">
											<input type="submit" name="submit" value="Next" >
											<button>Reset</button>
										</td>
									</tr>
									
					
						</table>
					</div>
			</td>
		</tr>
		</table>
		</fieldset>
						</td>
					</tr>
				</table>
			</div>
		</form>
		</tr>
	</table>
		
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