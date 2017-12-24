<html>

<head><title>Previous Prescriptions</title></head>

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
                        <td width="70%" align="center" valign="top">
                            <!--------------------------------------------------- DESIGN UI HERE-------------------------------------------------->
							<table align="center" width="100%">
                                
                            <h1 align="center">Prescriptions History</h1>   
                        <tr>
                            <td>
                                <fieldset>
                                    <div align="center">
                                        <label>Search by: </label>
                                    <select>
                                        <option>Doctor Name</option>
                                        <option>Appointment Date</option>
                                        <option>Disease</option>
                                    </select>
                                    <input type="text" name="text" value="Search Text" /><button>Go</button><br>
                                    Results per page: 
                                    <select>
                                        <option>10</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                    <button>Go</button>
                                    </div>
                                </fieldset><br>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table border="1" width="100%">
                                    <tr height="10%">
                                        <th>
                                            <h3 align="center">Appointment Date</h3>
                                        </th>
                                        <th>
                                            <h3 align="center">Doctor Name</h3>
                                        </th>
                                        <th>
                                            <h3 align="center">Disease</h3>
                                        </th>
                                        <th>
                                            <h3 align="center">Medicines</h3>
                                        </th>
                                        <th>
                                            <h3 align="center">Prescription File</h3>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            <h3>10/12/2010</h3>
                                        </td>
                                        <td align="center">
                                            <h3><a href="doctorDetails.php">Dr. XYZ</a></h3>
                                        </td>
                                        <td align="center">
                                            <h3>Fever</h3>
                                        </td>
                                        <td align="center">
                                            <h3>Paracitamol</h3>
                                        </td>
                                        <td align="center">
                                            <a href="#">fineName.pdf</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td align="center">
                                            <h3>9/12/2010</h3>
                                        </td>
                                        <td align="center">
                                            <h3><a href="doctorDetails.php">Dr. ABC</a></h3>
                                        </td>
                                        <td align="center">
                                            <h3>Maleria</h3>
                                        </td>
                                        <td align="center">
                                            <h3>Nothing</h3>
                                        </td>
                                        <td align="center">
                                            <a href="#">cancer_prescription.pdf</a>
                                        </td>
                                    </tr>
                                    
                                </table><br><br>
                                <p align="center"><button>Previous Page</button> | <button>Next Page</button></p>
                                <p align="center"><a href="newpescriptions.php">Create New Prescription</a></p>
                                
                            </td>
                        </tr>
                        </table>
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