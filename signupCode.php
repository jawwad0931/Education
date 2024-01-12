<?php 
    // error_reporting(E_ALL);
    session_start();
    include "frontinclude/frontheader.php";
    include "Config/db.php";

    // for register page  
    if (isset($_POST['signup'])) {
        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
        $confirm = $_POST['confirm'];
    
        if ($Password == $confirm) {
            $existEmail = "SELECT `Email` FROM `signup` WHERE `Email` = '$Email'";
            $checkExist = mysqli_query($conn, $existEmail);
    
            if (mysqli_num_rows($checkExist) > 0) {
                $_SESSION['Regist_auth'] = "Email Already Exist Please try again!!!";
                header("location: index.php");
                exit(0);
            } else {
                $sql = "INSERT INTO `signup` (`Name`, `Email`, `Password`) VALUES ('$Name', '$Email', '$Password')";
                $query = mysqli_query($conn, $sql);
    
                if (!$query) {
                    $_SESSION['Regist_auth'] = "Data Not Inserted";
                    header("location: index.php");
                    exit(0);
                } else {
                    $_SESSION['Regist_auth'] = "user register successfully now login to access dashboard";
                    header("location: index.php");
                    exit(0);
                }
            }
        } else {
            $_SESSION['Regist_auth'] = "Password and confirm password not match";
            header("location: index.php");
            exit(0);
        }
    }
    



    // For login page
    if(isset($_POST['signIn'])){
        $Name = $_POST['Name'];
        $Password = $_POST['Password'];
    
        $checklogin = "SELECT * FROM `signup` WHERE `Name` = '$Name' AND `Password` = '$Password' LIMIT 1";
        $runlog = mysqli_query($conn, $checklogin); 
    
        if(mysqli_num_rows($runlog) > 0){
            $rows = mysqli_fetch_assoc($runlog);
            
            $_SESSION['authen'] = true;
            $_SESSION['auth_user'] = [
                'Id' => $rows['Id'],
                'Name' => $rows['Name'],
                'Email' => $rows['Email'],
                'Password' => $rows['Password']
            ];
            $_SESSION['login_Session']="User Logged In";
            header("Location: home.php");
            exit;
        } else {
            $_SESSION['login_Session']="Access Denied User Email Or Password Incorrect";
            header("Location: index.php");
            exit;
        }
    } 


    // use for logout
    if(isset($_POST['logout'])){
        session_destroy();
        unset($_SESSION['authen']);
        unset($_SESSION['auth_user']);
        header("location: index.php");
        exit(0);
    }
?>



