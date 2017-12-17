<html>

<head><title>Home</title></head>

<body>
	<table border="0" align="center" width="100%">
    	<tr>
        	<td>
            	<!-- Header section -->
            	<div>
                    <table width="100%">
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
                    <table border="1" width="100%">
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
							<td width="70%"align="center" valign="top">
								<!------ UI  -->
									<div>
                                        <h1>EDIT PROFILE</h1>
                                            <table width="65%">
                                                <tr>
                                                    <td width="60%" align="center">
                                                        <table width="100%" align="center">
                                                            <tr>
                                                                <td>
                                                                    <table width="100%" align="center">
                                                                        <td width="10%" align="center">&nbsp;</td>
                                                                        <td width="30%" align="center"><strong>Name</strong></td>
                                                                        <td align="center"><strong>:</strong></td>
                                                                        <td align="center"><input type="text" name="name" value="Bob Pirate "></td>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr><td><hr/></td></tr>
                                                            <tr>
                                                                <td>
                                                                    <table width="100%">
                                                                        <td align="center" width="10%">&nbsp;</td>
                                                                        <td align="center" width="30%"><strong>Username</strong></td>
                                                                        <td align="center"><strong>:</strong></td>
                                                                        <td align="center"><input type="text" name="username" value="Bob"></td>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr><td><hr/></td></tr>
                                                            <tr>
                                                                <td>
                                                                    <table width="100%">
                                                                        <td align="center" width="10%">&nbsp;</td>
                                                                        <td align="center" width="30%"><strong>Gender</strong></td>
                                                                        <td align="center"><strong>:</strong></td>
                                                                        <td align="center"><input type="text" disabled="true" value="Male"></td>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr><td><hr/></td></tr>
                                                            <tr>
                                                                <td>
                                                                    <table width="100%">
                                                                        <td align="center" width="10%">&nbsp;</td>
                                                                        <td align="center" width="30%"><strong>Email</strong></td>
                                                                        <td align="center"><strong>:</strong></td>
                                                                        <td align="center"><input type="text" name="email" value="Bob@example.com"></td>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr><td><hr/></td></tr>
                                                            <tr>
                                                                <td>
                                                                    <table width="100%">
                                                                        <td align="center" width="10%">&nbsp;</td>
                                                                        <td align="center" width="30%"><strong>Phone</strong></td>
                                                                        <td align="center"><strong>:</strong></td>
                                                                        <td align="center"><input type="text" name="phone" value="01700000000"></td>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr><td><hr/></td></tr>
                                                            <tr>
                                                                <td>
                                                                    <table width="100%">
                                                                        <td align="center" width="10%">&nbsp;</td>
                                                                        <td align="center" width="30%"><strong>Date of Birth</strong></td>
                                                                        <td align="center"><strong>:</strong></td>
                                                                        <td align="center"><input type="date" name="DOB" value="2013-01-08"></td>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr><td><hr/></td></tr>
                                                            <tr>
                                                                <td>
                                                                    <table width="100%">
                                                                        <td align="center" width="10%">&nbsp;</td>
                                                                        <td align="center" width="30%"><strong>Country</strong></td>
                                                                        <td align="center"><strong>:</strong></td>
                                                                        <td align="center"><input type="text" value="Bangladesh" disabled="true"></td>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr><td><hr/></td></tr>

                                                            <tr>
                                                    <td>
                                                        <table width="100%">
                                                            <td width="10%"></td>
                                                            <td width="30%"><strong>Blood Donation</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td>
                                                                <input type="checkbox" name=""> Blood Donation
                                                                <fieldset>
                                                                    <table>
                                                                        <tr>
                                                                            <td>Blood Group</td>
                                                                            <td>:</td>
                                                                            <td><input type="text" name="" value="A+" disabled="true"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Weight</td>
                                                                            <td>:</td>
                                                                            <td><input type="text" name="" value="Over 50 kg"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Heart Condition</td>
                                                                            <td>:</td>
                                                                            <td><input type="text" name="" value="Good"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Injected Drugs</td>
                                                                            <td>:</td>
                                                                            <td><input type="text" name="" value="No"></td>
                                                                        </tr>
                                                                    </table>
                                                                </fieldset>
                                                            </td>
                                                        </table>
                                                    </td>
                                                </tr>


                                                <tr><td></td></tr>
                                                            <tr>
																<td colspan="4" align="center">
																	<input type="submit" id="update" value="Update Profile" onclick="update()">
																</td>
																
															</tr>
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
						<div>
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
	<script>
		function update(){
			var x= document.getElementById("update").value;
			alert("Profile is Updated");
			window.location.assign("viewprofile.php");
		}
	</script>
</body>

</html>