<html>

<head><title>Home</title></head>

<body>
    <table border="1" align="center" width="70%">
        <tr>
            <td>
                <!-- Header section -->
                <div>
                    <table align="center" width="100%">
                        <td width="20%">
                            <img src="../images/pageicon.png"/>
                        </td>
                        <td width="40%">&nbsp;</td>
                        <td width="40%">
                            <table align="right">
                                <td><strong>Logged in as </strong></td>
                                <td><a href="../viewprofile.php">Bob<img src="../images/user.png"></a></td>
                                <td><hr width="1" size="15"></td>
                                <td><a href="../../index.html">Logout<img src="../images/logout.png"></a></td>
                            </table> 
                        </td>
                    </table>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div>
                    
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <!-- Body section -->
               <div>
                    <table width="100%">
                        <!-- User Menu Section -->
                        <td width="30%">
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
                            <strong>Monitoring Users</strong></legend>
                           
                            <ul>
                                <li><a href="../normalUsers.php">General Users</a></li>
                                <li><a href="../doctorUsers.php">Doctor</a></li>
                            </ul>
                        </fieldset>


                        <fieldset>
                            <legend>
                            <strong>Reports</strong></legend>
                           
                            <ul>
                                <li><a href="../reportsNormalUsers.php">General Users Statistics</a></li>
                                <li><a href="../reportsDoctorUsers.php">Doctor's Statistics</a></li>
                                <li><a href="../reportsAdmin.php">Overall User Statistics</a></li>
                            </ul>
                        </fieldset>
                        
                        
                        <fieldset>
                            <legend>
                            <strong>Email</strong></legend>
                           
                            <ul>
                                <li><a href="message.php">New Message</a></li>
                                <li><a href="inbox.php">Inbox</a></li>
                                <li><a href="sentitems.php">Sent Items</a></li>
                            </ul>
                        </fieldset>


                        <fieldset>
                            <legend>
                            <strong>Account</strong></legend>
                           
                            <ul>
                                <li><a href="../changepassword.html">Change Password</a></li>
                                <li><a href="../../index.html">Logout</a></li>
                            </ul>
                        </fieldset>
                        </td>
                    


                    <div align="center">
                        <td width="70%" align="center">
							<fieldset>
                                <legend align="center"><h4>Sent Items</h4></legend>
                                <table border="0" width="100%">
                                    <tr>
                                        <td align="center">
                                             <strong>Recipient</strong>
                                        </td>
                                        <td align="center">
                                             <strong>Subject</strong>
                                        </td>
                                        <td align="center">
                                             <strong>Message</strong>
                                        </td>
                                        <td align="center">
                                             <strong>Time / Date</strong>
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
                                            <strong>testDev</strong>
                                        </td>
                                        <td align="center">
                                            <strong>Testing<strong>
                                        </td>
                                        <td align="center">
                                             <strong>Hello developer !!</strong>
                                        </td>
                                        <td align="center">
                                             <strong>3:06AM / 24-11-2017</strong>
                                        </td>
                                        <td align="center">
                                            <input type="checkbox" name="action">
                                        </td>
                                    </tr>
                                    
                                    <tr><td colspan="5"><hr></td></tr>
                                </table>
                            </fieldset>
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
                        <td>&copy;2017 MediPortal. All rights reserved.</td>
                    </table>
                </div>
            </td>
        </tr>
    </table>
</body>

</html>