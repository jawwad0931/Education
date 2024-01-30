
<?php
    session_start();
    include "Config/db.php";

    if(isset($_POST['fill_form'])){
        $photo = $_FILES['photo']['name'];
        $tempName = $_FILES['photo']['tmp_name'];
        $Dir_structure = "images/" . $photo;

        $Firstname = $_POST['Firstname'];
        $Lastname = $_POST['Lastname'];
        $Fathername = $_POST['Fathername'];
        $Email = $_POST['Email'];
        $class = $_POST['class'];
        $schoolname = $_POST['schoolname'];
        $Phone = $_POST['Phone'];
        $city = $_POST['city'];
        $address = $_POST['address'];
        $age = $_POST['age'];
        $DOB = $_POST['DOB'];
        $gender = $_POST['gender'];
        $agree = $_POST['agree'];

        $slt = "INSERT INTO `form`(`photo`, `Firstname`, `Lastname`, `Fathername`, `Email`, `class`, `schoolname`, `Phone`, `city`, `address`, `age`, `DOB`, `gender`, `agree`) 
        VALUES ('$photo','$Firstname','$Lastname','$Fathername','$Email','$class','$schoolname','$Phone','$city','$address','$age','$DOB','$gender','$agree')";

        $checkForm = mysqli_query($conn, $slt);

        if(move_uploaded_file($tempName , $Dir_structure)){
            header("location: fillform.php");
            $_SESSION['formCheck']="Data Insert Successfully";
            exit(0);
        }else{
            echo "Error Show" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
?>