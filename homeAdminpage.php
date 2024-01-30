<!-- user registration record fetch here -->
<?php
// icludes files here
session_start();
include('Config/db.php');
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
?>
<!-- Content Wrapper -->
<div class="content-wrapper" style="height: auto;">
  <!-- Content Header -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="panel.php" class="text-dark">Back Home</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Popup Modal use for Crud -->
  <div class="container">
    <!-- check Session -->
    <div class="row">
      <?php
      if (isset($_SESSION['status'])) {
        echo "<h4>" . $_SESSION['status'] . "</h4>";
        unset($_SESSION['status']);
      }
      ?>
    </div>
    <div class="card bg-light">
      <div class="row m-3">
        <div class="col-6">
          <h4 class="fw-light">Update FAQ Here</h4>
        </div>
        <div class="col-6">
          <!-- Button trigger modal -->
        <button type="button" class="btn btn-warning float-right" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          Add New Course
        </button>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New FAQ</h1>
        </div>
        <div class="modal-body">
          <!-- Form -->
          <form Action="homeAdminCode.php" method="POST">
            <label for="faqQuest">Update Question</label>
            <input type="text" id="faqQuest" name="faqQuest" class="form-control" required>

            <label for="faqAnswer">Update Answer</label>
            <input type="text" id="faqAnswer" name="faqAnswer" class="form-control" required>

            <!-- Add other form elements as needed -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="submit_FAQ">Submit FAQ</button>
            </div>
          </form>
          <!-- End of Form -->
        </div>
      </div>
    </div>
  </div>

        </div>
      </div>
    </div>
  </div>
  <!-- Table -->
  <div class="container">
    <div class="row">
      <div class="col-12">
        <!-- /Table -->
        <div class="table-responsive">
          <table  id="mytable" class="table table-dark table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th>(FAQ) Question</th>
                <th>(FAQ) Answer</th>
              </tr>
            </thead>
            <tbody>
              <!-- Fetch all the data from database -->
              <?php
              if ($conn) {
                $slt = "SELECT * FROM `faq`";
                $query = mysqli_query($conn, $slt);
                if ($query) {
                  while ($row = mysqli_fetch_assoc($query)) {
                    $Id = $row['Id'];
                    $faqQuest = $row['faqQuest'];
                    $faqAnswer = $row['faqAnswer'];
                    echo "<tr>
                            <td>$faqQuest</td>
                            <td>$faqAnswer</td>
                            <td>
                              <a href='AdminCourseDelete.php?deleteCourseid=$Id' class=''><i class='ion-trash-a text-danger ml-3' style='font-size:25px'></i></a>
                            </td>
                          </tr>";     
                  }
                }
              }
              ?>
            <tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Footer include file -->
<?php include('includes/footer.php'); ?>
