<?php 


session_start(); ?>

<html>

<head><title>Home</title></head>

<body>
    <table align="center" width="100%">
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
                                <td><a href="viewprofile.php"><?php echo $_SESSION['doctor_username']; ?><img src="images/user.png"></a></td>
                                <td><hr width="1" size="15"></td>
                                <td><a href="../Registration/DocRegAddEducation.php">Profile</a></td>
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
                        <td width="20%" valign="top">
                            <fieldset>
                                <legend>
                                    <strong>Personal Information</strong></legend>
                            <ul>
                                <li><a href="dashboard.php">Dashboard</a></li>
                                <li><a href="viewprofile.php">View Profile</a></li>
                                <li><a href="editprofile.php">Edit Profile</a></li>
                                <li><a href="changeprofilepicture.php">Change Profile Picture</a></li>
                                <li><a href="managechamber.html">Manage Chambers</a></li>
                            </ul>
                        </fieldset>


                        <fieldset>
                            <legend>
                            <strong>Manage Prescriptions</strong></legend>
                                <ul>
                                <li><a href="newpescriptions.php">Create new Prescriptions</a></li>
                                <li><a href="pescriptions.php">Previous Prescriptions</a></li>
                            </ul>
                        </fieldset>

                        <fieldset>
                            <legend>
                            <strong>Appointments Information</strong></legend>
                           
                            <ul>
                                <li><a href="appointmentstatus.php">Appointment Status</a></li>
                                <li><a href="appointmenthistory.php">Appointment History</a></li>
                            </ul>
                        </fieldset>


                        <fieldset>
                            <legend>
                            <strong>Reports</strong></legend>
                           
                            <ul>
                                <li><a href="patienthistory.php">Patient History</a></li>
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
                             <td width="70%" align="center">
                            <!------------------------ DESIGN PORTAL PAGE HERE ------------------------------>
								<fieldset>
                                         <label>Search:</label>
                                        <input type="text" value="Search" />
										
                                                   
                                            <table id="bar" align="center" border="0" cellspacing="10">
											<tr >
												<td height="400" >
													<table width="100%" height="100%" border="0">
														<tr>
															<td height="9.1%" >100+</td>
															
														</tr>
														<tr>
															<td height="9.1%" >90</td>
															
														</tr>
														<tr>
															<td height="9.1%" >80</td>
															
														</tr>
														<tr>
															<td height="9.1%" >70</td>
															
														</tr>
														<tr>
															<td height="9.1%" >60</td>
															
														</tr>
														<tr>
															<td height="9.1%" >50</td>
															
														</tr>
														<tr>
															<td height="9.1%" >40</td>
															
														</tr>
														<tr>
															<td height="9.1%">30</td>
															
														</tr>
														<tr>
															<td height="9.1%" >20</td>
															
														</tr>
														<tr>
															<td height="9.1%" >10</td>

															
														</tr>
														<tr>
															<td height="9.1%" >0</td>
															
															
														</tr>
													</table>
														<td height="400" >
													<table  width="100%" height="100%" >
														<tr>
															<td height="0%" ></td>
															
														</tr>
														<tr>
															<td align="up" id="napa"height="102%"  title="102"></td>
														</tr>
													</table>
												</td>
												<td height="400" >
													<table width="100%" height="100%">
														<tr>
															<td height="0%" ></td>
															
														</tr>
														<tr>
															<td id="naloxegol" height="9%"  title="9"></td>
														</tr>
													</table>
												</td>
												<td height="400" >
													<table width="100%" height="100%">
														<tr>
															<td height="0%" ></td>
															
														</tr>
														<tr>
															<td id="naltrexone" height="2%"  title="2"></td>
														</tr>
													</table>
												</td>
												<td height="400" >
													<table width="100%" height="100%">
														<tr>
															<td height="0%" ></td>
															
														</tr>
														<tr>
															<td id="zantac" height="17%"  title="17"></td>
														</tr>
													</table>
												</td>
												<tr>
												<th height="10" >
													<h5>No</h5>
												</th>
												<th height="10" >
													<h5>Napa</h5>
												</th>
												<th height="10" >
													<h5>Naloxegol</h5>
												</th>
												<th height="10" >
													<h5>Naltrexone</h5>
												</th>
												<th height="10" >
													<h5>Zantac 150</h5>
												</th>
												

											</tr>
										</table>
										<script type="text/javascript">
											//var bar=document.getElementById("bar");
												//bar.style.backgroundColor = "DodgerBlue";
												napa.style.backgroundColor="green";
												naloxegol.style.backgroundColor="green";
												naltrexone.style.backgroundColor="green";
												zantac.style.backgroundColor="green";
												
												
										</script>
										<h4 align="center">Number of Medicine which is Prescrib to Patient</h4>

										<input id="table" type="submit" value="Show In Table" onclick="table()">
										<a href="disanalysis.php">Go to Disease Analysis</a>
									</fieldset>
													</table>
                                     </table>
							
							
                            <!------------------------ FINISH DESIGNING HERE ------------------------------>
                            </td>
                        </div>
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
		function table(){
			var x= document.getElementById("table").value;
			window.location.assign("analysis_with_table.php");
		}
	</script>
</body>

</html>