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

$chamberNameErr = $locationErr = $workDays1Err = $timeErr= $time2Err =$workDays2Err= "";
$chamberName = $location = $workDays1 = $time = $time2 = $workDays2="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["chamberName"])) {
    $chamberNameErr = "Chamber name is required";
  } 
  
  if (empty($_POST["location"])) {
    $locationErr = "Location is required";
  } 
    if (empty($_POST["workDays1"])) {
    $workDays1Err = "Two work days required";
  } 
  if (empty($_POST["workDays2"])) {
    $workDays2Err = "Two work days required";
  } 
    
    
  }
  if (empty($_POST["time"])) {
    $timeErr = "Start time required";
  }
  if (empty($_POST["time2"])) {
    $time2Err = "End time required";
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
				<h1 align="center">Add Chamber</h1>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<table align="center" width="60%">
						<tr>
							<td>
								<fieldset>
						
						<table align="center">
							<tr><td><p><span class="error">* required field.</span></p></td></tr>
							<tr>
								<td><label>Chamber Name</label></td>
								<td>:</td>
								<td><input type="text" name="chamberName" value="" />
									<span class="error">*<?php echo $chamberNameErr;?></span></td>
							</tr>
							<tr>
								<td><label>Location</label></td>
								<td>:</td>
								<td><input type="text" name="location" value="" />
								<span class="error">*<?php echo $locationErr;?></span></td>
							</tr>
							<tr>
								<td><label>Working Days</label></td>
								<td>:</td>
								<td>
									<input type="checkbox" name="workDays1"  />SAT
									<input type="checkbox" name="workDays1"/>SUN
									<input type="checkbox" name="workDays1"/>MON
									<input type="checkbox" name="workDays1"  />TUE
									
								<span class="error"><?php echo $workDays1Err;?></span>
								</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>
									<input type="checkbox" name="workDays2"/>WED
									<input type="checkbox" name="workDays2"  />THU
									<input type="checkbox" name="workDays2"/>FRI
									
								<span class="error">*<?php echo $workDays2Err;?></span>
								</td>
							</tr>
							<tr>
								<td><label>Working Time</label></td>
								<td>:</td>
								<td><input type="time" name="time"><span class="error"><?php echo $timeErr;?></span> to <input type="time" name="time2">
								<span class="error">*<?php echo $time2Err;?></span></td>
							</tr>
							<tr>
								<td><label>Description</label></td>
								<td>:</td>
								<td><textarea name="description"></textarea>
								<span class="error">*</span></td>
							</tr>
							<tr><td colspan="3">&nbsp;</td></tr>
							<tr>
								
								<td colspan="3" align="center">
									<input type="submit" value="Add another"/>
									<input type="button" value="Finish"/></td>
							</tr>
							<tr>
								<td colspan="3" align="center"><a href="../user_doctor/dashboard.php">Skip for now</a></td>
							</tr>
						</table>
					</fieldset>
							</td>
						</tr>
					</table>		
				</form>
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