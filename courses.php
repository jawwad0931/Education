<?php 
    include "frontinclude/frontheader.php";
    include "frontinclude/front-topbar.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="./css/styles.css" />
    <style>
        .courses{
            margin-top: 1rem;
        }
    </style>
  </head>
  <body>
    <!-- =========================== END OF NAVBAR =========================== -->
    <section class="courses">
    <div class="banner">
        <div class="inner_banner m-3">
            <h1 class="text-center fw-light p-3">Video Course Services</h1>
            <hr>
        </div>
    </div>
    <div class="container courses_container">
        <?php
        include "Config/db.php";
        $servicequery = "SELECT * FROM `courses_detail`";
        $Run_Service = mysqli_query($conn, $servicequery);
        if (!$Run_Service) {
            die(mysqli_error($conn));
        } else {
            while ($ServiceRow = mysqli_fetch_assoc($Run_Service)) {
                echo '<article class="course border" style="height:100%;">';
                echo '<div class="course_image">';
                echo '<img src="images/' . $ServiceRow["course_pic"] . '" height="350px" alt="">';
                echo '</div>';
                echo '<div class="course_info">';
                echo '<h3>' . $ServiceRow["course_name"] . '</h3>';
                echo '<h5 class="text-light fw-light">' . $ServiceRow["course_status"] . '</h5>';
                echo '</div>';
                echo '</article>';
            }
        }
        ?>
    </div>
    </section>
    <!-- =========================== END OF COURSES =========================== -->
    <?php 
    include "frontinclude/frontfooter.php";
    ?>
    <!-- ================================= END OF FOOTER======================================= --> 
    <script src="./main.js"></script>
</body>
</html>