<html>

<head><title>Edite Chamber</title></head>

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
                                <td><a href="viewprofile.php">Bob<img src="images/user.png"></a></td>
                                <td><hr width="1" size="15"></td>
                                <td><a href="../index.html">Logout<img src="images/logout.png"></a></td>
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
                                <li><a href="managechamber.html">Manage Chambers</a></li>
                            </ul>
                        </fieldset>


                        <fieldset>
                            <legend>
                            <strong>Manage Prescriptions</strong></legend>
                                <ul>
                                <li><a href="newpescriptions.html">Create new Prescriptions</a></li>
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
                                <li><a href="changepassword.html">Change Password</a></li>
                                <li><a href="../index.html">Logout</a></li>
                            </ul>
                        </fieldset>
                        </td>
                        <div align="center">
                             <td width="70%" align="center" valign="top">
                                <h1>Edit Chamber</h1>
                             	<form action="docChamber.php">
									
                             		<table align="center" width="60%">
                             			<tr>
                             				<td>
                             					<fieldset>
						
													<table align="center">
														<tr>
															<td><label>Name</label></td>
															<td>:</td>
															<td><input type="text" name="chamberName" value="Apollo Hospital" /></td>
														</tr>
														<tr>
															<td><label>Location</label></td>
															<td>:</td>
															<td><input type="text" name="location" value="Bashundhara, Dhaka" /></td>
														</tr>
														<tr>
															<td><label>Working Days</label></td>
															<td>:</td>
															<td>
																<input type="checkbox" name="workDays"/>SAT
																<input type="checkbox" name="workDays"/>SUN
																<input type="checkbox" name="workDays"/>MON
																<input type="checkbox" name="workDays"/>TUE
																<input type="checkbox" name="workDays"/>WED
																<input type="checkbox" name="workDays"/>THU
																<input type="checkbox" name="workDays" checked="true" />FRI
																
															</td>
														</tr>
														<tr>
															<td><label>Working Time</label></td>
															<td>:</td>
															<td><input type="time" name="time" value="19:00:00"> to <input type="time" name="time" value="23:00:00"></td>
														</tr>
														<tr>
															<td><label>Description</label></td>
															<td>:</td>
															<td><textarea name="description"> Bla bla bla bla</textarea></td>
														</tr>
														<tr>
															<td align="center" colspan="3">
																<input type="button" name="btn_edit" value="Save">
															</td>

														</tr>
													</br>
														<tr>
															<td colspan="3" align="center"><a href="managechamber.html">Back</a> | 
							                                    <a href="addChamber.php">Add Chamber</a>
							                               
														</tr>
													</table>
												</fieldset>	
                             				</td>
                             			</tr>
                             		</table>

								</form>

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
</body>

</html>