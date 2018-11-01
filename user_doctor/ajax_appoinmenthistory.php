<?php

function getDataFromDB($sql){
  $conn = mysqli_connect($_ENV["MYSQL_HOST"].":".$_ENV["MYSQL_PORT"], $_ENV["MYSQL_UN"], $_ENV["MYSQL_PW"],$_ENV["MYSQL_DB"]);
  
  $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
  $arr=array();
  
  while($row = mysqli_fetch_assoc($result)) {
    $arr[]=$row;
  }
  return $arr;
}
?>
<table border="1" align="center" width="100%">
                                  <tr>
                                      <td  width="25%"><strong>Appoinment Date</strong></td>
                                      <td  width="25%"><strong>Appointment Time</strong></td>
                                      <td  width="25%"><strong>Patient Name</strong></td>
                                      <td  width="25%"><strong>Status</strong></td>
                                     
                                  </tr>
<?php 
      if(isset($_REQUEST["mid"])){
           $load_member_information = "SELECT * from member,appointment where member.member_id = appointment.member_id and member.name like '%".$_REQUEST['mid']."%'" ; 
                         
         

            $a=getDataFromDB($load_member_information);
 
  
  foreach($a as $row){
     $current_year = date("Y");
                              $dob_year = explode("-",$row['dob']);

     
    ?>
         <tr>
                                      
                  <td><?php echo $row['date'] ?></td>
                  <td><?php echo $row['time']?></td>
                  <td><a href="patientDetails.php?mid=<?php echo $row['member_id']; ?>"><?php echo $row['name']; ?></a></td>
                  <td><?php echo $row['status'] ?></td>
                 
              </tr>  

  
    <?php

    
   
    }

?>
</table>

   <?php

  
    }

?>

