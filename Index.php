

<!DOCTYPE>
<html>
<head>
	<title>Home - MediPortal</title>
</head>
<body>
	<table>
		<div>
		<div>
				<table align="center" width="100%">
					<tr align="right">
						<td width="10%">
							<a href="Home.php"><img src="images/logo.png" align="left"></a>
						</td>
						<td width="30%">&nbsp;</td>
						<td align="center" width="10%">
							<fieldset><a href="Home.php" >Home <img src="images/home.png"></a></fieldset>
						</td>
						<td width="10%" align="center">
							<fieldset><a href="Registration.php">Registration<img src="images/registration.png"></a></fieldset>
						</td>
						<td width="10%" align="center">
							<fieldset><a href="service.php">Our Service<img src="images/service.png"></a></fieldset>
						</td>
						<td width="10%" align="center">
							<fieldset><a href="Login.php">Login<img src="images/login.png"></a></fieldset>
						</td>
					</tr>
				</table>
		</div>

<br>

<div align="center">
	<script>
		
		
	var i=0;
	var images=[];
	var time=3000;

	images[0]="images/1.jpg";
	images[1]="images/2.jpg";
	images[2]="images/3.jpg";
	images[3]="images/4.jpg";

	function changeImage()
	{
		
	   document.slide.src=images[i];

	   if(i<images.length-1)
	   {
	      i++;
	   }
	   else
	   {
	     i=0;
	   }

	   setTimeout("changeImage()",time);

	}
	window.onload=changeImage;
	</script>

	<img name="slide" width="100%" height="70%">

</div>
<br><br>
<div>
	<h1 align="center"><i>Welcome to MediPortal</i></h1>
</div>

<div>
	<table>
		<tr>
			<td width="50%">
				<fieldset>
		<h1 align="center">About us</h1>

		<p>
			Mediportal.com is the first online doctor appointment service platform in Bangladesh, providing real time doctor information and appointments through a fully integrated system. Mediportal is missioned to bring convenience in the healthcare service delivery for the general people in Bangladesh.
					<br>
					
					Helping peoples accross the world by providing commiunication between doctor and patient.We try to provide the best facilities to patient and doctor so that they can now easily be connected with each other. Patient can easily take treatment from doctor and doctor also can freely give consultation to patient
		</p>
		<div align="center"><a href="About_Us.php">Read More</a></div>
	</fieldset>
</td>

<td width="50%">
<div align="center" >
	<table width="80%" align="center">

			<td>

				<fieldset>
					
					<img src="images/search.png" align="left" width="20%"></br>

					<h1 align="center">Find Doctor and Get an Emergency Appointment now</h1>
					<table align="center">
				<form action="php/loginRedirect.php">
					<tr><td>
					<label>Select City</label></td>
					<td>:</td>
					<td>
					<select>
							<option selected="true">Select City</option>
						<optgroup label="Dhaka Division">
							<option>Dhaka</option>
							<option>Gazipur</option>
						</optgroup>
					</select></td></tr>

					<tr><td>
					<label>Looking for</label></td>
					<td>:</td>
					<td>
					<select>
						<option>Doctor</option>
						<option>Blood Donor</option>
					</select></td>
				</tr>
				<td>
					<label>Doctor Name</label>
				</td>
				<td>:</td>
				<td>
					<select>
						<optgroup label="Doctor Name">
							<option>Mr. X</option>
							<option>Mr. Y</option>
						</optgroup>
						<optgroup label="Donor Name">
							<option>Mr. X</option>
							<option>Mr. Y</option>
						</optgroup>
					</select></td></tr>
					<tr><td align="center">

					<input type="submit" value="Get an appointment now" id="Sub"/></td></tr>
				</form>
			</table>
			</fieldset>
			</td>
		</tr>
	</table>
</div>	

</td>
</tr>
</table>
</div>

