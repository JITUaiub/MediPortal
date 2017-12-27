<?php 
session_start();

 $conn = mysqli_connect("localhost", "root", "", "mediportal_db");
	if (!$conn) {
  		die("Connection failed: " . mysqli_connect_error());
	}

	$account_stat = "select account_status from member where member_id=".$_REQUEST['mid'];
     $result_stat = mysqli_query($conn, $account_stat)or die(mysqli_error($conn));
     $row_stat = mysqli_fetch_assoc($result_stat);

     if($row_stat['account_status'] == 'active') {
	$block_user = "UPDATE member SET account_status='blocked' WHERE member_id=".$_REQUEST['mid'];

	$result_block_userinfo = mysqli_query($conn, $block_user)or die(mysqli_error($conn));
	}

	else if($row_stat['account_status'] == 'blocked') {
	$active_user = "UPDATE member SET account_status='active' WHERE member_id=".$_REQUEST['mid'];

	$result_active_userinfo = mysqli_query($conn, $active_user)or die(mysqli_error($conn));
	}

	mysqli_close($conn);
	header('Location:normalUsers.php');







 ?>