<?php 
    session_start();
	if(!isset($_SESSION['patient_username']) || empty($_SESSION['patient_username'])){
		  header("location: ../Login.php");
		  exit;
		}
	
	
	$con = mysqli_connect("localhost", "root", "", "mediportal_db");
	if (!$con) {
		die("Connection failed: " . mysqli_connect_error());
	} 
?>



<?php
$err1=false;
$err2=false;
$err3=false;
$err4=false;
$doctor_err=$problem_err=$date_err=$time_err=$appointment_type_err="";
 

 
 if(isset($_POST['submit'])){
			$doctor = $_POST['user'];
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
		
		$conn = mysqli_connect("localhost", "root", "", "mediportal_db", 3306);
		/*doctor id*/ 
		$sql1="SELECT `doctor_id` FROM `doctor` WHERE `username`='".$doctor."'";
		$result = mysqli_query($conn, $sql1);
	
		while(($row = mysqli_fetch_assoc($result))!=null){ 
			$doctor_id =$row['doctor_id'];
											
							
		}
		
		/*member id*/
		$sql2="SELECT `member_id` FROM `member` WHERE `username`= '".$_SESSION['patient_username']."';";
		$result = mysqli_query($conn, $sql2);
	
		while(($row = mysqli_fetch_assoc($result))!=null){ 
			$member_id =$row['member_id'];
											
							
		}
		
		
		/*chamber
		
		$sql3="SELECT `name` FROM `chamber` WHERE `doctor_id`='".$doctor_id."'";
		$result = mysqli_query($conn, $sql3);
	
		
		while(($row = mysqli_fetch_assoc($result))!=null){ 
			$chamber =$row['name'];
								
							
		}*/
		
		
		
	
		$sql ="INSERT INTO appointment(doctor_id, member_id, date, time, status,problem,appointment_type) VALUES ('$doctor_id','$member_id','$date','$time','pending','$problem','$appointment_type')";
	
		$result = mysqli_query($conn, $sql);
		header("location: appointmentstatus.php");
		exit;
		
	mysqli_close($conn);
	}
	
	
	
	
 }


?>

<html>
	<script type="text/javascript">
		function showHint(choice) {
			var  xmlhttp = new XMLHttpRequest();
			var str=document.getElementById(choice).value;	
			//document.getElementById("spinner").style.visibility= "visible";
			xmlhttp.onreadystatechange = function() {
				//alert(xmlhttp.rxmlhttpeadyState);
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {			
						//document.getElementById("spinner").style.visibility= "hidden";
					var m=document.getElementById("usrname");
					m.innerHTML=xmlhttp.responseText;;
				}
			};
 	var url="server.php";
	var title = document.fm.title.value;
	//var dept = document.fm.department.value;
	var dept;
	if(title != null ) {
		dept = document.fm.dept.value;
	}else {
		dept = " ";
	}
	
	url=url+"?tit="+title;
	url=url+"&dpt="+dept;
	//alert(url);
	xmlhttp.open("GET", url,true);
	xmlhttp.send();
		}
	</script>

<html>

<head>
	<title>New Appoitnment</title>
	
</head>

<body>
	<form action="" name="fm" method="post">
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
                                <td><a href="viewprofile.php"><?php echo $_SESSION['patient_username'];?><img src="images/user.png"></a></td>
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
								<select name="dept" id="dept" onchange="showHint('dept')">
									<option selected value="">---</option>
					<?php 
						$doc_department = "select distinct(department) from professional_info";
						$dept_result = mysqli_query($con, $doc_department)or die(mysqli_error());
						while($dept_row = mysqli_fetch_assoc($dept_result)) {
					?>
							<option value="<?php echo $dept_row['department']; ?>"><?php echo $dept_row['department']; ?></option>
							
					<?php } ?>
		
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
								<select name="title" id="title" onchange="showHint('title')">
	                                    <option selected value="">---</option>
					<?php 
						$doc_title = "select distinct(title) from professional_info";
						$title_result = mysqli_query($con, $doc_title)or die(mysqli_error());
						while($title_row = mysqli_fetch_assoc($title_result)) {
					?>
					<option value="<?php echo $title_row['title']; ?>"><?php echo $title_row['title']; ?></option>
					<?php } ?>
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
																			<td>Doctor name</td>
					<td>
						<div id="usrname" >
						</div>
					</td>
																		</td>
																	</tr>
																	</table>
																</td>

																	<td>
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
								<!--	<tr>
											
											<td align="center" width="30%">
												<strong>chamber:</strong>
											</td>
											<td>
												<select name="chamber">
													<option value="">Select one</option>
													<option> gulshan</option>												
													</select>
												<br><span style="color : RED"><?php echo $appointment_type_err;?></span> 
											</td>
											
										</tr>
								-->
                                        <tr>
                                            <td width="30%" align="center">
												<strong>Date :</strong>
										    </td>
                                            <td>
												<input type="date" name="date"/>
												<br><span style="color : RED"><?php echo $date_err;?></span>
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
<?php 
	//print_r($_POST);
	mysqli_close($con);

?>