

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

  
       <table border="1" width="100%">
                        <tr height="10%">
                            <th>
                                <h3 align="center">Appointment Date</h3>
                            </th>
                            <th>
                                <h3 align="center">Name</h3>
                            </th>
                            <th>
                                <h3 align="center">Age</h3>
                            </th>
                            <th>
                                <h3 align="center">Disease</h3>
                            </th>
                            <th>
                                <h3 align="center">Download Prescription File</h3>
                            </th>
                            <th>
                                <h3 align="center">Get Details</h3>
                            </th>
                        </tr>

  
  <?php
  //$check=0;

  if(isset($_REQUEST["mid"])){

                         
                       
          $load_member_information = "SELECT * FROM member,prescription,appointment where member.member_id = prescription.member_id and appointment.member_id = prescription.member_id and member.name like '%".$_REQUEST['mid']."%' and prescription.disease like '%".$_REQUEST['mid']."%'";  

            $a=getDataFromDB($load_member_information);
 
  
  foreach($a as $row){
     
      $dob_year = explode("-",$row['dob']);
      $current_year = date("Y");
     
    ?>
        <tr>
                  <td align="center">
                     <b><?php echo $row['date']; ?></b>
                  </td>
                  <td align="center">
                     <b> <a href="patientdetails.php?mid=<?php echo $row['member_id']; ?>"><?php echo $row['name']; ?></a></b>
                  </td>
                  <td align="center">
                      <b><?php 

                  $age = $current_year - $dob_year[0];    
                  echo $age;

               ?></b>
                  </td>
                  <td align="center">
                      <b><?php echo $row['disease']; ?></b>
                  </td>
                  <td align="center">
                      <a href="#"></a>
                  </td>
                  <td>
                      <a href="prescriptionHistory.php?mid=<?php echo $row['member_id']; ?>">Get details</a>
                  </td>
              </tr>

  
    <?php

    
   
    }


?>
</table>

   <?php

    
   
    }


  


?>

