<!-- user registration record fetch here -->
<?php
// icludes files here
session_start();
include('Config/db.php');
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
?>


<?php 
    // To show data in field
    if(isset($_GET['updateid'])){
        $Update_id = $_GET['updateid'];
        $Updatedata = "SELECT * FROM `studenttable` WHERE Id = $Update_id";
        $checkUpdates = mysqli_query($conn, $Updatedata);
        if($checkUpdates){
            $Updated_Row = mysqli_fetch_assoc($checkUpdates);
            $Name = $Updated_Row['Name'];
            $FatherName = $Updated_Row['FatherName'];
            $PhoneNumber = $Updated_Row['PhoneNumber'];
            $Class = $Updated_Row['Class'];
            $Fees = $Updated_Row['Fees'];
        }
    }

    // TO update data which defined inside the field
    if(isset($_GET['NewIdUpdate'])){
        $Id = $_GET['NewIdUpdate'];
        // get names attributes which define in update form field
        $Name = $_POST['Name'];
        $FatherName = $_POST['FatherName'];
        $PhoneNumber = $_POST['PhoneNumber'];
        $Class = $_POST['Class'];
        $Fees = $_POST['Fees'];

        $updateQuery = "UPDATE `studenttable` SET `Name`='$Name', `FatherName`='$FatherName', `PhoneNumber`='$PhoneNumber', `Class`='$Class', `Fees`='$Fees' WHERE Id = $Id";

        $updateCheckQuery = mysqli_query($conn,$updateQuery);

        if(!$updateCheckQuery){
            echo mysqli_error($conn) . "Error Show";
        }else{
            echo "Successfully Updated";
            echo '<script>window.location="Register.php"</script>';
            // header("location: Register.php");
            // exit(0);
        }
        mysqli_close($conn);
    }

?>

<!-- Content Wrapper -->
<div class="content-wrapper d-flex align-items-center justify-content-center" style="height: auto;">
  <!-- Content Header -->
<!-- UpdateForm -->
<form action="RecordUpdate.php?NewIdUpdate=<?php echo $Update_id ?>" class="w-50" method="POST">
    <h3 class="py-3">Update Record</h3>                                 
    <label for="name">Student Name:</label>
    <input type="text" id="name" name="Name" class="form-control" value="<?php echo $Name; ?>" required>

    <label for="father-name">Father Name:</label>
    <input type="text" id="father-name" name="FatherName" class="form-control" value="<?php echo $FatherName; ?>" required>

    <label for="email">Phone Number:</label>
    <input type="number" id="email" name="PhoneNumber" class="form-control" value="<?php echo $PhoneNumber; ?>" required>

    <label for="email">Class:</label>
    <input type="number" id="Class" name="Class" class="form-control" value="<?php echo $Class; ?>" required>

    <label for="email">Fees:</label>
    <input type="number" id="Fees" name="Fees" class="form-control" value="<?php echo $Fees; ?>" required>
    <!-- Add other form elements as needed -->
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </div>
</form>
<!-- End of Form -->
</div>

<!-- Footer include file -->
<?php include('includes/footer.php'); ?>