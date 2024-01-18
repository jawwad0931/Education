<?php 
    include "Config/db.php";
    if(isset($_GET['deleteCourseid'])){
        $dltcourse = $_GET['deleteCourseid'];
        $dltcoursequery = "DELETE FROM `courses_detail` WHERE Id = $dltcourse";
        $Coursequery = mysqli_query($conn,$dltcoursequery);
        if($Coursequery){
            header("location: Admincourse.php");
            exit(0);
        }
    }
    mysqli_close($conn);
?>