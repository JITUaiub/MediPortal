<html>

<head><title>Home</title></head>

<body>
	<table border="1" align="center" width="70%">
    	<tr>
        	<td>
            	<!-- Header section -->
            	<div>
                    <table width="100%">
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
                        <td width="30%">
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

                        <td width="70%">
                        	<div>
                                <form>
                                    <fieldset>
                                        <legend><strong>EDIT PROFILE</strong></legend>
                                        <div>
                                            <table>
                                                <tr>
                                                    <td width="60%"><strong>Name</strong></td>
                                                    <td>:</td>
                                                    <td><input name="name"></td>
                                                </tr>	  			
                                            </table>
                                            <hr>


                                            <table>
                                                <tr>
                                                    <td width="60%"><strong>User Name</strong></td>
                                                    <td>:</td>
                                                    <td><input name="name"></td>
                                                </tr>               
                                            </table>
                                            <hr>


                                            <table>
                                                <tr>
                                                    <td width="60%"><strong>Mobile Number</strong></td>
                                                    <td>:</td>
                                                    <td><input name="name"></td>
                                                </tr>               
                                            </table>
                                            <hr>


                                            <table>
                                                <tr>
                                                    <td width="55%"><strong>Email</strong></td>
                                                    <td>:</td>
                                                    <td>
                                                        <table>
                                                            <td><input name="email"></td>
                                                            <td><img src="images/hinticon.png" title="someone@example.com"/></td>
                                                        </table>
                                                    </td>
                                                </tr>				
                                            </table>
                                        </div>


                                        <hr>
                                        <div>
                                            <fieldset>
                                                <legend>Gender</legend>
                                                <input name="gender" type="radio" value="Male">Male</input>
                                                <input name="gender" type="radio" value="Female">Female</input>
                                                <input name="gender" type="radio" value="Others">Others</input>
                                            </fieldset>
                                        </div>
                                        <hr>
                                        <div>
                                            <fieldset>
                                            <legend>Date of Birth</legend>
                                                <table>
                                                    <td><input name="date"/></td>
                                                    <td>/</td>
                                                    <td><input name="month"/></td>
                                                    <td>/</td>
                                                    <td><input name="year"/></td>	
                                                    <td>(dd/mm/yyyy)</td>		
                                                </table>
                                            </fieldset>	
                                        </div>
                                        <hr>
                                        <input type="submit" value="Submit"/>
                                        <input type="button" value="Reset"/>         
                                    </fieldset>

                                    <a href="viewprofile.html">Back to View Profile</a>
                                </form>
                            </div>
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