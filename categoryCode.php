<?php 
    include "Config/db.php";
?>
<?php
    if(isset($_POST['Submit_Category'])){
        $CourseIcon = $_FILES["CourseIcon"]["name"];
        $tempname = $_FILES["CourseIcon"]["tmp_name"];
        $folder = "images/" . $CourseIcon;
    
        $CourseName = $_POST['CourseName'];
        $CourseDescription = $_POST['CourseDescription'];


        $courseSlt = "INSERT INTO `coursecategory`(`CourseIcon`, `CourseName`, `CourseDescription`) VALUES ('$CourseIcon','$CourseName','$CourseDescription')";
        $courseQuery = mysqli_query($conn , $courseSlt);


        if (move_uploaded_file($tempname, $folder)) {
            // File uploaded successfully
            header("location: category.php");
        } else {
            // Handle file upload error
            echo '<script>alert("Error Found: ' . $_FILES["Image"]["error"] . '");</script>';
            header("location: category.php");
        }       
        mysqli_close($conn);
    }
?>