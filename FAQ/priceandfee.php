<?php
    ini_set('mysql.connect_timeout', 300);
    ini_set('default_socket_timeout', 300);
        $emptyFaq = "";
        $result = null;
        $query = "Select * from `faq` where category = 'price and fees'";    
        $conn = mysqli_connect("localhost", "root", "", "mediportal_db", 3306);
        mysqli_set_charset($conn,"utf8");
        $result = mysqli_query($conn, $query);

        $faqArray = array();
        while(($row = mysqli_fetch_assoc($result))!=null){ 
                    $faqArray[] = array('id'=>$row['id'],'category'=>$row['category'],'author'=>$row['Author'],'question'=>$row['Question'],'answer'=>$row['Answer'],'time'=>$row['Time'],'date'=>$row['Date'], 'status'=>$row['status']);
                    }
        if(empty($faqArray)){
            $emptyFaq = "<h1 align=\"center\">No New Frequently Asked Question</h1>";
        }else{
            $emptyFaq = "";
        }
//        var_dump($faqArray);
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
					<td width="10%">
							<a href="../Home.php"><img src="../images/logo.png" align="left"></a>
						</td>
						<td width="30%">&nbsp;</td>
						<td align="center" width="10%">
							<fieldset><a href="../Home.php" >Home <img src="../images/home.png"></a></fieldset>
						</td>
						<td width="10%" align="center">
							<fieldset><a href="../Registration.php">Registration<img src="../images/registration.png"></a></fieldset>
						</td>
						<td width="10%" align="center">
							<fieldset><a href="../service.php">Our Service<img src="../images/service.png"></a></fieldset>
						</td>
						<td width="10%" align="center">
							<fieldset><a href="../Login.php">Login<img src="../images/login.png"></a></fieldset>
						</td>
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
				<fieldset>
                                         <legend><b>QUESTION | SEARCH</b></legend>
                                          <input value="What is" />
                                        <input type="submit" value="Search" />
                                        Results show per page: <select>
                                            <option>10</option>
                                            <option>20</option>
                                            <option>30</option>
                                        </select>
                                        <button onclick="ResultPerPage()">Go</button>
                                        <script>
                                            function ResultPerPage()
                                            {

                                            }
                                        </script>
                                    </fieldset>
						<?php
									for ($i=0; $i < count($faqArray); $i++) { 
										echo "<h1>";
										echo $faqArray[$i]['question'];;
										echo "</h1>";
										echo "<br/><b>Author: </b>".$faqArray[$i]['author'];
										echo "  <b>Posted on: </b>".$faqArray[$i]['date']." ".$faqArray[$i]['time'];
										echo "<br><hr>";
										echo "<p>";

										echo $faqArray[$i]['answer'];

										echo "</p>";
										
									}
								?>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td align="center" colspan="2">
				<button>Previous Page</button> | <button>Next Page</button>
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
				<a href="../About_Us.php">About Us   </a>
			</td>
			<td align="center" colspan="3">
				<a href="../Contact_Us.php">Contact Us   </a>
			</td>
			<td align="center" colspan="3">
				<a href="../privacyPolicy.php">Privacy Policy   </a>
			</td>
			<td align="center" colspan="3">
				<a href="../faq.php">FAQ</a>
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