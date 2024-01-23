<!-- User registration code delete here -->
<?php
// includes file are here
include('Config/db.php');
if (isset($_GET['deleteid'])) {
    $dlt = $_GET['deleteid'];
    $dltquery = "DELETE FROM `studenttable` WHERE Id = $dlt";
    $query = mysqli_query($conn, $dltquery);
    if ($query) {
        header("location: Register.php");
    }
}


// Delete Functionality for Contact us Page
if (isset($_GET['deleteContactid'])) {
    $Contactdlt = $_GET['deleteContactid'];
    $dltContact = "DELETE FROM `contact` WHERE Id = $Contactdlt";
    $Contactquery = mysqli_query($conn, $dltContact);
    if ($Contactquery) {
        header("location: contactAdmin.php");
    }
}



// Delete Functionality for Update Courses Page
if(isset($_GET['deleteCourseid'])){
    $dltcourse = $_GET['deleteCourseid'];
    $dltcoursequery = "DELETE FROM `courses_detail` WHERE Id = $dltcourse";
    $Coursequery = mysqli_query($conn,$dltcoursequery);
    if($Coursequery){
        header("location: Admincourse.php");
        exit(0);
    }
}


// Delete Functionality for Category Courses Page
if(isset($_GET['deleteCourseCategoryid'])){
    $dltcourseCategory = $_GET['deleteCourseCategoryid'];
    $dltcourseCategoryquery = "DELETE FROM `coursecategory` WHERE Id = $dltcourseCategory";
    $CategoryCoursequery = mysqli_query($conn,$dltcourseCategoryquery);
    if($CategoryCoursequery){
        header("location: category.php");
        exit(0);
    }
}


// Delete Functionality for teamAdmin change
if(isset($_GET['deleteTeamMemberid'])){
    $dltteamMember = $_GET['deleteTeamMemberid'];
    $dlteamMemberquery = "DELETE FROM `teammember` WHERE Id = $dltteamMember";
    $teamAdminquery = mysqli_query($conn,$dlteamMemberquery);
    if($teamAdminquery){
        header("location: teamAdmin.php");
        exit(0);
    }
}
mysqli_close($conn);
?>