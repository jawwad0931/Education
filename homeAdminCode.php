<?php 
include('Config/db.php');
 ?>
<?php 
    if(isset($_POST['submit_FAQ'])){
        $faqQuest = $_POST['faqQuest'];
        $faqAnswer = $_POST['faqAnswer'];
        $faqSelect = "INSERT INTO `faq`(`faqQuest`, `faqAnswer`) VALUES ('$faqQuest','$faqAnswer')";
        $checkQuery = mysqli_query($conn,$faqSelect);
        if(!$checkQuery){
            echo "Not Run" . mysqli_Error($conn);
        }else{
            echo "Run Successfully";
            header("location: homeAdminpage.php");
            exit(0);
        }
    }
    mysqli_close($conn);
?>