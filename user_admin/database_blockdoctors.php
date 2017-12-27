<?php 
session_start();

 $conn = mysqli_connect("localhost", "root", "", "mediportal_db");
	if (!$conn) {
  		die("Connection failed: " . mysqli_connect_error());
	}

	$account_stat = "select account_status from doctor where doctor_id=".$_REQUEST['did'];
     $result_stat = mysqli_query($conn, $account_stat)or die(mysqli_error($conn));
     $row_stat = mysqli_fetch_assoc($result_stat);

if($row_stat['account_status'] == 'active') {
	$block_doctor = "UPDATE doctor SET account_status='blocked' WHERE doctor_id=".$_REQUEST['did'];

	$result_block_doctorinfo = mysqli_query($conn, $block_doctor)or die(mysqli_error($conn));
	}


	else if($row_stat['account_status'] == 'blocked') {
	$active_doctor = "UPDATE doctor SET account_status='active' WHERE doctor_id=".$_REQUEST['did'];

	$result_active_doctorinfo = mysqli_query($conn, $active_doctor)or die(mysqli_error($conn));
	}

	mysqli_close($conn);
	header('Location:doctorUsers.php');







 ?>