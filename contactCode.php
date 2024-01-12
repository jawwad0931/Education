<?php 
    session_start();
    include 'Config/db.php';
    if(isset($_POST['send'])){
        $FirstName = $_POST['FirstName'];
        $LastName = $_POST['LastName'];
        $Email = $_POST['Email'];
        $Message = $_POST['Message'];
        $sltcontact = "INSERT INTO `Contact`(`FirstName`, `LastName`, `Email`, `Message`) VALUES ('$FirstName','$LastName','$Email','$Message')";
        $checkContact = mysqli_query($conn,$sltcontact);
        if(!$checkContact){
            echo $_SESSION['CheckContact']="Your message successfully sent";    
        }else{
            echo $_SESSION['CheckContact']="Data inserted successfully";
            header("location: contact.php");
        }

        mysqli_close($conn);

    }

?>