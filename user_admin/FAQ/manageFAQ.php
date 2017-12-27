<?php
    ini_set('mysql.connect_timeout', 300);
    ini_set('default_socket_timeout', 300);

    $selectMsg = "";
    $conn = mysqli_connect("localhost", "root", "", "mediportal_db", 3306);
    mysqli_set_charset($conn,"utf8");

    $faqArray = array();
    if(isset($_POST['selectCategory'])){
        $selectMsg = "";
        $query = "Select * from `faq` where category = '". $_POST['category'] ."' and status = 'Read'"; 
        $result = mysqli_query($conn, $query);

        while(($row = mysqli_fetch_assoc($result))!=null){ 
                    $faqArray[] = array('id'=>$row['id'],'author'=>$row['Author'],'question'=>$row['Question'],'answer'=>$row['Answer']);
                    }
//        var_dump($faqArray);
    }else{
        $selectMsg = "<br/><br/><h1>Please select a category first.</h1>";
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
                                    <fieldset>
                                         <legend><b>FAQ | SEARCH</b></legend>
                                         Select a category: 
                                         <select name="category">
                                             <option>Mediportal</option>
                                             <option>Appointments</option>
                                             <option>Econsultation</option>
                                             <option>Price and Fees</option>
                                         </select>
                                         <input type="submit" name="selectCategory" value="Select"><br><br>
                                          Search Question: <input value="What is" />
                                        <input type="submit" name="search" value="Search" />
                                        Results show per page: <select>
                                            <option>10</option>
                                            <option>20</option>
                                            <option>30</option>
                                        </select>
                                        <button">Go</button>
                                        <div><?php echo $selectMsg; ?></div>
                                        <?php
                                            for ($i=0; $i < count($faqArray); $i++) { 
                                                echo "<h1>";
                                                echo $faqArray[$i]['question'];
                                                echo "</h1><b>Author: </b>";
                                                echo $faqArray[$i]['author'];
                                                echo "<br/><a href=\"editFAQ.php?faqID=";
                                                echo $faqArray[$i]['id'];
                                                echo "\"/>Edit</a><br><hr><p>";
                                                echo $faqArray[$i]['answer'];
                                                echo "</p>";
                                            }
                                        ?>
                                    </fieldset>
                                </form>

                                    <!--     FAQ Question will show here -->

                                    <!--     FAQ  END here -->
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