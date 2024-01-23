<?php 
    include "Config/db.php";
?>
<?php
    if(isset($_POST['submit_course'])){
        $course_pic = $_FILES["course_pic"]["name"];
        $tempname = $_FILES["course_pic"]["tmp_name"];
        $folder = "images/" . $course_pic;
    
        $course_name = $_POST['course_name'];
        $course_status = $_POST['course_status'];


        $courseSlt = "INSERT INTO `courses_detail`(`course_pic`, `course_name`, `course_status`) VALUES ('$course_pic','$course_name','$course_status')";
        $courseQuery = mysqli_query($conn , $courseSlt);


        if (move_uploaded_file($tempname, $folder)) {
            // File uploaded successfully
            header("location: Admincourse.php");
        } else {
            // Handle file upload error
            echo '<script>alert("Error Found: ' . $_FILES["Image"]["error"] . '");</script>';
            header("location: Admincourse.php");
        }       
        mysqli_close($conn);
    }
?>