<?php
	
	function getMessage(){
		// COnnecting to DB
		$db_host = 'localhost';
		$db_user = 'root';
		$db_pass = '';

		$db_name = 'mediportal';

		$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
		// Estabish connection to server
		if(!$connection){
			echo "Unable to connect to MYSQL server <br/>";
		}

		// Getting Message to receiver
		$sender = "Jitu";
		


		$query = "";
	}

?>