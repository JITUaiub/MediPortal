<html>

<head><title>Add Chamber</title></head>
<script type="text/javascript">
        function validation_chamber() {
                    var counter;
                    var check = 0;
                    var flag = true;
                    var c_name = document.getElementById('c_name');
                    var loc = document.getElementById('loc');
                    var working_days_check = document.getElementById('working_days');
                    var working_days = document.getElementsByName('workDays1[]');
                    var time1 = document.getElementById('time1');
                    var time2 = document.getElementById('time2');
                    var desc = document.getElementById('desc');
                    //var username = document.getElementById('name');
                    //var password = document.getElementById('password');

                    if (document.myForm.chamberName.value.length == 0) {
                        c_name.innerHTML = "You must input your chamberName";
                        c_name.style.color = "red";
                        flag = false;
                    }
                    else if(document.myForm.chamberName.value.length > 0) {
                        c_name.innerHTML = " ";
                    }

                    if(document.myForm.location.value.length == 0) {
                        loc.innerHTML = "You must input your location";
                        loc.style.color = "red";
                        flag = false;
                    }
                    else if(document.myForm.location.value.length > 0) {
                        loc.innerHTML = " ";
                    }

                    for (counter = 0; counter < working_days.length; counter++) {
                        if (working_days[counter].checked == true) 
                            {
                                check++;
                            }
                    }

                    if (check == 0) {
                        working_days_check.innerHTML = "You must input your working days";
                        working_days_check.style.color = "red";
                        flag = false;
                    }
                    else if(check > 0) {
                        working_days_check.innerHTML = " ";
                    }
                    /*if(working_days[0].checked == false && working_days[1].checked == false && working_days[2].checked == false && working_days[3].checked == false && working_days[4].checked == false && working_days[5].checked == false && working_days[6].checked == false) {
                        working_days_check.innerHTML = "You must input your working days";
                        working_days_check.style.color = "red";
                        flag = false;
                    }
                    else if(working_days[0].checked == true || working_days[1].checked == true || working_days[2].checked == true || working_days[3].checked == true || working_days[4].checked == true || working_days[5].checked == true || working_days[6].checked == true) {
                            working_days_check.innerHTML = " ";
                    }*/

                    if(document.myForm.description.value.length == 0) {
                        desc.innerHTML = "You must input your description";
                        desc.style.color = "red";
                        flag = false;
                    }
                    else if(document.myForm.description.value.length > 0) {
                        desc.innerHTML = " ";
                    }

                    if(document.myForm.time.value.length == 0) {
                        time1.innerHTML = "You must input your start time";
                        time1.style.color = "red";
                        flag = false;
                    }
                    else if(document.myForm.time.value.length > 0) {
                        time1.innerHTML = " ";
                    }

                    if(document.myForm.time2.value.length == 0) {
                        time2.innerHTML = "You must input your end time";
                        time2.style.color = "red";
                        flag = false;
                    }
                    else if(document.myForm.time2.value.length > 0) {
                        time2.innerHTML = " ";
                    }

                    return flag;
        }
    </script>
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
                                <td><a href="viewprofile.php"><?php echo $_SESSION['doctor_username']; ?><img src="images/user.png"></a></td>
                                <td><hr width="1" size="15"></td>
                                <td><a href="../Registration/DocRegAddEducation.php">Profile</a></td>
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
                                <li><a href="managechamber.php">Manage Chambers</a></li>
                            </ul>
                        </fieldset>


                        <fieldset>
                            <legend>
                            <strong>Manage Prescriptions</strong></legend>
                                <ul>
                                <li><a href="newpescriptions.php">Create new Prescriptions</a></li>
                                <li><a href="pescriptions.php">Previous Prescriptions</a></li>
                            </ul>
                        </fieldset>

                        <fieldset>
                            <legend>
                            <strong>Appointments Information</strong></legend>
                           
                            <ul>
                                <li><a href="appointmentstatus.php">Appointment Status</a></li>
                                <li><a href="appointmenthistory.php">Appointment History</a></li>
                            </ul>
                        </fieldset>


                        <fieldset>
                            <legend>
                            <strong>Reports</strong></legend>
                           
                            <ul>
                                <li><a href="patienthistory.php">Patient History</a></li>
                                <li><a href="medianalysis.php">Medicine Analysis</a></li>
                                <li><a href="disanalysis.php">Disease Analysis</a></li>
                            </ul>
                        </fieldset>
                        
                        
                        <fieldset>
                            <legend>
                            <strong>E-consultation</strong></legend>
                           
                            <ul>
                                <li><a href="eConsultation/message.php">New Message</a></li>
                                <li><a href="eConsultation/inbox.php">Inbox</a></li>
                                <li><a href="eConsultation/sentitems.php">Sent Items</a></li>
                                
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
                             <!--Manage Chamber Information -->
                         <td width="70%" valign="top">
                             	<h1 align="center">Add Chamber</h1>
                                <form method="post" name="myForm" action="database_addchamber.php">
					<table align="center" width="60%">
						<tr>
							<td>
								<fieldset>
						<table align="center">
							<tr>
                                <td><label>Chamber Name</label></td>
                                <td>:</td>
                                <td><input type="text" name="chamberName" value="" />
                                    <!-- <span class="error"></span></td> -->
                                <td><span id="c_name"></span></td>
                            </tr>
							<tr>
                                <td><label>Location</label></td>
                                <td>:</td>
                                <td><input type="text" name="location" value="" /></td>
                                <td><span id="loc"></span></td>
                            </tr>
							<tr>
                                <td><label>Working Days</label></td>
                                <td>:</td>
                                <td>
                                    <input type="checkbox" name="workDays1[]"  value="sat"/>SAT
                                    <input type="checkbox" name="workDays1[]" value="sun"/>SUN
                                    <input type="checkbox" name="workDays1[]" value="mon"/>MON <br/>
                                    <input type="checkbox" name="workDays1[]" value="tue" />TUE
                                    <input type="checkbox" name="workDays1[]" value="wed"/>WED
                                    <input type="checkbox" name="workDays1[]" value="thu" />THU
                                    <input type="checkbox" name="workDays1[]" value="fri"/>FRI
                                </td>
                                <td><span id="working_days"></span></td>
                            </tr>
							<tr>
                                <td><label>Working Time</label></td>
                                <td>:</td>
                                <td><input type="time" name="time"><span id="time1"></span> to <input type="time" name="time2"><span id="time2"></span>
                            </td>

                            </tr>
							<tr>
                                <td><label>Description</label></td>
                                <td>:</td>
                                <td><textarea name="description"></textarea></td>
                                <td><span id="desc"></span></td>
                            </tr>
							<tr>
								<td align="center" colspan="3"><input type="submit" value="Add another" onclick="return validate();" />	<input type="submit" value="Finish"/></td>
							</tr>
							<tr>
								<td align="center" colspan="3"><a href="managechamber.php">Go to Manage Chamber</a>
								<a href="editchamber.php">Go to Edit Chamber</a></td>
							</tr>
						</table>
					</fieldset>
							</td>
						</tr>
					</table>	

                    </form>	
				
                        </td>
                    </table>
                </fieldset>
                        </td>
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