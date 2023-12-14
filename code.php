<!-- iss page ka yahan koi kaam nahi yeh page data ko insert karwata hai lekin hum
 backend ke bajaye frontend se data ko insert kar rahay hain -->
 <?php
// include Files code call here
session_start();
include('Config/db.php');

// Inserting data into the database
if (isset($_POST['submit'])) {
    $Name = $_POST['Name'];
    $FatherName = $_POST['FatherName'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $Class = $_POST['Class'];
    $Fees = $_POST['Fees'];

    $Sql_query = "INSERT INTO `studenttable` (`Name`, `FatherName`, `PhoneNumber`, `Class`, `Fees`)
    VALUES ('$Name','$FatherName','$PhoneNumber','$Class','$Fees')";

    $Run_Sql_query = mysqli_query($conn, $Sql_query);

    if ($Run_Sql_query) {
        // Redirect to registration page after successful insertion
        header('location: Register.php');
        $_SESSION['status'] = 'Registered Successfully';
    }
}

// Calculating the sum of fees
$sumQuery = "SELECT SUM(Fees) AS TotalFees FROM studenttable";
$result = mysqli_query($conn, $sumQuery);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $totalFees = $row['Fees'];
    echo "Total Fees of all students: $totalFees";
} else {
    echo "Error calculating total fees: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>

?>
<!-- Here Define Logout code -->
<?php
if (isset($_POST['logoutbtn'])) {
    session_destroy();
    unset($_SESSION['auth']);
    unset($_SESSION['auth_user']);
    header('location: UserLogin.php');
    exit(0);
}
?>