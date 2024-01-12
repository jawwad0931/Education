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
          <h4>Update Course Here</h4>
        </div>
        <div class="col-6">
          <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          Add New Course
        </button>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Course</h1>
        </div>
        <div class="modal-body">
          <!-- Form -->
          <form Action="AdmincourseCode.php" method="POST" enctype="multipart/form-data">
            <label for="Upload Image">Upload Image:</label>
            <input type="file" id="Upload Image" name="course_pic" class="form-control" required>

            <label for="course_name">Update Course:</label>
            <input type="text" id="course_name" name="course_name" class="form-control" required>

            <label for="course_status">Status:</label>
            <select id="course_status" name="course_status" class="form-control" required>
                <option value="available">Available</option>
                <option value="not_available">Not Available</option>
            </select>

            <!-- Add other form elements as needed -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="submit_course">Course Submit</button>
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
              <!-- <tr>
                <th>Student Name</th>
                <th>Father Name</th>
                <th>Phone Number</th>
                <th>Class</th>
                <th>Fees</th>
                <th>Action</th>
              </tr> -->
            </thead>
            <tbody>
              <!-- Fetch all the data from database -->
              <?php
            //   if ($conn) {
            //     $slt = "SELECT * FROM `studenttable`";
            //     $query = mysqli_query($conn, $slt);
            //     if ($query) {
            //       while ($row = mysqli_fetch_assoc($query)) {
            //         $Id = $row['Id'];
            //         $Name = $row['Name'];
            //         $FatherName = $row['FatherName'];
            //         $PhoneNumber = $row['PhoneNumber'];
            //         $Class = $row['Class'];
            //         $Fees = $row['Fees'];
            //         echo "<tr>
            //                 <td>$Name</td>
            //                 <td>$FatherName</td>
            //                 <td>$PhoneNumber</td>
            //                 <td>$Class</td>
            //                 <td>$Fees</td>
            //                 <td>
            //                 <a href='delete.php?deleteid=$Id' class=''><i class='ion-trash-a text-danger ml-3' style='font-size:25px'></i></a>
            //                 </td>
            //                 </tr>";
                            
            //       }
            //     }
            //   }
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
