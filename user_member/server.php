<?php

	$conn = mysqli_connect("localhost", "root", "","mediportal_db");
if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

if(isset($_REQUEST["tit"]) && isset($_REQUEST["dpt"])){
	$sql="select name from doctor where doctor_id=(select doctor_id from professional_info where title='".$_REQUEST["tit"]."' and department='".$_REQUEST["dpt"]."')";

	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));

	$arr=array();

	while($row = mysqli_fetch_assoc($result)) {
		$arr[]=$row['name'];
	}
}	
	
?>

<select name="user">
	<?php for($i=0; $i<count($arr); $i++) {?>
	<option value="<?php echo $arr[$i]; ?>"><?php echo $arr[$i]; ?></option>
	
<?php }
 ?>
	
</select>

<?php 
	
	mysqli_close($conn);
?>