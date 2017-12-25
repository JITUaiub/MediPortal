
<?php 
	session_start();

 $conn = mysqli_connect("localhost", "root", "", "mediportal_db");
	if (!$conn) {
  		die("Connection failed: " . mysqli_connect_error());
	}

	$update_doctor = "UPDATE doctor SET name='".$_REQUEST['name']."', username='".$_REQUEST['username']."', email='".$_REQUEST['email']."' WHERE doctor_id=".$_SESSION['doctor_id'];

	$result_update_doctor_general = mysqli_query($conn, $update_doctor)or die(mysqli_error($conn));
	
	$update_education_info = "UPDATE educational_info SET degree_name='".$_REQUEST['degree']."', passed_year=".$_REQUEST['passyear'].", college = '".$_REQUEST['passcollege']."' WHERE doctor_id=".$_SESSION['doctor_id'];

	$result_update_doctor_eduinfo = mysqli_query($conn, $update_education_info)or die(mysqli_error($conn));
	mysqli_close($conn);
	header('Location:editprofile.php?pro_update=update succesfully');
 ?>

