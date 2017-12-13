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
                                <li><a href="../managechamber.html">Manage Chambers</a></li>
                            </ul>
                        </fieldset>


                        <fieldset>
                            <legend>
                            <strong>Manage Prescriptions</strong></legend>
                                <ul>
                                <li><a href="../newpescriptions.html">Create new Prescriptions</a></li>
                                <li><a href="../pescriptions.php">Previous Prescriptions</a></li>
                            </ul>
                        </fieldset>

                        <fieldset>
                            <legend>
                            <strong>Appointments Information</strong></legend>
                           
                            <ul>
                                <li><a href="../appointmentstatus.php">Appointment Status</a></li>
                                <li><a href="../appointmenthistory.php">Appointment History</a></li>
                            </ul>
                        </fieldset>


                        <fieldset>
                            <legend>
                            <strong>Reports</strong></legend>
                           
                            <ul>
                                <li><a href="../patienthistory.php">Patient History</a></li>
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
                                <h1>Sent Items</h1>
                                <strong>Search Message: </strong><input type="text" name="senderName" value="Sender Name">
                                <input type="submit" name="search" value="Search"><br><br>
                                <table width="100%">
                                    <tr>
                                        <td align="center">
                                             <strong>Receiver</strong>
                                        </td>
                                        <td align="center">
                                             <strong>Subject</strong>
                                        </td>
                                        <td align="center">
                                             <strong>Message</strong>
                                        </td>
                                        <td align="center">
                                             <strong>Time | Date</strong>
                                        </td>
                                        <td align="center">
                                            <strong>Attachment</strong>
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
                                    <tr><td colspan="6"><hr></td></tr>
                                    <tr>
                                        <td align="center">
                                            Ashley
                                        </td>
                                        <td align="center">
                                            Hello
                                        </td>
                                        <td align="center">
                                             <a href="conversation.php">I'm good. What's about you?..</a>
                                        </td>
                                        <td align="center">
                                             3:06AM | 24-11-2017
                                        </td>
                                        <td align="center">
                                            No attachment
                                        </td>
                                        <td align="center">
                                            <input type="checkbox" name="action">
                                        </td>
                                    </tr>
                                    
                                    <tr><td colspan="6"><hr></td></tr>

                                    <tr>
                                        <td align="center">
                                            Marsh
                                        </td>
                                        <td align="center">
                                            No Subject
                                        </td>
                                        <td align="center">
                                             <a href="conversation.php">Are you coming tonight !! ..</a>
                                        </td>
                                        <td align="center">
                                             9:27AM | 23-11-2017
                                        </td>
                                        <td align="center">
                                            No attachment
                                        </td>
                                        <td align="center">
                                            <input type="checkbox" name="action">
                                        </td>
                                    </tr>
                                    
                                    <tr><td colspan="6"><hr></td></tr>

                                    <tr>
                                        <td align="center">
                                            John
                                        </td>
                                        <td align="center">
                                            Solution
                                        </td>
                                        <td align="center">
                                             <a href="conversation.php">Check This</a>
                                        </td>
                                        <td align="center">
                                             1:39PM | 21-11-2017
                                        </td>
                                        <td align="center">
                                            solve.docx
                                        </td>
                                        <td align="center">
                                            <input type="checkbox" name="action">
                                        </td>
                                    </tr>
                                    
                                    <tr><td colspan="6"><hr></td></tr>
                                </table>
                                <button>Previous Page</button><button>Next Page</button>
                                <br>
                                <br>
                                Show Email Per Page: <select>
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