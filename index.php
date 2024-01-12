<?php
session_start();
include "frontinclude/frontheader.php";
?>

<head>
    <link rel="stylesheet" href="./css/signin.css">
</head>

<body>
    <!-- using this code when we click back button on dashboard
    it redirectme to dashboard page using this code-->
    <?php         
        if(isset($_SESSION['authen'])) {
            $_SESSION['Authen_login'] = "You are already logged in";
            header("location: home.php");
            exit(0);
        }
    ?>
    <!-- =========================== Body Start =========================== -->
    <div class="container">
        <div class="container-fluid mt-3">
            <div class="row d-flex align-items-center justify-content-end">
            </div>
        </div>
        <div class="forms-container">
            <div class="signin-signup">
                <form action="signupCode.php" method="post" class="sign-in-form">
                <div class="container-fluid mt-0">
        <div class="row d-flex align-items-center justify-content-center">
            <!-- Session for SignIn form -->
            <div class="col-md-12">
                <?php
                // Check if the session variable is set 
                // session for login page
                if (isset($_SESSION['login_Session'])) {
                    // Output the Bootstrap 5 alert using the session message
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            ' . $_SESSION['login_Session'] . '
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
                    // Unset the session variable to clear the message
                    unset($_SESSION['login_Session']);
                }

                // Session for register auth
                if (isset($_SESSION['Regist_auth'])) {
                    // Output the Bootstrap 5 alert using the session message
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            ' . $_SESSION['Regist_auth'] . '
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
                    // Unset the session variable to clear the message
                    unset($_SESSION['Regist_auth']);
                }
                ?>
            </div>
        </div>
    </div>
                    <h2 class="text-light title">Sign in</h2>
                    <div class="input-field">
                        <i class="fa fa-user"></i>
                        <input type="text" name="Name" placeholder="Username" required>
                    </div>
                    <div class="input-field">
                        <i class="fa fa-lock"></i>
                        <input type="password" name="Password" placeholder="Password" required>
                    </div>
                    <input type="submit" value="Login" name="signIn" id="" class="btn btn-solid">
                </form>


                <!-- Second Form -->
                <form action="signupCode.php" method="post" class="sign-up-form">
                    <h2 class="text-light title">Sign up</h2>
                    <div class="input-field">
                        <i class="fa fa-user"></i>
                        <input type="text" name="Name" placeholder="Username" required>
                    </div>
                    <div class="input-field">
                        <i class="fa fa-envelope"></i>
                        <input type="text" name="Email" placeholder="Email" required>
                    </div>
                    <div class="input-field">
                        <i class="fa fa-lock"></i>
                        <input type="password" name="Password" placeholder="Password" required>
                    </div>
                    <div class="input-field">
                        <i class="fa fa-lock"></i>
                        <input type="password" name="confirm" placeholder="Confirm Password" required>
                    </div>
                    <input type="submit" value="Sign-up" name="signup" class=" btn btn-solid">
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <!-- <a href="index.html"><h1>Education First</h1></a> -->
                <div class="content">
                    <h3>New here?</h3>
                    <p>Let's Start your learning journey</p>
                    <button class=" btn transparent Sbutton" id="sign-up-btn">
                        <center>Sign Up</center>
                    </button>
                </div>
                <img src="images/register.svg" class="image" alt="">
            </div>

            <div class="panel right-panel">

                <div class="content">
                    <h3>One of Us?</h3>
                    <p>Join us and become part of our community.</p>
                    <button class=" btn transparent Sbutton" id="sign-in-btn"> Sign in</button>
                </div>
                <img src="images/log.svg" class="image imageleft" alt="">
            </div>
        </div>
    </div>
    <!-- app.js use for animation -->
    <script src="app.js"></script>
    <!-- boostrap script tag -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>