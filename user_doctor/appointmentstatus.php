<?php 
    session_start();

     $conn = mysqli_connect("localhost", "root", "","mediportal_db");
   
             if (!$conn) {
         die("Connection failed: " . mysqli_connect_error()); 
  }

?>

<html>

<head><title>Appointmet Status</title></head>

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
                                <li><a href="managechamber.html">Manage Chambers</a></li>
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
                        <!--Appoinment-->
                        <td width="100%" valign="top">
							<h1 align="center">Online Appointments</h1>
                                <table align="center" width="100%">
                                    <tr>
                                        <td>
                                            <fieldset>
                                                 <label>Sort The Page By</label>
                                <select>
                                    <option>Name</option>
                                    <option>Address</option>
                                    <option>Age</option>
                                    <option>Disease</option>
                                    <option>Time|Date</option>
                                </select></br></br>
                                             <legend><b>GENERAL USERS | SEARCH</b></legend>
                                            Filter By
                                            <select>
                                                <option>Select One</option>
                                                <option>Name</option>   
                                                <option>Age</option>
                                                <option>Patient Problem</option>
                                                <option>Time|Date</option>
                                            </select>
                                              <input />
                                            <input type="submit" value="Search" />
                                            Results show per page: <select>
                                                <option>10</option>
                                                <option>20</option>
                                                <option>30</option>
                                            </select>
                                            <button onclick="ResultPerPage()">Go</button>
                                            <script>
                                                function ResultPerPage()
                                                {

                                                }
                                            </script>
                                        </fieldset>
                                            <fieldset>
                                                <legend><b>Online Service Patient</b></legend>
                  <table align="center" border="1">
                          
                                    <tr>
                                        <td width="15%">Name</td>
                                        <td width="15%">Adress</td>
                                        <td width="15%">Age</td>
                                        <td width="15%">Patient Problem</td>
                                        <td width="15%">Time | Date</td>
                                        <td align="center" colspan="3">Action</td>
                                    </tr>

                                               <!--  <tr>
                                                    <td><a href="patientDetails.php">Kent</a></td>
                                                    <td>Khilkhet,Dhaka</td>
                                                    <td>25</td>
                                                    <td>Fever</td>
                                                    <td>2.30PM | 12-09-2017</td>
                                                    <td><button>Confirm Appointment</button></td>
                                                    <td><a href="eConsultation/conversation.php">Message</a></td>
                                                    <td><button>Delete</button></td>
                                                </tr> -->
                    <?php 
                       
                           $load_member_information = "SELECT * from member,appointment where member.member_id = appointment.member_id";  



                           $result = mysqli_query($conn, $load_member_information)or die(mysqli_error($conn)); 

                           while($row = mysqli_fetch_assoc($result)){  
                           if ($row['status'] == 'pending') {
                                        
                                          
                              $current_year = date("Y");
                              $dob_year = explode("-",$row['dob']);





                     ?>  
                            

                             <tr>
                                <td><a href="patientDetails.php?mid=<?php echo $row['member_id']; ?>"><?php echo $row['name']; ?></a></td>
                                <td><?php echo $row['address']; ?></td>
                                <td>
                                    
                                    <?php 

                                        $age = $current_year - $dob_year[0];    
                                        echo $age;

                                     ?>


                                </td>
                                <td><?php echo $row['problem']; ?></td>
                                <td><?php echo $row['time']." | ".$row['date']; ?> </td>
                                <td><a href="database_confirm_appointment.php?mid=<?php echo $row['member_id']; ?>">Confirm Appointment</a></td>
                                <td><a href="eConsultation/conversation.php">Message</a></td>
                                <td><a href="database_delete_appointment.php?aid=<?php echo $row['appointment_id']?>">Delete</a></td>
                                <td>
                                    <?php echo $row['status']; ?>
                                </td>
                            </tr>

                            <?php }

                            } 

                            ?>



                                             </table>
                                             <tr>
                                                <td align="center">
                                             <p align="center"><button>Previous Page</button> | <button>Next Page</button></p>
                                             <a href="newpescriptions.php">Back</a></td>
                                         </tr>
                                            </fieldset>
                            
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

   mysqli_close($conn);

 ?>