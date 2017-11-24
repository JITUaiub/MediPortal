<html>

<head><title>Drafts</title></head>

<body>
	<table border="1" align="center" width="70%">
    	<tr>
        	<td>
            	<!-- Header section -->
            	<div>
                    <table align="center" width="100%">
                        <td width="20%">
                            <img src="../images/pageicon.png"/>
                        </td>
                        <td width="40%">&nbsp;</td>
                        <td width="40%">
                            <table align="right">
                                <td><strong>Logged in as </strong></td>
                                <td><a href="../viewprofile.html">Bob<img src="../images/user.png"></a></td>
                                <td><hr width="1" size="15"></td>
                                <td><a href="../../index.html">Logout<img src="../images/logout.png"></a></td>
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
                                <li><a href="../dashboard.php">Dashboard</a></li>
                                <li><a href="../viewprofile.html">View Profile</a></li>
                                <li><a href="../editprofile.html">Edit Profile</a></li>
                                <li><a href="../changeprofilepicture.html">Change Profile Picture</a></li>
                                <li><a href="../managechamber.html">Manage Chambers</a></li>
                            </ul>
                        </fieldset>


                        <fieldset>
                            <legend>
                            <strong>Manage Prescriptions</strong></legend>
                                <ul>
                                <li><a href="../newpescriptions.html">Create new Prescriptions</a></li>
                                <li><a href="../pescriptions.html">Previous Prescriptions</a></li>
                            </ul>
                        </fieldset>

                        <fieldset>
                            <legend>
                            <strong>Appointments Information</strong></legend>
                           
                            <ul>
                                <li><a href="../appointmentstatus.html">Appointment Status</a></li>
                                <li><a href="../appointmenthistory.html">Appointment History</a></li>
                            </ul>
                        </fieldset>


                        <fieldset>
                            <legend>
                            <strong>Reports</strong></legend>
                           
                            <ul>
                                <li><a href="../patienthistory.html">Patient History</a></li>
                                <li><a href="../medianalysis.html">Medicine Analysis</a></li>
                                <li><a href="../disanalysis.html">Disease Analysis</a></li>
                            </ul>
                        </fieldset>
						
						
						<fieldset>
                            <legend>
                            <strong>E-consultation</strong></legend>
                           
                            <ul>
								<li><a href="../eConsultation/message.php">New Message</a></li>
                                <li><a href="../eConsultation/inbox.php">Inbox</a></li>
                                <li><a href="../eConsultation/sentitems.php">Sent Items</a></li>
								<li><a href="../eConsultation/drafts.php">Drafts</a></li>
                            </ul>
                        </fieldset>


                        <fieldset>
                            <legend>
                            <strong>Account</strong></legend>
                           
                            <ul>
                                <li><a href="../changepassword.html">Change Password</a></li>
                                <li><a href="../../index.html">Logout</a></li>
                            </ul>
                        </fieldset>
                        </td>
                        <div align="center">
                        <td width="70%" align="center">
							<fieldset>
								<legend align="center">Message</legend>
								 <fieldset>
                                             <legend>New Message</legend>
                                             <table>
                                             <tr>
                                                 <td width="5%" align="center">To</td><td>:</td>
                                                 <td ><input  type="text" name="mail"/></td>
                                             </tr>
                                             <tr><td colspan="3"><hr></td></tr>
                                             <tr>
                                                 <td width="5%" align="center">Subject</td><td>:</td>
                                                 <td><input type="text" name="subject"></td>
                                             </tr>
                                              <tr><td colspan="3"><hr></td></tr>
                                             <tr>
                                                <td width="5%" align="center">
                                                 <label>Write your asking</label></td><td>:</td><td ><textarea></textarea></td>
                                             </tr>
                                              <tr><td colspan="3"><hr></td></tr>
                                              <tr>
                                                  <td>
                                                      <input type="submit" name="send" value="Send">
                                                  </td>
                                                  <td><input type="file" name="upload"></td>
                                              </tr>
                                             </table>
                                         </fieldset>  
							</fieldset>
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
                        <td>&copy;2017 MediPortal. All rights reserved.</td>
                    </table>
                </div>
            </td>
        </tr>
    </table>
</body>

</html>