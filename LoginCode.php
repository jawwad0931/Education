<!-- This code use for Login user and when admin login successful it redirect to index page-->
<?php
session_start();
include('Config/db.php');
if (isset($_POST['Login'])) {
    $UserName = $_POST['UserName'];
    $Password = $_POST['Password'];
    $savesql = "SELECT * FROM `adminlogin` WHERE UserName='$UserName' AND Password='$Password' LIMIT 1";
    $sqlRun = mysqli_query($conn, $savesql);
    if (mysqli_num_rows($sqlRun) > 0) {
        foreach ($sqlRun as $row) {
            $id = $row['Id'];
            $UserName = $row['UserName'];
            $Password = $row['Password'];
            $role_as = $row['role_as'];
        }
        $_SESSION['auth'] = "$role_as";
        $_SESSION['auth_user'] = [
            'id' => $id,
            'username' => $UserName,
            'password' => $Password,
        ];
        $_SESSION['status'] = 'Login Successful';
        header("Location: index.php");
    } else {
        $_SESSION['status'] = 'Access Denied Something went wrong';
        header("Location: UserLogin.php");
    }
}
?>