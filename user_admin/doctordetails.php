<?php 
    session_start();

     $conn = mysqli_connect("localhost", "root", "","mediportal_db");
   
             if (!$conn) {
         die("Connection failed: " . mysqli_connect_error()); 
  }
 if(isset($_SESSION['doctor_username']) && isset($_SESSION['doctor_type'])) {
    $doctor_information = "SELECT * from doctor where doctor_id=".$_REQUEST['did'].";";
     $result = mysqli_query($conn, $doctor_information)or die(mysqli_error($conn)); 
     
  }

      while($row = mysqli_fetch_assoc($result)) {


  ?>



<html>

<head><title>Home</title></head>

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
                    <table width="100%" border="1" cellspacing="0" cellpadding="0">
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
                            <strong>Manage Users</strong></legend>
                           
                            <ul>
                                <li><a href="normalUsers.php">General Users</a></li>
                                <li><a href="doctorUsers.php">Doctors</a></li>
                                <li><a href="pendingRequest.php">Pending Sign Up Requests</a></li>
                                <li><a href="reportedUsers.php">Reported Users</a></li>
                            </ul>
                        </fieldset>

                        <fieldset>
                            <legend>
                            <strong>FAQ Section</strong></legend>
                           
                            <ul>
                                <li><a href="FAQ/newFAQ.php">New FAQ</a></li>
                                <li><a href="FAQ/requestedFAQ.php">User Requested FAQ</a></li>
                                <li><a href="FAQ/manageFAQ.php">Manage FAQ</a></li>
                            </ul>
                        </fieldset>
                        <fieldset>
                            <legend>
                            <strong>Reports</strong></legend>
                           
                            <ul>
                                <li><a href="reportsNormalUsers.php">General Users Statistics</a></li>
                                <li><a href="reportsDoctorUsers.php">Doctor's Statistics</a></li>
                                <li><a href="reportsAdmin.php">Overall Statistics</a></li>
                            </ul>
                        </fieldset>
                        
                        
                        <fieldset>
                            <legend>
                            <strong>Email</strong></legend>
                           
                            <ul>
                                <li><a href="eConsultation/message.php">New Message</a></li>
                                <li><a href="eConsultation/inbox.php">Inbox</a></li>
                                <li><a href="eConsultation/sentitems.php">Sent items</a></li>
                <li><a href="eConsultation/promoMail.php">Promotional Mail</a></li>
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
                                <!------ UI  -->
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
    $doctor_education_information = "SELECT * from educational_info where doctor_id=".$_REQUEST['did'].";";
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
<?php
if(isset($_SESSION['doctor_username']) && isset($_SESSION['doctor_type'])) {
    $doctor_professional_information = "SELECT * from professional_info where doctor_id=".$_REQUEST['did'].";";
     $education_result = mysqli_query($conn, $doctor_professional_information)or die(mysqli_error($conn)); 
 }
     
     while($education_row = mysqli_fetch_assoc($education_result)) {
  
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
                                                            <td width="65%"><?php echo $education_row['title']; ?></td>
                                                        </tr>
                                                            <tr>
                                                            
                                                            <td width="30%"><strong>Department College</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td><?php echo $education_row['department']; ?></td>
                                                         </tr>
                                                        
                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Medical College</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td><?php echo $education_row['medical_college']; ?></td>
                                                         </tr>

                                                         
                                                    </table>
                                                </fieldset>
                                                </td>
                                            </tr>

                                            <?php 
                                                           }
                                                         ?>

                
                                                 <tr>
                                                    <td width="10%" valign="top"><label><b><i>Chamber Information:</i></b></label>
                                                    </td>
                                                    <td>
                                                        <fieldset>
                                                        <table width="100%" cellpadding="1" cellspacing="1">
                                                <tr>
                                                            <td width="20%"><strong>Chamber Name</strong></td>
                                                             <td width="20%"><strong>Chamber Location</strong></td>
                                                             <td width="20%"><strong>Working Days</strong></td>
                                                             <td width="20%"><strong>Working Time</strong></td>
                                                             <td width="20%"><strong>Description</strong></td>
                                                </tr>
                                                <?php 

    if(isset($_SESSION['doctor_username']) && isset($_SESSION['doctor_type'])) {
    $doctor_chamber_information = "SELECT * from chamber where doctor_id=".$_REQUEST['did'].";";
     $chamber_result = mysqli_query($conn, $doctor_chamber_information)or die(mysqli_error($conn)); 
 }
     
     while($chamber_row = mysqli_fetch_assoc($chamber_result)) {
        ?>
                                                <tr>
                                                            
                                                            <td><?php echo $chamber_row['name']; ?></td>
                                                            <td><?php echo $chamber_row['location']; ?></td>
                            
                                                            <td><?php echo $chamber_row['days']; ?></td>
            
                                                            <td><?php echo $chamber_row['schedule']; ?></td>
                                                            <td><?php echo $chamber_row['description']; ?></td>
                                                           
                                                        </tr>

                                                        <?php 
                                                }
                                             ?>
                                                        
                                            </table>
                                                </fieldset>
                                                </td>
                                            </tr>

                                            

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
                                            </table>
                                             <button onclick="goBack()">Go back</button>

                                                <script>
                                                function goBack() {
                                                    window.history.back();
                                                }
                                                function report()
                                                {

                                                }
                                                </script> 
                                    </div>
                                <!-- END -->
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