<?php 
	session_start();

 $conn = mysqli_connect("localhost", "root", "", "mediportal_db");
	if (!$conn) {
  		die("Connection failed: " . mysqli_connect_error());
	}

	if($_POST['name']!="" ){
	$update_member = "UPDATE member SET name='".$_POST['name']."', mobile='".$_POST['mobile']."', email='".$_POST['email']."' WHERE username='".$_SESSION['patient_username']."';";
	
	$result_update_member_general = mysqli_query($conn, $update_member)or die(mysqli_error($conn));

	die(mysqli_error($conn));
	mysqli_close($conn);
	header('Location:viewprofile.php?pro_update=update succesfully');
	}else
	{
		header('Location:editprofile.php');
	}

	?>