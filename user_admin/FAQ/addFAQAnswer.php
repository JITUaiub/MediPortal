<?php
    ini_set('mysql.connect_timeout', 300);
    ini_set('default_socket_timeout', 300);

        if(isset($_GET['time']))
            $time = $_GET['time'];
        if(isset($_GET['date']))
            $date = $_GET['date'];
        $time = addslashes($time);
        $date = addslashes($date);
        $result = null;
        $query = "Select * from `faq` where status = 'Unread' and Time = '$time' and Date = '$date'";    
        $conn = mysqli_connect("localhost", "root", "", "mediportal_db", 3306);
        mysqli_set_charset($conn,"utf8");
        $result = mysqli_query($conn, $query);

        $faqArray = array();
        while(($row = mysqli_fetch_assoc($result))!=null){ 
                    $faqArray[] = array('id'=>$row['id'],'category'=>$row['category'],'author'=>$row['Author'],'question'=>$row['Question'],'answer'=>$row['Answer'],'time'=>$row['Time'],'date'=>$row['Date'], 'status'=>$row['status']);
                    } 
//        var_dump($faqArray);
        $errorMsg = "";
        if(isset($_POST['submit'])){
            if($_POST['answer'] == ""){
                $errorMsg = "Must need to add an answer";
            }else{
                $errorMsg = "";

                $query = "update faq set Answer = '".addslashes($_POST['answer'])."'";
                mysqli_query($conn, $query);
                $query = "update faq set status = 'Read'";
                mysqli_query($conn, $query);

                header("location: requestedFAQ.php");
                exit;
            }
        }
        if(isset($_POST['goBack'])){
            if($_POST['answer'] == ""){
                header("location: requestedFAQ.php");
                exit;
            }
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
                                <li><a href="newFAQ.php">New FAQ</a></li>
                                <li><a href="requestedFAQ.php">User Requested FAQ</a></li>
                                <li><a href="manageFAQ.php">Manage FAQ</a></li>
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
                       		 	<!-- FAQ DESIGN -->

                                <form action="" method="post">
                                    <h1 align="center">Add an answer to this FAQ</h1>
                                    <?php
                                        echo "<p align=\"center\">Category: ";
                                            echo $faqArray[0]['category'];
                                            echo "<br>";
                                            echo "Author: ";
                                            echo $faqArray[0]['author'];
                                            echo "<br>";
                                            echo "Asked on: ";
                                            echo $faqArray[0]['date'];
                                            echo "<br>";
                                            echo "Asked time: ";
                                            echo $faqArray[0]['time'];
                                        echo "</p>";
                                        echo "<p align=\"center\" width=\"40%\">";
                                            echo "<br><fieldset><legend align=\"center\"><b>QUESTION</b></legend>";
                                            echo $faqArray[0]['question'];
                                            echo "</fieldset><br>";
                                        echo "</p>";
                                    ?>
                                    <br>

                                    <strong>Add an answer to this question.</strong><br><br>
                                    <textarea name="answer"></textarea><br><div style="color: RED"><?php echo $errorMsg; ?></div><br>
                                    <input type="submit" name="submit" value="Submit Answer"><br><br>
                                    <div align="center"><input type="submit" name="goBack" value="Go Back"></div>
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