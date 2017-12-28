<?php
    $conn = mysqli_connect("localhost", "root", "", "mediportal_db", 3306);
	$cheks = implode(",", $_POST['checkbox']);
	$sql = "delete from appointment where appointment_id in $cheks";
	$result = mysqli_query($conn, $sql);

?>
