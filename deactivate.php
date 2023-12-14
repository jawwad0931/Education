<!-- Deactivate code here jo Specific id par call hoga-->
<?php
include('Config/db.php');
if (isset($_GET['deactivateId'])) {
	$Deactive_Apoint_id = $_GET['deactivateId'];
	$Deactivate_run_sql = "UPDATE `studenttable` SET `status`= 0 WHERE Id='$Deactive_Apoint_id'";
	mysqli_query($conn, $Deactivate_run_sql);
}
header("location: Register.php");
?>