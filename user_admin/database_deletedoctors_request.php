<?php 
session_start();

 $conn = mysqli_connect("localhost", "root", "", "mediportal_db");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

$sql = "DELETE FROM doctor WHERE doctor_id =".$_REQUEST['did'];	
 $result = mysqli_query($conn, $sql)or die(mysqli_error($conn)); 	

mysqli_close($conn);

header("Location:pendingRequest.php");
 ?>