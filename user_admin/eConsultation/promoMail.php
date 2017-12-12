
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
                                <td><a href="../../index.html">Logout<img src="../images/logout.png"></a></td>
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
                    <table width="100%" border="1">
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
                                <li><a href="../reportedUsers.php">Reported Users</a></li>
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
                                <li><a href="../changepassword.html">Change Password</a></li>
                                <li><a href="../../index.html">Logout</a></li>
                            </ul>
                        </fieldset>
                        </td>
                        <div align="center">
                             <td width="70%" align="center">
                                <!------ UI  -->
                              
              <form action="" method="post">
                              <h1>Promotional Email</h1>
                              <legend align="center"><h4>Type a message here</h4></legend>
                               <fieldset>
                                             
                                             <table>
                                             <tr>
                                                 <td align="center">To</td><td>:</td>
                                                 <td align="left"><select>
                                                    <option>All Doctors</option>
                                                    <option>All General Users</option>
                                                    <option>All Blood Donors</option>
                                                    <option>All Blocked User</option>
                                                 </select></td>
                                             </tr>
                                             <tr><td colspan="3"><hr></td></tr>
                                             <tr>
                                                 <td align="center">Subject</td><td>:</td>
                                                 <td><input type="text" name="subject" value="Welcome"></td>
                                             </tr>
                                              <tr><td colspan="3"><hr></td></tr>
                                             <tr>
                                                <td align="center">
                                                 <label>Body</label></td><td>:</td><td ><textarea name="body">Welcome to MediPortal. Your online doctor.</textarea></td>
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
                                             <input type="checkbox" name="replyflag" checked="true"> Turn off reply to this mail<br><br>
                                             <input type="submit" name="Submit" value="Send Message"><br/><br/>
                                             <a href="../reportsAdmin.php">Back to overall statistic</a>
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