<?php
    ini_set('mysql.connect_timeout', 300);
    ini_set('default_socket_timeout', 300);
        $emptyFaq = "";
        $result = null;
        $query = "Select * from `faq` where status = 'Unread'";    
        $conn = mysqli_connect("localhost", "root", "", "mediportal_db", 3306);
        mysqli_set_charset($conn,"utf8");
        $result = mysqli_query($conn, $query);

        $faqArray = array();
        while(($row = mysqli_fetch_assoc($result))!=null){ 
                    $faqArray[] = array('id'=>$row['id'],'category'=>$row['category'],'author'=>$row['Author'],'question'=>$row['Question'],'answer'=>$row['Answer'],'time'=>$row['Time'],'date'=>$row['Date'], 'status'=>$row['status']);
                    }
        if(empty($faqArray)){
            $emptyFaq = "<h1 align=\"center\">No New Frequently Asked Question</h1>";
        }else{
            $emptyFaq = "";
        }
//        var_dump($faqArray);
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

                                <h1>Frequently Asked Questions</h1>
                                
                                <table width="100%">
                                    <tr>
                                        <td align="center"><strong>Category</strong></td>
                                        <td align="center">
                                             <strong>Question</strong>
                                        </td>
                                        <td align="center">
                                             <strong>Time | Date</strong>
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
                                    <tr><td colspan="5"><hr></td></tr>
                                    <tr><td colspan="5"><div><?php echo $emptyFaq; ?></div></td></tr>
                                    <?php

                                        for ($i=0; $i < count($faqArray); $i++) { 
                                            echo "<tr>";
                                            echo "<td align=\"center\"><strong>";
                                            echo $faqArray[$i]['category'];
                                            echo "</strong></td>";
                                            echo "<td align=\"center\">";
                                                 echo "<a href=\"addFAQAnswer.php?";
                                                 echo "time=";echo $faqArray[$i]["time"];
                                                 echo "&date=";echo $faqArray[$i]["date"];
                                                 echo "\"><strong>";
                                                 echo $faqArray[$i]['question'];
                                                 echo "</strong></a>  <img src=\"../images/newStatus.png\">";
                                            echo "</td>";
                                            echo "<td align=\"center\">";
                                                 echo "<strong>";
                                                 echo $faqArray[$i]['time'];
                                                 echo " | ";
                                                 echo $faqArray[$i]['date'];
                                                 echo "</strong>";
                                            echo "</td>";
                                            echo "<td align=\"center\">";
                                                echo "<strong><input type=\"checkbox\" name=\"action\"></strong>";
                                            echo "</td>";
                                            echo "</tr>";
                                            
                                            echo "<tr><td colspan=\"4\"><hr></td></tr>";
                                        }
                                    ?>
                                </table>
                                <button>Previous Page</button><button>Next Page</button>
                                <br>
                                <br>
                                Show Reports Per Page: <select>
                                    <option>10</option>
                                    <option>20</option>
                                    <option>30</option>
                                </select>

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