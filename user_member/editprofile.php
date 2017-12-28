<?php 
    session_start();
	
	$conn = mysqli_connect("localhost", "root", "","mediportal_db");
   
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error()); 
	}

	if(isset($_SESSION['patient_username']) && isset($_SESSION['patient_type'])) {
		$member_information = "SELECT * from member where username = '".$_SESSION['patient_username']."';";
		$result = mysqli_query($conn, $member_information)or die(mysqli_error($conn)); 
    }
	/*(else
	{
		header("Location:../login.php");
		exit;
	}*/
 
    while($row = mysqli_fetch_assoc($result)) {
    
?>




<html>

<head><title>Edit Profile</title>







</head>

<body>

    <form method="post" action="update_database_memberinfo.php" name="myForm">
        <table border="0" align="center" width="100%">
        <tr>
            <td>
                <!-- Header section -->
                <div>
                    <table width="100%">
                        <td width="20%">
                            <a href="dashboard.php"><img src="images/pageicon.png"/></a>
                        </td>
                       <td width="40%">&nbsp;</td>
                        <td width="40%">
                            <table align="right">
                                <td><strong>Logged in as </strong></td>
                                <td><a href="viewprofile.php"><?php echo $row['username']; ?><img src="images/user.png"></a></td>
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
                            <td width="70%"align="center" valign="top">
                                <!------ UI  -->
                                    <div>
                                        <h1>EDIT PROFILE</h1>
                                            <table width="100%">
                                        <td width="60%">
                                            <fieldset>

                                            <table width="100%" >

                                                <tr>
                                                    <td width="20%" valign="top"><label><b><i>General Information:</i></b></label>
                                                    </td>
                                                    <td align="center">
                                                        <fieldset>
                                                        <table width="100%">
                                                        <tr>
                                                            <td width="30%"><strong>Name</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td ><input id="name" type="text" name="name" value="<?php echo $row['name'];?>"></td>
                                                            
                                                        </tr>
                                                         
                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Gender</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td ><input type="text" name="gender" value="<?php echo $row['gender'];?>" disabled="true"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="30%"><strong>User Name</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td ><input type="text" name="username" value="<?php echo $row['username'];?>"></td>
                                                        </tr>
                                                        

                                                    </table>
                                                </fieldset>
                                                </td>
                                            </tr>
                                                
<?php if(isset($_SESSION['patient_username']) && isset($_SESSION['patient_type'])) {
    $member_information = "SELECT * from blood where member_id = '".$row['member_id']."';";
     $result = mysqli_query($conn, $member_information)or die(mysqli_error($conn)); }

 

      while($row2 = mysqli_fetch_assoc($result)) {


  ?>
                                                


                                                <tr>
                                                    <td width="20%" valign="top"><label><b><i>Blood Donation Information:</i></b></label>
                                                    </td>
                                                    <td>
                                                        <fieldset>
                                                        <table width="100%">
                                                        <tr>
                                                            <td width="30%"><strong>Blood Group</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td width="65%"><input type="text" name="blood" value="<?php echo $row2['blood_group'] ?>" disabled="true"></td>
                                                        </tr>
                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Weight</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td><input type="text" name="weight" value="<?php echo $row2['question_1'] ?>"></td>
                                                         </tr>

                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Heart Condation</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td><input type="text" name="heart" value="<?php echo $row2['question_2'] ?>"></td>
                                                         </tr>

                                                          <tr>
                                                            
                                                            <td width="30%"><strong>Injected Drugs</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td><input type="text" name="injected_drugs" value="<?php echo $row2['question_3'] ?>"></td>
                                                         </tr>
                                                    </table>
                                                </fieldset>
                                                </td>
                                            </tr>
	  <?php } ?>

                                                 <tr>
                                                    <td width="20%" valign="top"><label><b><i>Others Information:</i></b></label>
                                                    </td>
                                                    <td>
                                                        <fieldset>
                                                        <table width="100%">
                                                        <tr>
                                                            <td width="30%"><strong>Date Of Birth</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td width="65%"><input type="date" name="dob"  value="<?php echo $row['dob'];?>" ></td>
                                                        </tr>

                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Mobile Number</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td><input id="mobile" type="text" name="mobile" value="<?php echo $row['mobile'];?>"></td>
                                                         </tr>

                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Email</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td><input id="email" type="text" name="email" value="<?php echo $row['email'];?>"></td>
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



                                                <tr><td></td></tr>
                                                            <tr>
                                                                <td colspan="4" align="center">
                                                                   <tr><td colspan="4" align="center"><input type="submit" name="submit" value="Update Profile" onClick="return validate();"></td></tr>
                                                                
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <table width="100%">
                                                                        <td colspan="2" align="right"><a href="changeprofilepicture.php">Change Profile Picture</a></td>
                                                                        <td><strong><hr width="1" size="15"></strong></td>
                                                                        <td colspan="2" align="left"><a href="changepassword.php">Change Password</a></td>
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
                        <div>
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
    <script type="text/javascript" >
        function update(){
            var x= document.getElementById("update").value;
            alert("Profile is Updated");
            window.location.assign("viewprofile.php");
        }
    </script>

</form>
</body>

</html>

<?php 
    if(isset($_REQUEST["pro_update"])){
    echo "<script>alert('".$_REQUEST["pro_update"]."');</script>";
    //echo "<h2>".$_REQUEST["error"]."</h2>";
    
}
 ?>
