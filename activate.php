<?php 
    // Connect to database  
    include('Config/db.php');
?>
<?php 
    // Check if id is set or not if true toggle, 
    // else simply go back to the page 
    if (isset($_GET['Id'])){ 
  
        // Store the value from get to a  
        // local variable "course_Id" 
        $Id=$_GET['Id']; 
  
        // SQL query that sets the status 
        // to 1 to indicate activation. 
        $sql="UPDATE `studenttable` SET `status`=1 WHERE Id='$Id'"; 
  
        // Execute the query 
        mysqli_query($conn,$sql); 
    } 
  
    // Go back to course-page.php 
    header('location: Register.php'); 
?>