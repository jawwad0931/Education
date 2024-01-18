<!-- this is index.php page for admin here define some div boxes-->
<?php
// includes files here
// Check if the user is not authenticated
session_start();
include('Config/db.php');
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
?>
<div class="content-wrapper py-5" style="height: auto;">
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12">
          <!-- here you can see your successful login message -->
        </div>
        <div class="col-lg-12 col-md-6 col-sm-12 p-3">
        <?php
        if (isset($_SESSION['status'])) {
          echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                  ' . $_SESSION['status'] . '
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                </div>';
          unset($_SESSION['status']);
        }
        ?>
          <!-- For Registration banner -->
          <div class="small-box bg-info">
            <div class="inner p-4">
              <h4>Registration</h4>
              <p>Student Registration Details</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="Register.php" class="small-box-footer">Click <i class="fas fa-arrow-circle-right"></i></a>
          </div>
          <!-- For Courses banner -->
          <div class="small-box bg-primary">
            <div class="inner p-4">
              <h4>Courses</h4>
              <p>Courses Update Details</p>
            </div>
            <div class="icon">
              <i class="ion-ios-bookmarks"></i>
            </div>
            <a href="Admincourse.php" class="small-box-footer">Click <i class="fas fa-arrow-circle-right"></i></a>
          </div>
          <!-- For FAQ banner -->
          <div class="small-box bg-danger">
            <div class="inner p-4">
              <h4>FAQ</h4>
              <p>Daily Updates Your FAQ Questions</p>
            </div>
            <div class="icon">
              <i class="ion-help"></i>
            </div>
            <a href="homeAdminpage.php" class="small-box-footer">Click <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
</div>
<?php include('includes/footer.php'); ?>
</div>
<!-- Boostrap version 5 code use for main purposes -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>