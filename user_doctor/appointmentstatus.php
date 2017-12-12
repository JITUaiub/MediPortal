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
                        <!--Appoinment-->
                        <td width="70%">
							<fieldset>
                                <legend>Patient Appoinment</legend><br>
                                <fieldset>
                                    <legend><b>Online Service</b></legend>
                                <table border="1">
                                    <tr>
                                        <td><strong>Patient Name</strong></td>
                                        <td><strong>Patient Age</strong></td>
                                        <td><strong>Patient Address</strong></td>
                                        <td><strong>Sex</strong></td>
                                        <td><strong>Patient Problem</strong></td>
                                       

                                        <td colspan="3" align="center"><strong>Appoinment</strong></td>

                                    </tr>

                                    <tr>
                                         <td>Bob Marley</td>
                                         <td>26</td>
                                         <td>Niketon, Dhaka</td>
                                         <td>Male</td>
                                         <td>I am suffering for fever from last 10 days. High Fever, High headeac and I have no test for food.</td>
                                        
                                         
                                         <td><input type="time" name="time"></td>
                                         <td><input type="submit" name="submit" value="send"></td>
                                           <td><strong><a href="newpescriptions.html">create prescription</strong></td>
                                    </tr>

                                    <tr>
                                         <td>David Batista</td>
                                         <td>46</td>
                                         <td>Khilgaon, Dhaka</td>
                                         <td>Male</td>
                                         <td></td>
                                        
                                         <td><input type="time" name="time"></td>
                                         <td><input type="submit" name="submit" value="send"></td>
                                           <td><strong><a href="newpescriptions.html">create prescription</strong></td>
                                    </tr>
                                </table>
                            </fieldset>
                      

                    <fieldset>
                        <legend><b>Direct Communication</b></legend>
                        <table border="1">
                            <tr>
                                <td><strong>Patient Name</strong></td>
                                        <td><strong>Patient Age</strong></td>
                                        <td><strong>Patient Address</strong></td>
                                        <td><strong>Sex</strong></td>
                                        <td><strong>Patient Problem</strong></td>
                                       

                                        <td colspan="3" align="center"><strong>Appoinment</strong></td>
                            </tr>

                            <tr>
                                <td>Bob Marley</td>
                                         <td>26</td>
                                         <td>Niketon, Dhaka</td>
                                         <td>Male</td>
                                         <td>I am suffering for fever from last 10 days. High Fever, High headeac and I have no test for food.</td>
                                        
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
                        </table>
                    </fieldset>
                    <a href="appointmenthistory.php">Go to appoinment history</a>
                                </table> <br>    

                            </fieldset>
                            
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