<?php 
    session_start();


     $conn = mysqli_connect("localhost", "root", "","mediportal_db");
   
             if (!$conn) {
         die("Connection failed: " . mysqli_connect_error()); 
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
                                            <b>OVERALL | STATISTICS</b>
                                        </td>
                                        <td align="right">
                                            <input type="submit" value="Print"/>
                                        </td>
                                    </tr>
                                </table>
                            </fieldset>
                            <br/>
                        <table width="100%" cellspacing="0" border="1" cellpadding="5">
                            <tr>
                                <th align="left">ROLE</th>
                                <th align="center" width="110">NO OF USERS</th>
                            </tr>
                            <tr>
                                <td>Doctors</td>
                                <?php 

                                 $count_doctors="select count(*) from doctor";
                                 $result = mysqli_query($conn, $count_doctors)or die(mysqli_error($conn)); 
                                 $row = mysqli_fetch_assoc($result);

                                 ?>
                                <td align="center"><?php echo $row['count(*)'] ?></td>        
                            </tr>
                            
                            <tr>
                                <td>General Users</td>
                                <?php 

                                 $count_members="select count(*) from member";
                                 $result = mysqli_query($conn, $count_members)or die(mysqli_error($conn)); 
                                 $row = mysqli_fetch_assoc($result);

                                 ?>
                                <td align="center"><?php echo $row['count(*)'] ?></td>        
                            </tr>
                            <tr>
                                <td>Blood Donors</td>
                                <?php 

                                 $count_blood_donars="select count(*) from blood";
                                 $result = mysqli_query($conn, $count_blood_donars)or die(mysqli_error($conn)); 
                                 $row = mysqli_fetch_assoc($result);

                                 ?>
                                <td align="center"><?php echo $row['count(*)'] ?></td>        
                            </tr>
                        </table>
                                <br><br>
                                <table width="100%" cellspacing="0" border="1" cellpadding="5">
                                    <tr>
                                        <th align="left">BLOCKED USER</th>
                                        <th align="right">Date: <input type="date" name="blockdate1" value="2013-01-08"> to <input type="date" name="blockdate2" value="2013-01-08"> <button>Go</button></th>
                                        <th align="center" width="110">NO OF USERS</th>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Doctors</td>
                                        <?php 

                                 $count_blocked_doctors="select count(*) from doctor where account_status='blocked'";
                                 $result = mysqli_query($conn, $count_blocked_doctors)or die(mysqli_error($conn)); 
                                 $row = mysqli_fetch_assoc($result);

                                 ?>
                                        <td align="center"><?php echo $row['count(*)'] ?></td>        
                                    </tr>
                                    <tr>
                                        <td colspan="2">General Users</td>
                                         <?php 

                                 $count_blocked_users="select count(*) from member where account_status='blocked'";
                                 $result = mysqli_query($conn, $count_blocked_users)or die(mysqli_error($conn)); 
                                 $row = mysqli_fetch_assoc($result);

                                 ?>
                                        <td align="center"><?php echo $row['count(*)'] ?></td>        
                                    </tr>
                                    <tr>
                                        <td colspan="2">Blood Donors</td>
                                        <?php 

                                 $count_blocked_blood_donar="select count(*) from blood where status='blocked'";
                                 $result = mysqli_query($conn, $count_blocked_blood_donar)or die(mysqli_error($conn)); 
                                 $row = mysqli_fetch_assoc($result);

                                 ?>
                                        <td align="center"><?php echo $row['count(*)'] ?></td>        
                                    </tr>
                                </table>
                                <br><br>
                                <table width="100%" cellspacing="0" border="1" cellpadding="5">
                                    <tr>
                                        <th align="left">USER'S ACTIVITY</th>
                                        <th align="center" width="110">NO OF USERS</th>
                                    </tr>
                                    <tr>
                                        <td>Active Users</td>
                                        <td align="center">58</td>        
                                    </tr>
                                    <tr>
                                        <td>Last Login before 1 months</td>
                                        <td align="center">12</td>        
                                    </tr>
                                    <tr>
                                        <td>Last Login before 3 months</td>
                                        <td align="center">6</td>        
                                    </tr>
                                </table><br><br>
                                Want to send a Greetings or any NOTICE ?<br>
                                <a href="eConsultation/promoMail.php">Send Promotional Emails</a>
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
<?php mysqli_close($conn); ?>