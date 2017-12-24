<html>

<head><title>Dashboard</title></head>

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
                        <td width="20%">
                            <fieldset>
                                <legend>
                                    <strong>Personal Information</strong></legend>
                            <ul>
                                <li><a href="dashboard.php">Dashboard</a></li>
                                <li><a href="viewprofile.php">View Profile</a></li>
                                <li><a href="editprofile.php">Edit Profile</a></li>
                                <li><a href="changeprofilepicture.php">Change Profile Picture</a></li>
                                <li><a href="managechamber.php">Manage Chambers</a></li>
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
                             <td width="70%" align="center">    <h2><img src="images/usericon.png"/><br/>
                                Welcome Doctor  
                                <h3>11 DEC, 2017</h3>
                                <table width="80%">
                                    <tr>
                                        
                                        <td align="center" width="35%"">
                                            <fieldset>
                                                <h2 align="center">new appointment today</h2></br>
                                                <h1 align="center"><a href="appointmentstatus.php">0</a></h1>
                                                <h4 align="center"><b>See Appointment Status</b></h4>
                                        </fieldset>
                                    </td>
                                    
                                  
                                        <td align="center" width="35%">
                                              <fieldset>
                                                <h2 align="center">Pending Prescriptions</h2></br>
                                                <h1 align="center"><a href="newpescriptions.php">2</a></h1>
                                                <h4 align="center"><b>Check Prescriptions Status</b></h4>
                                        </fieldset>
                                    </td>
                                    </tr>
                                    
                                    
                                    <tr align="center">
                                        <td align="center" width="35%" colspan="2">
                                           
                                              <fieldset>
                                                <h2 align="center">Last Week Patient List</h2></br>
                                                <table>
                                                    <tr>
                                                        <td><label><b>Patient Name</b></label></td>
                                                        <td><label><b>Disease</b></label></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Mr.Karim</td>
                                                        <td>Numonia</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Mr.Rahim</td>
                                                        <td>Cancer</td>
                                                    </tr>

                                                </table>
                                                
                                                
                                        </fieldset>

                                    </td>
                                    </tr>
                                
                                    
                                    
                                </table>
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