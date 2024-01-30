<?php
include "Config/db.php";
include "frontinclude/front-topbar.php";
include "frontinclude/frontheader.php";
?>

<body style="background-image: linear-gradient(45deg, #372fe9 30%, #6c63ff 50%, #372fe9 100%);">
            <!-- Check if the session variable is set
            session for login page -->
            <div class="container my-5">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="col-6">
                        <?php
                        if (isset($_SESSION['formCheck'])) {
                            // Output the Bootstrap 5 alert using the session message
                            echo '<div class="alert alert-success alert-dismissible fade show d-flex align-items-center justify-content-center" role="alert" style="height:200px;">
                                    ' . $_SESSION['formCheck'] . '
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>';
                            // Unset the session variable to clear the message
                            unset($_SESSION['formCheck']);
                        }
                        ?>
                    </div>
                </div>
        </div>
        <div class="container-fluid">
        <div class="row d-flex align-items-center justify-content-center my-5">
            <div class="col-lg-6">
                <form action="fillformCode.php" method="POST" class="row needs-validation border w-100 p-2 bg-light" novalidate
                    enctype="multipart/form-data">
                    <div class="row py-3">
                        <div class="col-lg-12 pb-4 d-flex align-items-center justify-content-start">
                            <img src="Asset/dist/img/logo2.png" class="border rounded-circle"
                                style="height:50px; width:50px;" alt="">
                            <h4 class="text-end pt-2 pl-2 text-dark">Student Registration Form</h4>
                        </div>
                        <!-- <div class="col-lg-6 d-flex align-items-end justify-content-end">
                        </div> -->
                        <hr class="text-dark">
                    </div>
                    <!-- photo -->
                    <div class="col-md-12 pt-2" style="height:300px;">
                        <label for="validationCustom01" class="form-label text-dark">Photo</label>
                        <div class="border border-secondary border-rounded" style="height:250px;width:300px;">
                            <input type="file" class="form-control w-100" name="photo" id="validationCustom01" required>
                            <div class="valid-feedback">
                                Images upload
                            </div>
                            <span>
                                <h4>Passport Size Photo</h4>
                            </span>
                        </div>
                    </div>
                    <!-- Firstname -->
                    <div class="col-md-6 col-lg-6 col-sm-6 pt-2">
                        <label for="validationCustom01" class="form-label text-dark">First name</label>
                        <input type="text" class="form-control" name="Firstname" id="validationCustom01" required>
                        <div class="valid-feedback">
                            Complete
                        </div>
                    </div>
                    <!-- Lastname -->
                    <div class="col-md-6 col-lg-6 col-sm-6 pt-2">
                        <label for="validationCustom02" class="form-label text-dark">Last name</label>
                        <input type="text" class="form-control" name="Lastname" id="validationCustom02" required>
                        <div class="valid-feedback">
                            Complete
                        </div>
                    </div>
                    <!-- Fathername -->
                    <div class="col-md-6 col-lg-6 col-sm-6 pt-2">
                        <label for="validationCustom02" class="form-label text-dark">Father name</label>
                        <input type="text" class="form-control" name="Fathername" id="validationCustom02" required>
                        <div class="valid-feedback">
                            Complete
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="col-md-6 col-lg-6 col-sm-6 pt-2">
                        <label for="validationCustom02" class="form-label text-dark">Email</label>
                        <input type="email" class="form-control" name="Email" id="validationCustom02" required>
                        <div class="valid-feedback">
                            Complete
                        </div>
                    </div>
                    <!-- class -->
                    <div class="col-md-6 col-lg-6 col-sm-6 pt-2">
                        <label for="validationCustom02" class="form-label text-dark">Class</label>
                        <input type="number" class="form-control" name="class" id="validationCustom02" required>
                        <div class="valid-feedback">
                            Complete
                        </div>
                    </div>
                    <!-- schoolname -->
                    <div class="col-md-6 col-lg-6 col-sm-6 pt-2">
                        <label for="validationCustom02" class="form-label text-dark">School name</label>
                        <input type="text" class="form-control" name="schoolname" id="validationCustom02" required>
                        <div class="valid-feedback">
                            Complete
                        </div>
                    </div>
                    <!-- Phone -->
                    <div class="col-md-6 col-lg-6 col-sm-6 pt-2">
                        <label for="validationCustom02" class="form-label text-dark">Tel/mobile</label>
                        <input type="number" class="form-control" name="Phone" id="validationCustom02" required>
                        <div class="valid-feedback">
                            Complete
                        </div>
                    </div>
                    <!-- city -->
                    <div class="col-md-6 col-lg-6 col-sm-6 pt-2">
                        <label for="validationCustom03" class="form-label text-dark">City</label>
                        <input type="text" class="form-control" name="city" id="validationCustom03" required>
                        <div class="valid-feedback">
                            Complete
                        </div>
                    </div>
                    <!-- address -->
                    <div class="col-md-6 col-lg-6 col-sm-6 pt-2">
                        <label for="validationCustom03" class="form-label text-dark">Address</label>
                        <input type="text" class="form-control" name="address" id="validationCustom03" required>
                        <div class="valid-feedback">
                             Complete.
                        </div>
                    </div>
                    <!-- age -->
                    <div class="col-md-6 col-lg-6 col-sm-6 pt-2">
                        <label for="validationCustom03" class="form-label text-dark">Age</label>
                        <input type="number" class="form-control" name="age" id="validationCustom03" required>
                        <div class="valid-feedback">
                            Complete.
                        </div>
                    </div>
                    <!-- DOB -->
                    <div class="col-md-6 col-lg-6 col-sm-6 pt-2">
                        <label for="validationCustom03" class="form-label text-dark">Date Of Birth</label>
                        <input type="date" class="form-control" name="DOB" id="validationCustom03" required>
                        <div class="valid-feedback">
                            Complete.
                        </div>
                    </div>
                    <!-- gender  -->
                    <!-- <label for="" class="mt-2 text-dark">Gender</label>
                    <div class="col-12 pt-2 d-flex">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="invalidCheck" required>
                            <label class="form-check-label text-dark" for="invalidCheck">Male</label>
                            <div class="valid-feedback">
                                Complete.
                            </div>
                        </div>
                        <div class="form-check px-5">
                            <input class="form-check-input" type="radio" name="gender" id="invalidCheck" required>
                            <label class="form-check-label text-dark" for="invalidCheck">Female</label>
                            <div class="invalid-feedback">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 pt-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="agree" id="invalidCheck" required>
                            <label class="form-check-label text-dark" for="invalidCheck">Agree to terms and conditions</label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <div class="col-12 pt-2 d-flex">
                        <input class="btn btn-primary btn-sm" name="fill_form" style="height:50px;" type="submit"
                            value="Submit form">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
</body>
<?php
include "frontinclude/frontfooter.php";
?>