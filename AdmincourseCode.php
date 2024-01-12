<?php 
    include "Config/db.php";
    if(isset($_POST['submit_course'])){
        $course_pic = $_POST['course_pic'];
        $course_name = $_POST['course_name'];
        $course_status = $_POST['course_status'];


        $courseSlt = "INSERT INTO `courses_detail`(`course_pic`, `course_name`, `course_status`) VALUES ('$course_pic','$course_name','$course_status')";
        $courseQuery = mysqli_query($conn , $courseSlt);
        if(!$courseQuery){
            echo "Error show" . mysqli_error($conn);
        }else{
            echo "Data insert Successfully";
            header("location: Admincourse.php");
        }

        mysqli_close($conn);
    }



?>