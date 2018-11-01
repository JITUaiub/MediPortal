<?php 
    session_start();


     $conn = mysqli_connect($_ENV["MYSQL_HOST"].":".$_ENV["MYSQL_PORT"], $_ENV["MYSQL_UN"], $_ENV["MYSQL_PW"],$_ENV["MYSQL_DB"]);
   
             if (!$conn) {
         die("Connection failed: " . mysqli_connect_error()); 
  }
 ?>

<html>

<head><title>Edite Chamber</title></head>

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
                                <td><a href="viewprofile.php"><?php echo $_SESSION['doctor_username']; ?><img src="images/user.png"></a></td>
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
                        <div align="center">

                            <form method="post" action="database_editchamber.php">
                             <td width="70%" align="center" valign="top">
                                <h1>Edit Chamber</h1>
                             	<!-- <form action="docChamber.php"> -->
									
                             		<table align="center" width="60%">
                             			<tr>
                             				<td>
                             					<fieldset>
						
													<table align="center">
                                                       <?php if(isset($_SESSION['doctor_username']) && isset($_SESSION['doctor_type'])) {
    $chamber_information = "SELECT * from chamber where doctor_id = ".$_SESSION['doctor_id']." and chamber_id=".$_REQUEST['cid'].";";
     $result = mysqli_query($conn, $chamber_information)or die(mysqli_error($conn)); 
     
  }
while($row = mysqli_fetch_assoc($result)) {
?>
														<tr>
															<td><label>Name</label></td>
															<td>:</td>
															<td><input type="text" name="chamberName" value="<?php echo $row['name']; ?>" /></td>
														</tr>
														<tr>
															<td><label>Location</label></td>
															<td>:</td>
															<td><input type="text" name="location" value="<?php echo $row['location']; ?>" /></td>
														</tr>

                                                        <?php 
                                                            }

    if(isset($_SESSION['doctor_username']) && isset($_SESSION['doctor_type'])) {
    $chamber_information_days = "SELECT days from chamber where doctor_id = ".$_SESSION['doctor_id']." and chamber_id=".$_REQUEST['cid'].";";
     $result = mysqli_query($conn, $chamber_information_days)or die(mysqli_error($conn)); 
     
    }
while($row_days = mysqli_fetch_assoc($result)) {
    $days = $row_days['days'];
    $workDays1=explode("," , $days);

?>

														<tr>
															<td><label>Working Days</label></td>
															<td>:</td>
															<td>
                               
<input type="checkbox" name="workDays1[]" value="sat" <?php if(in_array("sat",$workDays1)) { ?> checked="checked" <?php } ?> />SAT
<input type="checkbox" name="workDays1[]" value="sun" <?php if(in_array("sun",$workDays1)) { ?> checked="checked" <?php } ?> />SUN
<input type="checkbox" name="workDays1[]" value ="mon" <?php if(in_array("mon",$workDays1)) { ?> checked="checked" <?php } ?> />MON
<input type="checkbox" name="workDays1[]" value ="tue" <?php if(in_array("tue",$workDays1)) { ?> checked="checked" <?php } ?> />TUE
<input type="checkbox" name="workDays1[]" value ="wed" <?php if(in_array("wed",$workDays1)) { ?> checked="checked" <?php } ?> />WED
<input type="checkbox" name="workDays1[]" value ="thu" <?php if(in_array("thu",$workDays1)) { ?> checked="checked" <?php } ?> />THU
<input type="checkbox" name="workDays1[]" value ="fri" <?php if(in_array("fri",$workDays1)) { ?> checked="checked" <?php } ?> />FRI
																
															</td>
														</tr>
                                    <?php 
                                        }
if(isset($_SESSION['doctor_username']) && isset($_SESSION['doctor_type'])) {
    $chamber_information_time= "SELECT schedule from chamber where doctor_id = ".$_SESSION['doctor_id']." and chamber_id=".$_REQUEST['cid'].";";
     $result = mysqli_query($conn, $chamber_information_time)or die(mysqli_error($conn)); 
     
    }
while($row_time = mysqli_fetch_assoc($result)) {
    $time = $row_time['schedule'];
    $worktime=explode(" - ", $time);?>



														<tr>
															<td><label>Working Time</label></td>
															<td>:</td>
															<td><input type="time" name="time" value="<?php echo $worktime[0]; ?>"> to <input type="time" name="time1" value="<?php echo $worktime[1]; ?>"></td>
														</tr>


                                                        <?php }
                                                         ?>
														<tr>
															<td><label>Description</label></td>
															<td>:</td>
															<td><textarea name="description"> Bla bla bla bla</textarea></td>
														</tr>
														<tr>
															<td align="center" colspan="3">
																<input type="submit" name="btn_edit" value="Save">
															</td>

														</tr>
													</br>
														<tr>
															<td colspan="3" align="center"><a href="managechamber.php">Back</a> | 
							                                    <a href="addChamber.php">Add Chamber</a>
							                               
														</tr>
													</table>
												</fieldset>	
                             				</td>
                             			</tr>
                             		</table>

								<!-- </form> -->

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

<?php 
    
    mysqli_close($conn);
 ?>