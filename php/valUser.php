<?php

	$id = $_POST['name'];
	$pass = $_POST['password'];

	if($id == "admin" && $pass == "admin")
		header("Location: ../user_admin/dashboard.php");
	else if($id == "doctor" && $pass == "doctor")
		header("Location: ../user_doctor/dashboard.php");
	else if($id == "member" && $pass == "member")
		header("Location: ../user_member/dashboard.php");
?>