<br>
				<fieldset>                   <div>
                   	<h1 align="center"><b>Our Service</b></h1>
                   </div>
               </div>
		<div>
					<table align="left" width="35%">
						<tr>
							<td align="center">
								<fieldset>
									<a href="service.php"><img src="images/appointment.png" align="center" width="30%"></a>
									<h1>Get Appointment From Home</h1>
									
								</fieldset>
							</td>
						</tr>
					</table>
				
					<table align="right" width="30%">
						<tr>
							<td align="center">
								<fieldset>
									<a href="service.php"><img src="images/donar.png" width="30%" align="center"></a>
									<h1>Search for a blood donors</h1>
									
								</fieldset>
							</td>
						</tr>
					</table>
				</div>


                   <div>
				<table align="right" width="35%">
						<tr>
							<td align="center">
								<fieldset>
									<a href="service.php"><img src="images/contact.png" width="30%" align="center"></a>
									<h1>Contact with your doctor</h1>
									
								</fieldset>
							</td>
						</tr>
					</table>
				</div>
			</fieldset>
<br><br>
			<div>
				<fieldset>
					<h1 align="center">Our Top User</h1>
					<div>
						<fieldset>
							<h1 align="center"> Top Doctor</h1>

							<table align="center" width="50%">
								<tr align="center">
									<td align="center">
										<img src="images/u1.png">
						                 <p><b>Mr.XYZ</b></p>
						                 <a href="doctor.php">See Profile</a>
									</td>

									<td>
										<img src="images/u1.png">
						<p><b>Mr.XYZ</b></p>
						  <a href="doctor.php">See Profile</a>
									</td>

									<td>
										<img src="images/u1.png">
						<p><b>Mr.XYZ</b></p>
						 <a href="doctor.php">See Profile</a>
									</td>
								</tr>
							</table>
						</fieldset>

						<fieldset>
							<h1 align="center">Top general User</h1>
							<table align="center" width="50%">
								<tr align="center">
									<td align="center">
										<img src="images/u1.png">
						<p><b>Mr.XYZ</b></p>
						 <a href="patient.php">See Profile</a>
									</td>

									<td>
										<img src="images/u1.png">
						<p><b>Mr.XYZ</b></p>
						  <a href="patient.php">See Profile</a>
									</td>

									<td>
										<img src="images/u1.png">
						<p><b>Mr.XYZ</b></p>
						  <a href="patient.php">See Profile</a>
									</td>
								</tr>
								
							</table>
						</fieldset>

					</div>
				</fieldset>

				<h1 align="center">Our Location</h1>
				<iframe align="center" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.6717485272!2d90.40031141446606!3d23.794700593000627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c711d13bbec7%3A0xc47f7c3e8e2263f2!2sAmerican+International+University+Bangladesh+(AIUB)!5e0!3m2!1sen!2sbd!4v1507242789312" width="100%" height="50%" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>

<br><br><br><br><br><br><br><br>


			
<br><br>
<div align="center">

	<i><b>Follow Us In</b></i>
		<table align="center">
			<tr align="center">
				<td>
				<a href="https://www.facebook.com/">
				<img src="images/facebook.png">
                 </a>
             </td>
				<td>
						<a href="https://www.twitter.com/">
						<img src="images/twitter.png">
					</a>
				</td>
			</tr>
		</table>
		
		<table align="center">
			<tr>
				<td align="center" colspan="3">
				<a href="About_Us.php">About Us   </a>
		
			</td>
			<td align="center" colspan="3">
				<a href="Contact_Us.php">Contact Us   </a>
			</td>
			<td align="center" colspan="3">
				<a href="privacyPolicy.php">Privacy Policy   </a>
			</td>
			<td align="center" colspan="3">
				<a href="faq.php">FAQ</a>
			</td>
			</tr>
		</table>
	</div>
    <div>
<table align="center" width="100%" border="1">
<tr>
<td align="center" colspan="3">
<b>&copy;2017 MediPortal. All rights reserved</b>
</td>
</tr>
</table>
</div>
</body>
</html>
       
