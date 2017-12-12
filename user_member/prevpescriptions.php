<html>

<head><title>Home</title></head>

<body>
	<table border="0" align="center" width="70%">
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
                <div>
                    
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
                                <li><a href="newappointment.html">New Appointment</a></li>
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
                        <div align="center">
                        <td width="70%" align="center">
                            <!--------------------------------------------------- DESIGN UI HERE-------------------------------------------------->

                                <fieldset>
                                <legend>Prescriptions History</legend>
								Filter By
								<select>
									<option>Any</option>
									<option>Date</option>
									<option>Doctor's name</option>
									<option>Disease</option>
								</select>
								<input />
								<input type="submit" value="Search" />
								<br/><br/><br/>
								
								
                                <table border="1" width="100%" height="40">
                                    <tr height="10%">
                                        <th>
                                            <h2 align="center">Date</h2>
                                        </th>
                                        <th>
                                            <h2 align="center">Doctor</h2>
                                        </th>
                                        <th>
                                            <h2 align="center">Time</h2>
                                        </th>
                                        <th>
                                            <h2 align="center">Disease</h2>
                                        </th>
                                        <th>
                                            <h2 align="center">Prescription</h2>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3>10/12/1999</h3>
                                        </td>
                                        <td>
                                            <h3>Dr.poran</h3>
                                        </td>
                                        <td>
                                            <h3>10:20</h3>
                                        </td>
                                        <td>
                                            <h3>HIV(+)</h3>
                                        </td>
                                        <td>
                                            <i>fineName.pdf</i>
                                        </td>
                                    </tr>
									<tr>
                                        <td>
                                            <h3>10/12/2017</h3>
                                        </td>
                                        <td>
                                            <h3>Dr.arif</h3>
                                        </td>
                                        <td>
                                            <h3>12:00</h3>
                                        </td>
                                        <td>
                                            <h3>heart disease</h3>
                                        </td>
                                        <td>
                                            <i>fineName.pdf</i>
                                        </td>
                                    </tr>
                                    
                                </table>
                            </fieldset>

                            <!------------------------------------------------------ END HERE----------------------------------------------------->
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
                        <td>&copy;2017 MediPortal. All rights reserved.</td>
                    </table>
                </div>
            </td>
        </tr>
    </table>
</body>

</html>