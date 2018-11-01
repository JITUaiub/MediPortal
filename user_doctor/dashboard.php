<?php
session_start();

 $conn = mysqli_connect($_ENV["MYSQL_HOST"].":".$_ENV["MYSQL_PORT"], $_ENV["MYSQL_UN"], $_ENV["MYSQL_PW"],$_ENV["MYSQL_DB"]);

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

<head><title>Dashboard</title></head>

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
                                <td><a href="viewprofile.php"><?php echo $row['username']; ?><?php if($row['profile_picture'] == ""){
                                        echo "<img width='20' height='20' src='images/default.png' alt='Default Profile Pic'>";
                                } else {
                                        echo "<img width='20' height='20' src='images/".$row['profile_picture']."' alt='Profile Pic'>";
                                }?> <br></a></td>
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
                        <div align="center">
                             <td width="70%" align="center">    <h2><?php if($row['profile_picture'] == ""){
                                        echo "<img width='200' height='200' src='images/default.png' alt='Default Profile Pic'>";
                                } else {
                                        echo "<img width='200' height='200' src='images/".$row['profile_picture']."' alt='Profile Pic'>";
                                }?> <br><br/>
                                Welcome <?php echo $row['username']; ?>
                                <h3>11 DEC, 2017</h3>
                                <table width="80%">
                                    <tr>

                                        <td align="center" width="35%"">
                                            <fieldset>
                                              <?php  $count_pending_appointment="select count(*) from appointment where status='pending'";
                                 $result = mysqli_query($conn, $count_pending_appointment)or die(mysqli_error($conn));
                                 $row = mysqli_fetch_assoc($result);

                                 ?>
                                                <h2 align="center">new appointment today</h2></br>
                                                <h1 align="center"><a href="appointmentstatus.php"><?php echo $row['count(*)'] ?></a></h1>
                                                <h4 align="center"><b>See Appointment Status</b></h4>
                                        </fieldset>
                                    </td>


                                        <td align="center" width="35%">
                                              <fieldset>
                                                <h2 align="center">Pending Prescriptions</h2></br>
                                                <h1 align="center"><a href="presWithAppointment.php">2</a></h1>
                                                <h4 align="center"><b>Check Prescriptions Status</b></h4>
                                        </fieldset>
                                    </td>
                                    </tr>


                                    <tr align="center">
                                        <td align="center" width="35%" colspan="2">

                                              <fieldset>
                                                <h2 align="center">Last Week Patient List</h2></br>


<table>

     <tr>
        <td><label><b>Patient Name</b></label></td>
        <td><label><b>Disease</b></label></td>
    </tr>
<?php

    //$curr = date("Y-M-D");

     $curr = date('Y-m-d', strtotime('-7 days'));


    $last_week = "SELECT * from member,prescription,appointment where member.member_id = appointment.member_id and prescription.member_id = appointment.member_id and appointment.status='active' and appointment.date <='".$curr."'";
     $result = mysqli_query($conn, $last_week)or die(mysqli_error($conn));

    while($last = mysqli_fetch_assoc($result)) {

        /*
        $appointment_date = explode("-",$last['date']);
        $appointment_day = $appointment_date[2];
        $last_date = $appointment_day-7;

        */


        //if($appointment_day>$last_date){

        //$date = $last['date']-strtotime("7 days");





        ?>
                 <tr>

                        <td><?php echo $last['name']; ?></td>
                        <td><?php echo $last['disease']; ?></td>

                </tr>

            <?php


            //}

        }
           // echo $last_date;


            ?>

                                                </table>


                                        </fieldset>

                                    </td>
                                    </tr>



                                </table>
                            </td>
                        </div>
                    </table>
                </div>
            </td>
        </tr>
        <tr>
            <td>

                <?php


            }

            ?>
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
