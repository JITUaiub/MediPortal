<?php 
session_start();

 $conn = mysqli_connect("localhost", "root", "", "mediportal_db");
	if (!$conn) {
  		die("Connection failed: " . mysqli_connect_error());
	}

	$block_user = "UPDATE member SET account_status='blocked' WHERE member_id=".$_REQUEST['mid'];

	$result_block_userinfo = mysqli_query($conn, $block_user)or die(mysqli_error($conn));

	mysqli_close($conn);
	header('Location:normalUsers.php');







 ?>