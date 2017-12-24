<html>

<head><title>New Appoinment</title></head>

<body>
	<table border="0" align="center" width="100%">
    	<tr>
        	<td>
            	<!-- Header section -->
            	<div>
                    <table align="center" width="100%">
                        <td width="20%">
                           <a href="dashboard.php"><img src="images/pageicon.png"/></a>
                        </td>
                        <td width="40%">&nbsp;</td>
                        <td width="40%">
                            <table align="right">
                                <td><strong>Logged in as </strong></td>
                                <td><a href="viewprofile.php">Bob<img src="images/user.png"></a></td>
                                <td><hr width="1" size="15"></td>
								<td><a href="../Registration/DonorSubscription.php">Profile</a></td>
                                <td><hr width="1" size="15"></td>
                                <td><a href="../index.php">Logout<img src="images/logout.png"></a></td>
                            </table> 
                        </td>
                    </table>
                </div>
            </td>
        </tr>
        <tr>
        	<td>
            	<!-- Body section -->
               <div>
                    <table width="100%" border="1">
                        <!-- User Menu Section -->
                        <td width="20%">
                            <fieldset>
                                <legend>
                            <strong>Personal Information</strong></legend>
                            <ul>
                                <li><a href="dashboard.php">Dashboard</a></li>
                                <li><a href="viewprofile.php">View Profile</a></li>
                                <li><a href="editprofile.php">Edit Profile</a></li>
                                <li><a href="changeprofilepicture.php">Change Profile Picture</a></li>
                            </ul>
							</fieldset>


							<fieldset>
								<legend>
								<strong>Medical History</strong></legend>
									<ul>
									<li><a href="prevpescriptions.php">Previous Prescriptions</a></li>
								</ul>
							</fieldset>

							<fieldset>
								<legend>
								<strong>Appointments Information</strong></legend>
							   
								<ul>
									<li><a href="newappointment.php">New Appointment</a></li>
									<li><a href="appointmentstatus.php">Appointment Status</a></li>
								</ul>
							</fieldset>


							<fieldset>
								<legend>
								<strong>Reports</strong></legend>
							   
								<ul>
									<li><a href="medianalysis.php">Medicine Analysis</a></li>
									<li><a href="disanalysis.php">Disease Analysis</a></li>
								</ul>
							</fieldset>

							<fieldset>
								<legend>
								<strong>E-consultation</strong></legend>
							   
								<ul>
									<li><a href="eConsultation/message.php">New Message</a></li>
									<li><a href="eConsultation/inbox.php">Inbox</a></li>
									<li><a href="eConsultation/sentitems.php">Sent Items</a></li>
								</ul>
							</fieldset>


							<fieldset>
								<legend>
								<strong>Account</strong></legend>
							   
								<ul>
									<li><a href="changepassword.php">Change Password</a></li>
									<li><a href="../index.php">Logout</a></li>
								</ul>
							</fieldset>
                        </td>
                        <div align="center">
                        <td width="70%" align="center" valign="top">
                           <table align="center" width="100%">
                           	<tr>
                           		<td>
                           			<fieldset>
                               <legend>Patient Appointment</legend>
							    <fieldset>
									<legend><b>DOCTOR | SEARCH</b></legend>
									<table align="center">
										<tr>
											
											<td align="center">
												<div id="search1">
													<table>
														<tr>
															<td colspan="2">
																<label>( Search more specifically )</label>
															</td>
															
														</tr>
														
														<tr>
															<td align="right">
																<strong>Department :</strong>
															</td>
															<td>
																<select>
																	<option>Select one</option>
																	<option>Anesthesiology</option>
																	<option>Cancer Surgery</option>
																	<option>Cardiac Anesthesia</option>
																	<option>Cardiology</option>
																	<option>Cilincal Hemotology</option>
																	<option>Dermatology</option>
																	<option>Dietetics & Nutrition</option>
																	<option>Cardiac Surgery</option>
																	<option>Neurosurgery</option>
																	<option>Orthopedics</option>
																</select>
															</td>
														</tr>
														<tr>
															<td align="right">
																<strong>Title :</strong>
															</td>
															<td>
																<select name="title">
																	
																	<optgroup label="Proffesor">
																		<option>Assistant Proffesor</option>
																		<option>Associate Proffesor</option>
																	</optgroup>
																	<optgroup label="Consultant">
																		<option>Senior Consultant</option>
																		<option>Junior Consultant</option>
																	</optgroup>
																</select>
															</td>
														</tr>
														<tr>
															<td align="right">
																<strong>Doctor :</strong>
															</td>
															<td>
																<select id="select_doctor">
																	<option>Select one</option>
																	<option>Dr.poran</option>
																	<option>Dr.Arif</option>
																	<option>Dr.eshtiak</option>
																	<option>Dr.pronob</option>
																</select>
															</td>
														</tr>
														<tr>
															<td colspan="2" align="center">
																<input id="add_doctor" type="submit" value="Add" onclick="add()">
															</td>
														</tr>
													</table>
												</div>
											</td>
										</tr>	
									</table>
								</fieldset>
                                    <table border="0" align="center">
                                    	<tr>
											<td colspan="2" align="center">
											<div id ="d_name">
												
											</div>
											</td>
										</tr>
                                        <tr>
                                            
                                            <td width="30%" align="center">
												<strong>Appointment For:</strong>
											</td>
											
                                            <td >
												<select>
													<option>Select one</option>
													<option>Consultation</option>
													<option>Emergency</option>
													<option>Operation</option>
												</select>
											</td>
                                        </tr>
										<tr>
											<td align="center" width="30%">
												<strong>Appoinment Type:</strong>
											</td>
											<td>
												<select>
													<option>Select one</option>
													<option>Online</option>
													<option>Direct Communication </option>
												</select>
											</td>
									</tr>

                                        <tr>
                                            <td width="30%" align="center">
												<strong>Problems :</strong>
											</td>
                                            <td>
												<textarea></textarea>
											</td>
                                        </tr>
                                        <tr>
                                            <td width="30%" align="center">
												<strong>Date :</strong>
										    </td>
                                            <td>
												<input type="date" name="date"/>
                                                (when you wish to meet)
                                            </td>
                                        </tr>
                                    </table>
									  <hr/>
                                <input align="center" id="submit" type="submit" value="Request" onclick="status()"/>
								<a href="appointmentstatus.php">Go to Appoint Status</a>
                           </fieldset> 
                           		</td>
                           	</tr>
                           </table>
                        </td></div>
                    </table>
                </div>
            </td>
        </tr>
        <tr>
        	<td>
            	<!-- Footer section -->
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
                        <td>&copy;2017 MediPortal. All rights reserved.</td>
                    </table>
                </div>
            </td>
        </tr>
    </table>
	<script type="text/javascript">
		function status(){
			var x= document.getElementById("submit").value;
			alert("Request is pending");
			window.location.assign("appointmentstatus.php");
		}
		function add(){
			
			var index = document.getElementById('select_doctor').selectedIndex;
			var option = document.getElementById('select_doctor').options
			var doctor_name = option[index].text;
			if(index ==0){
						alert("Select a doctor")
					}
			else
				{
					//if(var counter=1){
					document.getElementById('d_name').innerHTML += "<strong align=\"left\">Doctor's name :</strong><td align=\"right\"><a href=\"doctorDetails.php\">" + doctor_name + "</a></td><br>";
					//counter=2;
					//}
					//else{
					//	alert("one  doctor is selected")
					//}
				}
		}
	</script>
</body>

</html>