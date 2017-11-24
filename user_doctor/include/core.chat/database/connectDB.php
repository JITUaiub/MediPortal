<?php
	
	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = '';

	$db_name = 'chat';

	// Estabish connection to server
	if(!$connection = mysql_connect($db_host, $db_user, $db_pass)){
		echo "Unable to connect to MYSQL server <br/>";
	} else {
		// Select Database
		if(!mysql_select_db($db_name, $connection)){
			echo "Database not found !!<br/>";
		}
	}
?>