<html>

<head><title>Appoinment Status</title></head>

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
                            
                        <td width="70%" align="center">
                           
                           <fieldset>
                              <legend>Appoinment History</legend><br>
							   <table>
                                <tr>
                                    <td>
                                           <label>Sort The Page By:</label>
                                <select>
                                    <option>Doctor Name</option>
                                    <option>Appoinment Date</option>
                                    <option>Type</option>
                                    <option>Status</option>
                                </select>
                                        </br>
                                    </br>
										Filter By
										<select>
											<option>Any</option>
											<option>Doctor Name</option>
											<option>Appoinment Date</option>
											<option>Time</option>
										</select>
										<input />
										<input type="submit" value="Search" />
									</td>
									
								</tr>
                            </table>
							<br/><br/><br/>
                              <table width="100%" cellspacing="0" border="1" cellpadding="5">
                                  <tr>
									  <th align="left" width="1%">
                                             <strong>
                                                <select >
                                                    <optgroup label="Actions">
                                                        <option selected="true" value="all">Select none</option>
                                                        <option value="all">Select all</option>
                                                        <option value="none">Revert selected</option>
                                                        <option value="read">Mark as read</option>
                                                        <option value="delete">Delete</option>
														<option value="delete">cancle</option>
                                                    </optgroup>
                                                </select>
                                            </strong>
                                        </th>

                                      <th width="10%"><strong>Doctor Name</strong></th>
                                      <th  width="10%"><strong>Appoinment Date</strong></th>
                                      <td  width="10%"><strong>Next Appointment Date</strong></th>
                                      <th  width="10%"><strong>Time</strong></th>
									  <th  width="10%"><strong>Type</strong></th>
									  <th  width="10%"><strong>Status</strong></th>
                                  </tr>

                                  <tr>
										<td align="center">
                                            <input type="checkbox" name="action">
                                        </td>
										<td>
											<a href="doctordetails.php"><h4>Dr.poran</h4></a>
										</td>
                                      <td>1/1/2018</td>
                                      <td>....................</td>
                                      <td>22:30</td>
									  <td>Online</td>
									  <td>Accepted</td>
                                  </tr>

                                   <tr>
										<td align="center">
                                            <input type="checkbox" name="action">
                                        </td>
										<td>
											<a href="doctordetails.php"><h4>Dr.arif</h4></a>
									    </td>
                                      <td>7/17/2017</td>
                                      <td>9/1/2017</td>
                                      <td>18:25</td>
									  <td>Direct communication</td>
									  <td>Done</td>
                                  </tr>
								  <tr>
										<td align="center">
                                            <input type="checkbox" name="action">
                                        </td>
										<td>
											<a href="doctordetails.php"><h4>Dr.Anne</h4></a>
									    </td>
                                      <td>7/17/2017</td>
                                      <td>............</td>
                                      <td>18:25</td>
									  <td>Direct communication</td>
									  <td>Rejected</td>
                                  </tr>
								  <tr>
										<td align="center">
                                            <input type="checkbox" name="action">
                                        </td>
										<td>
											<a href="doctordetails.php"><h4>Dr.Robart</h4></a>
									    </td>
                                      <td>7/17/2017</td>
                                      <td>............</td>
                                      <td>18:25</td>
									  <td>Direct communication</td>
									  <td>Pending</td>
                                  </tr>
								  
                              </table>   <br>                  
                            </fieldset>



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