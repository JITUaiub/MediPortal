<!DOCTYPE>
<html>
<head>
	<title>Doctor Registration</title>
	<style>
		.error {color: #FF0000;}
	</style>

	<script type="text/javascript">
		function validation_chamber() {
					
					var flag = true;
					var title = document.getElementById('title1');
					var dept = document.getElementById('dept1');
					
					var medicollege = document.getElementById('medicollege1');
					//var username = document.getElementById('name');
					//var password = document.getElementById('password');

					if (document.myForm.title.value.length == 0) {
						title1.innerHTML = "You must input your title";
						title1.style.color = "red";
						flag = false;
					}
					else if(document.myForm.title.value.length > 0) {
						title1.innerHTML = " ";
					}

					if(document.myForm.dept.value.length == 0) {
						dept1.innerHTML = "You must input your department";
						dept1.style.color = "red";
						flag = false;
					}
					else if(document.myForm.dept.value.length > 0) {
						dept1.innerHTML = " ";
					}

					

					if(document.myForm.medicollege.value.length == 0) {
						medicollege1.innerHTML = "Please enter your working medical college";
						medicollege1.style.color = "red";
						flag = false;
					}
					else if(document.myForm.medicollege.value.length > 0) {
						medicollege1.innerHTML = " ";
					}

					return flag;
		}
	</script>
</head>
<body>
	
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
				<h1 align="center">Add Professional Information</h1>
				<form method="post" name="myForm" action="../user_doctor/database_addprofessionalinfo.php">
					<table align="center" width="60%">
						<tr>
							<td>
								<fieldset>
						
						<table align="center">
							<!-- <tr><td><p><span class="error">* required field.</span></p></td></tr> -->
							<tr>
								<td><label>Title</label></td>
								<td>:</td>
								<td><input type="text" name="title" value="" />
									<!-- <span class="error"></span></td> -->
								<td><span id="title1"></span></td>
							</tr>
							
							<tr>
								<td><label>Department</label></td>
								<td>:</td>
								<td><input type="text" name="dept" value="" /></td>
								<td><span id="dept1"></span></td>
							</tr>
							
							<tr>
								<td><label>Medical College</label></td>
								<td>:</td>
								<td><input type="text" name="medicollege" value=""></td>
								<td><span id="medicollege1"></span></td>
							</tr>
							<tr><td colspan="3">&nbsp;</td></tr>
							<tr>
								
								<td colspan="3" align="center">
									<input type="submit" value="Add another" onclick="return validation_chamber();" />
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