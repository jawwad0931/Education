<?php 
	// Connect to database 
	include('Config/db.php'); 
?>
<?php
	// Check if Id is set or not, if true, 
	// toggle else simply go back to the page 
	if (isset($_GET['Id'])){ 

		// Store the value from get to 
		// a local variable "course_Id" 
		$Id=$_GET['Id']; 

		// SQL query that sets the status to 
		// 0 to indicate deactivation. 
		$sql="UPDATE `studenttable` SET 
			`status`=0 WHERE Id='$Id'"; 

		// Execute the query 
		mysqli_query($conn,$sql); 
	} 

	// Go back to course-page.php 
	header('location: Register.php'); 
    exit(0);
?>
