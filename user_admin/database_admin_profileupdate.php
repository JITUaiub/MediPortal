<?php 
	session_start();

 $conn = mysqli_connect("localhost", "root", "", "mediportal_db");
	if (!$conn) {
  		die("Connection failed: " . mysqli_connect_error());
	}

	$update_admin = "UPDATE admin SET username='".$_REQUEST['username']."', name='".$_REQUEST['name']."', email='".$_REQUEST['email']."' , mobile='".$_REQUEST['mobile']."' WHERE admin_id='".$_SESSION['admin_id']."';";

	$result_update_doctorinfo = mysqli_query($conn, $update_admin)or die(mysqli_error($conn));

	mysqli_close($conn);
	header('Location:editprofile.php');
 ?>