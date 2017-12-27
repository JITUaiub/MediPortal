 <?php 
    session_start();


     $conn = mysqli_connect("localhost", "root", "","mediportal_db");
   
             if (!$conn) {
         die("Connection failed: " . mysqli_connect_error()); 
  }

  if(isset($_SESSION['doctor_username']) && isset($_SESSION['doctor_type'])) {
    $doctor_information = "SELECT * from doctor where username = '".$_SESSION['doctor_username']."';";
     $result = mysqli_query($conn, $doctor_information)or die(mysqli_error($conn)); 
     
  }
 
    while($row = mysqli_fetch_assoc($result)) {
    
?>

<html>

<head><title>Edite Profile</title>


<script>
                function validate() {
                    /*var id = document.getElementById("name").value;
                    var pass = document.getElementById("password").value;
                    if (id == "admin" && pass == "admin")
                        {
                            window.location.href = "user_admin/dashboard.php";
                        } 
                    else if (id == "member" && pass == "member")
                        {
                            window.location.href = "user_member/dashboard.php";
                        }
                    else if (id == "doctor" && pass == "doctor")
                        {
                            window.location.href = "user_doctor/dashboard.php";
                        }*/

                    var flag = true;
                    var msg1 = document.getElementById('msg1');
                    var msg2 = document.getElementById('msg2');
                    var msg3 = document.getElementById('msg3');
                    var msg4 = document.getElementById('msg4');
                    var msg5 = document.getElementById('msg5');
                    var msg6 = document.getElementById('msg6');
                    var msg7 = document.getElementById('msg7');
                    var msg8 = document.getElementById('msg8');
                    var msg9 = document.getElementById('msg9');
                    var msg10 = document.getElementById('msg10');
                    var msg11 = document.getElementById('msg11');
                    var msg12 = document.getElementById('msg12');

                    //var username = document.getElementById('name');
                    //var password = document.getElementById('password');
                    // name     
                    if (document.myForm.name.value.length == 0) {
                        msg1.innerHTML = "You must input your name";
                        msg1.style.color = "red";
                        flag = false;
                    }
                    else if(document.myForm.name.value.length > 0) {
                        msg1.innerHTML = " ";
                    }
                     
                     //degree      
                    if(document.myForm.degree.value.length == 0) {
                        msg2.innerHTML = "You must input your Degree";
                        msg2.style.color = "red";
                        flag = false;
                    }
                    else if(document.myForm.degree.value.length > 0) {
                        msg2.innerHTML = " ";
                    }

                    //passyear

                    if(document.myForm.passyear.value.length == 0) {
                        msg3.innerHTML = "You must input your pass year";
                        msg3.style.color = "red";
                        flag = false;
                    }
                    else if(document.myForm.degree.value.length > 0) {
                        msg3.innerHTML = " ";
                    }


                    //passing college 

                    if(document.myForm.passcollege.value.length == 0) {
                        msg4.innerHTML = "You must input your passing college name";
                        msg4.style.color = "red";
                        flag = false;
                    }
                    else if(document.myForm.passcollege.value.length > 0) {
                        msg4.innerHTML = " ";
                    }

                    //description 

                    if(document.myForm.description.value.length == 0) {
                        msg5.innerHTML = "You must input your description";
                        msg5.style.color = "red";
                        flag = false;
                    }
                    else if(document.myForm.description.value.length > 0) {
                        msg5.innerHTML = " ";
                    }

                    
                    //title 

                    if(document.myForm.title.value.length == 0) {
                        msg6.innerHTML = "You must input your title";
                        msg6.style.color = "red";
                        flag = false;
                    }
                    else if(document.myForm.title.value.length > 0) {
                        msg6.innerHTML = " ";
                    }


                    //department 

                    if(document.myForm.department.value.length == 0) {
                        msg7.innerHTML = "You must input your department";
                        msg7.style.color = "red";
                        flag = false;
                    }
                    else if(document.myForm.department.value.length > 0) {
                        msg7.innerHTML = " ";
                    }


                    //medical college name 

                    if(document.myForm.medicalcollege.value.length == 0) {
                        msg8.innerHTML = "You must input your medical college name";
                        msg8.style.color = "red";
                        flag = false;
                    }
                    else if(document.myForm.medicalcollege.value.length > 0) {
                        msg8.innerHTML = " ";
                    }


                    //bdmc number  

                    if(document.myForm.bmdc_number.value.length == 0) {
                        msg10.innerHTML = "You must input your bdmc number";
                        msg10.style.color = "red";
                        flag = false;
                    }
                    else if(document.myForm.bmdc_number.value.length > 0) {
                        msg10.innerHTML = " ";
                    }

                     //mobile number 

                    if(document.myForm.mobilenumber.value.length == 0) {
                        msg11.innerHTML = "You must input your mobile number";
                        msg11.style.color = "red";
                        flag = false;
                    }
                    else if(document.myForm.mobilenumber.value.length > 0) {
                        msg11.innerHTML = " ";
                    }

                     //email address 

                    if(document.myForm.email.value.length == 0) {
                        msg12.innerHTML = "You must input your email";
                        msg12.style.color = "red";
                        flag = false;
                    }
                    else if(document.myForm.email.value.length > 0) {
                        msg12.innerHTML = " ";
                    }


                    return flag;
                }
            </script>







</head>

<body>

    <form method="post" action="database_update_doctor_profile.php" name="myForm">
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
                                <td><a href="viewprofile.php"><?php echo $row['username']; ?><img src="images/user.png"></a></td>
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
                        <td width="20%" valign="top">
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
                        <div align="center">
                             <td width="70%" align="center" valign="top">
                                <!------ UI  -->
                                <div>
                                        <h1>EDIT PROFILE</h1>
                                          <table width="100%">
                                        <td width="60%">
                                            <fieldset>

                                            <table width="100%">

                                                <tr>
                                                    <td width="20%" valign="top"><label><b><i>General Information:</i></b></label>
                                                    </td>
                                                    <td align="center">
                                                        <fieldset>
                                                        <table width="100%">
                                                            <!-- doctor name -->
                                                        <tr>
                                                            <td width="30%"><strong>Name</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td ><input type="text" name="name" value="<?php echo $row['name'];?>"></td>
                                                            <td><span id="msg1"></td>
                                                        </tr>
                                                         <!-- gender -->
                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Gender</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td ><input type="text" name="gender" value="<?php echo $row['gender'];?>" disabled="true"></td>
                                                        </tr>
                                                        <!-- doctor personal usrename -->
                                                        <tr>
                                                            <td width="30%"><strong>User Name</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td ><input type="text" name="username" value="<?php echo $row['username'];?>" disabled="true"></td>
                                                        </tr>
                                                        

                                                    </table>
                                                </fieldset>
                                                </td>
                                            </tr>
                



                                                <tr>
                                                    <td width="20%" valign="top"><label><b><i>Educational Information:</i></b></label>
                                                    </td>
                                                    <td>
                                                        <fieldset>
                                                        <table width="100%">

                                                            <?php 

    if(isset($_SESSION['doctor_username']) && isset($_SESSION['doctor_type'])) {
    $doctor_education_information = "SELECT * from educational_info where doctor_id=(select doctor_id from doctor where username = '".$_SESSION['doctor_username']."')";
     $education_result = mysqli_query($conn, $doctor_education_information)or die(mysqli_error($conn)); 
 }
     
     while($education_row = mysqli_fetch_assoc($education_result)) {
  
                                                 ?>

                                                          <!-- degree name   -->
                                                        <tr>
                                                            <td width="30%"><strong>Degree Name</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td width="65%"><input type="text" name="degree" value="<?php echo $education_row['degree_name']; ?>"><span id="msg2"></td>
                                                             <!-- <td></td> -->
                                                        </tr>

                                                        <!-- pass year -->
                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Passed Year</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td><input type="text" name="passyear" value="<?php echo $education_row['passed_year']; ?>"><span id="msg3"></td>
                                                         </tr>

                                                         <!-- passing college -->
                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Passing College</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td><input type="text" name="passcollege" value="<?php echo $education_row['college']; ?>"><span id="msg4"></td>
                                                        </tr>

                                                        <!-- description -->
                                                        <tr>
                                                            <td width="30%"><strong>Description</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td><input type="text" name="description" value="<?php echo $education_row['description']; ?>"><span id="msg5"></td>
                                                        </tr>
                                                        
<?php } ?>
                                                    </table>
                                                </fieldset>
                                                </td>
                                            </tr>

                                           

<?php 

    if(isset($_SESSION['doctor_username']) && isset($_SESSION['doctor_type'])) {
    $doctor_professioanl_information = "SELECT * from professional_info where doctor_id=(select doctor_id from doctor where username = '".$_SESSION['doctor_username']."')";
     $education_result = mysqli_query($conn, $doctor_professioanl_information)or die(mysqli_error($conn)); 
 }
     
     while($education_row = mysqli_fetch_assoc($education_result)) {
  
                                                 ?>

                                                <tr>
                                                    <td width="20%" valign="top"><label><b><i>Proffesional Information:</i></b></label>
                                                    </td>
                                                    <td>
                                                        <fieldset>
                                                        <table width="100%">

                                                        <!-- tittle      -->
                                                        <tr>
                                                            <td width="30%"><strong>Title</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td width="65%"><input type="text" name="title" value="<?php echo $education_row['title']; ?>"><span id="msg6"></td>
                                                        </tr>

                                                        <!-- department -->
                                                        <tr>
                                                            
                                                            <td width="30%"><strong>Department</strong></td>
                                                            <td><strong>:</strong></td>
<td><input type="text" name="department" value="<?php echo $education_row['department']; ?>"><span id="msg7"></td>
                                                         </tr>
                                                           
                                                           <!-- medical college              -->
                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Medical College</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td><input type="text" name="medicalcollege" value="<?php echo $education_row['medical_college']; ?>"><span id="msg8"></td>
                                                         </tr>

                                                         
                                                    </table>
                                                </fieldset>
                                                </td>
                                            </tr>
                                <?php 
                                       }
                                 ?>

                                                 <tr>
                                                    <td width="10%" valign="top"><label><b><i>Chamber Information:</i></b></label>
                                                    </td>
                                                    <td>
                                                        <fieldset>
                                                        <table width="100%" cellpadding="1" cellspacing="1">
                                                <tr>
                                                            <td width="20%"><strong>Chamber Name</strong></td>
                                                             <td width="20%"><strong>Chamber Location</strong></td>
                                                             <td width="20%"><strong>Working Days</strong></td>
                                                             <td width="20%"><strong>Working Time</strong></td>
                                                             <td width="20%"><strong>Description</strong></td>
                                                </tr>
                                                <?php 

    if(isset($_SESSION['doctor_username']) && isset($_SESSION['doctor_type'])) {
    $doctor_chamber_information = "SELECT * from chamber where doctor_id=(select doctor_id from doctor where username = '".$_SESSION['doctor_username']."')";
     $chamber_result = mysqli_query($conn, $doctor_chamber_information)or die(mysqli_error($conn)); 
 }
     
     while($chamber_row = mysqli_fetch_assoc($chamber_result)) {
        ?>
                                                <tr>
                                                            
                                                            <td><?php echo $chamber_row['name']; ?></td>
                                                            <td><?php echo $chamber_row['location']; ?></td>
                            
                                                            <td><?php echo $chamber_row['days']; ?></td>
            
                                                            <td><?php echo $chamber_row['schedule']; ?></td>
                                                            <td><?php echo $chamber_row['description']; ?></td>
                                                           <td><a href="editchamber.php?cid=<?php echo $chamber_row['chamber_id']; ?>">Edit Chamber</a></td>
                                                        </tr>

                                                        <?php 
                                                }
                                             ?>
                                                        
                                            </table>
                                                </fieldset>
                                                </td>
                                            </tr>

                                        
                                                  <tr>
                                                    <td width="20%" valign="top"><label><b><i>Others Information:</i></b></label>
                                                    </td>
                                                    <td>
                                                        <fieldset>
                                                        <table width="100%">

                                                        <!-- date of birth     -->
                                                        <tr>
                                                            <td width="30%"><strong>Date Of Birth</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td width="65%"><input type="date" name="dob" value="<?php echo $row['dob'];?>" disabled="true"></td>
                                                        </tr>


                                                        <!-- bmdc number  -->
                                                        <tr>
                                                            
                                                            <td width="30%"><strong>BMDC Number</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td><input type="text" name="bmdc_number" value="0168-DMC594/0625"><span id="msg10"></td>
                                                         </tr>

                                                         <!-- mobile number  -->

                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Mobile Number</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td><input type="text" name="mobilenumber" value="<?php echo $row['mobile'];?>"><span id="msg11"></td>
                                                         </tr>
                                                          

                                                          <!-- email               -->
                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Email</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td><input type="text" name="email" value="<?php echo $row['email'];?>"><span id="msg12"></td>
                                                         </tr>
                                                    </table>
                                                                       <?php 
                                            }
                                            mysqli_close($conn);

                                     ?> 
                                                </fieldset>
                                                </td>
                                            </tr>

                                        </td>
                                        
                                    </table>

                                         
                                <tr><td colspan="4" align="center"><input type="submit" name="submit" value="Update Profile" onClick="return validate();"></td></tr>

                                                            <tr>
                                                                <td>
                                                                    <table width="100%">
                                                                        <td colspan="2" align="right"><a href="changeprofilepicture.php">Change Profile Picture</a></td>
                                                                        <td><strong><hr width="1" size="15"></strong></td>
                                                                        <td colspan="2" align="left"><a href="changepassword.php">Change Password</a></td>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </form>
                                    </div>

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
<?php 
    if(isset($_REQUEST["pro_update"])){
    echo "<script>alert('".$_REQUEST["pro_update"]."');</script>";
    //echo "<h2>".$_REQUEST["error"]."</h2>";
    
}
 ?>