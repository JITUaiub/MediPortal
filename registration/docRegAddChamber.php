<!DOCTYPE>
<html>
<head>
	<title>Doctor Registration</title>
	<style>
		.error {color: #FF0000;}
	</style>

	<script type="text/javascript">
		function validation_chamber() {
					var counter;
					var check = 0;
					var flag = true;
					var c_name = document.getElementById('c_name');
					var loc = document.getElementById('loc');
					var working_days_check = document.getElementById('working_days');
					var working_days = document.getElementsByName('workDays1[]');
					var time1 = document.getElementById('time1');
					var time2 = document.getElementById('time2');
					var desc = document.getElementById('desc');
					//var username = document.getElementById('name');
					//var password = document.getElementById('password');

					if (document.myForm.chamberName.value.length == 0) {
						c_name.innerHTML = "You must input your chamberName";
						c_name.style.color = "red";
						flag = false;
					}
					else if(document.myForm.chamberName.value.length > 0) {
						c_name.innerHTML = " ";
					}

					if(document.myForm.location.value.length == 0) {
						loc.innerHTML = "You must input your location";
						loc.style.color = "red";
						flag = false;
					}
					else if(document.myForm.location.value.length > 0) {
						loc.innerHTML = " ";
					}

					for (counter = 0; counter < working_days.length; counter++) {
						if (working_days[counter].checked == true) 
							{
								check++;
							}
					}

					if (check == 0) {
						working_days_check.innerHTML = "You must input your working days";
						working_days_check.style.color = "red";
						flag = false;
					}
					else if(check > 0) {
						working_days_check.innerHTML = " ";
					}
					/*if(working_days[0].checked == false && working_days[1].checked == false && working_days[2].checked == false && working_days[3].checked == false && working_days[4].checked == false && working_days[5].checked == false && working_days[6].checked == false) {
						working_days_check.innerHTML = "You must input your working days";
						working_days_check.style.color = "red";
						flag = false;
					}
					else if(working_days[0].checked == true || working_days[1].checked == true || working_days[2].checked == true || working_days[3].checked == true || working_days[4].checked == true || working_days[5].checked == true || working_days[6].checked == true) {
							working_days_check.innerHTML = " ";
					}*/

					if(document.myForm.description.value.length == 0) {
						desc.innerHTML = "You must input your description";
						desc.style.color = "red";
						flag = false;
					}
					else if(document.myForm.description.value.length > 0) {
						desc.innerHTML = " ";
					}

					if(document.myForm.time.value.length == 0) {
						time1.innerHTML = "You must input your start time";
						time1.style.color = "red";
						flag = false;
					}
					else if(document.myForm.time.value.length > 0) {
						time1.innerHTML = " ";
					}

					if(document.myForm.time2.value.length == 0) {
						time2.innerHTML = "You must input your end time";
						time2.style.color = "red";
						flag = false;
					}
					else if(document.myForm.time2.value.length > 0) {
						time2.innerHTML = " ";
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
				<h1 align="center">Add Chamber</h1>
				<form method="post" name="myForm" action="../user_doctor/database_chamber.php">
					<table align="center" width="60%">
						<tr>
							<td>
								<fieldset>
						
						<table align="center">
							<!-- <tr><td><p><span class="error">* required field.</span></p></td></tr> -->
							<tr>
								<td><label>Chamber Name</label></td>
								<td>:</td>
								<td><input type="text" name="chamberName" value="" />
									<!-- <span class="error"></span></td> -->
								<td><span id="c_name"></span></td>
							</tr>
							
							<tr>
								<td><label>Location</label></td>
								<td>:</td>
								<td><input type="text" name="location" value="" /></td>
								<td><span id="loc"></span></td>
							</tr>
							<tr>
								<td><label>Working Days</label></td>
								<td>:</td>
								<td>
									<input type="checkbox" name="workDays1[]"  value="sat"/>SAT
									<input type="checkbox" name="workDays1[]" value="sun"/>SUN
									<input type="checkbox" name="workDays1[]" value="mon"/>MON <br/>
									<input type="checkbox" name="workDays1[]" value="tue" />TUE
									<input type="checkbox" name="workDays1[]" value="wed"/>WED
									<input type="checkbox" name="workDays1[]" value="thu" />THU
									<input type="checkbox" name="workDays1[]" value="fri"/>FRI
								</td>
								<td><span id="working_days"></span></td>
							</tr>
						
							<tr>
								<td><label>Working Time</label></td>
								<td>:</td>
								<td><input type="time" name="time"><span id="time1"></span> to <input type="time" name="time2"><span id="time2"></span>
							</td>

							</tr>
							<tr>
								<td><label>Description</label></td>
								<td>:</td>
								<td><textarea name="description"></textarea></td>
								<td><span id="desc"></span></td>
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