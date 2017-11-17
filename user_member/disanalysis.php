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
                            <img src="images/pageicon.png"/>
                        </td>
                        <td width="40%">&nbsp;</td>
                        <td width="40%">
                            <table align="right">
                                <td><strong>Logged in as </strong></td>
                                <td><a href="viewprofile.html">Bob<img src="images/user.png"></a></td>
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
                                <li><a href="dashboard.php">Dashboard</a></li>
                                <li><a href="viewprofile.html">View Profile</a></li>
                                <li><a href="editprofile.html">Edit Profile</a></li>
                                <li><a href="changeprofilepicture.html">Change Profile Picture</a></li>
                            </ul>
                        </fieldset>


                        <fieldset>
                            <legend>
                            <strong>Medical History</strong></legend>
                                <ul>
                                <li><a href="prevpescriptions.html">Previous Prescriptions</a></li>
                            </ul>
                        </fieldset>

                        <fieldset>
                            <legend>
                            <strong>Appointments Information</strong></legend>
                           
                            <ul>
                                <li><a href="newappointment.html">New Appointment</a></li>
                                <li><a href="appointmentstatus.html">Appointment Status</a></li>
                            </ul>
                        </fieldset>


                        <fieldset>
                            <legend>
                            <strong>Reports</strong></legend>
                           
                            <ul>
                                <li><a href="medianalysis.php">Medicine Analysis</a></li>
                                <li><a href="disanalysis.php">Disease Analysis</a></li>
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
                            <!--------------------------------------------------- DESIGN UI HERE-------------------------------------------------->

                                <fieldset>
                                  <legend>Disease Analysis</legend>
                                  <fieldset>
                                    <legend>Patient Information</legend>
                                  <table>
                                      <tr>
                                          <td >
                                              <strong>Patient Name</strong>
                                          </td>
                                          <td >:</td>
                                          <td >Bob Marley</td>
                                      </tr>
                                      <tr>
                                          <td >
                                             <strong> Mobile Number</strong></td><td>:</td><td >0167499424
                                          </td><td>--------</td>
                                          <td ><strong>House Phone Number</strong></td><td>:</td><td >02-857412369</td>
                                      </tr>
                                      <tr>
                                          <td > 
                                              <strong>Residensial Address</strong>
                                          </td><td>:</td><td >North America</td>
                                      </tr>
                                      <tr>
                                        <td ><strong>Sex</strong></td><td>:</td>
                                          <td><input type="checkbox" name="sex">Male</input></td>
                                         <td><input type="checkbox" name="sex">Female</input></td></tr>
                                         <tr>

                                          <td ><strong>Date Of Birth</strong></td><td>:</td>
                                          <td >25 January 1990</td>

                                          <td ><strong>Age(If Date of Birth Unknown)</strong></td><td>:</td>
                                          <td>____</td>
                                      </tr>
                                       </table>
                                   </fieldset>
                                      <fieldset>
                                          <legend>Disease Description</legend>
                                          <table>
                                              <tr>
                                                  <td>
                                                      <strong>Disease Name</strong>
                                                  </td><td>:</td><td>Cancer</td>
                                              </tr>
                                              <tr>
                                                  <td><strong>Has the patient/guardian been notified of the disease?</strong></td><td>:</td><td>Yes</td>
                                              </tr>
                                              <tr>
                                                  <td><strong>Symptom</strong></td><td>:</td>
                                                  <td>1.Write something
                                                      2.Symptoms are
                                                      3.Careful about that</td>
                                              </tr>
                                              </table>
                                          </fieldset>

                                          <fieldset>
                                              <legend>Laboratory Information
                                              </legend>

                                              <table>
                                                  <tr>
                                                      <td><strong>Name of Test Performed</strong></td><td>:</td>
                                                      <td>Cancer test</td>
                                                      <td><strong>Result of Test</strong></td><td>:</td>
                                                      <td>Yes</td>
                                                  </tr>

                                                  <tr>
                                                      <td><strong>Laboratory Name</strong></td><td>:</td>
                                                      <td>Local Area</td>
                                                  </tr>
                                                  <tr><td><strong>Test Date</strong></td><td>:</td>
                                                  <td>22 October 2017</td>
                                                  </tr>
                                                                                            </table>
                                          </fieldset>
                                           <fieldset><legend>Treatment Information</legend>
                                          

                                          <table><tr><td><strong>Treatment Type</strong></td><td>:</td><td>badely</td><td><strong>Treatment Date</strong></td><td>:</td><td>31 Novembor 2017</td></tr></table>

                                          </fieldset>                   
                            </fieldset>

                            <a href="medianalysis.php">Go to Medicine Analysis</a>

                            <!------------------------------------------------------ END HERE----------------------------------------------------->
                        </td></div>
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