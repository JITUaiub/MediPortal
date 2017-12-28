<?php
    ini_set('mysql.connect_timeout', 300);
    ini_set('default_socket_timeout', 300);
    session_start();

    $sql="select senderName, RecipientName, ChatID, Subject, Status from inbox where senderName = '". $_SESSION['admin_username']. "' order by ChatID desc";
    $conn = mysqli_connect("localhost", "root", "", "mediportal_db", 3306);
    mysqli_set_charset($conn,"utf8");
    $result = mysqli_query($conn, $sql);

    $inbox_array = array();
     while(($row = mysqli_fetch_assoc($result))!=null){ 
                                $inbox_array[] = array('senderName'=>$row['senderName'],'RecipientName'=>$row['RecipientName'],'ChatID'=>$row['ChatID'],'Subject'=>$row['Subject'],'Status'=>$row['Status']);
            }  
            //var_dump($inbox_array);
    //$sql="select * from messages where chatID = 1 order by date desc, time desc limit 1";
    $sql="select * from messages";      
    $conn = mysqli_connect("localhost", "root", "", "mediportal_db", 3306);
    mysqli_set_charset($conn,"utf8");
    $result = mysqli_query($conn, $sql);

    $message_array = array();
     while(($row = mysqli_fetch_assoc($result))!=null){ 
                                $message_array[] = array('chatID'=>$row['ChatID'],'body'=>$row['Body'],'attachment'=>$row['attachment'],'time'=>$row['Time'],'date'=>$row['Date']);
            }

    //var_dump($message_array);

    if(isset($_POST['prev'])){

    }

    if(isset($_POST['next'])){
        
    }

    if(isset($_POST['search'])){
        
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
                            <strong>FAQ Section</strong></legend>
                           
                            <ul>
                                <li><a href="../FAQ/newFAQ.php">New FAQ</a></li>
                                <li><a href="../FAQ/requestedFAQ.php">User Requested FAQ</a></li>
                                <li><a href="../FAQ/manageFAQ.php">Manage FAQ</a></li>
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
                                <h1>Sent Items</h1>
                                <strong>Search Message: </strong><input type="text" name="senderName" value="Sender Name">
                                <input type="submit" name="search" value="Search"><br><br>
                                <table width="100%">
                                    <tr>
                                        <td align="center">
                                             <strong>Receiver</strong>
                                        </td>
                                        <td align="center">
                                             <strong>Subject</strong>
                                        </td>
                                        <td align="center">
                                             <strong>Message</strong>
                                        </td>
                                        <td align="center">
                                             <strong>Time | Date</strong>
                                        </td>
                                        <td align="center">
                                            <strong>Attachment</strong>
                                        </td>
                                        <td align="center">
                                             <strong>
                                                <select >
                                                    <optgroup label="Actions">
                                                        <option selected="true" value="all">Select none</option>
                                                        <option value="all">Select all</option>
                                                        <option value="none">Revert selected</option>
                                                        <option value="read">Mark as read</option>
                                                        <option value="delete">Delete</option>
                                                        </optgroup>
                                                </select>
                                            </strong>
                                        </td>
                                    </tr>
                                    <tr><td colspan="6"><hr></td></tr>
                                    <?php

                                        for($i=0; $i<count($inbox_array); $i++){
                                            echo "<tr>";
                                            echo "<td align=\"center\">";
                                                echo "<strong>".$inbox_array[$i]["RecipientName"]."</strong>";
                                            echo "</td>";
                                            echo "<td align=\"center\">";
                                                echo "<strong>".$inbox_array[$i]["Subject"]."<strong>";
                                            echo "</td>";
                                            echo "<td align=\"center\">";
                                                 echo "<a href=\"conversation.php?ChatID=".($inbox_array[$i]["ChatID"])."\">";
                                                 echo "<strong>";

                                                $sql="select * from messages where chatID = ".($inbox_array[$i]["ChatID"])." order by date desc, time desc limit 1";    
                                                $conn = mysqli_connect("localhost", "root", "", "mediportal_db", 3306);
                                                mysqli_set_charset($conn,"utf8");
                                                $result = mysqli_query($conn, $sql);

                                                $m_array = array();
                                                 while(($row = mysqli_fetch_assoc($result))!=null){ 
                                                                            $m_array[] = array('body'=>$row['Body']);
                                                        }
                                                 echo $m_array[0]["body"];
                                                 echo "</strong></a>";
                                                 if($inbox_array[$i]["Status"] == "Unread")
                                                    echo"<img src=\"../images/newStatus.png\"/>";
                                            echo "</td>";
                                            echo "<td align=\"center\">";
                                                 echo "<strong>".$message_array[$i]["time"]." | ".$message_array[$i]["date"]."</strong>";
                                            echo "</td>";
                                            echo "<td align=\"center\">";
                                                echo "<strong>";
                                                    if($message_array[$i]["attachment"] == "")
                                                        echo "No attachment";
                                                    else 
                                                        echo '<img height="40" width="40" src="data:image;base64, '.$message_array[$i]["attachment"].'"/>';
                                                echo "</strong>";
                                            echo "</td>";
                                            echo "<td align=\"center\">";
                                                echo "<strong><input type=\"checkbox\" name=\"action\"></strong>";
                                            echo "</td>";
                                        echo "</tr>";
                                        
                                        echo "<tr><td colspan=\"6\"><hr></td></tr>";
                                        }
                                    ?>
                                </table>
                                <button>Previous Page</button><button>Next Page</button>
                                <br>
                                <br>
                                Show Email Per Page: <select>
                                    <option>10</option>
                                    <option>20</option>
                                    <option>30</option>
                                </select>
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