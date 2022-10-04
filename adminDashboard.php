<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Nkuzi Development Association - About Us</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="images/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"><img src="images/logo.png" alt="" class="img-fluid"></a></h1>

      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li class="dropdown"><a href="#"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="about.html">More about Nkuzi Development Association</a></li>
              <li><a href="directors.php">Nkuzi Development Association Directors </a></li>
              <li><a href="staff.php">Nkuzi Development Association Staff  </a></li>
              <li><a href="funders.php">Nkuzi Development Funders/Donors  </a></li>
              <li><a href="partners.html">Our Partners</a></li>
              <li><a href="portfolio.html">Gallery</a></li>
            </ul>
          </li>
          <li><a href="blog.php">Programme</a></li>
          <li><a href="documents.html">Documents</a></li>
          <li><a href="history.html">History</a></li>
          <li><a href="contact.html">Contact Us</a></li>
          <li><a href="adminLogin.php">Admin Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Administration Dashboard </h2>
          <ol>
            <li><a href="index.php">Home</a></li>

            <li>Administration Dashboard</li>
          </ol>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Section ======= -->



        <section style="margin-top: 0px" class="services">
          <div class="container">
           <h3>List of Staff Members and Positions</h3>
           <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal" >Add New Staff Member</button>
           <p> </p>
           <div class="row">

             <?php
             include 'phpScripts/db_connection.php';
             $conn = OpenCon();
             $sql = "SELECT * FROM staff_members";
             $result = $conn->query($sql);
             //Store the results in an array
             $arr = array();
             while ($row = mysqli_fetch_assoc($result)) {
              $arr[] = $row;
             ?>

             <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
               <div class="member">
                 <div class="member-img">
                   <img src="phpScripts/upload/<?php echo  $row['imageURL']; ?>" class="img-fluid" alt="">

                 </div>
                 <div class="member-info">
                   <h4><?php echo  $row['name']; ?></h4>
                   <span><?php echo  $row['position']; ?></span>
                 </div>
                 <form action="phpScripts/adminOparation.php" method="POST"  enctype="multipart/form-data">
                   <input type="text" class="form-control" name="type" id="type" value="deleteStaff" hidden>
                     <input type="text" class="form-control" name="file" id="file" value="upload/<?php echo  $row['imageURL']; ?>" hidden>
                   <input type="text" class="form-control" name="id" id="id" value="<?php echo  $row['name']; ?>" hidden>
                 <div class="member-info">
                   <button style="width:100%" class="btn btn-danger" type="submit">Delete Staff Members </button>
                 </div>
                 <br>
               </form>
               </div>
             </div>
             <?php } ?>



           </div>

          </div>

        </section>

        <section style="margin-top: 0px" class="services">
          <div class="container">
           <h3>List of Directors</h3>
           <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal3" >Add New Director</button>
           <p> </p>
           <div class="row">
             <?php

             $sql = "SELECT * FROM directors";
             $result = $conn->query($sql);
             //Store the results in an array
             $arr = array();
             while ($row = mysqli_fetch_assoc($result)) {
              $arr[] = $row;
             ?>

             <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
               <div class="member">
                 <div class="member-img">
                   <img src="phpScripts/upload/<?php echo  $row['imageURL']; ?>" class="img-fluid" alt="">

                 </div>
                 <div class="member-info">
                   <h4><?php echo  $row['name']; ?></h4>
                   <span><?php echo  $row['position']; ?></span>
                 </div>
                 <form action="phpScripts/adminOparation.php" method="POST"  enctype="multipart/form-data">
                   <input type="text" class="form-control" name="type" id="type" value="deleteDirectors" hidden>
                      <input type="text" class="form-control" name="file" id="file" value="upload/<?php echo  $row['imageURL']; ?>" hidden>
                   <input type="text" class="form-control" name="id" id="id" value="<?php echo  $row['name']; ?>" hidden>
                 <div class="member-info">
                   <button style="width:100%" class="btn btn-danger" type="submit">Delete Staff Members </button>
                 </div>
                 <br>
               </form>
               </div>
             </div>
             <?php } ?>



           </div>

          </div>

        </section>


        <section id="blog" class="blog">
          <div class="container" data-aos="fade-up">
            <h3>List of Articles</h3>
            <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal2">Add New Articles</button>
            <p> </p>
            <div class="row">

              <div class="col-lg-12 entries">

                <?php
                $sql = "SELECT * FROM blog";
                $result = $conn->query($sql);
                //Store the results in an array
                $arr = array();
                while ($row = mysqli_fetch_assoc($result)) {
                 $arr[] = $row;
                ?>

                <article class="entry">
                  <div class="entry-img">
                    <img src="phpScripts/upload/<?php echo  $row['imageURL']; ?>" alt="" class="img-fluid">
                  </div>

                  <h2 class="entry-title">
                    <a href="blog-single.php?id=<?php echo  $row['id']; ?>"> <?php echo  $row['title']; ?> </a>
                  </h2>

                  <div class="entry-meta">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.php?id=<?php echo  $row['id']; ?>"><time datetime="2020-01-01"><?php echo  $row['dates']; ?></time></a></li>
                    </ul>
                  </div>

                  <div class="entry-content">
                    <div class="read-more">
                        <form action="phpScripts/adminOparation.php" method="POST"  enctype="multipart/form-data">
                          <input type="text" class="form-control" name="type" id="type" value="deleteArticle" hidden>
                          <input type="text" class="form-control" name="id" id="id" value="<?php echo  $row['id']; ?>" hidden>
                          <input type="text" class="form-control" name="file" id="file" value="upload/<?php echo  $row['imageURL']; ?>" hidden>
                        <div class="member-info">
                          <button class="btn btn-danger" type="submit">Delete Article </button>
                        </div>
                        <br>
                      </form>
                    </div>
                  </div>

                </article><!-- End blog entry -->
              <?php } ?>


              </div><!-- End blog entries list -->
            </div>

          </div>
        </section><!-- End Blog Section -->







  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">


    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="developments.html">Developments</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="documents.html">Documents</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="partners.html">Our Partners</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="portfolio.html">Gallery</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.html">Contact Us</a></li>
            </ul>
          </div>


          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              106 Schoeman Street <br>
              Polokwane North<br>
              0750 <br><br>
              <strong>Phone:</strong> 015 297 6975<br>
              <strong>Email:</strong> landnow@nkuzi.org.za<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6">
                  <iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=105+Schoeman+Street,+Polokwane,+Limpopo,+South+Africa&amp;aq=0&amp;oq=polokwane+105+schoe&amp;sll=22.464995,-103.147019&amp;sspn=0.006038,0.010568&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=105+Schoeman+St,+Polokwane+Central,+Polokwane,+Central,+Limpopo+0700,+South+Africa&amp;ll=-23.90082,29.45132&amp;spn=0.001056,0.001321&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=105+Schoeman+Street,+Polokwane,+Limpopo,+South+Africa&amp;aq=0&amp;oq=polokwane+105+schoe&amp;sll=22.464995,-103.147019&amp;sspn=0.006038,0.010568&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=105+Schoeman+St,+Polokwane+Central,+Polokwane,+Central,+Limpopo+0700,+South+Africa&amp;ll=-23.90082,29.45132&amp;spn=0.001056,0.001321&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small><br>
          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>About Nkuzi</h3>
            <p>Disadvantaged women and men are organized and empowered to assert their own sustainable and improving livelihoods, this based on the fundamental of access to sufficient land, secure - , the provision of basic services and integrate local economic development.</p>
            <div class="social-links mt-3">
              <a href="https://www.facebook.com/www.nkuzi.org.za" class="facebook"><i class="bx bxl-facebook"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Nkuzi</span></strong>. All Rights Reserved
      </div>

    </div>
  </footer><!-- End Footer -->
    <!-- End Footer -->
    <!-- Modal -->

    <div class="modal fade" id="myModal3" role="dialog">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add New director</h4>
          </div>
          <div class="modal-body">
            <form action="phpScripts/adminOparation.php" method="POST"  enctype="multipart/form-data">
             <input type="text" class="form-control" name="type" id="type" value="addDirector" hidden>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="name" id="name" placeholder="Director Full Names" required>
              </div>
               <div class="form-group mt-3">
                 <input type="text" class="form-control" name="position" id="position" placeholder="Director Position" required>
               </div>
               <div class="form-group mt-3">
                  <input required type="file" id="pic" class="form-content"  name="pic"  />
               </div>
               <div class="form-group mt-3">
                 <button style="width:100%" class="btn btn-success" type="submit">Add New Director</button>
               </div>
             </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
   </div>

 <div class="modal fade" id="myModal" role="dialog">
   <div class="modal-dialog modal-sm">
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">Add New Staff Member</h4>
       </div>
       <div class="modal-body">
         <form action="phpScripts/adminOparation.php" method="POST"  enctype="multipart/form-data">
          <input type="text" class="form-control" name="type" id="type" value="addStaff" hidden>
           <div class="form-group mt-3">
             <input type="text" class="form-control" name="name" id="name" placeholder="Staff Full Names" required>
           </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="position" id="position" placeholder="Staff Position" required>
            </div>
            <div class="form-group mt-3">
               <input required type="file" id="pic" class="form-content"  name="pic"  />
            </div>
            <div class="form-group mt-3">
              <button style="width:100%" class="btn btn-success" type="submit">Add New Staff Member</button>
            </div>
          </form>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       </div>
     </div>
   </div>
 </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal2" role="dialog">
<div class="modal-dialog modal-sm">
 <div class="modal-content">
   <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal">&times;</button>
     <h4 class="modal-title">Add New Article</h4>
   </div>
   <div class="modal-body">
     <form action="phpScripts/adminOparation.php" method="POST"  enctype="multipart/form-data">
      <input type="text" class="form-control" name="type" id="type" value="addArticle" hidden>
       <div class="form-group mt-3">
         <input type="text" class="form-control" name="title" id="title" placeholder="Article Title" required>
       </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="passage" id="passage" placeholder="Article Passage" required>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="specialText" id="specialText" placeholder="Article Special Text" required>
        </div>
        <div class="form-group mt-3">
           <input required type="file" id="pic" class="form-content"  name="pic"  />
        </div>
        <div class="form-group mt-3">
          <button style="width:100%" class="btn btn-success" type="submit">Add New Article</button>
        </div>
      </form>
   </div>
   <div class="modal-footer">
     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
 </div>
</div>
</div>
</div>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
   var modal = document.getElementById("myModal");
   var btn =  document.getElementById("myBtn");
   btn.onclick = function() {modal.style.display = "block";}
 </script>


</body>

</html>