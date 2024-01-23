
<?php
    include "Config/db.php";

    if(isset($_POST['form_submit'])){
        $photo = $_FILES['name']['temp_name'];
    }
?>