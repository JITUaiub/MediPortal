<html>

<head><title>Home</title></head>

<body>
	<table border="0" align="center" width="100%">
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
                <div>
                    
                </div>
            </td>
        </tr>
        <tr>
        	<td>
            	<!-- Body section -->
               <div>
                    <table border="1" width="100%">
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
                            <strong>Medical History</strong></legend>
                                <ul>
                                <li><a href="../prevpescriptions.php">Previous Prescriptions</a></li>
                            </ul>
                        </fieldset>

                        <fieldset>
                            <legend>
                            <strong>Appointments Information</strong></legend>
                           
                            <ul>
                                <li><a href="../newappointment.html">New Appointment</a></li>
                                <li><a href="../appointmentstatus.php">Appointment Status</a></li>
                            </ul>
                        </fieldset>


                        <fieldset>
                            <legend>
                            <strong>Reports</strong></legend>
                           
                            <ul>
                                <li><a href="../medianalysis.php">Medicine Analysis</a></li>
                                <li><a href="../disanalysis.php">Disease Analysis</a></li>
                            </ul>
                        </fieldset>

						<fieldset>
                            <legend>
                            <strong>E-consultation</strong></legend>
                           
                            <ul>
                                <li><a href="../eConsultation/message.php">New Message</a></li>
                                <li><a href="../eConsultation/inbox.php">Inbox</a></li>
                                <li><a href="../eConsultation/sentitems.php">Sent Items</a></li>
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
                        <td width="70%" align="center" valign="top">
							 <!------ UI  -->
                              
							<form action="" method="post">
                              <h1>New Message</h1>
                              <legend align="center"><h4>Type a message here</h4></legend>
                               <fieldset>
                                             
                                             <table>
                                             <tr>
                                                 <td align="center">To</td><td>:</td>
                                                 <td align="left"><input  type="text" name="to_mail" placeholder="Receiver name" /></td>
                                             </tr>
                                             <tr><td colspan="3"><hr></td></tr>
                                             <tr>
                                                 <td align="center">Subject</td><td>:</td>
                                                 <td><input type="text" name="subject" ></td>
                                             </tr>
                                              <tr><td colspan="3"><hr></td></tr>
                                             <tr>
                                                <td align="center">
                                                 <label>Body</label></td><td>:</td><td ><textarea name="body" placeholder="Start from here"></textarea></td>
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
											 <input id="submit" type="submit" value="Send Message" onclick="submit()"/>
											 
                                             <br/><br/>
											 
                                             <a href="inbox.php">Go to inbox</a>
                                         </fieldset>  
							</form>
							<!-- UI END -->
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
	<script type="text/javascript">
		function submit(){
			var x= document.getElementById("submit").value;
			alert("message sent");
			window.location.assign("sentitems.php");
		}
	</script>
</body>

</html>