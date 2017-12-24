<html>

<head><title>Medicine Analysis</title></head>

<body>
	<table border="0" align="center" width="100%">
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
								<td><a href="../Registration/DonorSubscription.php">Profile</a></td>
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
                <div>
                    
                </div>
            </td>
        </tr>
        <tr>
        	<td>
            	<!-- Body section -->
               <div>
                    <table border="1" width="100%">
                        <!-- User Menu Section -->
                        <td width="20%" valign="top">
                            <fieldset>
                                <legend>
									<strong>Personal Information</strong>
								</legend>
								<ul>
									<li><a href="dashboard.php">Dashboard</a></li>
									<li><a href="viewprofile.php">View Profile</a></li>
									<li><a href="editprofile.php">Edit Profile</a></li>
									<li><a href="changeprofilepicture.php">Change Profile Picture</a></li>
								</ul>
							</fieldset>


							<fieldset>
								<legend>
									<strong>Medical History</strong>
								</legend>
									<ul>
									<li><a href="prevpescriptions.php">Previous Prescriptions</a></li>
								</ul>
							</fieldset>

							<fieldset>
								<legend>
									<strong>Appointments Information</strong>
								</legend>
							   
								<ul>
									<li><a href="newappointment.php">New Appointment</a></li>
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
                                <li><a href="changepassword.php">Change Password</a></li>
                                <li><a href="../index.php">Logout</a></li>
                            </ul>
                        </fieldset>
                        </td>
                        <div align="center">

                        <td width="70%" valign="top">
                            <!------------------------ DESIGN PORTAL PAGE HERE ------------------------------>
                            <h1 align="center">ANALYSIS</h1>
                            <table align="center" width="60%">
                                <tr>
                                    <td width="30%"><a href="analysis_with_bar.php"><img src="images/barChart.png" width="150"></a></td>
                                    <td width="40%">&nbsp;</td>
                                    <td width="30%"><a href="analysis_with_table.php"><img src="images/table.png" width="150"></a></td>
                                </tr>
                                <tr>
                                    <td width="30%" align="center"><a href="analysis_with_bar.php">Analysis in Bar Chart</a></td>
                                    <td width="40%">&nbsp;</td>
                                    <td width="30%" align="center"><a href="analysis_with_table.php">Analysis in Table</a></td>
                                </tr>


                               <tr>
                                   <td align="center" colspan="3">
                                        <a href="disanalysis.php">Go to Disease Analysis</a>
                                   </td>
                               </tr>
                            </table>
                            <!------------------------ FINISH DESIGNING HERE ------------------------------>	
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