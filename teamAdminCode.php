<?php include 'Config/db.php'; ?>
<?php 
    if(isset($_POST['Submit_member'])){
        $MemberPhoto = $_FILES['MemberPhoto']['name'];
        $MemberTempName = $_FILES['MemberPhoto']['tmp_name']; 
        $TeamFolder = "images/" . $MemberPhoto;
        $MemberName = $_POST['MemberName'];
        $MemberExperties = $_POST['MemberExperties'];

        $sltMember = "INSERT INTO `teammember`(`MemberPhoto`, `MemberName`, `MemberExperties`) VALUES ('$MemberPhoto','$MemberName','$MemberExperties')";
        $sltMemberQuery = mysqli_query($conn, $sltMember);

        if(!$sltMemberQuery){
            die("Error Show" . mysqli_error($conn));
        }else{
            header("location: teamAdmin.php");
            exit(0);
        }
    }
    mysqli_close($conn);
?>
