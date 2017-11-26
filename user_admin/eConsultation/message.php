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
              <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST'){

                   // Need to set sender      Need to work on cookie                                      
                  $sender = "Jitu";
                  $to = $_POST['to_mail'];
                  $subject = $_POST['subject'];
                  $body = $_POST['body'];

                  if(trim($subject) == "")
                    $subject = "No Subject";

                  include 'php/sendMessage.php';

                  if(!empty($to) && !empty($body)){
                    if (sendMessage($sender, $to, $subject, $body)) {
                      print "<p>Message sent successfully</p>";
                    } else {
                      print "<p>Cannot sent message.</p>";
                    } 
                  }
                  else {
                      print "<p>Please fix and try again !!</p>";
                  }
                  if(empty($to))    print "<p>Enter recipient</p>";
                  if(empty($body))  print "<p>Message body cannot be empty !!</p>";

                  unset($_POST);
                  $subject = "";
                }
              ?>	
              <form action="" method="post">
                
                <fieldset>
                              <legend align="center"><h4>Type a message here</h4></legend>
                               <fieldset>
                                             <legend>New Message</legend>
                                             <table>
                                             <tr>
                                                 <td width="5%" align="center">To</td><td>:</td>
                                                 <td ><input  type="text" name="to_mail"/></td>
                                             </tr>
                                             <tr><td colspan="3"><hr></td></tr>
                                             <tr>
                                                 <td width="5%" align="center">Subject</td><td>:</td>
                                                 <td><input type="text" name="subject"></td>
                                             </tr>
                                              <tr><td colspan="3"><hr></td></tr>
                                             <tr>
                                                <td width="5%" align="center">
                                                 <label>Body</label></td><td>:</td><td ><textarea name="body"></textarea></td>
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
                                              <tr>
                                                  <td><input type="submit" name="Submit" value="Send Message"></td>
                                              </tr>
                                             </table>
                                         </fieldset>  
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
                        <td>&copy;2017 MediPortal. All rights reserved.</td>
                    </table>
                </div>
            </td>
        </tr>
    </table>
</body>

</html>