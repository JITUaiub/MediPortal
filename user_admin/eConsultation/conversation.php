<?php
	ini_set('mysql.connect_timeout', 300);
	ini_set('default_socket_timeout', 300);
	session_start();
	if(isset($_GET['ChatID'])){$_SESSION['ChatID'] = $_GET['ChatID'];}

	$sql="select * from messages where ChatID =". $_SESSION['ChatID'];		
	$conn = mysqli_connect("localhost", "root", "", "mediportal_db", 3306);
	mysqli_set_charset($conn,"utf8");
	$result = mysqli_query($conn, $sql);

	$message_array = array();
	 while(($row = mysqli_fetch_assoc($result))!=null){ 
								$message_array[] = array('chatID'=>$row['ChatID'],'body'=>$row['Body'],'attachment'=>$row['attachment'],'time'=>$row['Time'],'date'=>$row['Date']);
			}

	$conn = mysqli_connect("localhost", "root", "", "mediportal_db", 3306);
			$query = "UPDATE inbox SET inbox.Status = 'Read' where inbox.ChatID = {$_SESSION['ChatID']}";

			mysqli_query($conn, $query);

	$errormsg = "";

	if(isset($_POST['reply'])){
		if($_POST['body'] == "")
			$errormsg = "Type a message";
		else
		{
			$conn = mysqli_connect("localhost", "root", "", "mediportal_db", 3306);
			$errormsg = "";
			$time = date("h:i:sa");
			$date = date("l").' '.date("Y-m-d");
			$query = "INSERT INTO `messages` (`ChatID`, `Body`, `attachment`, `Time`, `Date`) VALUES ({$_SESSION['ChatID']}, '{$_POST['body']}', '', '{$time}', '{$date}')";

			mysqli_query($conn, $query);
			header("location: conversation.php");
			exit();
		}
	}
	if (isset($_POST['report'])) {
		//SELECT inbox.SenderName FROM inbox WHERE inbox.ChatID = messages.ChatID
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
                            <a href="../dashboard.php"><img src="../images/pageicon.png"/></a>
                        </td>
                        <td width="40%">&nbsp;</td>
                        <td width="40%">
                            <table align="right">
                                <td><strong>Logged in as </strong></td>
                                <td><a href="../viewprofile.php">Bob<img src="../images/user.png"></a></td>
                                <td><hr width="1" size="15"></td>
                                <td><a href="../../index.php">Logout<img src="../images/logout.png"></a></td>
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
                                <li><a href="../dashboard.php">Dashboard</a></li>
                                <li><a href="../viewprofile.php">View Profile</a></li>
                                <li><a href="../editprofile.php">Edit Profile</a></li>
                                <li><a href="../changeprofilepicture.php">Change Profile Picture</a></li>
                            </ul>
                        </fieldset>

                        <fieldset>
                            <legend>
                            <strong>Manage Users</strong></legend>
                           
                            <ul>
                                <li><a href="../normalUsers.php">General Users</a></li>
                                <li><a href="../doctorUsers.php">Doctors</a></li>
                                <li><a href="../pendingRequest.php">Pending Sign Up Requests</a></li>
                                <li><a href="../reportedUsers.php">Reported Users</a></li>
                            </ul>
                        </fieldset>

                        <fieldset>
                            <legend>
                            <strong>FAQ Section</strong></legend>
                           
                            <ul>
                                <li><a href="../FAQ/newFAQ.php">New FAQ</a></li>
                                <li><a href="../FAQ/requestedFAQ.php">User Requested FAQ</a></li>
                                <li><a href="../FAQ/manageFAQ.php">Manage FAQ</a></li>
                            </ul>
                        </fieldset>
                        <fieldset>
                            <legend>
                            <strong>Reports</strong></legend>
                           
                            <ul>
                                <li><a href="../reportsNormalUsers.php">General Users Statistics</a></li>
                                <li><a href="../reportsDoctorUsers.php">Doctor's Statistics</a></li>
                                <li><a href="../reportsAdmin.php">Overall Statistics</a></li>
                            </ul>
                        </fieldset>
                        
                        
                        <fieldset>
                            <legend>
                            <strong>Email</strong></legend>
                           
                            <ul>
                                <li><a href="../eConsultation/message.php">New Message</a></li>
                                <li><a href="../eConsultation/inbox.php">Inbox</a></li>
                                <li><a href="../eConsultation/sentitems.php">Sent items</a></li>
                                <li><a href="../eConsultation/promoMail.php">Promotional Mail</a></li>
                            </ul>
                        </fieldset>


                        <fieldset>
                            <legend>
                            <strong>Account</strong></legend>
                           
                            <ul>
                                <li><a href="../changepassword.php">Change Password</a></li>
                                <li><a href="../../index.php">Logout</a></li>
                            </ul>
                        </fieldset>
                        </td>
                        <div align="center">
                             <td width="70%" align="center" valign="top">
                                <!------ UI  -->
                                <form method="post" action="" enctype="multipart/form-data">
                                	<h1>Conversation</h1>
                                <p align="center"><a href="viewProfileAdmin.php">Ashley</a><br/>
                                Email: ashley@example.com<br/>
                                Subject: Unknown<br/>
                                Last seen: X moment ago</p>
                                <?php
                                	for($i=0; $i<count($message_array); $i++){
                                		echo "<table width=\"100%\">";
		                                    echo "<tr align=\"";
		                                    if($i%2 == 0)
		                                    	echo "left";
		                                    else
		                                    	echo "right";
		                                    echo "\">";
		                                        echo "<td>".$message_array[$i]["body"];
		                                        if($message_array[$i]["attachment"] != ""){
		                                        	echo "<br/><a href=\"download.php?id=".$message_array[$i]['time']."&sub_id=".$message_array[$i]['date']; echo "\"><img height=\"100\" width=\"100\" src=\"data:image;base64, ".$message_array[$i]["attachment"]."\"/>";
		                                        	echo "</a>";
		                                        }
		                                        echo "</td>";
		                                    echo "</tr>";
		                                    echo "<tr align=\"";
		                                    if($i%2 == 0)
		                                    	echo "left";
		                                    else
		                                    	echo "right";
		                                    echo "\"><td>". $message_array[$i]["time"] ." | ". $message_array[$i]["date"]."</td></tr>";
	                                	echo "</table>";
                                	}
                                ?>
                                <!-- Reply  -->
                                <br><br>
                                <table>
                                    <tr>
                                        <td align="right">Reply to this conversation:</td>
                                        <td width="20%"><textarea name="body"></textarea><br><div><?php echo $errormsg;?></div></td>
                                    </tr>
                                    <script>
                                                function goBack() {
                                                    window.history.back();
                                                }
                                                function report()
                                                {

                                                }
                                    </script> 
                                    <tr>
                                        <td align="left"><a href="inbox.php">Go to inbox</a> |  | <input type="submit" name="report" value="Report This User"></td>
                                        <td align="right"><input type="submit" name="reply" value="Reply"></td>
                                    </tr>
                                </table>


                                </form>
                                
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
                            <img src="../../images/facebook.png">
                             </a>
                         </td>
                            <td>
                                    <a href="https://www.twitter.com/">
                                    <img src="../../images/twitter.png">
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