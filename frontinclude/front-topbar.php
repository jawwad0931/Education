
<?php
    session_start();
    include 'frontinclude/frontheader.php';
?>
<!-- Navigation -->
<nav>
<div class="container nav_container">
    <a href="index.php" class="text-decoration-none">
        <h4 class="fw-light">Education<span class="fs-5 fw-bold">First</span></h4>
    </a>
    <ul class="nav_menu">
        <li><a href="home.php" class="text-decoration-none">Home</a></li>
        <li><a href="about.php" class="text-decoration-none">About</a></li>
        <li><a href="courses.php" class="text-decoration-none">Courses</a></li>
        <li><a href="contact.php" class="text-decoration-none">Contact</a></li>
        <li>
        <div class="dropdown">
        <button class="btn btn-dark btn-sm" type="button" data-toggle="dropdown" aria-expanded="false">
            <?php 
                if(isset($_SESSION['authen'])){
                    echo $_SESSION['auth_user']['Name'];
                }else{
                    echo 'Random User';
                }
            ?>
        </button>
        <ul class="dropdown-menu bg-secondary">
            <form action="signupCode.php" method="post">
                <button type="submit" name="logout" class='dropdown-item'>Logout</button>
            </form>
            <a class="dropdown-item" href="#">Back to home</a>
        </ul>
        </div>
        </li>
    </ul>
</div>
</nav>

 <!-- boostrap script tag -->
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
