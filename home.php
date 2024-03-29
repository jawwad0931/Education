<?php
include "frontinclude/frontheader.php";
include "frontinclude/front-topbar.php";
?>

<body>
    <header>
        <!-- =========================== Session start to check login =========================== -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                    // if (isset($_SESSION['login_Session'])) {
                    //     $NewMessage = $_SESSION['login_Session'];
                    //     echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">' . $NewMessage . '</div>';
                    //     '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                    //     unset($_SESSION['login_Session']);
                    // }                   
                    if (isset($_SESSION['login_Session'])) {
                        // Output the Bootstrap 5 alert using the session message
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            ' . $_SESSION['login_Session'] . '
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
                        // Unset the session variable to clear the message
                        unset($_SESSION['login_Session']);
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- =========================== Session end=========================== -->
        <div class="container header_container">
            <div class="header_left">
                <h1 class="text-sm">Enhance skills, empower student journey.</h1>
                <a href="courses.php" class="btn btn-primary btn-sm my-3"> Get Started</a>
            </div>

            <div class="header-right">
                <div class="header_right-image">
                    <img src="./images/header.svg" class="animated bounce" alt="">
                </div>
            </div>
        </div>
    </header>

    <!-- =========================== END OF HEADER =========================== -->

    <section class="categories">
        <div class="container categories_container">
            <div class="categories_left">
                <h1>Categories</h1>
                <p class="text-sm">
                    For those who dream of shaping the future through technology, the Tech Trailblazer category awaits.
                    From coding marvels to mastering the latest software, each achievement in this category marks a
                    significant step toward becoming a tech-savvy trailblazer. Show the world your coding prowess and
                    innovation in the ever-evolving tech landscape.
                </p>
                <a href="courses.php" class="btn">View Courses</a>
            </div>
            <div class="categories_right">
                <?php 
                include "Config/db.php";
                $sltCategory = "SELECT * FROM `coursecategory`";
                $sltQuery = mysqli_query($conn, $sltCategory);
                if(!$sltQuery){
                    die(mysqli_error($conn));
                }else{
                while($CategoryRow = mysqli_fetch_assoc($sltQuery)){
                echo'<article class="category">';
                    echo'<span class=""><img src="images/' . $CategoryRow['CourseIcon'] . '" style="height:50px; width:50px;" alt=""></span>';
                    echo'<h5>' . $CategoryRow['CourseName'] . '</h5>';
                    echo'<p>' . $CategoryRow['CourseDescription'] . '</p>';
                echo'</article>';
                }
                }
                mysqli_close($conn);
                ?>
            </div>
        </div>
    </section>

    <!-- =========================== END OF CATEGORIES =========================== -->


<!-- 
    <section class="courses">
        <div class="container courses_container">
            <article class="course">
                <div class="course_image">
                    <img src="./images/course1.jpg" alt="">
                </div>

                <div class="course_info">
                    <h4>Responsive Social Media Website UI Design</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque voluptatem velit qui earum
                        eveniet aut placeat saepe nulla. Similique, obcaecati!</p>
                    <a href="courses.html" class="btn btn-primary">Learn More</a>
                </div>
            </article>

            <article class="course">
                <div class="course_image">
                    <img src="./images/course2.jpg" alt="">
                </div>
                <div class="course_info">
                    <h4> Responsive SmartHome Website Design </h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque voluptatem velit qui earum
                        eveniet aut placeat saepe nulla. Similique, obcaecati!</p>
                    <a href="courses.html" class="btn btn-primary">Learn More</a>
                </div>

            </article>

            <article class="course">
                <div class="course_image">
                    <img src="./images/course3.jpg" alt="">
                </div>
                <div class="course_info">
                    <h4>Responsive Admin Dashboard UI Design</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque voluptatem velit qui earum
                        eveniet aut placeat saepe nulla. Similique, obcaecati!</p>
                    <a href="courses.html" class="btn btn-primary">Learn More</a>
                </div>
            </article>
        </div>
    </section> -->
    <!-- =========================== END OF COURSES =========================== -->
               
    <section class="faqs">
        <h2> Frequently Asked Questions</h2>
        <div class="container faqs_container">
            <?php include('Config/db.php');
            $FaqQuery = "SELECT * FROM `faq`";
            $checkfaq = mysqli_query($conn, $FaqQuery);
            if (!$checkfaq) {
                die(mysqli_error($conn));
            } else {
                while ($fetchfaq = mysqli_fetch_assoc($checkfaq)) {
                    echo '<article class="faq">';
                    echo '<div class="faq_icon"> <i class="uil uil-plus"></i></div>';
                    echo '<div class="question_answer">';
                    echo '<h4>' . $fetchfaq["faqQuest"] . '</h4>';
                    echo '<p>' . $fetchfaq["faqAnswer"] . '</p>';
                    echo '</div>';
                    echo '</article>';
                }
            }
            ?>
        </div>
    </section>
    <!-- ================================= END OF FAQS ======================================= -->

    <div class="container">
      <div class="row d-flex align-items-center justify-content-center">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="content rounded m-3 p-5">
                <h3 class="text-center text-light m-3">Famous Quotes For Students</h3>
                <hr class="hr mb-4">
                <blockquote class="text-center text-light" id="quotes">Loading...</blockquote>
                <p class="text-right text-light" id="authors">Loading...</p>
                <div class="text-center">
                <button class="btn btn-primary btn-sm" onclick="quoteBtn(Apiurl)">Click Generate</button>
                <!-- <button class="btn btn-primary btn-block" onclick="tweet()">Twitter</button> -->
              </div>
            </div>
        </div>
      </div>
    </div>     
    <!-- ================================= END OF QUOTES ======================================= -->

    <!-- <section class="container testimonials_container mySwiper">
    <h2>Student's Testimonials</h2>
    <div class="swiper-wrapper">
        <article class="testimonial swiper-slide">
            <div class="avatar">
                <img src="./images/avatar1.jpg" alt="">
            </div>
            <div class="testimonial_info">
                <h5>Diana bradman</h5>
                <small>Student</small>
            </div>
            <div class="testimonial_body">
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam, ut minima corrupti sint in sapiente ipsum veniam voluptatum. Aliquam facilis veniam numquam ducimus culpa repellat illum eum tempora itaque quod!
                </p>
            </div>
        </article>

        <article class="testimonial swiper-slide">
            <div class="avatar">
                <img src="./images/avatar2.jpg" class="bounce" alt="">
            </div>
            <div class="testimonial_info">
                <h5>Ernest smith</h5>
                <small>Web developer</small>
            </div>
            <div class="testimonial_body">
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam, ut minima corrupti sint in sapiente ipsum veniam voluptatum. Aliquam facilis veniam numquam ducimus culpa repellat illum eum tempora itaque quod!
                </p>
            </div>
        </article>

        <article class="testimonial swiper-slide">
            <div class="avatar">
                <img src="./images/avatar3.jpg" alt="">
            </div>
            <div class="testimonial_info">
                <h5>Edem Quist</h5>
                <small>Student</small>
            </div>
            <div class="testimonial_body">
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam, ut minima corrupti sint in sapiente ipsum veniam voluptatum. Aliquam facilis veniam numquam ducimus culpa repellat illum eum tempora itaque quod!
                </p>
            </div>
        </article>

        <article class="testimonial swiper-slide">
            <div class="avatar">
                <img src="./images/avatar4.jpg" alt="">
            </div>
            <div class="testimonial_info">
                <h5>Hajia Bintu</h5>
                <small>Student</small>
            </div>
            <div class="testimonial_body">
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam, ut minima corrupti sint in sapiente ipsum veniam voluptatum. Aliquam facilis veniam numquam ducimus culpa repellat illum eum tempora itaque quod!
                </p>
            </div>
        </article>

        <article class="testimonial swiper-slide">
            <div class="avatar">
                <img src="./images/avatar5.jpg" alt="">
            </div>
            <div class="testimonial_info">
                <h5>Jane Doe</h5>
                <small>Student</small>
            </div>
            <div class="testimonial_body">
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam, ut minima corrupti sint in sapiente ipsum veniam voluptatum. Aliquam facilis veniam numquam ducimus culpa repellat illum eum tempora itaque quod!
                </p>
            </div>
        </article>
    </div>
    <div class="swiper-pagination"></div>
    </section> -->
    <!-- ================================= END OF TESTIMONIALS======================================= -->

    <?php
    include "frontinclude/frontfooter.php";
    ?>
    <!-- For quotes generator -->
    <script src="home.js"></script>
</body>

</html>