<?php
    ini_set('mysql.connect_timeout', 300);
    ini_set('default_socket_timeout', 300);
    $conn = mysqli_connect("localhost", "root", "", "mediportal_db", 3306);
    $questionErr = "";
    $answerErr = "";
    $err1 = false;
    $err2 = false;
    if(isset($_POST['submit'])){   

        $category = $_POST['category'];
        $author = "Admin";
        $question = $_POST['question'];
        $answer = "";

        $question = addslashes($_POST['question']);
        $answer = addslashes($_POST['answer']);

        if(empty($question)){
            $questionErr = "Must Need a Question";
            $err1 = false;
        }
        else {
            $err1 = true;
            $questionErr = "";
        } 
        if(empty($answer)){
            $answerErr = "Provide an answer";
            $err2 = false;
        }
        else {
            $err2 = true; 
            $answerErr = "";         
        }
//        var_dump($err1);var_dump($err2);
        $time = date("h:i:sa");
        $date = date("l").' '.date("Y-m-d");
        
        if ($err1 == true && $err2 == true) {
            $query = "INSERT INTO `faq`(`category`, `Author`, `Question`, `Answer`, `Time`, `Date`, `status`) VALUES ('$category','$author','$question','$answer', '$time', '$date', 'Read')";
//            var_dump($query);
            mysqli_query($conn, $query);
            header("location: newFAQ.php");
            exit;
        }
    }
?> 

<!DOCTYPE>
<html>
<head>
	<title>FAQ</title>
</head>
<body>
	<table border="1">
		<div>
				<div>
				<table align="center" width="100%">
					<tr align="right">
						<td width="10%">
							<a href="Home.php"><img src="images/logo.png" align="left"></a>
						</td>
						<td width="30%">&nbsp;</td>
						<td align="center" width="10%">
							<fieldset><a href="Home.php" >Home <img src="images/home.png"></a></fieldset>
						</td>
						<td width="10%" align="center">
							<fieldset><a href="Registration.php">Registration<img src="images/registration.png"></a></fieldset>
						</td>
						<td width="10%" align="center">
							<fieldset><a href="service.php">Our Service<img src="images/service.png"></a></fieldset>
						</td>
						<td width="10%" align="center">
							<fieldset><a href="Login.php">Login<img src="images/login.png"></a></fieldset>
						</td>
					</tr>
				</table>
		</div>


<div>
	<h1 align="center">Frequently asked questions</h1>
	<br><hr>
</div>
<div>
	<table width="70%" align="center">
		<tr>
			<td width="20%" valign="top">
				<fieldset>
					<legend>Select Category</legend>
					<ul>
						<li><a href="mediportal.php">Mediportal</a></li>
						<li><a href="appointments.php">Appointments</a></li>
						<li><a href="econsultation.php">E-consultation</a></li>
						<li><a href="priceandfee.php">Price and Fees</a></li>
							<br><br>
					</ul>
				</fieldset><br><br>
				Didn't find your question and answer?
				<a href="ownQuestion.php">Submit your Own Question</a>
			</td>
			<td>
				<form>
					<table align="center" width="100%">
                                        <tr>
                                            <td>
                                                <fieldset>
                                        <table align="center">
                                        	<tr>
						<td align="center" colspan="3"><img src="../images/question.png"></td>
						
					</tr>
					<tr>
						<td colspan="3" align="center"><strong>Didn't find answer to your query? Ask here.<br>We'll add your question soon.</strong></td>
					</tr>
					<tr><td>&nbsp;</td></tr>
                                        <tr>
                                            <td>
                                                <strong>Select Category</strong>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <select name="category">
                                                    <option>Mediportal</option>
                                                    <option>Appointments</option>
                                                    <option>Econsultation</option>
                                                    <option>Price and Fees</option> 
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label><strong>Write your question</strong></label></td>
                                            <td>:</td>
                                            <td>
                                                <textarea name="question"></textarea><br>
                                                <div style="color: RED"><?php echo $questionErr; ?></div>
                                            </td>
                                        </tr>
                                        <tr><td colspan="3" align="center"><hr></tr>
                                        <tr>
                                            <td align="right"><input type="submit" name="submit" value="Submit"></td>
                                            <td>|</td>
                                            <td><input type="reset" name="" value="Reset"></td>
                                        </tr>
                                    </table>
				</form>
			</td>
		</tr>
		<tr>
			<td><h2>&nbsp;</h2></td>
		</tr>
	</table>
</div>
<div>
		<table align="center">
			<tr align="center">
				<td>
				<a href="https://www.facebook.com/">
				<img src="../images/facebook.png">
                 </a>
             </td>
				<td>
						<a href="https://www.twitter.com/">
						<img src="../images/twitter.png">
					</a>
				</td>
			</tr>
		</table>
		
		<table align="center">
			<tr>
				<td align="center" colspan="3">
				<a href="../About_Us.html">About Us   </a>
			</td>
			<td align="center" colspan="3">
				<a href="../Contact_Us.html">Contact Us   </a>
			</td>
			<td align="center" colspan="3">
				<a href="../privacyPolicy.html">Privacy Policy   </a>
			</td>
			<td align="center" colspan="3">
				<a href="../faq.html">FAQ</a>
			</td>
			</tr>
		</table>
	</div>
	</div>
</table>
<div>
<table align="center" width="100%" border="1">
<tr>
<td align="center" colspan="3">
<b>&copy;2017 MediPortal. All rights reserved</b>
</td>
</tr>
</table>
</div>

</body>
</html>