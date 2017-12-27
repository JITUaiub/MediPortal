<?php

function getDataFromDB($sql){
  $conn = mysqli_connect("localhost", "root", "","mediportal_db");
  
  $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
  $arr=array();
  
  while($row = mysqli_fetch_assoc($result)) {
    $arr[]=$row;
  }
  return $arr;
}
?>



                        <table border="1" width="100%" >
                                    <tr>
                                        <td width="15%">
                                            <h3 align="center">Last Appointment</h3>
                                        </td>
                                        <td width="20%">
                                            <h3 align="center">Name</h3>
                                        </td>
                                        <td width="10%">
                                            <h3 align="center">Age</h3>
                                        </td>
                                        <td align="center">
                                            <h3 align="center" width="35%">Disease</h3>
                                        </td>
                                        <td colspan="2" width="20%">
                                            <h3 align="center">Action</h3>
                                        </td>
                                    </tr>

  <?php 

                                    
      if(isset($_REQUEST["mid"])){

      	    $curr = date('Y-m-d', strtotime('-7 days'));
           $last_week = "SELECT * from member,prescription,appointment where member.member_id = appointment.member_id and prescription.member_id = appointment.member_id and appointment.status='active' and appointment.date <='".$curr."'and member.name like '%".$_REQUEST['mid']."%'";
                         
         

            $a=getDataFromDB($last_week);
 
  
  foreach($a as $last){
     $current_year = date("Y");
      $dob_year = explode("-",$last['dob']);

     
    ?>
        
			<tr>
        				<td align="center">
        					<b><?php echo $last['date'] ?></b>
        				</td>
        				<td align="center">
        					<b><a href="patientDetails.php?mid=<?php echo $last['member_id']; ?>"><?php echo $last['name'] ?></a></b>
        				</td>
        				<td align="center">
        					<b>
                       

                               <?php 

                                $age = $current_year - $dob_year[0];    
                                echo $age;

                                ?>      

                                </b>
							</td>
							<td align="center">
								<b><?php echo $last['disease']; ?></b>
							</td>
							<td align="center">
								<a href="prescriptionHistory.php?mid= <?php echo $last['member_id']; ?>">Prescriptions</a>
							</td>
							<td align="center">
								<a href="eConsultation/conversation.php">Message</a>
							</td>
			</tr>

  
    <?php

    
   
    }

?>
</table>

   <?php

  
    }

?>