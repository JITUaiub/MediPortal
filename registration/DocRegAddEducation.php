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

$degreeErr = $uniErr = $desErr = $unameErr =$passErr=$compassErr=$dobErr= "";
$degree = $uni = $des = $pass = $uname =$compass=$dob= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["degreeName"])) {
    $degreeErr = "Name is required";
  } else {
    $degree = test_input($_POST["degreeName"]);
    
   
    }
  }
  
  if (empty($_POST["university"])) {
    $uniErr = "University is required";
  } else {
    $uni = test_input($_POST["university"]);
    
  }
    if (empty($_POST["description"])) {
    $desErr = "Description is required";
  } else {
    $des = test_input($_POST["description"]);
    
    if (!preg_match("/^d{100}$|^d{200}$/",$des)) {
      $desErr = "Description must be 100 to 200 words";
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
                        <td width="20%">
                            <a href="dashboard.php"><img src="../user_doctor/images/pageicon.png"/></a>
                        </td>
                        <td width="40%">&nbsp;</td>
                        <td width="40%">
                            <table align="right">
                                <td><strong>Logged in as </strong></td>
                                <td><a href="../user_doctor/viewprofile.php">Bob<img src="../user_doctor/images/user.png"></a></td>
                                <td><hr width="1" size="15"></td>
                                 <td><a href="../Registration/DocRegAddEducation.php">Profile</a></td>
                                <td><hr width="1" size="15"></td>
                                <td><a href="../index.php">Logout<img src="../user_doctor/images/logout.png"></a></td>

                            </table> 
                        </td>
                    </table>
			</div>

			<div>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<h1 align="center">Add Education Background</h1>
					<table align="center" width="60%">
						<tr>
							<td>
								<fieldset>	
									<table align="center" >
										<tr><td><p><span class="error">* required field.</span></p></td></tr>
										<tr>
											<td><label>Degree</label></td>
											<td>:</td>
											<td><input type="text" name="degreeName" value="" />
											<span class="error">* <?php echo $degreeErr;?></span></td>
										</tr>
										<tr>
											<td><label>Passed Year</label></td>
											<td>:</td>
											<td><select>
												<?php
												$y=2017;
											
												for($y=2017;$y>=1990;$y--)
												{
												echo "<option>$y</option>";
											}
											?>
										</select>
										<span class="error">* 
									</td>
										</tr>
										<tr>
											<td><label>University</label></td>
											<td>:</td>
											<td><input type="text" name="university" value="" />
											<span class="error">* <?php echo $uniErr;?></span></td>
										</tr>
										<tr>
											<td><label>Description</label></td>
											<td>:</td>
											<td><textarea name="description" ></textarea>
											<span class="error">*<?php echo $desErr;?></span></td>
										</tr>
										
										<tr>
											<td colspan="3" align="center">
												<input type="Submit" name="Submit" value="Add another"  >
												<input type="button" value="Next Step"></td>
										</tr>
										<tr>
											<td colspan="3" align="center"><a href="docRegAddChamber.php">Skip for now</a></td>
										</tr>
									</table>
								
								</fieldset>	
							</td>
						</tr>
					</table>	
				</form>
			</div>


			<br><br><br><br>
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