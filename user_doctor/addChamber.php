<!DOCTYPE>
<html>
<head>
	<title>Doctor Registration</title>
</head>
<body>
	<table border="1" align="center" width="100%">
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
				Please fill up your information
			</div>
			<div>
				<form action="docChamber.php">
					<fieldset>
						<legend>Add Chamber</legend>
						<table align="center">
							<tr>
								<td><label>Name</label></td>
								<td>:</td>
								<td><input type="text" name="chamberName"/></td>
							</tr>
							<tr>
								<td><label>Location</label></td>
								<td>:</td>
								<td><input type="text" name="location"/></td>
							</tr>
							<tr>
								<td><label>Working Days</label></td>
								<td>:</td>
								<td>
									<input type="checkbox" name="workDays"/>SAT
									<input type="checkbox" name="workDays"/>SUN
									<input type="checkbox" name="workDays"/>MON
									<input type="checkbox" name="workDays"/>TUE
									<input type="checkbox" name="workDays"/>WED
									<input type="checkbox" name="workDays"/>THU
									<input type="checkbox" name="workDays"/>FRI
									
								</td>
							</tr>
							<tr>
								<td><label>Working Time</label></td>
								<td>:</td>
								<td><input type="time" name="time"> to <input type="time" name="time"></td>
							</tr>
							<tr>
								<td><label>Description</label></td>
								<td>:</td>
								<td><textarea name="description"></textarea></td>
							</tr>
							<tr>
								<td align="center" colspan="3"><input type="button" value="Add another"/>	<input type="submit" value="Finish"/></td>
							</tr>
							<tr>
								<td align="center" colspan="3"><a href="managechamber.html">Go to Manage Chamber</a>
								<a href="editchamber.php">Go to Edit Chamber</a></td>
							</tr>
						</table>
					</fieldset>		
				</form>
			</div>
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
					<tr>
						<td align="center" colspan="3">
						<a href="../About_Us.html">About Us   </a>
					</td>
					<td align="center" colspan="3">
						<a href="../Contact_Us.html">Contact Us   </a>
					</td>
					<td align="center" colspan="3">
						<a href="../privacyPolicy.html">Privacy Policy   </a>
					</td>
					<td align="center" colspan="3">
						<a href="../faq.html">FAQ</a>
					</td>
					</tr>
				</table>
			</div>
		</div>	
	</table>
</body>
</html>