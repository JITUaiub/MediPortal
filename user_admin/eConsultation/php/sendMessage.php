<?php
	
	function sendMessage($sender, $recipient, $subject, $message){

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

		// Sending Message to receiver
		if(!empty($sender) && !empty($message) && !empty($subject)){

			$query = "INSERT INTO `inbox` (`SenderName`, `RecipientName`, `Subject`, `Status`) VALUES ('{$sender}', '{$recipient}', '{$subject}', 'Unread')";

			mysqli_query($connection, $query);

			$query = "SELECT MAX(ChatID) from `inbox`";
			$chatID = mysqli_fetch_assoc(mysqli_query($connection, $query));

			$time = date("h:i:sa");
			$date = date("l").' '.date("Y-m-d");
			$query = "INSERT INTO `messages` (`ChatID`, `Body`, `Time`, `Date`) VALUES ({$chatID ["MAX(ChatID)"]}, '{$message}', '{$time}', '{$date}')";

			mysqli_query($connection, $query);
			mysqli_close($connection);
			return true;
			
		}else {
			return false;
		}
	}
?>