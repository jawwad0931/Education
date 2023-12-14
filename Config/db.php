<!-- Backend Database Connection -->
<?php
$conn = mysqli_connect('localhost:3306','root','','student');
// if connection does not work use below code
// if(!$conn){
//     die('Error Found');
// }else{
//     echo '<script>alert("Connection Successfull")</script>';
// }
?>