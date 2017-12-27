<?php 
session_start();
	
	if(!isset($_SESSION['patient_username']) || empty($_SESSION['patient_username'])){
		  header("location: ../Login.php");
		  exit;
		}

 
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
        $sql="UPDATE user SET password='".$_POST['newpassword']."' where username='".$_SESSION['patient_username']."'";
        $result=mysqli_query($conn, $sql)or die(mysqli_error($conn));

    }
     else
    {
     $mess="Password does not match";
    echo "<script>alert(' $mess')</script>";
    }
  }
  mysqli_close($conn);
  ?>
<html>

<head><title>Home</title>
<style>
        .error {color: #FF0000;}
    </style>
    </head>

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
                                <td><a href="viewprofile.php"><?=$_SESSION['patient_username']?><img src="images/user.png"></a></td>
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

                        <td width="70%" valign="top">
                            
							<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
							
                                <h1 align="center">CHANGE PASSWORD</h1>
                                <table align="center" width="70%">
                                    <tr>
                                        <td>
                                            <fieldset>
                                                <table>
                                                    <tr>
                                                        <td><strong>Current Password</strong></td>
                                                        <td><strong>:</strong></td>
                                                        <td><input  type="password" name="currentpassword"/>
                                                        <br>
                                                            <span class="error"> <?php echo $currentpasswordErr;?></span></td>  
                                                    </tr>
                                                    <tr>
                                                        <td><strong>New Password</strong></td>
                                                        <td><strong>:</strong></td>
                                                        <td><input  type="password" name="newpassword"  />
                                                        <br>
                                                            <span class="error"> <?php echo $newpasswordErr;?></span></td>  
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Retype New Password</strong></td>
                                                        <td><strong>:</strong></td>
                                                        <td><input  type="password" name="retypepassword"  />
                                                        <br>
                                                            <span class="error"> <?php echo $retypepasswordErr;?></span></td>  
                                                    </tr>
                                                </table>
                                                <hr/>
                                                <p align="center"><input id="password_change" type="submit" value="Submit" </p>
												
												
                                                <p align="center"><a href="editprofile.php">Edit Profile</a> | <a href="changeprofilepicture.php">Change Profile Picture</a></p>
                                            </fieldset>
                                        </td>
                                    </tr>
                                </table> 
								
						</form>	
                            
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
	<script type="text/javascript" ></script>
</body>

</html>