<?php 

    session_start();


     $conn = mysqli_connect($_ENV["MYSQL_HOST"].":".$_ENV["MYSQL_PORT"], $_ENV["MYSQL_UN"], $_ENV["MYSQL_PW"],$_ENV["MYSQL_DB"]);
   
             if (!$conn) {
         die("Connection failed: " . mysqli_connect_error()); 
  }

  if(isset($_REQUEST["medicineName"]) && isset($_REQUEST["day"]) && isset($_REQUEST["times"]) && isset($_SESSION['mid'])) {
		$insert_medicine_info = "INSERT INTO medicine (medicine_id,name,time,totaldays,member_id)VALUES (NULL,'".$_REQUEST['medicineName']."','".$_REQUEST['day']."','".$_REQUEST['times']."',".$_SESSION['mid'].")";
		$result = mysqli_query($conn, $insert_medicine_info);}

$medi="select medicine_id from medicine where member_id=".$_SESSION['mid'];
$result = mysqli_query($conn, $medi);



$row=mysqli_fetch_assoc($result);


 if(isset($_REQUEST["date"]) && isset($_REQUEST["disease"]) && isset($_REQUEST["problem"]) && isset($_REQUEST["new_appointment"])) {
		$insert_presecription_info = "INSERT INTO prescription (prescription_id,doctor_id,member_id,date ,medicine_id,next_appointment,symptoms,disease)VALUES (NULL,".$_SESSION['doctor_id'].",".$_SESSION['mid'].",'".$_REQUEST['date']."',".$row['medicine_id'].",'".$_REQUEST['new_appointment']."', '".$_REQUEST['problem']."','".$_REQUEST['disease']."')";
		$result = mysqli_query($conn, $insert_presecription_info);}

		//header("Location:presWithAppointment.php");

  ?>

