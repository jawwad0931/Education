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
            <article class="course" style="height:100%;">
                <div class="course_image">
                    <img src="./images/course1.jpg" height="350px" alt="">
                </div>                  
                <div class="course_info">
                    <h3>English Language Courses</h3>
                    <h5 class="text-light fw-light">Available</h5>
                </div>
            </article>    
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