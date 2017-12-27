<?php 
session_start();

 $conn = mysqli_connect("localhost", "root", "","mediportal_db");
   
             if (!$conn) {
         die("Connection failed: " . mysqli_connect_error()); 
  }
  ?>

<html>

<head><title>Patient History</title>


<script type="text/javascript">
    
     function showHint() {
      var  xmlhttp = new XMLHttpRequest();
      var str=document.getElementById('search_phisto').value ;  
      //alert(str);
      xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {     
          var m=document.getElementById("load_phisto");
          m.innerHTML=xmlhttp.responseText;
        }
      };
      var url="ajax_patienthistory.php?mid="+str; // this will only change
      //alert(url);
      xmlhttp.open("GET", url,true);
      xmlhttp.send();
    }
   


</script>


</head>

<body onload="showHint()">
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
                        <td width="100%" valign="top">
							<!------------------------ DESIGN PORTAL PAGE HERE ---------------------------------->
							
                            <table align="center" width="100%">
                            	<tr>
                            		<td>
                            			<h1 align="center">Patient History</h1>
                            <fieldset>
                                    <legend><b>Find Patient Histoy</b></legend>
                              <table align="center">
                                <tr align="center">

                            <td>
                            <label>Search:</label> 
                            <input type="text" name="search" id="search_phisto" onkeyup="showHint()" /> </td> </tr>
                        </table>



                         <div id="load_phisto"></div>
                                    
								</table>

								<p align="center"><a href="newpescriptions.php">New Prescription</a> | <a href="appointmenthistory.php">Appointment History</a></p>
							</fieldset>
                      </table>
                            		</td>
                            	</tr>
                            </table>

							<!------------------------ FINISH DESIGNING HERE --------------------------------->
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
                        <td>&copy;2017 MediPortal. All rights reserved.</td>
                    </table>
                </div>
            </td>
        </tr>
    </table>
</body>

</html>

<?php 
    
    mysqli_close($conn);

 ?>