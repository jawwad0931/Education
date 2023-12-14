<!-- yeh admin ka login ka code hai jo backend ka part hai backend mai janay ka tariqa hai -->
<?php
session_start();
include('Config/db.php');
include('includes/header.php');
// ye error message hai agar admin galat password insert karega
if (isset($_SESSION['auth'])) {
  $_SESSION['status'] = 'your already Login';
  header('location: index.php');
  exit();
}
?>
<!-- Admin Login ka code yahan hai jo backend mai hai-->
<div class="container-fluid" style="background-image:url('Asset/dist/img/books.jpg'); background-size:cover;background-position:center;">
<section class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-md-10 mx-auto rounded shadow bg-white">
        <div class="row shadow-lg bg-body-tertiary rounded">
          <div class="col-md-6">
            <div class="m-5 text-center">
              <h1>Login Admin Panel</h1>
            </div>
            <form class="m-5" action='LoginCode.php' method='POST'>
              <div class="form-group">
                <label for="email">Admin Name:</label>
                <input type="text" class="form-control" name="UserName" id="email" placeholder="Enter your email"
                  required>
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="Password" id="password"
                  placeholder="Enter your password" required>
              </div>
              <button type="submit" name='Login' class="btn btn-primary btn-block">Login</button>
            </form>
          </div>
          <div class="col-md-6">
            <div class="m-4">
            </div>
            <div>
              <img src="Asset/dist/img/login-img.svg" alt="Login Logo" class="img-fluid p-5" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
<!-- boostrap 3 ka code mai purpose ke liye -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<?php
// include('includes/footer.php');
?>