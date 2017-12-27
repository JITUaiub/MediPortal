<?php
    ini_set('mysql.connect_timeout', 300);
    ini_set('default_socket_timeout', 300);
    $conn = mysqli_connect("localhost", "root", "", "mediportal_db", 3306);
    $questionErr = "";
    $answerErr = "";
    $err1 = false;
    $err2 = false;
    if(isset($_POST['submit'])){   

        $category = $_POST['category'];
        $author = "Admin";
        $question = $_POST['question'];
        $answer = $_POST['answer'];

        $question = addslashes($_POST['question']);
        $answer = addslashes($_POST['answer']);

        if(empty($question)){
            $questionErr = "Must Need a Question";
            $err1 = false;
        }
        else {
            $err1 = true;
            $questionErr = "";
        } 
        if(empty($answer)){
            $answerErr = "Provide an answer";
            $err2 = false;
        }
        else {
            $err2 = true; 
            $answerErr = "";         
        }
//        var_dump($err1);var_dump($err2);
        $time = date("h:i:sa");
        $date = date("l").' '.date("Y-m-d");

        if ($err1 == true && $err2 == true) {
            $query = "INSERT INTO `faq`(`category`, `Author`, `Question`, `Answer`, `Time`, `Date`, `status`) VALUES ('$category','$author','$question','$answer', '$time', '$date', 'Read')";
            var_dump($query);
            mysqli_query($conn, $query);
            header("location: newFAQ.php");
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
                                <h1 align="center">New FAQ</h1>
                                <p align="center"><strong>Fill in the form below</strong></p>
                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                                    <table align="center" width="60%">
                                        <tr>
                                            <td>
                                                <fieldset>
                                        <table align="center">
                                        <tr>
                                            <td>
                                                <strong>Select Category</strong>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <select name="category">
                                                    <option>Mediportal</option>
                                                    <option>Appointments</option>
                                                    <option>Econsultation</option>
                                                    <option>Price and Fees</option> 
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                                <td ><label><strong>Author</strong></label></td>
                                                <td>:</td>
                                                <td ><input type="text" name="Author" value="Admin"></td>
                                            
                                        </tr>
                                        <tr>
                                            <td><label><strong>Write your question</strong></label></td>
                                            <td>:</td>
                                            <td>
                                                <textarea name="question"></textarea><br>
                                                <div style="color: RED"><?php echo $questionErr; ?></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label><strong>Add an Answer</strong></label></td>
                                            <td>:</td>
                                            <td>
                                                <textarea name="answer"></textarea><br>
                                                <div style="color: RED"><?php echo $answerErr; ?></div>
                                            </td>
                                        </tr>
                                        <tr><td colspan="3" align="center"><hr></tr>
                                        <tr>
                                            <td align="right"><input type="submit" name="submit" value="Add FAQ"></td>
                                            <td>|</td>
                                            <td><input type="reset" name="" value="Reset"></td>
                                        </tr>
                                        <tr><td>&nbsp;</td></tr>
                                        <tr><td colspan="3" align="center"><a href="manageFAQ.php">Manage FAQ</a></td></tr>
                                    </table>
                                    </fieldset>
                                            </td>
                                        </tr>
                                    </table>
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