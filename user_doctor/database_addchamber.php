<?php 
	session_start();
	//print_r($GLOBALS);
	
	$conn = mysqli_connect("localhost", "root", "","mediportal_db");
	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}
	$doc_id = 0;
	if(isset($_SESSION["doctor_username"])) {
		$doctor_id_sql = "SELECT * FROM doctor where username = '".$_SESSION["doctor_username"]."'";
		$result = mysqli_query($conn, $doctor_id_sql)or die(mysqli_error($conn));

		while($row = mysqli_fetch_assoc($result)) {
			$doc_id = $row['doctor_id'];
		}
	}

	$chamberName = $_REQUEST["chamberName"];
	$location = $_REQUEST["location"];
	
	$workDays1 = "";
	$workDays1 = implode(',', $_REQUEST["workDays1"]);

	$time = $_REQUEST["time"]." - ".$_REQUEST["time2"];
	$description = $_REQUEST["description"];



	if(isset($_REQUEST["chamberName"]) && isset($_REQUEST["location"]) && isset($_REQUEST["workDays1"]) && isset($_REQUEST["time"]) && isset($_REQUEST["time2"]) && isset($_REQUEST["description"])) {
		$insert_chamber_info = "INSERT INTO chamber (chamber_id,doctor_id,name,location,days,schedule,description)VALUES (NULL,$doc_id,'$chamberName','$location','$workDays1','$time','$description')";
		$result = mysqli_query($conn, $insert_chamber_info);
		
		header('location:../Registration/docRegAddChamber.php');
	} else {

	}
 ?>