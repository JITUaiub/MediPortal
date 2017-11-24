<html>

<head><title>Home</title></head>

<body>
	<table border="1" align="center" width="70%">
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
                                <td><a href="viewprofile.html">Bob<img src="images/user.png"></a></td>
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
                        <td width="30%">
                            <fieldset>
                                <legend>
                            <strong>Personal Information</strong></legend>
                            <ul>
                                <li><a href="dashboard.php">Dashboard</a></li>
                                <li><a href="viewprofile.html">View Profile</a></li>
                                <li><a href="editprofile.html">Edit Profile</a></li>
                                <li><a href="changeprofilepicture.html">Change Profile Picture</a></li>
                                <li><a href="managechamber.html">Manage Chambers</a></li>
                            </ul>
                        </fieldset>


                        <fieldset>
                            <legend>
                            <strong>Manage Prescriptions</strong></legend>
                                <ul>
                                <li><a href="newpescriptions.html">Create new Prescriptions</a></li>
                                <li><a href="pescriptions.html">Previous Prescriptions</a></li>
                            </ul>
                        </fieldset>

                        <fieldset>
                            <legend>
                            <strong>Appointments Information</strong></legend>
                           
                            <ul>
                                <li><a href="appointmentstatus.html">Appointment Status</a></li>
                                <li><a href="appointmenthistory.html">Appointment History</a></li>
                            </ul>
                        </fieldset>


                        <fieldset>
                            <legend>
                            <strong>Reports</strong></legend>
                           
                            <ul>
                                <li><a href="patienthistory.html">Patient History</a></li>
                                <li><a href="medianalysis.html">Medicine Analysis</a></li>
                                <li><a href="disanalysis.html">Disease Analysis</a></li>
                            </ul>
                        </fieldset>
						
						
						<fieldset>
                            <legend>
                            <strong>E-consultation</strong></legend>
                           
                            <ul>
								<li><a href="message.html">New Message</a></li>
                                <li><a href="inbox.html">Inbox</a></li>
                                <li><a href="sentitems.html">Sent items</a></li>
								<li><a href="drafts.html">Drafts</a></li>
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
                        <!--Appoinment-->
                        <td width="70%">
							<fieldset>
                                <legend>Patient Appoinment</legend><br>
                                <table border="1">
                                    <tr>
                                        <td><strong>Patient Name</strong></td>
                                        <td><strong>Patient Age</strong></td>
                                        <td><strong>Patient Address</strong></td>
                                        <td><strong>Sex</strong></td>
                                        <td><strong>Patient Problem</strong></td>
                                        <td colspan="3" align="center"><strong>Appoinment</strong>
                                    </tr>

                                    <tr>
                                         <td>Bob Marley</td>
                                         <td>26</td>
                                         <td>Niketon, Dhaka</td>
                                         <td>Male</td>
                                         <td></td>
                                         <td><input type="date" name="date"></td>
                                         <td><input type="time" name="time"></td>
                                         <td><input type="submit" name="submit" value="send"></td>
                                    </tr>

                                    <tr>
                                         <td>David Batista</td>
                                         <td>46</td>
                                         <td>Khilgaon, Dhaka</td>
                                         <td>Male</td>
                                         <td></td>
                                         <td><input type="date" name="date"></td>
                                         <td><input type="time" name="time"></td>
                                         <td><input type="submit" name="submit" value="send"></td>
                                    </tr>
                                </table> <br>                    
                            </fieldset>
                            <a href="appointmenthistory.html">Go to appoinment history</a>
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