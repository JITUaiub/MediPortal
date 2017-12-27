<?php
	session_start();
	if(!isset($_SESSION['patient_username']) || empty($_SESSION['patient_username'])){
		  header("location: ../Login.php");
		  exit;
		}
	
$bloodsubErr = $weightErr = $heartconditionErr = $drugsErr = "";
$err1=false;
$err2=false;
$err3=false;
$err4=false;

if(isset($_POST['submit'])){
  
  $blood_donation_status=$_POST['blood_donation_status'];
  $weight=$_POST['weight'];
  $heartcondition=$_POST['heartcondition'];
  $drugs=$_POST["drugs"];
  $blood_group=$_POST['blood_group'];
  
  if ($blood_donation_status=='') {
    $bloodsubErr = "Checkbox is required";
	$err1=false;
  } else
  {
	
	$bloodsubErr = "";
	$err1=true; 
  }
  
  if ($weight=="") {
    $weightErr = "Field is required";
	$err2=false;
  } else
  {
	$weightErr = "";
	$err2=true;  
  }
 
 if ($heartcondition=="") {
    $heartconditionErr = "Field is required";
	$err3=false;
  }else
  {
	$heartconditionErr = "";
	$err3=true;  
  }	  
    
    
  
  if ($drugs=="") {
    $drugsErr = "Field is required";
	$err4 =false;
  }
  else
  {
	$drugsErr = "";
	$err4 =true;  
  }
 if($err1==true && $err2==true && $err3==true && $err4==true){
	 $conn = mysqli_connect("localhost", "root", "", "mediportal_db");
 	$sql="INSERT INTO blood(status, blood_group, question_1, question_2, question_3) VALUES ('$blood_donation_status','$blood_group','$weight','$heartcondition','$drugs')";
	
	$result = mysqli_query($conn, $sql);
	
  }
}
?>

<!DOCTYPE>
<html>
<head>
	<title>Patient Registration</title>
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body>

	<table>
	<div>
				<div>
				<table align="center" width="100%">
                        <td width="20%">
                            <a href="dashboard.php"><img src="../user_member/images/pageicon.png"/></a>
                        </td>
                        <td width="40%">&nbsp;</td>
                        <td width="40%">
                            <table align="right">
                                <td><strong>Logged in as </strong></td>
                                <td><a href="../user_member/viewprofile.php"><?=$_SESSION['patient_username']?><img src="../user_member/images/user.png"></a></td>
                                <td><hr width="1" size="15"></td>
                                 <td><a href="../Registration/DonorSubscription.php">Profile</a></td>
                                <td><hr width="1" size="15"></td>
                                <td><a href="../index.php">Logout<img src="../user_member/images/logout.png"></a></td>

                            </table> 
                        </td>
                </table>
		</div>

			<div>
				<h1 align="center">Blood Donation Subscription Form</h1>
				<form method="post" action="">
				
				<table align="center" width="60%">
					<tr>
						<td>
							<fieldset>
                               
								
									<table align="center">
							
										<tr>
											<td colspan="3">
													<table align="center">
														 <tr><td><p><span class="error">* required field.</span></p></td></tr>
														<tr>
															<td>
																<input type="checkbox" name="blood_donation_status">
																I'm sure i want to donate Blood?
																<span class="error">*<?php echo $bloodsubErr;?></span>
															</td>
														</tr>
														<tr><td>&nbsp;</td></tr>
														<tr>
															<td><label>Blood Group</label></td>
															<td>:</td>
															<td>
																<select name="blood_group">
																	<option>A(-)</option>
																	<option>A(+)</option>
																	<option>B(-)</option>
																	<option>B(+)</option>
																	<option>AB(-)</option>
																	<option>AB(+)</option>
																	<option>O(-)</option>
																	<option>O(+)</option>
																	<option>Don't Know</option>
																</select>
																<span class="error">*</span>
												</td>
											</tr>
											
											<tr>
												<td colspan="3">
													<hr/>
												</td>
											</tr>
											
											<tr>
												<td>
													<label>Are you Healthy and weight over 50KG?</label>
												</td>
												<td>:</td>
												<td colspan="2">
													<input name="weight" type="radio" value="Over 50 Kg"/>Yes
													<input name="weight" type="radio" value="Under 50 Kg"/>No
													<span class="error">*<?php echo $weightErr;?></span>
												</td>
														
											</tr>
											
											<tr>
												<td colspan="3">
													<hr/>
												</td>
											</tr>
											
											<tr>
												<td>
													<label>Have a serious heart condition?</label>
												</td>
												<td>:</td>
												<td colspan="2">
													<input name="heartcondition" type="radio" value="Bad"/>Yes
													<input name="heartcondition" type="radio" value="Good"/>No
													<span class="error">*<?php echo $heartconditionErr;?></span>
												</td>
											
											</tr>
											
											<tr>
												<td colspan="3">
													<hr/>
												</td>
											</tr>
											
											<tr>
												<td>
													<label>Ever injected recreational drugs?</label>
												</td>
												<td>:</td>
												<td colspan="2">
													<input name="drugs" type="radio" value="yes"/>Yes
													<input name="drugs" type="radio" value="no"/>No
													<span class="error">*<?php echo $drugsErr;?></span>
												</td>
											
											</tr>

										</table>
								</td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							
							<tr>
								<td colspan="3" align="center">
							<input type="reset" name="reset" value="Reset" align="center"> 
							<input type="Submit" name="Submit" value="Finish" align="center" >
							<tr>
								<td colspan="3" align="center"><a href="../user_member/dashboard.php">Skip for now</a></td>
							</tr>
						</td>
						</table>
					</form>
							</fieldset>
						</td>
					</tr>
				</table>
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