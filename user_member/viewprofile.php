<?php 
    session_start();



     $conn = mysqli_connect("localhost", "root", "","mediportal_db");
   
             if (!$conn) {
         die("Connection failed: " . mysqli_connect_error()); 
  }
 if(isset($_SESSION['patient_username']) && isset($_SESSION['patient_type'])) {
    $member_information = "SELECT * from member where username = '".$_SESSION['patient_username']."';";
     $result = mysqli_query($conn, $member_information)or die(mysqli_error($conn)); }

 

      while($row = mysqli_fetch_assoc($result)) {


  ?>


<html>

<head><title>View profile</title></head>

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
                                <td><a href="viewprofile.php"><?php echo $row['username']; ?><?php if($row['profile_picture'] == ""){
                                        echo "<img width='20' height='20' src='images/default.png' alt='Default Profile Pic'>";
                                } else {
                                        echo "<img width='20' height='20' src='images/".$row['profile_picture']."' alt='Profile Pic'>";
                                }?></a></td>
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
                        <td width="20%" valign="top">
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
                                <li><a href="member_logout.php">Logout</a></li>
                            </ul>
                        </fieldset>
                        </td>

						<div align="canter">
							<td width="70%"align="center" valign="top" >
								<!------ UI  -->
                                    <div>
                                        <h1>PROFILE</h1>
                                           <table width="100%">
                                        <td width="60%">
                                            <fieldset>

                                            <table width="100%">


                                                <tr align="center">
                                                    <td width="40%" align="center" colspan="3">
                                            <table align="center">
                                                <tr>
                                                    <td align="center"><?php if($row['profile_picture'] == ""){
                                        echo "<img width='200' height='200' src='images/default.jpg' alt='Default Profile Pic'>";
                                } else {
                                        echo "<img width='200' height='200' src='images/".$row['profile_picture']."' alt='Profile Pic'>";
                                }?></td>
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
                                                            <td ><?php echo $row['gender'];?></td>
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
                                                 


                                                 <tr>
                                                    <td width="10%" valign="top"><label><b><i>Blood Donation Information:</i></b></label>
                                                    </td>
                                                    <td>
                                                        <fieldset>
                                                        <table width="100%">
                                                        <tr>
                                                            <td width="30%"><strong>Blood Group</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td width="65%">A+</td>
                                                        </tr>
                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Weight</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td>Over 50 Kg</td>
                                                         </tr>

                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Heart Condition</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td>Good</td>
                                                         </tr>

                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Injected Drugs</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td>No</td>
                                                         </tr>
                                                         
                                                        

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

                                          mysqli_close($conn); ?>
                                                       
                                                </fieldset>
                                                </td>
                                            </tr>

                                        </td>
                                        
                                    </table>
                                                            <tr><td><hr/></td></tr>

                                                            <tr>
                                                                <td>
                                                                    <table width="100%">
                                                                        <td width="10%">&nbsp;</td>
                                                                        <td width="30%" align="right"><a href="editprofile.php">Edit Profile</a></td>
                                                                        <td><strong><hr width="1" size="15"></strong></td>
                                                                        <td><a href="changepassword.php">Change Password</a></td>
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
