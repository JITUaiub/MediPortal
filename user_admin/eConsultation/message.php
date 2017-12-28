<?php
  session_start();
	ini_set('mysql.connect_timeout', 300);
	ini_set('default_socket_timeout', 300);
//    var_dump($_SESSION);
    $recipientErr = "";
    $bodyErr = "";
    $err1 = false;
    $err2 = false;
    if(isset($_POST['submit'])){   
    	$db_host = 'localhost';
		$db_user = 'root';
		$db_pass = '';

		$db_name = 'mediportal_db';

		$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

        $sender = $_SESSION['admin_username'];
        $to = $_POST['to_mail'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];
        $image = null;

        if(trim($subject) == "")
            $subject = "No Subject";

        if(empty($to)){
            $recipientErr = "Enter recipient.";
            $err1 = false;
        }
        else {
        	$err1 = true;
        	$recipientErr = "";
        } 
        if(empty($body)){
            $bodyErr = "Message body cannot be empty.";
            $err2 = false;
        }
        else {
            $err2 = true; 
            $bodyErr = "";         
        }
        if ($err1 == true && $err2 == true) {
        	$sender = $_SESSION['admin_username'];
	        $recipient = $to;
	       // $subject = $subject;
	        $message = $body;

	        if(getimagesize($_FILES['upload']['tmp_name']) == true) { 
	        	$image = addslashes($_FILES['upload']['tmp_name']);
	        	$name = addslashes($_FILES['upload']['name']);
	        	$image = file_get_contents($image);
	        	$image = base64_encode($image);
	        }
        	$query = "INSERT INTO `inbox` (`SenderName`, `RecipientName`, `Subject`, `Status`) VALUES ('{$sender}', '{$recipient}', '{$subject}', 'Unread')";

			mysqli_query($connection, $query);

			$query = "SELECT MAX(ChatID) from `inbox`";
			$chatID = mysqli_fetch_assoc(mysqli_query($connection, $query));

			$time = date("h:i:sa");
			$date = date("l").' '.date("Y-m-d");
			$query = "INSERT INTO `messages` (`ChatID`, `Body`, `attachment`, `Time`, `Date`) VALUES ({$chatID ["MAX(ChatID)"]}, '{$message}', '{$image}', '{$time}', '{$date}')";

			mysqli_query($connection, $query);

			//$q = "select * from messages";
			//$arr = mysqli_query($connection, $q);
			//while ($row = mysqli_fetch_assoc($arr)) {
			//	echo '<img height="300" width="300" src="data:image;base64, '.$row["attachment"].'"/>';
			//}

			header("location: message.php");
			exit;
        }
        mysqli_close($connection);

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
              			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                              <h1>New Message</h1>
                              <legend align="center"><h4>Type a message here</h4></legend>
                               <fieldset>
                                             
                                             <table>
                                             <tr>
                                                 <td align="center">To</td><td>:</td>
                                                 <td align="left"><input  type="text" name="to_mail" /><br>
                                                 	<div style="color: RED">
                                                 		<?php echo $recipientErr ?>
                                                 	</div>
                                                 </td>
                                             </tr>
                                             <tr><td colspan="3"><hr></td></tr>
                                             <tr>
                                                 <td align="center">Subject</td><td>:</td>
                                                 <td><input type="text" name="subject"></td>
                                             </tr>
                                              <tr><td colspan="3"><hr></td></tr>
                                             <tr>
                                                <td align="center">
                                                 <label>Body</label></td><td>:</td><td ><textarea name="body"></textarea><br>
                                                 	<div style="color: RED">
                                                 		<?php echo $bodyErr ?>
                                                 	</div></td>
                                             </tr>
                                              <tr><td colspan="3"><hr></td></tr>

                                              <tr>
                                                  <td>
                                                      Attachments (X)
                                                  </td>
                                                  <td>:</td>
                                                  <td><input type="file" name="upload"></td>
                                              </tr>
                                              <tr>
                                                  <td>
                                                      &nbsp;
                                                  </td>
                                              </tr>
                                             </table>
                                             <input type="submit" name="submit" value="Send Message"><br/><br/>
                                             <a href="inbox.php">Go to inbox</a>
                                         </fieldset>  
              </form>

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