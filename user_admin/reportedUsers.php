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
                                    <h1>Review Users Report</h1>
                                
                                <table width="100%">
                                    <tr>
                                        <td align="center">
                                             <strong>Reported By</strong>
                                        </td>
                                        <td align="center">
                                             <strong>Reported for</strong>
                                        </td>
                                        <td align="center">
                                             <strong>Subject</strong>
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
                                    <tr>
                                        <td align="center">
                                            <strong>Ashley</strong>
                                        </td>
                                        <td align="center">
                                            <strong>Bob<strong>
                                        </td>
                                        <td align="center">
                                             <a href="reportReview.php"><strong>Harrasement <img src="images/newStatus.png"></strong></a>
                                        </td>
                                        <td align="center">
                                             <strong>3:06AM | 24-11-2017</strong>
                                        </td>
                                        <td align="center">
                                            <strong><input type="checkbox" name="action"></strong>
                                        </td>
                                    </tr>
                                    
                                    <tr><td colspan="5"><hr></td></tr>

                                    <tr>
                                        <td align="center">
                                            Marsh
                                        </td>
                                        <td align="center">
                                            John
                                        </td>
                                        <td align="center">
                                             <a href="reportReview.php">fake medicine</a>
                                        </td>
                                        <td align="center">
                                             9:27AM | 23-11-2017
                                        </td>
                                        <td align="center">
                                            <input type="checkbox" name="action">
                                        </td>
                                    </tr>
                                    
                                    <tr><td colspan="5"><hr></td></tr>

                                    <tr>
                                        <td align="center">
                                            <strong>John</strong>
                                        </td>
                                        <td align="center">
                                            <strong>Ashley<strong>
                                        </td>
                                        <td align="center">
                                        	<a href="reportReview.php"><strong>virus from attachments..</strong></a>
                                             <img src="images/newStatus.png">
                                        </td>
                                        <td align="center">
                                             <strong>1:39PM | 21-11-2017</strong>
                                        </td>
                                        <td align="center">
                                            <strong><input type="checkbox" name="action"></strong>
                                        </td>
                                    </tr>
                                    
                                    <tr><td colspan="5"><hr></td></tr>
                                </table>
                                <button>Previous Page</button><button>Next Page</button>
                                <br>
                                <br>
                                Show Reports Per Page: <select>
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