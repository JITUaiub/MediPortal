<?php 
session_start();

 $conn = mysqli_connect("localhost", "root", "", "mediportal_db");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

$sql = "DELETE FROM appointment WHERE appointment_id =".$_REQUEST['aid'];	
 $result = mysqli_query($conn, $sql)or die(mysqli_error($conn)); 	

mysqli_close($conn);

header("Location:appointmentstatus.php");
 ?>