<?php 
	//print_r($_POST);
	session_start();
	$conn = mysqli_connect("localhost", "root", "","mediportal_db");
	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}

	$username = $_REQUEST['name'];
	$password = $_REQUEST['password'];
	
	$_SESSION['doctor_username'];
	$_SESSION['doctor_type'];
	$_SESSION['doctor_id'];

	//$_SESSION['patient_username'];
	//$_SESSION['patient_type'];
	//$_SESSION['patient_id'];


	$_SESSION['admin_username'];
	//$_SESSION['admin_type'];
	//$_SESSION['admin_id'];


	

	// query being inserted in database
	if(isset($_REQUEST["name"]) && isset($_REQUEST["password"]))
		$sql = "SELECT * FROM user where username = '".$username ."' AND password = '".$password."'";
	
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$check = 0; // for validation purpose
	
	// started checking username and password in database
	while($row = mysqli_fetch_assoc($result)) {

        if($username == $row['username'] && $password == $row['password'] && $row['type'] =="doctor" ){
           // $_SESSION['username'] = $username;
            //$_SESSION['admin_role'] = $row['role'];
            $_SESSION['doctor_username'] = $row['username'];
            $_SESSION['doctor_type'] = $row['type'];

           /* $file = "select doctor_id from doctor where username = '".$_SESSION['doctor_username']."'";
			$result = mysqli_query($conn, $file)or die(mysqli_error($conn));
			while($row = mysqli_fetch_assoc($result)) {
				$_SESSION['doctor_id'] = $row['doctor_id'];
			}
			*/

            header("Location:user_doctor/dashboard.php");
            $check = 1;
		}

		else if($username == $row['username'] && $password == $row['password'] && $row['type'] =="patient"){
            // $_SESSION['username'] = $username;
            // $_SESSION['customer_id'] = $row['cust_id'];
            // $_SESSION['customer_name'] = $row['cust_name'];
            // $_SESSION['mobile_number'] = $row['phone'];
            // $_SESSION['customer_address'] = $row['address'];
            // $_SESSION['customer_email'] = $row['email'];
            // $_SESSION['date_of_birth'] = $row['dob'];
            // $_SESSION['cust_password'] = $row['password'];
            // $_SESSION['user_role'] = $row['role'];
            $_SESSION['patient_username'] = $row['username'];
            $_SESSION['patient_type'] = $row['type'];
           
		   /*
		   $file = "select member_id from member where username = '".$_SESSION['patient_username']."'";
			$result = mysqli_query($conn, $file)or die(mysqli_error($conn));
			while($row = mysqli_fetch_assoc($result)) {
				$_SESSION['patient_id'] = $row['member_id'];
			}
          */  
			header("Location:user_member/dashboard.php");
            $check = 1;
		}



		else if ($username == $row['username'] && $password == $row['password'] && $row['type'] =="admin") {
			$_SESSION['admin_username'] = $row['username'];
            $_SESSION['admin_type'] = $row['type'];
            
			/*
			$file = "select admin_id from admin where username = '".$_SESSION['admin_username']."'";
			$result = mysqli_query($conn, $file)or die(mysqli_error($conn));
			while($row = mysqli_fetch_assoc($result)) {
				$_SESSION['admin_id'] = $row['admin_id'];
			}

			*/
            header("Location:user_admin/dashboard.php");
            $check = 1;		}
		
	}

	 if ($check == 0) {	
			header("Location:Login.php?error=wrong user name or password");
	 }
	
	mysqli_close($conn);
	
 ?>