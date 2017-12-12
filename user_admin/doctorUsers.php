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
                                <td><a href="../index.html">Logout<img src="images/logout.png"></a></td>
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
                                <li><a href="reportedUsers.php">Reported Users</a></li>
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
                                <li><a href="changepassword.html">Change Password</a></li>
                                <li><a href="../index.html">Logout</a></li>
                            </ul>
                        </fieldset>
                        </td>
                        <div align="center">
                             <td width="70%" align="center">
                                <!------ UI  -->
                                    <fieldset>
                                         <legend><b>PENDING JOINING | SEARCH</b></legend>
                                        Filter By
                                        <select>
                                            <option>Any</option>
                                            <option>Name</option>   
                                            <option>Email</option>
                                            <option>BMDC Reg. No</option>
                                            <option>Phone</option>
                                            <option>Blocked</option>
                                        </select>
                                          <input />
                                        <input type="submit" value="Search" />
                                        <button onclick="ResultPerPage()">Go</button>
                                        <script>
                                            function ResultPerPage()
                                            {

                                            }
                                        </script>
                                    </fieldset>
                                        <br/>
                                    <table width="100%" cellspacing="0" border="1" cellpadding="5">
                                            <tr>                  
                                                <th >NAME</th>  
                                                <th >EMAIL</th>
                                                <th >Phone</th>
                                                <th>BMDC Reg. No</th>
                                                <th colspan="4">Action</th>
                                            </tr>
                                            <tr>
                                                <td>Dr. ABC</td>
                                                <td>abc@gmail.com</td>
                                                <td>01400400000</td>
                                                <td>B656C45A5S5</td>
                                                <td width="40"><a href="doctorDetails.php">Profile</a></td>
                                                <td width="30"><a href="eConsultation/conversation.php">Message</a></td>
                                                <td width="30"><button>Delete</button></td>
                                                <td width="30"><button>Accept</button></td>
                                            </tr>
                                            <tr>
                                                <td>Dr. Merlin</td>
                                                <td>merlin@gmail.com</td>
                                                <td>01600000000</td>
                                                <td>C95236524AD</td>
                                                <td width="40"><a href="doctorDetails.php">Profile</a></td>
                                                <td width="30"><a href="eConsultation/conversation.php">Message</a></td>
                                                <td width="30"><button>Delete</button></td>
                                                <td width="30"><button>Accept</button></td>
                                            </tr>
                                     </table>
                                     <br><br>
                                    <fieldset>
                                         <legend><b>DOCTOR USERS | SEARCH</b></legend>
                                        Filter By
                                        <select>
                                            <option>Any</option>
                                            <option>Name</option>   
                                            <option>Email</option>
                                            <option>BMDC Reg. No</option>
                                            <option>Phone</option>
                                            <option>Blocked</option>
                                        </select>
                                          <input />
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
                                        <br/>
                                    <table width="100%" cellspacing="0" border="1" cellpadding="5">
                                            <tr>                  
                                                <th >NAME</th>  
                                                <th >EMAIL</th>
                                                <th >Phone</th>
                                                <th>BMDC Reg. No</th>
                                                <th colspan="4">Action</th>
                                            </tr>
                                            <tr>
                                                <td>Dr. XYZ</td>
                                                <td>xyz@gmail.com</td>
                                                <td>01700000000</td>
                                                <td>B86D4629812Z</td>
                                                <td width="40"><a href="doctorDetails.php">Profile</a></td>
                                                <td width="30"><a href="useractivity.php">Activity</a></td>
                                                <td width="30"><a href="eConsultation/conversation.php">Message</a></td>
                                                <td width="30"><button>BLOCK</button></td>
                                            </tr>
                                            <tr>
                                                <td>Dr. Shaun</td>
                                                <td>shaun@gmail.com</td>
                                                <td>01900000000</td>
                                                <td>C81D47597191</td>
                                                <td width="40"><a href="doctorDetails.php">Profile</a></td>
                                                <td width="30"><a href="useractivity.php">Activity</a></td>
                                                <td width="30"><a href="eConsultation/conversation.php">Message</a></td>
                                                <td width="30"><button>UNBLOCK</button></td>
                                            </tr>
                                     </table>
                                        <br>
                                        <br>
                                        Check for <a href="normalUsers.php">General Users</a>
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