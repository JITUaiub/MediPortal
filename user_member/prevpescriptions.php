<?php
	session_start();
	
	if(!isset($_SESSION['patient_username']) || empty($_SESSION['patient_username'])){
		  header("location: ../Login.php");
		  exit;
		}

	$conn = mysqli_connect("localhost", "root", "","mediportal_db");	
		
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
	
	
	
	
	
	
	
	/*member id*/
		$sql2="SELECT `member_id` FROM `member` WHERE `username`= '".$_SESSION['patient_username']."';";
		$result = mysqli_query($conn, $sql2);
	
		while(($row = mysqli_fetch_assoc($result))!=null){ 
			$member_id =$row['member_id'];
											
							
		}
		


	
	$sql="SELECT * FROM `prescription` WHERE `member_id`=".$member_id."";
	
	$result = mysqli_query($conn, $sql);
	
		$arr=array();
		while(($row = mysqli_fetch_assoc($result))!=null){ 
			
			$arr[] =array(
				"prescription_id"=>$row['prescription_id'],
				"doctor_id"=>$row['doctor_id'],
				//"member_id"=>$row['member_id'],
				"appointment"=>$row['date'],
				"disease"=>$row['disease'],
				"next_appointment"=>$row['next_appointment']			
				);
										
							
		}
?>

<html>

<head><title>Previous Prescriptions</title></head>

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
                        <div align="center">
                        <td width="70%" align="center" valign="top">
                            <!--------------------------------------------------- DESIGN UI HERE-------------------------------------------------->
							<table align="center" width="100%">
                                
                            <h1 align="center">Prescriptions History</h1>   
                        <tr>
                            <td>
                                <fieldset>
                                    <div align="center">
                                        <label>Search by: </label>
                                    <select>
                                        <option>Doctor Name</option>
                                        <option>Appointment Date</option>
                                        <option>Disease</option>
                                    </select>
                                    <input type="text" name="text" value="Search Text" /><button>Go</button><br>
                                    Results per page: 
                                    <select>
                                        <option>10</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                    <button>Go</button>
                                    </div>
                                </fieldset><br>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table width="100%" cellspacing="0" border="1" cellpadding="5">
                                    <tr height="10%">
                                        <th>
                                            <h3 align="center">date</h3>
                                        </th>
                                        <th>
                                            <h3 align="center">Doctor name</h3>
                                        </th>
                                        <th>
                                            <h3 align="center">Disease</h3>
                                        </th>
                                        <th>
                                            <h3 align="center">Prescription File</h3>
                                        </th>
                                        <th>
                                            <h3 align="center">next appointment</h3>
                                        </th>
                                    </tr>
                                    <?php if($arr!=null){ for($i=0;$i<count($arr);$i++){ ?>
							<tr>
								
								<td><?= $arr[$i]['appointment']?></td>
								<td><a href="doctorDetails.php?id=<?= $arr[$i]['doctor_id']?>"><?= doctor_name($arr[$i]['doctor_id'])?></a></td>
								<td><?= $arr[$i]['disease']?></td>
								<td><?= $arr[$i]['prescription_id']?></td>
								<td><?= $arr[$i]['next_appointment']?></td>
							</tr>
									<?php }}else{echo "<tr><td colspan='5'>You have no prescription</td></tr>";} ?>	

                                    
                                    
                                </table><br><br>
                                <p align="center"><button>Previous Page</button> | <button>Next Page</button></p>
                                <p align="center"><a href="newpescriptions.php">Create New Prescription</a></p>
                                
                            </td>
                        </tr>
                        </table>
                            <!------------------------------------------------------ END HERE----------------------------------------------------->
                        </td></div>
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