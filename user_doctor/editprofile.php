<html>

<head><title>Edite Profile</title></head>

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
                                <!------ UI  -->
                                <div>
                                        <h1>EDIT PROFILE</h1>
                                          <table width="100%">
                                        <td width="60%">
                                            <fieldset>

                                            <table width="100%">

                                                <tr>
                                                    <td width="20%" valign="top"><label><b><i>General Information:</i></b></label>
                                                    </td>
                                                    <td align="center">
                                                        <fieldset>
                                                        <table width="100%">
                                                        <tr>
                                                            <td width="30%"><strong>Name</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td ><input type="text" name="name" value="Bob"></td>
                                                        </tr>
                                                         
                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Gender</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td ><input type="text" name="gender" value="Male" disabled="true"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="30%"><strong>User Name</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td ><input type="text" name="username" value="Bob Marley"></td>
                                                        </tr>
                                                        

                                                    </table>
                                                </fieldset>
                                                </td>
                                            </tr>
                                                

                                                <tr>
                                                    <td width="20%" valign="top"><label><b><i>Educational Information:</i></b></label>
                                                    </td>
                                                    <td>
                                                        <fieldset>
                                                        <table width="100%">
                                                        <tr>
                                                            <td width="30%"><strong>Degree Name</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td width="65%"><input type="text" name="degree" value="MBBS"></td>
                                                        </tr>
                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Passed Year</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td><input type="text" name="passyear" value="2015"></td>
                                                         </tr>
                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Passing College</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td><input type="text" name="passcollege" value="Dhaka Medical College"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="30%"><strong>Description</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td><input type="text" name="description" value="Bla Bla Bla"></td>
                                                        </tr>
                                                        

                                                    </table>
                                                </fieldset>
                                                </td>
                                            </tr>


                                                <tr>
                                                    <td width="20%" valign="top"><label><b><i>Proffesional Information:</i></b></label>
                                                    </td>
                                                    <td>
                                                        <fieldset>
                                                        <table width="100%">
                                                        <tr>
                                                            <td width="30%"><strong>Title</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td width="65%"><input type="text" name="title" value="Assistant Professor"></td>
                                                        </tr>
                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Medical College</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td><input type="text" name="medicalcollege" value="Sir Sollimullah Medical College"></td>
                                                         </tr>

                                                         <tr>
                                                            
                                                            <td width="30%"><strong>BMDC Number</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td><input type="text" name="bmdc_number" value="0168-DMC594/0625"></td>
                                                         </tr>
                                                    </table>
                                                </fieldset>
                                                </td>
                                            </tr>


                                                 <tr>
                                                    <td width="20%" valign="top"><label><b><i>Chamber Information:</i></b></label>
                                                    </td>
                                                    <td>
                                                        <fieldset>
                                                        <table width="100%">
                                                        <tr>
                                                            <td width="30%"><strong>Chamber Name</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td width="65%">Mr.XYZ</td>
                                                        </tr>
                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Chamber Location</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td>Dhaka</td>
                                                         </tr>

                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Working Days</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td>SAT, SUN, TUES</td>
                                                         </tr>

                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Time</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td>8.30PM to 10.30PM</td>
                                                         </tr>
                                                         
                                                        <tr>
                                                        	<td colspan="3" align="center"><a href="editchamber.php">Edit Chamber</td>
                                                        </tr>

                                                    </table>
                                                </fieldset>
                                                </td>
                                            </tr>


                                                  <tr>
                                                    <td width="20%" valign="top"><label><b><i>Others Information:</i></b></label>
                                                    </td>
                                                    <td>
                                                        <fieldset>
                                                        <table width="100%">
                                                        <tr>
                                                            <td width="30%"><strong>Date Of Birth</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td width="65%"><input type="date" name="dob" value="19/9/1998"></td>
                                                        </tr>

                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Mobile Number</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td><input type="text" name="mobilenumber" value="01685940625"></td>
                                                         </tr>

                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Email</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td><input type="text" name="email" value="bob@aiub.edu"></td>
                                                         </tr>
                                                    </table>
                                                </fieldset>
                                                </td>
                                            </tr>

                                        </td>
                                        
                                    </table>

                                         
                                                            <tr><td colspan="4" align="center"><input type="submit" name="submit" value="Update Profile"></td></tr>
                                                            <tr>
                                                                <td>
                                                                    <table width="100%">
                                                                        <td colspan="2" align="right"><a href="changeprofilepicture.php">Change Profile Picture</a></td>
                                                                        <td><strong><hr width="1" size="15"></strong></td>
                                                                        <td colspan="2" align="left"><a href="changepassword.html">Change Password</a></td>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                    </div>
                                <!-- END -->
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