<?php 
	session_start();

 $conn = mysqli_connect("localhost", "root", "", "mediportal_db");
	if (!$conn) {
  		die("Connection failed: " . mysqli_connect_error());
	}
    $workDays = "";
	$workDays = implode(',', $_REQUEST["workDays1"]);

	$time = $_REQUEST["time"]." - ".$_REQUEST["time1"];
	$description = $_REQUEST["description"];

	$update_chamber = "UPDATE chamber SET name='".$_REQUEST['chamberName']."', location='".$_REQUEST['location']."', days='$workDays', schedule='$time', description='$description' WHERE doctor_id=".$_SESSION['doctor_id'];

	$result_update_doctor_general = mysqli_query($conn, $update_chamber)or die(mysqli_error($conn));
	
	
	mysqli_close($conn);
	header('Location:viewprofile.php');
 ?>