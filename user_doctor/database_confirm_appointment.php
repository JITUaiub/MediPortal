<?php 
session_start();

 $conn = mysqli_connect("localhost", "root", "", "mediportal_db");
	if (!$conn) {
  		die("Connection failed: " . mysqli_connect_error());
	}

	$active_pres = "UPDATE appointment SET status='active' WHERE member_id=".$_REQUEST['mid'];

	$result_confirm_appointment_info = mysqli_query($conn, $active_pres)or die(mysqli_error($conn));
	
mysqli_close($conn);
	header('Location:presWithAppointment.php');


	?>