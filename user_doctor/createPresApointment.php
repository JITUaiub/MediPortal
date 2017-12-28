
<?php 
    session_start();

       $_SESSION['mid']=$_REQUEST['mid'];
     $conn = mysqli_connect("localhost", "root", "","mediportal_db");
   
             if (!$conn) {
         die("Connection failed: " . mysqli_connect_error()); 
  }

  ?>


<html>

<head><title>Create Patient Appoinment</title></head>

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
                             <td width="100%" align="center" valign="top">
                                

                                <h1 align="center">Create Prescription</h1>
                                <table align="center" width="100%">

                                    <form action="database_add_prescription.php" method="post">
                                    <tr>
                                        <td >
                                            <fieldset>
                                <table width="100%">
                                   <tr align="center">
                                       <div align="center">

                                        <?php
                                        if(isset($_SESSION['doctor_username']) && isset($_SESSION['doctor_type'])) {
    $doctor_information = "SELECT * from doctor where doctor_id = ".$_SESSION['doctor_id'];
     $result = mysqli_query($conn, $doctor_information)or die(mysqli_error($conn)); 
     
  }
 
    while($row = mysqli_fetch_assoc($result)) {
    
?>
                                           <td align="center" colspan="3">
                                              <b> Doctor Name: <?php echo $row['username']; ?></b>
                                           </td>
                                           <?php } ?>
                                       </div>
                                   </tr>
                                   <br>
                                   <tr>
                                    <div>
                                         <?php
                                        
    $doctor_information = "SELECT * from professional_info where doctor_id = ".$_SESSION['doctor_id'];
     $result = mysqli_query($conn, $doctor_information)or die(mysqli_error($conn)); 
     
  
 
    while($row = mysqli_fetch_assoc($result)) {
    
?>

                                           
                                           <td align="center" colspan="3">
                                               <?php echo $row['title']; ?>
                                           </td>
                                       </div>
                                   </tr>
                                        </br>
                                   <tr>
                                    <div>
                                           
                                           <td align="center" colspan="3">
                                            <?php echo $row['medical_college']; ?>
                                           </td>
                                       </div>
                                   </tr>

                                   <?php } ?>
                                   <tr>
                                       <td></td>
                                   </tr>

                                   <?php 
  if(isset($_REQUEST['mid'])) {
  $member_information = "SELECT * from member where member_id = ".$_REQUEST['mid'] ;
     $result = mysqli_query($conn, $member_information)or die(mysqli_error($conn)); }



      while($row = mysqli_fetch_assoc($result)) {
        $current_year = date("Y");
                              $dob_year = explode("-",$row['dob']);
?>
                                
                                    <tr>
                                        <td>
                                            <strong>Patient Name : <?php echo $row['name'] ?> </strong>
                                        </td>

                                        <td><strong>Age: <?php 

                                        $age = $current_year - $dob_year[0];    
                                        echo $age;

                                     ?></strong></td>

                                     <?php } ?>
                                        
                                        <td align="right" width="40%">
                                            <strong>Date: </strong>
                                            <strong><input type="date" name="date" value="<?php echo date('Y-m-d'); ?>"></strong>
                                        </td>
                                    </tr>



                                    
                                </table>
                                <table align="center" border="1" width="100%">
                                    <tr>
                                        <td width="20%">
                                            <strong>Symptoms:</strong><br>
                                            <?php 
                                 if(isset($_REQUEST['mid'])) {
  $member_information = "SELECT * from appointment where member_id = ".$_REQUEST['mid'] ;
     $result = mysqli_query($conn, $member_information)or die(mysqli_error($conn)); }
      while($row = mysqli_fetch_assoc($result)) {
                                             ?>
                                            <textarea name="problem">
                                               <?php echo $row['problem'] ?>
                                            </textarea>
 <?php } ?>
                                            <br>
                                            <strong>Disease:</strong><br>
                                            <textarea name="disease">
                                               
                                            </textarea>
                                        </td>
                                        <td width="80%">

                                            <script type="text/javascript">
                                                function add()
                                                {

                                                    var index = document.getElementById('medicineCategory').selectedIndex;
                                                    var option = document.getElementById('medicineCategory').options

                                                    var mediCatagorie = option[index].text;
                                                    var mediName = document.getElementById('medicineName').value;
                                                    var day = document.getElementById('day').value;
                                                    var times = document.getElementById('times').value;

                                                    var str = mediCatagorie + ".  " + mediName + " \r\n";
                                                    str += "<br>Daily " + times +  " times on " + day + " day \r\n";

                                                    document.getElementById('medicineList').innerHTML += "<p align=\"center\">" + str + "</p>";
                                                }
                                            </script>

                                            <div id="medicineList">
                                                 
                                            </div>
                                            <table align="center" width="100%">
                                                
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td align="center">
                                                        <select id="medicineCategory">
                                                            <option>Tab</option>
                                                            <option>Cap</option>
                                                            <option>Syp</option>
                                                            <option>Cream</option>
                                                            <option>Injection</option>
                                                        </select>
                                                    </td>
                                                    <td align="center">
                                                        <input type="text" id="medicineName" name="medicineName" value="Medicine Name">
                                                    </td>
                                                    <td>&nbsp;</td>
                                                    <td align="center">Total Days:</td>
                                                    <td><input type="text" id="day" name="day"></td>

                                                    <td><input type="text" name="times" id="times" value="2" size="5"> </td>
                                                     <td align="center">times</td>
                                                </tr>

                                                <tr>
                                                    <td colspan="6" align="center"><button onclick="add()">Add another</button></td>
                                                    
                                                </tr>
                                            </table>
                                        </td>


                                        
                                    </tr>
                                </table>

                            
                            </br>

                                        <label align="center"><strong>Next Meeting: </strong></label>
                                        
                                        <input type="date" name="new_appointment" value="2017-12-23">
                                    
                                    </tr>
                                </table>
                                
                                <hr/>

                                <input type="submit" name="submit" value="Finish" />
                            </br>
                            <a href="pescriptions.php">Prescription History</a>
                            </fieldset>
                        </form>
                                        </td>
                                    </tr>
                                    

                                </table>


                            </td>

                                
                                
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