<?php
	session_start();
	
	$userName=$_SESSION['patient_username'];
	
	if(!isset($_SESSION['patient_username']) || empty($_SESSION['patient_username'])){
		  header("location: ../Login.php");
		  exit;
		}
		
		
//Title
$sql="SELECT distinct(title) FROM professional_info";
$conn = mysqli_connect("localhost", "root", "", "mediportal_db", 3306);
mysqli_set_charset($conn,"utf8");
$result = mysqli_query($conn, $sql);

$title=array();
 while(($row = mysqli_fetch_assoc($result))!=null){ 
							$title[] = array(
								"title"=>$row['title']
							);
		}  
var_dump($title);
//Dept
$sql="SELECT distinct(department) FROM professional_info";
$conn = mysqli_connect("localhost", "root", "", "mediportal_db", 3306);
mysqli_set_charset($conn,"utf8");
$result = mysqli_query($conn, $sql);

$dept=array();
 while(($row = mysqli_fetch_assoc($result))!=null){ 
							$dept[] = array(
								"dept"=>$row['department']
							);
		}  
var_dump($dept);
	
	$tit = $dep = null;
	
	if(isset($_POST['title'])){
		$tit = $_POST['title'];
	}
	if(isset($_POST['dept'])){
		$dep = $_POST['dept'];
	}

//doctor
$doctor=array();
	$sql="SELECT `name` FROM `doctor` WHERE `doctor_id` = (SELECT `doctor_id` FROM `professional_info` WHERE `title` = '".$tit."' and `department` = '".$dep."')";
							$conn = mysqli_connect("localhost", "root", "", "mediportal_db", 3306);
							$result = mysqli_query($conn, $sql);
						var_dump($sql);	
	 while(($row = mysqli_fetch_assoc($result))!=null){ 
			$doctor[] = array(
							"name"=>$row['name']
							);				
							
		}


var_dump($doctor);













$err1=false;
$err2=false;
$err3=false;
$err4=false;
$doctor_err=$problem_err=$date_err=$time_err=$appointment_type_err="";
 if(isset($_POST['submit'])){
			$doctor = $_POST['select_doctor'];
			$problem=$_POST['problem'];
			$date=$_POST['date'];
			$time=$_POST['time'];
			$appointment_type=$_POST['appointment_type'];
	
	if($doctor==""){
	$doctor_err="doctor name required";
	$err1=false;
	
	}
	else{
		$err1=true;
		$doctor_err="";
	}
	if($appointment_type==""){
		$appointment_type_err="appointment type required";
		$err2=false;
	
	}
	else{
		$err2=true;
		$appointment_type_err="";
	}
	if($date==""){
		$date_err="date required";
		$err3=false;
	
	}
	else{
		$err3=true;
		$date_err="";
	}
	if($time==""){
		$time_err=" time required";
		$err4=false;
	
	}
	else{
		$err4=true;
		$time_err="";
	}
	if($err1==true && $err2==true && $err3==true && $err4==true){

	$sql ="INSERT INTO appointment(doctor_id, member_id, date, time, status,problem,appointment_type) VALUES (2,2,'$date','$time','pending','$problem','$appointment_type')";
	//$conn = mysqli_connect("localhost", "root", "", "mediportal_db", 3306);
	$result = mysqli_query($conn, $sql);
	header("location: appointmentstatus.php");
	exit;
		
	mysqli_close($conn);
	}
 }


?>

<html>

