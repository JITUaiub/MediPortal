<html>

<head><title>Manage chamber</title></head>

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
                             <!--Manage Chamber Information -->
                         <td width="70%" valign="top">
                            <h1 align="center">Chamber Information</h1>
                           <table align="center" valign="top">
                                <tr align="center">
                                    <td align="center">
                                        <label>
                                            Search By
                                        </label>
                                    </td>
                                    <td>:</td>
                                    <td>
                                    <select>
                                        <option>Chamber Name</option>
                                        <option>Chamber Location</option>
                                        <option>Working Days</option>
                                        <option>Working Time</option>
                                       
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
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        </table>

                                <table width="80%" align="center">
                                    <tr>
                                        <td>
                                            <fieldset>
                                    
                                    <table align="center">
                                        <td width="60%">
                                            <table width="100%" cellpadding="1" cellspacing="1">
                                                <tr>
                                                            <td width="20%"><strong>Chamber Name</strong></td>
                                                             <td width="20%"><strong>Chamber Location</strong></td>
                                                             <td width="20%"><strong>Working Days</strong></td>
                                                             <td width="20%"><strong>Working Time</strong></td>
                                                             <td width="20%"><strong>Description</strong></td>
                                                </tr>
                                                <tr>
                                                            
                                                            <td>United Hospital</td>
                                                            <td>Gulshan, Dhaka1230</td>
                            
                                                            <td>Sat,Sun</td>
            
                                                            <td>10 am - 5 pm</td>
                                                            <td>Saturday and Sunday I am available in united Hospital from 10 am to 5 pm . So you can contact with me</td>
                                                            <td><button>Delete</button></td>
                                                        </tr>
                                                        <tr><td colspan="6"><hr></td></tr>
                                                        <tr>
                                                            
                                                            <td>Apollo Hospital</td>
                                                            <td>Bashundhara, Dhaka1230</td>
                            
                                                            <td>Thursday,Sun</td>
            
                                                            <td>7 pm-11 pm</td>
                                                            <td>Thursday  and Sunday I am available in united Hospital from 7 Pm to 11 pm. So you can contact with me</td>
                                                            <td><button>Delete</button></td>
                                                        </tr>
                                            </table>
                                        </td>
                                    
                                    </table>
                                    <hr/>
                                    <p align="center"><a href="editchamber.php">Edit Chamber</a> | <a href="addChamber.php">Add Chamber</a>| <a href="editprofile.php">Back to Edit Profile</a></br></p>
                                     
                                </fieldset>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                    </table>
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