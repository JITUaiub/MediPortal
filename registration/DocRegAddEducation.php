<!DOCTYPE>
<html>
<head>
	<title>Doctor Registration</title>
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
				<form action="">
					<h1 align="center">Add Education Background</h1>
					<table align="center" width="60%">
						<tr>
							<td>
								<fieldset>	
									<table align="center" >
										<tr>
											<td><label>Degree</label></td>
											<td>:</td>
											<td><input type="text" name="degreeName" value="MBBS" /></td>
										</tr>
										<tr>
											<td><label>Passed Year</label></td>
											<td>:</td>
											<td><input type="text" name="passedYear" value="2015" /></td>
										</tr>
										<tr>
											<td><label>University</label></td>
											<td>:</td>
											<td><input type="text" name="university" value="DMC" /></td>
										</tr>
										<tr>
											<td><label>Description</label></td>
											<td>:</td>
											<td><textarea name="description">Bla bla bla</textarea></td>
										</tr>
										<script type="text/javascript">
											function add()
											{
												window.location.href = "docRegAddEducation.php";
											}
											function next()
											{
												window.location.href = "docRegAddChamber.php";
											}
										</script>
										<tr>
											<td colspan="3" align="center"><input type="button" value="Add another" onclick="add()" /> |	<input type="button" value="Next Step" onclick="next()" /></td>
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