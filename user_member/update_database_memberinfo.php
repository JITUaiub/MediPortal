<?php 
	session_start();

 $conn = mysqli_connect("localhost", "root", "", "mediportal_db");
	if (!$conn) {
  		die("Connection failed: " . mysqli_connect_error());
	}

	$update_member = "UPDATE member SET name='".$_REQUEST['name']."', username='".$_REQUEST['username']."', email='".$_REQUEST['email']."' WHERE member_id=".$_SESSION['patient_id'];

	$result_update_member_general = mysqli_query($conn, $update_member)or die(mysqli_error($conn));

	die(mysqli_error($conn));
	mysqli_close($conn);
	header('Location:viewprofile.php');

	?>