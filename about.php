<?php
include "frontinclude/frontheader.php";
include "frontinclude/front-topbar.php";
?>

<head>
  <link rel="stylesheet" href="./css/about.css" />
</head>

<body>
  <!-- =========================== END OF NAVBAR =========================== -->

  <section class="about_acheivements">
    <div class="container about_acheivements-container">
      <div class="about_acheivements-left">
        <img src="./images/about achievements.svg" alt="" />
      </div>
      <div class="about_acheivements-right">
        <h1>Acheivements</h1>
        <p>
          Congratulations on unlocking the "Mastering the Basics" achievement! By completing fundamental courses in
          mathematics, science, and language arts, you've built a strong foundation for advanced learning. This
          achievement signifies your commitment to understanding core concepts and lays the groundwork for more
          challenging subjects ahead. Keep up the excellent work, and continue to explore new horizons in your
          educational journey!
        </p>
        <div class="acheivements_cards">





          <!-- --------------------------------------------------------Test------------------------------------------------------------- -->
          <?php 
          include("Config/db.php");
          // Here Select count use to view all registered students
          $slt = "SELECT COUNT(*) AS total_students FROM `form`";
          $stdquery = mysqli_query($conn, $slt);

          if($stdquery){
              $row = mysqli_fetch_assoc($stdquery);
              $total_students = $row['total_students'];
              echo '<article class="acheivement_card">
                  <span class="acheivement_icon">
                      <i class="uil uil-users-alt"></i>
                  </span>
                  <h3 class="counter" data-target="'.$total_students.'">'.$total_students.'</h3>
                  <p>Registered Students</p>
              </article>';
          }else{
              die("Error Show Data not show Something Went wrong" . mysqli_error($conn));
          }
          mysqli_close($conn);
          ?>

          <!-- --------------------------------------------------------Test------------------------------------------------------------- -->


          <article class="acheivement_card">
            <span class="acheivement_icon">
              <i class="uil uil-books"></i>
            </span>
            <h3 class="counter" data-target="30"></h3>
            <p>Courses</p>
          </article>

          <article class="acheivement_card">
            <span class="acheivement_icon">
              <i class="uil uil-trophy"></i>
            </span>
            <h3 class="counter" data-target="50"></h3>
            <p>Awards</p>
          </article>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================== END OF ACHIEVEMENTS =========================== -->
    <section class="team">
    <h2>Meet Our Team</h2>
    <div class="container team_container">
      <?php 
        include ("Config/db.php");
        $slt = "SELECT * FROM `teammember`";
        $member_query = mysqli_query($conn, $slt);

        if($member_query){
          while($row = mysqli_fetch_assoc($member_query)){
            echo '<article class="team_member">';
            echo'<div class="team_member-image">';
              echo'<img src="images/'. $row['MemberPhoto'] .'" height="200px" width="80px" alt="">';
            echo'</div>';
            echo'<div class="team_member-info">';
              echo'<h5 class="pt-3">' . $row['MemberName'] . '</h5>';
              echo'<p class="pt-3">' . $row['MemberExperties'] . '</p>';
            echo'</div>';
            echo'<div class="team_member-socials">';
              echo'<a href="https://instagram.com"><i class="uil uil-instagram"></i></a>';
              echo'<a href="https://twitter.com"><i class="uil uil-twitter-alt"></i></a>';
             echo'<a href="https://linkedin.com"><i class="uil uil-linkedin-alt"></i></a>';
            echo'</div>';
            echo'</article>';
           
          }
        }else{
          die("Error Show Data not show Something Went wrong" . mysqli_error($conn));
        }
        mysqli_close($conn);
      ?>
    </div>
  </section>



  <!-- =========================== END OF TEAM SECTION =========================== -->

  <?php
  include "frontinclude/frontfooter.php";
  ?>
  <!-- ================================= END OF FOOTER======================================= -->

</body>