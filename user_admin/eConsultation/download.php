<?php
$id=$_GET["id"];
//$id = str_replace(' ', '%20', $id);
$sub_id = $_GET["sub_id"];
//$sub_id = str_replace(' ', '%20', $sub_id);
$sql = "select * from messages where time = '".$id."' and date = '".$sub_id."'"; // 1
$con = mysqli_connect("localhost", "root", "", "mediportal_db", 3306);
$res = $con->query($sql);
$image = null;
while($row = $res->fetch_assoc())
{ 
    $image = $row['attachment'];
}
//header("Content-type: ".$type);
header('Content-Disposition: attachment; filename="'."file.png".'"');
header("Content-Transfer-Encoding: binary"); 
header('Expires: 0');
header('Pragma: no-cache');
//header("Content-Length: ".$size);

echo $image;
exit();
?>