<head>
	<title>New Appoitnment</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
                                <td><a href="viewprofile.php"><?php echo $userName;?><img src="images/user.png"></a></td>
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
                    <table width="100%" border="0">
                        <!-- User Menu Section -->
                        <tr>
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
                           
						   <fieldset>
								<legend>Patient Appointment</legend>
						   
						   <table align="center" width="100%" border="0">
                           	<tr>
                           		<td colspan="2">
                           			<form  method="post" action="">
									<fieldset>
									<legend><b>DOCTOR | SEARCH</b></legend>
									<table align="center" border="0">
										<tr>
											
											<td align="center">
												<div id="search1">
													<table>
														<tr>
															
																<label>( Search more specifically )</label>
															
															<td>
																<table border="0">
																	<tr>
																		<td align="right">
																			<strong>Department :</strong>
																		</td>
																		<td>
																			<select name="dept" id="dept">
																				<?php for($i=0; $i<count($dept); $i++){echo "<option value=".$i.">".$dept[$i]['dept']."</option>";}?>
																			</select>
																		</td>
																	</tr>
																</table>
															</td>
															<td>
																<table>
																	<tr>
																		<td align="right">
																			<strong>Title :</strong>
																		</td>
																		<td>
																			<select name="title" id="title">
																					<?php for($i=0; $i<count($title); $i++){echo "<option value=".$i.">".$title[$i]['title']."</option>";}?>
																			</select>
																		</td>
																	</tr>
																</table>
															
															</td>
															<td>
																<table>
																	<tr>
																		<td align="right">
																			<strong>Doctor :</strong>
																		</td>
																		<td>
																			<select id="select_doctor" name="select_doctor">
																				<?php for($i=0; $i<count($doctor); $i++){echo "<option value=".$i.">".$doctor[$i]['name']."</option>";}?>
																			</select>
																			<br><span style="color : RED"><?php echo $doctor_err;?></span>
																		</td>
																	</tr>
																</table>
															</td>
															<td>
																<table>
																	<tr>
																		<td colspan="2" align="center">
																		<!--	<input id="add_doctor" type="submit" value="Add" onclick="add()">  -->
																		</td>
																	</tr>
																</table>
															</td>
															
														</tr>
														
													</table>
												</div>
											</td>
										</tr>	
									</table>
								</fieldset>
									
									
								</td>
							</tr>
							
									
							<tr>
								<td >
									<table border="0" align="center">
                                    	<tr>
											<td colspan="2" align="center">
											<div id ="d_name">
												
											</div>
											</td>
										</tr>
										<tr>
											<td align="center" width="30%">
												<strong>chamber:</strong>
											</td>
											<td>
												<select name="chamber">
													<option value="">Select one</option>
													<option value="online">gulshan</option>
													<option value="direct">banani </option>
												</select>
											<!--	<br><span style="color : RED"><?php echo $appointment_type_err;?></span> -->
											</td>
										</tr>
										<tr>
											<td align="center" width="30%">
												<strong>Appointment Type:</strong>
											</td>
											<td>
												<select name="appointment_type">
													<option value="">Select one</option>
													<option value="online">Online</option>
													<option value="direct">Direct Communication </option>
												</select>
												<br><span style="color : RED"><?php echo $appointment_type_err;?></span>
											</td>
										</tr>
                                        <tr>
                                            <td width="30%" align="center">
												<strong>Date :</strong>
										    </td>
                                            <td>
												<input type="date" name="date"/>
												<br><span style="color : RED"><?php echo $date_err;?></span>
                                                (when you wish to meet)
                                            </td>
                                        </tr>
										<tr>
                                            <td width="30%" align="center">
												<strong>Time :</strong>
										    </td>
                                            <td>
												<input type="time" name="time"/>
												<br><span style="color : RED"><?php echo $time_err;?></span>
                                                (when you wish to meet)
                                            </td>
                                        </tr>
										
                                    </table> 
                           		</td>
								<td>
									<div width="100%" align="center" valign="top">
								      <table border="0" width="100%" height="100%">
										<tr>
                                            <td>
												<label>Problems :</label>
												<textarea name="problem"rows="4" cols="50"></textarea>
												<br><span style="color : RED"><?php echo $problem_err;?></span>
											</td>
                                        </tr>
								      </table>
									</div>  
								</td>
                           	</tr>
                           </table>
						   <hr/>
									<input align="center" name="submit" type="submit" value="Request"/>
									</form>
									<a href="appointmentstatus.php">Go to Appoint Status</a>
						   </fieldset>
                        </td>
						</div>
						</tr>
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
		
	</script>
</body>

</html>
