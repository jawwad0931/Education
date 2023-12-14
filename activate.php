<!-- This is Activate button used for appointLawyer Page -->
<?php
include('Config/db.php');
if (isset($_GET['activateId'])) {
	$Apoint_id = $_GET['activateId']; 
	$Activate_run_sql = "UPDATE `studenttable` SET `status`= 1 WHERE Id='$Apoint_id'";
	mysqli_query($conn, $Activate_run_sql);
}
// Go back to AppointLawyer.php 
header("location: Register.php");
?>