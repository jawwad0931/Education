<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="../panel.php" class="nav-link">Home</a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->
    <!-- Messages Dropdown Menu -->
    <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li>
    <li>
      <div class="dropdown">
        <button class="btn btn-outline-dark dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
          <?php
          if (isset($_SESSION['auth_user'])) {
            echo $_SESSION['auth_user']['username'];
            // var_dump($_SESSION);
          } else {
            echo '<script>window.location.href = "panel.php";</script>';  
          }
          ?>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="panel.php">Back Home</a>
          <form action="code.php" method="post">
            <button type='submit' name='logoutbtn' class='dropdown-item'>Logout</button>
          </form>
        </div>
      </div>
    </li>
  </ul>
</nav>
<!-- /.navbar -->

