<?php
include "frontinclude/frontheader.php";
include "frontinclude/front-topbar.php";
?>

<head>
  <link rel="stylesheet" href="./css/styles.css" />
  <link rel="stylesheet" href="./css/contact.css" />
</head>

<body>
  <!-- =========================== END OF NAVBAR =========================== -->

  <section class="contact">
    <div class="container contact_container">
      <aside class="contact_aside">
        <!-- Session Message for error -->
        <div class="container-fluid mt-0">
        <div class="row d-flex align-items-center justify-content-center">
            <!-- Session for SignIn form -->
            <div class="col-md-12">
                <?php
                // Check if the session variable is set
                
                if (isset($_SESSION['CheckContact'])) {
                    // Output the Bootstrap 5 alert using the session message
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            ' . $_SESSION['CheckContact'] . '
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
                    // Unset the session variable to clear the message
                    unset($_SESSION['CheckContact']);
                }
                ?>
            </div>
        </div>
    </div>
        <div class="aside_image">
          <img src="./images/contact.svg" alt="" />
        </div>
        <h2>Contact Us</h2>
        <p>
          "Connect with us for educational support and inquiries. We're here to assist you on your learning journey.
          Reach out and let's explore the world of knowledge together."
        </p>
        <ul class="contact_details">
          <li>
            <i class="uil uil-phone-times"></i>
            <h6>+01 245 456 8910</h6>
          </li>
          <li>
            <i class="uil uil-envelope"></i>
            <h6>educationfirst12@gmail.com</h6>
          </li>
          <li>
            <i class="uil uil-location-point"></i>
            <h6>Karachi, Pakistan</h6>
          </li>
        </ul>
        <ul class="contact_socials">
          <li>
            <a href="https://facebook.com"><i class="uil uil-facebook-f"></i></a>
          </li>
          <li>
            <a href="https://instagram.com"><i class="uil uil-instagram"></i></a>
          </li>
          <li>
            <a href="https://twitter.com"><i class="uil uil-twitter"></i></a>
          </li>
          <li>
            <a href="https://linkedin.com"><i class="uil uil-linkedin-alt"></i></a>
          </li>
        </ul>
      </aside>

      <form action="contactCode.php" method="post" class="contact_form">
        <div class="form_name">
          <input type="text" name="FirstName" placeholder="First Name" required />
          <input type="text" name="LastName" placeholder="Last Name" required />
        </div>
        <input type="email" name="Email" placeholder="Your Email Address" required />
        <textarea name="Message" id="" cols="10" rows="10" placeholder="Type your message here"></textarea>
        <button type="submit" class="btn btn-primary" name="send">Send Message</button>
      </form>
    </div>
  </section>
  <div class="container">
    <div class="row p-5">
      <div class="col-12 p-0">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.645233479555!2d67.01376287487928!3d24.841803146004885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33de406349b1b%3A0xf0eb0447826832e9!2sNew%20Haji%20Camp%2C%20Moulvi%20Tamizuddin%20Khan%20Rd%2C%20near%20Nomania%20Masjid%D8%8C%20Sultanabad%20Karachi%2C%20Karachi%20City%2C%20Sindh%2074200%2C%20Pakistan!5e0!3m2!1sen!2s!4v1704481584223!5m2!1sen!2s"
            width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>



  <!-- =========================== END OF CONTACT US =========================== -->
  <?php
  include "frontinclude/frontfooter.php";
  ?>
  <!-- ================================= END OF FOOTER======================================= -->
  <script src="./main.js"></script>
</body>

</html>