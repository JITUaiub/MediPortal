<?php 
session_start();

	if(isset($_SESSION['topMember'])){
		unset($_SESSION['topMember']);
	}
	$conn = mysqli_connect("localhost", "root", "","mediportal_db");	
//top appointment
	$app="SELECT COUNT(appointment.member_id) AS no, member.name,member.member_id, member.profile_picture FROM appointment, member WHERE appointment.member_id = member.member_id GROUP BY appointment.member_id ORDER BY COUNT(appointment.member_id) DESC";
	$result = mysqli_query($conn, $app);
	
	$arr=array();
	while(($row = mysqli_fetch_assoc($result))!=null){ 
		$arr[] =array(
				"name"=>$row['name'],
				"member_id"=>$row['member_id'],
				"no"=>$row['no'], "image"=>$row['profile_picture']			
				);	
	}
	for($i=0; $i<count($arr); $i++){
		$_SESSION['topMember'][] = array(
				"name"=>$arr[$i]['name'],
				"member_id"=>$arr[$i]['member_id'],
				"no"=>$arr[$i]['no'], "image"=>$arr[$i]['image']
				);
	}
//	var_dump($_SESSION['topMember']);
//online tretment	
	$online="SELECT COUNT(appointment.member_id) AS no, member.name,member.member_id FROM appointment, member WHERE appointment.member_id = member.member_id AND appointment.appointment_type LIKE 'online' GROUP BY appointment.member_id ORDER BY COUNT(appointment.member_id) DESC";
	$result = mysqli_query($conn, $online);
	$trt=array();
	while(($row = mysqli_fetch_assoc($result))!=null){ 
		$trt[] =array(
				"name"=>$row['name'],
				"member_id"=>$row['member_id'],
				"no"=>$row['no']			
				);
	}
	
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
                                        <fieldset>
                                            <table width="100%" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td>
                                                        <b>General Users | STATISTICS</b>
                                                    </td>
                                                    <td>Date: <input name="blockdate1" value="2013-01-08" type="date">
                                                        to <input name="blockdate2" value="2013-01-08" type="date">
                                                        <button>Go</button></td>
                                                    <td align="right">
                                                        <input type="submit" value="Print"/>
                                                    </td>
                                                </tr>
                                            </table>
                                        </fieldset>
                                        <br/>
				<!--    appointment statistic    start                     -->
                                        
										<table border="1" align="center" width="100%" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <th width="80%">TOP 3 TOTAL APPOINTMENT</th>
                                                <th>NO of appointment</th>
                                            </tr>
                                            <?php if($arr!=null){ for($i=0;$i<3;$i++){ ?>
											<tr>
												<td align="center"><a href="normalUserDetails.php?mid=<?= $arr[$i]['member_id']?>"><?= $arr[$i]['name']?></a></td>
												<td align="center"><?= $arr[$i]['no']?></td>
											</tr>
											<?php }}else{echo "<tr><td colspan='2'> there is no data</td></tr>";} ?>	
                                            
                                        </table>
		 	<!--    appointment statistic    end                     -->	
                                        <br><br>
                                        
										<table border="1" align="center" width="100%" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <th width="80%">TOP 3 E-CONSULTATION TREATMENT</th>
                                                <th>NO of Occurence</th>
                                            </tr>
                                            <?php if($arr!=null){ for($i=0;$i<3;$i++){ ?>
											<tr>
												<td align="center"><a href="normalUserDetails.php?mid=<?= $trt[$i]['member_id']?>"><?= $trt[$i]['name']?></a></td>
												<td align="center"><?= $trt[$i]['no']?></td>
											</tr>
											<?php }}else{echo "<tr><td colspan='2'> there is no data</td></tr>";} ?>
                                        </table>
										
										
										<br><br>
                      <!--                  <table border="1" align="center" width="100%" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <th width="80%">TOP 3 BLOOD DONOR</th>
                                                <th>Times of donation</th>
                                            </tr>
                                            <tr>
                                                <td width="80%" align="center"><a href="normalUserdetails.php">Ashley</a></td>
                                                <td align="center">25</td>
                                            </tr>
                                            <tr>
                                                <td width="80%" align="center"><a href="normalUserdetails.php">Shaun</a></td>
                                                <td align="center">16</td>
                                            </tr>
                                            <tr>
                                                <td width="80%" align="center"><a href="normalUserdetails.php">John</a></td>
                                                <td align="center">5</td>
                                            </tr>
                                            <tr>
                                                <td width="80%" align="center"><strong>Total</strong></td>
                                                <td align="center">46</td>
                                            </tr>
                                        </table>
						-->	
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
