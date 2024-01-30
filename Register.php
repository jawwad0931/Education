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
          <h4>Registered Students Here</h4>
        </div>
        <div class="col-6">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal"
            data-bs-target="#staticBackdrop">
            Add New Student
          </button>
          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                </div>
                <div class="modal-body">
                  <!-- Form -->
                  <form Action="code.php" method="POST">
                    <label for="name">Student Name:</label>
                    <input type="text" id="name" name="Name" class="form-control" required>

                    <label for="father-name">Father Name:</label>
                    <input type="text" id="name" name="FatherName" class="form-control" required>

                    <label for="email">Phone Number:</label>
                    <input type="number" id="email" name="PhoneNumber" class="form-control" required>

                    <label for="email">Class:</label>
                    <input type="number" id="Class" name="Class" class="form-control" required>

                    <label for="email">Fees:</label>
                    <input type="number" id="Fees" name="Fees" class="form-control" required>
                    <!-- Add other form elements as needed -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
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
          <table id="mytable" class="table table-dark table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th>Student Name</th>
                <th>Father Name</th>
                <th>Phone Number</th>
                <th>Class</th>
                <th>Fees</th>
                <th>Toggle</th>
                <th>status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <!-- Fetch all the data from database -->
              <?php
              if ($conn) {
                $slt = "SELECT * FROM `studenttable`";
                $query = mysqli_query($conn, $slt);
                if ($query) {
                  while ($row = mysqli_fetch_assoc($query)) {
                    $Id = $row['Id'];
                    $Name = $row['Name'];
                    $FatherName = $row['FatherName'];
                    $PhoneNumber = $row['PhoneNumber'];
                    $Class = $row['Class'];
                    $Fees = $row['Fees'];
                    $status = $row['status'];
                    echo "<tr>
                      <td>$Name</td>
                      <td>$FatherName</td>
                      <td>$PhoneNumber</td>
                      <td>$Class</td>
                      <td>$Fees</td>
                      <td>";  
                      // Check If status is 1 it could be active and when it is 0 is called Inactive
                      if ($row['status'] == 1)  
                          echo 'Active'; 
                      else 
                          echo 'Inactive';                         
                      echo"</td>
                      
                      
                      <td>";
                      // Generate a link based on the value of $row['status']
                      // when click Activate and Deactivate Button its code in activate.php and deactivate.php page code run
                      if ($row['status'] == "1") {
                          echo "<a href='deactivate.php?Id=" . $row['Id'] . "' class='btn btn-sm w-100 d-flex align-items-center justify-content-center glow-btn-2'>Unpaid</a>";
                      } else {
                          echo "<a href='activate.php?Id=" . $row['Id'] . "' class='btn btn-sm w-100 d-flex align-items-center justify-content-center glow-btn'>Paid</a>";
                      }
                      echo "</td> 
  
                      <td>
                      <a href='delete.php?deleteid=$Id' class=''><i class='ion-trash-a text-danger ml-3' style='font-size:25px'></i></a>
                      <a href='RecordUpdate.php?updateid=$Id' class=''><i class='ion-edit text-success ml-3' style='font-size:20px'></i></a>
                      </td>
                    </tr>";

                  }
                }
              }
              ?>
            <tbody>
              <?php
              // Calculate and display total fees
              $sumQuery = "SELECT SUM(Fees) AS totalFees FROM studenttable";
              $result = mysqli_query($conn, $sumQuery);

              if ($result) {
                $row = mysqli_fetch_assoc($result);
                $totalFees = $row['totalFees'];
                echo "<tr>
                            <td colspan='4'><b>Total Fees</b></td>
                            <td><b>$totalFees</b></td>
                            <td></td>
                          </tr>";
              } else {
                echo "Error calculating total fees: " . mysqli_error($conn);
              }
              ?>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- DataTable  -->
<script> 
   $(document).ready(function() {
        $('#mytable').DataTable();
    });
</script>
<!-- Footer include file -->
<?php include('includes/footer.php'); ?>