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

	$degreeName = $_REQUEST["degreeName"];
	$passing_year = $_REQUEST["passing_year"];
	$university = $_REQUEST["university"];
	$description = $_REQUEST["description"];



	if(isset($_REQUEST["degreeName"]) && isset($_REQUEST["passing_year"]) && isset($_REQUEST["university"])  && isset($_REQUEST["description"])) {
	$insert_education_info = "INSERT INTO educational_info (id,doctor_id,degree_name,passed_year,college,description)VALUES (NULL,$doc_id,'$degreeName',$passing_year,'$university','$description')";
		$result = mysqli_query($conn, $insert_education_info);
		
		header('location:../Registration/DocRegAddEducation.php');
	} else {

	}
 ?>