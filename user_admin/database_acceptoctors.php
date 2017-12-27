<?php 
session_start();

 $conn = mysqli_connect("localhost", "root", "", "mediportal_db");
	if (!$conn) {
  		die("Connection failed: " . mysqli_connect_error());
	}

	$block_doctor = "UPDATE doctor SET account_status='active' WHERE doctor_id=".$_REQUEST['did'];

	$result_block_doctorinfo = mysqli_query($conn, $block_doctor)or die(mysqli_error($conn));

	mysqli_close($conn);
	header('Location:pendingRequest.php');







 ?>