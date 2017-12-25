<?php 
    session_start();


     $conn = mysqli_connect("localhost", "root", "","mediportal_db");
   
             if (!$conn) {
         die("Connection failed: " . mysqli_connect_error()); 
  }

  if(isset($_SESSION['doctor_username']) && isset($_SESSION['doctor_type'])) {
    $doctor_information = "SELECT * from doctor where username = '".$_SESSION['doctor_username']."';";
     $result = mysqli_query($conn, $doctor_information)or die(mysqli_error($conn)); 
     
  }
 
    while($row = mysqli_fetch_assoc($result)) {
    
?>

<html>

<head><title>View Profile</title></head>

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
                                <td><a href="viewprofile.php"><?php echo $row['username']; ?><img src="images/user.png"></a></td>
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
                        <td width="20%" valign="top">
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


                        <td width="70%" valign="top">
                            <div>
                                <h1 align="center">PROFILE</h1>
                                
                                    
                                    <table width="100%">
                                        <td width="60%">
                                            <fieldset>

                                            <table width="100%">


                                                <tr align="center">
                                                    <td width="40%" align="center" colspan="3">
                                            <table align="center">
                                                <tr>
                                                    <td align="center"><img src="images/usericon.png"/></td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><a href="changeprofilepicture.php">Change</a></td>

                                                </tr>
                                            </table>
                                        </td>
                                                </tr>
                                                
                                                <tr>
  
                                                    <td width="10%" valign="top"><label><b><i>General Information:</i></b></label>
                                                    </td>
                                                    <td align="center">
                                                        <fieldset>
                                                        <table width="100%">
                                                        <tr>
                                                            <td width="30%"><strong>Name</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td ><?php echo $row['name'];?></td>
                                                        </tr>
                                                         
                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Gender</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td><?php echo $row['gender'];?></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="30%"><strong>User Name</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td ><?php echo $row['username'];?></td>
                                                        </tr>
                                           

                                                    </table>
                                                </fieldset>
                                                </td>
                                            </tr>
                                                
                                                <?php 

    if(isset($_SESSION['doctor_username']) && isset($_SESSION['doctor_type'])) {
    $doctor_education_information = "SELECT * from educational_info where doctor_id=(select doctor_id from doctor where username = '".$_SESSION['doctor_username']."')";
     $education_result = mysqli_query($conn, $doctor_education_information)or die(mysqli_error($conn)); 
 }
     
     while($education_row = mysqli_fetch_assoc($education_result)) {
  
                                                 ?>

                                                <tr>
                                                    <td width="10%" valign="top"><label><b><i>Educational Information:</i></b></label>
                                                    </td>
                                                    <td>
                                                        <fieldset>
                                                        <table width="100%">
                                                        <tr>
                                                            <td width="30%"><strong>Degree Name</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td width="65%"><?php echo $education_row['degree_name']; ?></td>
                                                        </tr>
                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Passed Year</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td><?php echo $education_row['passed_year']; ?> </td>
                                                         </tr>
                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Passing College</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td><?php echo $education_row['college']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="30%"><strong>Description</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td><?php echo $education_row['description']; ?></td>
                                                        </tr>
                                                        

                                                    </table>
                                                </fieldset>
                                                </td>
                                            </tr>

                                            <?php 
                                                }
                                             ?>


                                                <tr>
                                                    <td width="10%" valign="top"><label><b><i>Proffesional Information:</i></b></label>
                                                    </td>
                                                    <td>
                                                        <fieldset>
                                                        <table width="100%">
                                                        <tr>
                                                            <td width="30%"><strong>Title</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td width="65%">Assistant Professor</td>
                                                        </tr>
                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Medical College</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td>Sir Sollimullah Medical College</td>
                                                         </tr>

                                                         
                                                    </table>
                                                </fieldset>
                                                </td>
                                            </tr>

                <?php 

    if(isset($_SESSION['doctor_username']) && isset($_SESSION['doctor_type'])) {
    $doctor_chamber_information = "SELECT * from chamber where doctor_id=(select doctor_id from doctor where username = '".$_SESSION['doctor_username']."')";
     $chamber_result = mysqli_query($conn, $doctor_chamber_information)or die(mysqli_error($conn)); 
 }
     
     while($chamber_row = mysqli_fetch_assoc($chamber_result)) {
        ?>
                                                 <tr>
                                                    <td width="10%" valign="top"><label><b><i>Chamber Information:</i></b></label>
                                                    </td>
                                                    <td>
                                                        <fieldset>
                                                        <table width="100%">
                                                        <tr>
                                                            <td width="30%"><strong>Chamber Name</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td width="65%"><?php echo $chamber_row['name']; ?></td>
                                                        </tr>
                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Chamber Location</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td><?php echo $chamber_row['location']; ?></td>
                                                         </tr>

                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Working Days</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td><?php echo $chamber_row['days']; ?></td>
                                                         </tr>

                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Time</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td><?php echo $chamber_row['schedule']; ?></td>
                                                         </tr>
                                                         
                                                        

                                                    </table>
                                                </fieldset>
                                                </td>
                                            </tr>

                                            <?php 
                                                }
                                             ?>

                                                  <tr>
                                                    <td width="10%" valign="top"><label><b><i>Others Information:</i></b></label>
                                                    </td>
                                                    <td>
                                                        <fieldset>
                                                        <table width="100%">
                                                        <tr>
                                                            <td width="30%"><strong>Date Of Birth</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td width="65%"><?php echo $row['dob'];?></td>
                                                        </tr>

                                                        <tr>
                                                            
                                                            <td width="30%"><strong>BMDC Number</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td>0168-DMC594/0625</td>
                                                         </tr>
                                                         

                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Mobile Number</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td><?php echo $row['mobile'];?></td>
                                                         </tr>

                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Email</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td><?php echo $row['email'];?></td>
                                                         </tr>
                                                    </table>

                                                        <?php 
                                            }
                                            mysqli_close($conn);

                                     ?> 
                                                </fieldset>
                                                </td>
                                            </tr>

                                        </td>
                                        
                                    </table>


                                    
                                           <br><br>
                                           <hr>
                                    <div>
                                        <table align="center">
                                            <tr>
                                                <td align="center" colspan="3">
                                    <a href="editprofile.php">Edit Profile</a> | 
                                    <a href="changepassword.php">Edit Password</a> | 
                                    <a href="managechamber.php">Manage Chambers</a>
                                </td>
                            </tr>
                        </table>
                    </div>

                                </fieldset>
                            </td>
                        </table>
                    </div>
                </td>


                                
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