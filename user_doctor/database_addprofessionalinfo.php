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


	if(isset($_REQUEST["title"]) && isset($_REQUEST["dept"]) && isset($_REQUEST["medicollege"])) {
	$insert_professional_info = "INSERT INTO professional_info (id,doctor_id,title,department,medical_college) VALUES (NULL,$doc_id,'".$_REQUEST["title"]."','".$_REQUEST["dept"]."','".$_REQUEST["medicollege"]."')";
		$result = mysqli_query($conn, $insert_professional_info);
		
		header('location:dashboard.php');
	} else {
         // echo "Problem is occured";
	}



 ?>