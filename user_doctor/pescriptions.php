<html>

<head><title>Home</title></head>

<body>
	<table border="1" align="center" width="100%">
    	<tr>
        	<td>
            	<!-- Header section -->
            	<div>
                    <table align="center" width="100%">
                        <td width="20%">
                            <img src="images/pageicon.png"/>
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
                    <table width="100%">
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
                        <td width="70%">
                              <table align="center">
                                <tr align="center">
                                    <td align="center">
                                        <label>
                                            Search By
                                        </label>
                                    </td>
                                    <td>:</td>
                                    <td>
                                    <select>
                                        <option>Patient Name</option>
                                        <option>Disease</option>
                                        <option>Prescription Name</option>
                                    </select>
                                </td>
                            </tr>
                        </br>

                        <tr>
                            <td>
                                <label>Search</label>
                            </td>
                            <td>:</td>
                            <td>
                                <input type="text" name="text"/>
                            </td>
                        </tr>
                        </table>
                                
							
							<fieldset>
								<legend>Prescriptions History</legend>
								<table border="1" width="100%" height="400">
									<tr height="10%">
										<th>
											<h3 align="center">Appointment Date</h3>
										</th>
										<th>
											<h3 align="center">Name</h3>
										</th>
										<th>
											<h3 align="center">Age</h3>
										</th>
										<th>
											<h3 align="center">Disease</h3>
										</th>
										<th>
											<h3 align="center">Prescription</h3>
										</th>
									</tr>
									<tr>
										<td>
											<h3>10/12/1999</h3>
										</td>
										<td>
											<h4>Bob Marley</h4>
										</td>
										<td>
											<h3>35</h3>
										</td>
										<td>
											<h3>HIV(+)</h3>
										</td>
										<td>
											fineName.pdf
										</td>
									</tr>

                                    <tr>
                                        <td>
                                            <h3>10/12/2015</h3>
                                        </td>
                                        <td>
                                            <h4>Kent Williams</h4>
                                        </td>
                                        <td>
                                            <h3>40</h3>
                                        </td>
                                        <td>
                                            <h3>Cancer</h3>
                                        </td>
                                        <td>
                                            cancer_prescription.pdf
                                        </td>
                                    </tr>
									
								</table>
                                <a href="newpescriptions.html">Create New Prescription</a>
							</fieldset>
							<!------------------------ FINISH DESIGNING HERE --------------------------------->
						</td>
                    </table>
                </div>
            </td>
        </tr>
        <tr>
        	<td>
            	<!-- Footer section -->
                <div>
                    <table align="center">
                        <td>&copy;2017 MediPortal. All rights reserved.</td>
                    </table>
                </div>
            </td>
        </tr>
    </table>
</body>

</html>