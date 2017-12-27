<?php 
session_start();

 
  $currentpasswordErr = $newpasswordErr = $retypepasswordErr="";
  $newpassword=$retypepassword=$currentpassword="";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["currentpassword"])) {
    $currentpasswordErr = "Current Password is required";
  }
  if (empty($_POST["newpassword"])) {
    $newpasswordErr = "New Password is required";
  }
  if (empty($_POST["retypepassword"])) {
    $retypepasswordErr = "Retry Password is required";
  }
}
$conn = mysqli_connect("localhost", "root", "","mediportal_db");

   
             if (!$conn) {
         die("Connection failed: " . mysqli_connect_error()); 
  }
  if(isset($_POST['currentpassword']) && isset($_POST['newpassword']))
  {
    
    if($_POST['newpassword']==$_POST['retypepassword'])
    {
        $sql="UPDATE user SET password='".$_POST['newpassword']."' where username='".$_SESSION['admin_username']."'";
        $result=mysqli_query($conn, $sql)or die(mysqli_error($conn));

    }
    else
    {
     $mess="Password does not match";
    echo "<script>alert(' $mess')</script>";
    }
  }
  if(isset($_SESSION['admin_username']) && isset($_SESSION['admin_type'])) {
    $doctor_information = "SELECT * from admin where username = '".$_SESSION['admin_username']."';";
     $result = mysqli_query($conn, $doctor_information)or die(mysqli_error($conn)); 
     
  }
 
    while($row = mysqli_fetch_assoc($result)) {
    


  
  ?>
<html>

<head><title>Home</title>
<style>
        .error {color: #FF0000;}
    </style>
    </head>

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
                                <td><a href="viewprofile.php"><?php echo $row['username']; ?><?php if($row['profile_picture'] == ""){
                                        echo "<img width='20' height='20' src='images/default.png' alt='Default Profile Pic'>";
                                } else {
                                        echo "<img width='20' height='20' src='images/".$row['profile_picture']."' alt='Profile Pic'>";
                                }?></a></td>
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
                                   <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                    <h1>CHANGE PASSWORD</h1>
                                    <table>
                                        <tr>
                                            <td><strong>Current Password</strong></td>
                                            <td><strong>:</strong></td>
                                            <td><input type="password" name="currentpassword"/>
                                            <br>
                                                            <span class="error"> <?php echo $currentpasswordErr;?></span>
                                                        </td>  
                                        </tr>
                                        <tr>
                                            <td><strong>New Password</strong></td>
                                            <td><strong>:</strong></td>
                                            <td><input type="password" name="newpassword"/>
                                            <br>
                                                            <span class="error"> <?php echo $newpasswordErr;?></span>
                                                        </td>  
                                        </tr>
                                        <tr>
                                            <td><strong>Retype New Password</strong></td>
                                            <td><strong>:</strong></td>
                                            <td><input type="password" name="retypepassword"/>
                                            <br>
                                                            <span class="error"> <?php echo $retypepasswordErr;?></span>
                                                        </td>  
                                        </tr>
                                    </table>
                                    <hr/>
                                    <input type="submit" value="Submit"/>
                                </form>
                                <table width="100%">
                                        <td colspan="2" align="right" width="49%"><a href="editprofile.php">Edit Profile</a></td>
                                        <td width="2%"><strong><hr width="1" size="15"></strong></td>
                                        <td colspan="2" align="left" width="49%"><a href="changeprofilepicture.php">Change Profile Picture</a></td>
                                    </table>
                                <!-- END -->
                            </td>
                        </div>
                    </table>
                </div>
            </td>
        </tr>
        <?php }mysqli_close($conn); ?>
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