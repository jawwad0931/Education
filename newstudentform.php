<?php 
    include "Config/db.php";
    include "includes/header.php";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row d-flex align-items-center justify-content-center my-5">
            <div class="col-lg-6">
                <form class="row needs-validation border w-100 p-2" novalidate>
                    <div class="row py-3">
                        <div class="col-lg-12 pb-4 d-flex align-items-center justify-content-start">
                            <img src="Asset/dist/img/logo2.png" class="border rounded-circle" style="height:50px; width:50px;" alt="">
                            <h4 class="text-end pt-2 pl-2">Student Registration Form</h4>
                        </div>
                        <!-- <div class="col-lg-6 d-flex align-items-end justify-content-end">
                        </div> -->
                        <hr>
                    </div>
                    <div class="col-md-12 pt-2" style="height:300px;">
                        <label for="validationCustom01" class="form-label">Photo</label>
                        <div class="border border-secondary border-rounded" style="height:250px;width:300px;">
                        <input type="file" class="form-control w-100" name="photo" id="validationCustom01" value="Mark" required>
                        <div class="valid-feedback">
                            Please Insert an image
                        </div>
                        <span><h4>Passport Size Photo</h4></span>
                        </div>
                    </div>
                    <!-- Firstname -->
                    <div class="col-md-6 col-lg-6 col-sm-6 pt-2">
                        <label for="validationCustom01" class="form-label">First name</label>
                        <input type="text" class="form-control" name="Firstname" id="validationCustom01" value="Mark" required>
                        <div class="valid-feedback">
                            Complete
                        </div>
                    </div>
                    <!-- Lastname -->
                    <div class="col-md-6 col-lg-6 col-sm-6 pt-2">
                        <label for="validationCustom02" class="form-label">Last name</label>
                        <input type="text" class="form-control" name="Lastname" id="validationCustom02" value="" required>
                        <div class="valid-feedback">
                            Complete
                        </div>
                    </div>
                    <!-- Fathername -->
                    <div class="col-md-6 col-lg-6 col-sm-6 pt-2">
                        <label for="validationCustom02" class="form-label">Father name</label>
                        <input type="text" class="form-control" name="Fathername" id="validationCustom02" value="" required>
                        <div class="valid-feedback">
                            Complete
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="col-md-6 col-lg-6 col-sm-6 pt-2">
                        <label for="validationCustom02" class="form-label">Email</label>
                        <input type="email" class="form-control" name="Email" id="validationCustom02" value="" required>
                        <div class="valid-feedback">
                            Complete
                        </div>
                    </div>
                    <!-- class -->
                    <div class="col-md-6 col-lg-6 col-sm-6 pt-2">
                        <label for="validationCustom02" class="form-label">Class</label>
                        <input type="number" class="form-control" name="class" id="validationCustom02" value="" required>
                        <div class="valid-feedback">
                            Complete
                        </div>
                    </div>
                    <!-- schoolname -->
                    <div class="col-md-6 col-lg-6 col-sm-6 pt-2">
                        <label for="validationCustom02" class="form-label">School name</label>
                        <input type="text" class="form-control" name="schoolname" id="validationCustom02" value="" required>
                        <div class="valid-feedback">
                            Complete
                        </div>
                    </div>
                    <!-- Phone -->
                    <div class="col-md-6 col-lg-6 col-sm-6 pt-2">
                        <label for="validationCustom02" class="form-label">Tel/mobile</label>
                        <input type="number" class="form-control" name="Phone" id="validationCustom02" value="" required>
                        <div class="valid-feedback">
                            Complete
                        </div>
                    </div>
                    <!-- city -->
                    <div class="col-md-6 col-lg-6 col-sm-6 pt-2">
                        <label for="validationCustom03" class="form-label">City</label>
                        <input type="text" class="form-control" name="city" id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
                    <!-- address -->
                    <div class="col-md-6 col-lg-6 col-sm-6 pt-2">
                        <label for="validationCustom03" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Please provide a valid Address.
                        </div>
                    </div>
                    <!-- age -->
                    <div class="col-md-6 col-lg-6 col-sm-6 pt-2">
                        <label for="validationCustom03" class="form-label">Age</label>
                        <input type="number" class="form-control" name="age" id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Please provide a valid Age.
                        </div>
                    </div>
                    <!-- DOB -->
                    <div class="col-md-6 col-lg-6 col-sm-6 pt-2">
                        <label for="validationCustom03" class="form-label">Date Of Birth</label>
                        <input type="date" class="form-control" name="DOB" id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
                    <!-- gender -->
                    <label for="" class="mt-2">Gender</label>
                    <div class="col-12 pt-2 d-flex">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">Male</label>
                            <div class="invalid-feedback">
                                please fill the gender
                            </div>
                        </div>
                        <div class="form-check px-5">
                            <input class="form-check-input" type="radio" name="gender" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">Female</label>
                            <div class="invalid-feedback">
                            </div>
                        </div>
                    </div>
                    <!-- states this is pending -->
                    <!-- <div class="col-md-12 pt-2">
                        <label for="validationCustom04" class="form-label">State</label>
                        <select class="form-select" id="validationCustom04" required>
                            <option selected disabled value="">Choose...</option>
                            <option>...</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid state.
                        </div>
                    </div> -->
                    <div class="col-12 pt-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Agree to terms and conditions
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <div class="col-12 pt-2 d-flex">
                        <div class="no-submit">
                            <button class="btn btn-primary"  type="submit">Submit form</button>
                        </div>
                        <!-- <button class="btn btn-danger" onclick="window.print()">Print</button> -->
                        <div class="no-print">
                            <button class="btn btn-danger ml-2" onclick="window.print()">Print</button>
                        </div>   
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
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script> -->
        <?php 
            include "includes/footer.php";
        ?>
</body>

</html>