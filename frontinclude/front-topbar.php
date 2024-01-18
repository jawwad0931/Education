<?php
session_start();
include 'frontinclude/frontheader.php';
?>

<nav class="navbar navbar-expand-sm w-100" style="background-color:#6c63ff;height:50px;">
    <a class="navbar-brand fw-bold text-light" href="#">Education<span class="fw-light text-light">First</span></a>
    <button class="navbar-toggler border" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
        aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon bg-light text-dark"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 w-100 justify-content-end">
            <li class="nav-item">
                <a class="nav-link text-light" href="home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="courses.php">Courses</a>
            </li>    
            <li class="nav-item">
                <a class="nav-link text-light" href="contact.php">Contact</a>
            </li>
            <li class="nav-item dropdown mr-5">
                <a class="nav-link dropdown-toggle text-light mr-4" href="#" id="dropdownId" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <?php
                    error_reporting(0);
                    echo isset($_SESSION['authen']) ? $_SESSION['auth_user']['Name'] : 'Random User';
                    ?> 
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <form action="signupCode.php" method="post">
                        <button type="submit" name="logout" class="dropdown-item">Logout</button>
                    </form>
                    <a class="dropdown-item" href="home.php">Back to home</a>
                </div>
            </li>
        </ul>
    </div>
</nav>



<!-- boostrap 4 -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>

<!-- boostrap 5.2.3 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>


















