<?php 

 session_start();

     $conn = mysqli_connect("localhost", "root", "","mediportal_db");
   
             if (!$conn) {
         die("Connection failed: " . mysqli_connect_error()); 
  }




 ?>




<html>

<head><title>Appoinment History</title></head>

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
                        <!--Appoinment History-->
                        <td width="100%" valign="top">
                            
                              <h1 align="center">Appoinment History</h1>
                              <table align="center" width="100%">
                                <tr>
                                  <td>
                                    <fieldset>
                                        <table align="center">
                                    <tr>
                                        <td>
                                          <label>Sort The Page By</label>
                                <select>
                                    <option>Name</option>
                                    <option>Appoinment Date</option>
                                    <option> Status</option>
                                    
                                </select></br></br>

                                <label>Search By</label>
                                <select>
                                    <option>Name</option>
                                    <option>Appoinment Date</option>
                                    <option>Status</option>
                                </select>
                            </td>
                            </br>
                            <td>
                            <label>Search</label> 
                            <input type="text" name="search"/> <button>Search</button></td> 
                        </tr>
                        <tr><td>&nbsp;</td></tr>
                    </table>
                              <table border="1" align="center" width="100%">
                                  <tr>
                                      <td  width="25%"><strong>Appoinment Date</strong></td>
                                      <td  width="25%"><strong>Appointment Time</strong></td>
                                      <td  width="25%"><strong>Patient Name</strong></td>
                                      <td  width="25%"><strong>Status</strong></td>
                                     
                                  </tr>
<?php 
                       
                           $load_member_information = "SELECT * from member,appointment where member.member_id = appointment.member_id";  



                           $result = mysqli_query($conn, $load_member_information)or die(mysqli_error($conn)); 

                           while($row = mysqli_fetch_assoc($result)){           
                              $current_year = date("Y");
                              $dob_year = explode("-",$row['dob']);





                     ?>  
                                  <tr>
                                      
                                      <td><?php echo $row['date'] ?></td>
                                      <td><?php echo $row['time']?></td>
                                      <td><a href="patientDetails.php?mid=<?php echo $row['member_id']; ?>"><?php echo $row['name']; ?></a></td>
                                      <td><?php echo $row['status'] ?></td>
                                      <?php } ?>
                                  </tr>
                              </table>
                                      <p align="center"><button>Previous Page</button> | <button>Next Page</button></p>
                                      <p align="center"><a href="appointmentstatus.php">Go to Appoinment Status</a></p>
                                    </fieldset>
                                  </td>
                                </tr>
                              </table>

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