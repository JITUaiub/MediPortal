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

                                <fieldset>
                                         <legend><b>FAQ | SEARCH</b></legend>
                                         Select a category: 
                                         <select id="categoryFAQ">
                                             <option>Mediportal</option>
                                             <option>Appointments</option>
                                             <option>E-consultation</option>
                                             <option>Price and Fee</option>
                                         </select>
                                         <button onclick="selectCombo()">Select</button><br><br>
                                          Search Question: <input value="What is" />
                                        <input type="submit" value="Search" />
                                        Results show per page: <select>
                                            <option>10</option>
                                            <option>20</option>
                                            <option>30</option>
                                        </select>
                                        <button onclick="ResultPerPage()">Go</button>
                                        <script>
                                            function ResultPerPage()
                                            {

                                            }
                                        </script>
                                    </fieldset>

                                    <!--     FAQ Question will show here -->

                                    <script type="text/javascript">
                                        function selectCombo()
                                        {
                                            var categoryMediportal = "<h1>What is Mediportal?</h1><a href=\"editFAQ.php\"/>Edit</a><br><hr><p>Mediportal is a online doctor appointment system made for general users and doctor's accross the world. Get an appointment today.</p><h1>What is Mediportal's Hotline?</h1><a href=\"editFAQ.php\"/>Edit</a><br><hr><p>Currently we don't have any helpline number. Soon we'll add hotline number(toll free).</p>";
                                            var categoryAppointments = "<h1>How to get an appointment?</h1><a href=\"editFAQ.php\"/>Edit</a><br><hr><p>Get an appointment by following these step:<br> 1. Register with us with email and a username.<br>2. Login and go to new Appointment.<br>3. Fill in the details.<br>4. You're now good to go.</p><h1>Can any doctor turn off taking appointment?</h1><a href=\"editFAQ.php\"/>Edit</a><br><hr><p>Yes. You can change that option under Manage Appointments. </p>";
                                            var categoryEconsultation = "<h1>How to get econsultation?</h1><a href=\"editFAQ.php\"/>Edit</a><br><hr><p>Ask your doctor for an econsultation session. Get an appointment and ask him for e-consultation.Doctor's attention required to access that features.</p><h1>Can we make live conversation here?</h1><a href=\"editFAQ.php\"/>Edit</a><br><hr><p>Currently we don't have any facilities for live consultation, We are working on it. Please wait for further updates.</p>";
                                            var categoryPriceandFee = "<h1>Is Mediportal free?</h1><a href=\"editFAQ.php\"/>Edit</a><br><hr> <p>Mediportal is full free for general users. You can request for an appointment for free.You need to pay 5% of your fee if you register as an doctor.</p><h1>What is Mediportal's Doctor's visit?</h1><a href=\"editFAQ.php\"/>Edit</a><br><hr><p>It differs from doctor to doctor. You can see doctor visit from his profile page.</p>";

                                            var index = document.getElementById('categoryFAQ').selectedIndex;
                                            var option = document.getElementById('categoryFAQ').options;

                                            if (option[index].text == "Mediportal") {
                                                document.getElementById('FAQ').innerHTML = categoryMediportal;
                                            }else if (option[index].text == "Appointments") {
                                                document.getElementById('FAQ').innerHTML = categoryAppointments;
                                            }else if (option[index].text == "E-consultation") {
                                                document.getElementById('FAQ').innerHTML = categoryEconsultation;
                                            }else if (option[index].text == "Price and Fee") {
                                                document.getElementById('FAQ').innerHTML = categoryPriceandFee;
                                            }
                                        }
                                        
                                    </script>

                                    <div id="FAQ">
                                        <h3 align="center">Select a Category First</h3>
                                    </div>
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