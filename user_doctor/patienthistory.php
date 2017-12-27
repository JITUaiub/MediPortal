<?php 
session_start();

 $conn = mysqli_connect("localhost", "root", "","mediportal_db");
   
             if (!$conn) {
         die("Connection failed: " . mysqli_connect_error()); 
  }
  ?>

<html>

<head><title>Patient History</title></head>

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
                        <td width="100%" valign="top">
							<!------------------------ DESIGN PORTAL PAGE HERE ---------------------------------->
							
                            <table align="center" width="100%">
                            	<tr>
                            		<td>
                            			<h1 align="center">Patient History</h1>
                            <fieldset>
                                    <legend><b>Find Patient Histoy</b></legend>
                              <table align="center">
                                <tr align="center">
                                    <td align="center">
                                        <label>Sort The Page By</label>
                                <select>
                                    <option>Name</option>
                                    <option>Last Appointment Date</option>
                                    <option>Age</option>
                                    <option>Disease</option>
                                </select>
                                        
                                    </td>
                                </tr>
                                
                            <tr>
                                <td>
                                 <label>Search By</label>
                                <select>
                                    <option>Name</option>
                                    <option>Last Appointment</option>
                                    <option>Disease</option>
                                    
                                </select>
                            </td>
                            </br>
                            <td>
                            <label>Search</label> 
                            <input type="text" name="search"/> <button>Search</button></td> </tr>
                        </table>



                        <table border="1" width="100%" >
                                    <tr>
                                        <td width="15%">
                                            <h3 align="center">Last Appointment</h3>
                                        </td>
                                        <td width="20%">
                                            <h3 align="center">Name</h3>
                                        </td>
                                        <td width="10%">
                                            <h3 align="center">Age</h3>
                                        </td>
                                        <td align="center">
                                            <h3 align="center" width="35%">Disease</h3>
                                        </td>
                                        <td colspan="2" width="20%">
                                            <h3 align="center">Action</h3>
                                        </td>
                                    </tr>
 <?php 
    
    //$curr = date("Y-M-D");
 
     $curr = date('Y-m-d', strtotime('-7 days'));
    

    $last_week = "SELECT * from member,prescription,appointment where member.member_id = appointment.member_id and prescription.member_id = appointment.member_id and appointment.status='active' and appointment.date <='".$curr."'";
     $result = mysqli_query($conn, $last_week)or die(mysqli_error($conn)); 
     
    while($last = mysqli_fetch_assoc($result)) {

      $current_year = date("Y");
      $dob_year = explode("-",$last['dob']);

        ?>

		
			<tr>
        				<td align="center">
        					<b><?php echo $last['date'] ?></b>
        				</td>
        				<td align="center">
        					<b><a href="patientDetails.php?mid=<?php echo $last['member_id']; ?>"><?php echo $last['name'] ?></a></b>
        				</td>
        				<td align="center">
        					<b>
                       

                               <?php 

                                $age = $current_year - $dob_year[0];    
                                echo $age;

                                ?>      

                                </b>
							</td>
							<td align="center">
								<b><?php echo $last['disease']; ?></b>
							</td>
							<td align="center">
								<a href="prescriptionHistory.php?mid= <?php echo $last['member_id']; ?>">Prescriptions</a>
							</td>
							<td align="center">
								<a href="eConsultation/conversation.php">Message</a>
							</td>
			</tr>

                                   

                                    <?php 

                                }

                            ?>
                                    
								</table>

								<p align="center"><a href="newpescriptions.php">New Prescription</a> | <a href="appointmenthistory.php">Appointment History</a></p>
							</fieldset>
                      </table>
                            		</td>
                            	</tr>
                            </table>

							<!------------------------ FINISH DESIGNING HERE --------------------------------->
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

<?php 
    
    mysqli_close();

 ?>