<?php 
	session_start();
	
	if(!isset($_SESSION['patient_username']) || empty($_SESSION['patient_username'])){
		  header("location: ../Login.php");
		  exit;
		}
	
	
    $conn = mysqli_connect("localhost", "root", "", "mediportal_db");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
	
	
	//doctor info
	  function doctor_name($doctor_id){
	   $conn = mysqli_connect("localhost", "root", "","mediportal_db");
	   $sql3="SELECT `username` FROM `doctor` WHERE `doctor_id`= ".$doctor_id."";
		$result = mysqli_query($conn, $sql3);
	
		while(($row = mysqli_fetch_assoc($result))!=null){ 
			$username =$row['username'];
											
							
		}
			return $username;
	  } 
	
	
	
	$sql1="SELECT `member_id` FROM `member` WHERE `username`='".$_SESSION['patient_username']."'";
		$result = mysqli_query($conn, $sql1);
	
		while(($row = mysqli_fetch_assoc($result))!=null){ 
			$member_id =$row['member_id'];
											
							
		}
	
	
	
	
	$sql="SELECT * FROM `appointment` WHERE `member_id`=".$member_id."";
	
	$result = mysqli_query($conn, $sql);
	
		$ff=array();
		while(($row = mysqli_fetch_assoc($result))!=null){ 
			$ff[] =array(
				"appointment_id"=>$row['appointment_id'],
				"doctor_id"=>$row['doctor_id'],
				"member_id"=>$row['member_id'],
				"date"=>$row['date'],
				"time"=>$row['time'],
				"status"=>$row['status'],
				"appointment_type"=>$row['appointment_type']			
				);
										
							
		}

       
	
 ?>
<?php
if(isset($_POST['submit'])){
	if(!empty($_POST['check_list'])){
		
		foreach($_POST['check_list'] as $selected){
				
				header('location: appointmentstatus.php?id=$selected');
				
				//$conn = mysqli_connect("localhost", "root", "","mediportal_db");
				//$delete="DELETE FROM `appointment` WHERE `appointment_id`=".$selected."";
				
				//$result = mysqli_query($conn, $delete);
			}
	
	}
}
?>
<html>

<head><title>Appoinment Status</title></head>

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
                    <form method="$_POST">
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
                            
                        <td width="70%" align="center">
                           
                           <fieldset>
                              <legend><h3>APPOINTMENT HISTORY | SEARCH</h3></legend><br>
							   <table>
                                <tr>
                                    <td>
                                           <label>Sort The Page By:</label>
                                <select>
                                    <option>Doctor Name</option>
                                    <option>Appoinment Date</option>
                                    <option>Type</option>
                                    <option>Status</option>
                                </select>
                                        </br>
                                    </br>
										Filter By
										<select>
											<option>Any</option>
											<option>Doctor Name</option>
											<option>Appoinment Date</option>
											<option>Time</option>
										</select>
										<input />
										<input type="submit" value="Search" />
									</td>
								</tr>
                            </table>
                            </fieldset>
							<br/><br/><br/>
                              <table width="100%" cellspacing="0" border="1" cellpadding="5">
                                  <tr>
								<!--	  <th align="left" width="1%">
                                             <strong>
                                                <select >
                                                    <optgroup label="Actions">
                                                        <option selected="true" value="all">Select none</option>
                                                        <option value="all">Select all</option>
                                                        <option value="none">Revert selected</option>
                                                        <option value="read">Mark as read</option>
                                                        <option value="delete">Delete</option>
														<option value="delete">cancle</option>
                                                    </optgroup>
                                                </select>
                                            </strong>
                                        </th>
								-->
                                      <th width="10%"><strong>Doctor name</strong></th>
                                      <th  width="10%"><strong>Appoinment Date</strong></th>
                                      <th  width="10%"><strong>Time</strong></th>
									  <th  width="10%"><strong>Type</strong></th>
									  <th  width="10%"><strong>Status</strong></th>
                                  </tr>
									<?php for($i=0;$i<count($ff);$i++){ ?>
							<tr>
							<!--	<td align="center">
                                    <input type="checkbox" name="action">
                                </td>
							-->	
								<td><a href="doctorDetails.php?id=<?= $ff[$i]['doctor_id']?>"><?= doctor_name($ff[$i]['doctor_id'])?></a></td>
								<td><?= $ff[$i]['date']?></td>
								<td><?= $ff[$i]['time']?></td>
								<td><?= $ff[$i]['appointment_type']?></td>
								<td><?= $ff[$i]['status']?> <input type="checkbox" name="check_list[]" value="<?=$ff[$i]['appointment_id']?>"/> </td>
							</tr>
							<?php } ?>	  
                              </table>   <br>                  
							<input type="submit" value="delete">
                        </td>
						
						</div>
						
                    </table>
					</form>
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