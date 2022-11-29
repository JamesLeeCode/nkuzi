<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Documents</title>
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
<link rel="stylesheet" href="mbcsmbmcp.css" type="text/css" />
  <link href="assets/css/style.css" rel="stylesheet">
  <style type="text/css">


  #Footer table tr td p a {
  	color: #000;
  }
  .Nkuzi_Contents table tr td p {
  	text-align: left;
  	font-size: 18px;
  }
  .Nkuzi_Contents table tr td iframe {
  	text-align: center;
  }

  #Footer table tr td table tr td p a {
  	color: #CCC;
  }
  #Footer table tr td table tr td p a {
  	color: #000;
  }
  #Footer table tr td table tr td p a {
  	color: #FFF;
  }
  #signature_Dire{background:url(images/Executive%20dire.fw.png);
  width:129px;
  height:48px;}

  #Footer table tr td table {
  	font-size: 18px;
  }
  #main{

  	padding:25px;
  	-webkit-box-shadow:  0px 2px 1px 5px rgba(242, 242, 242, 0.1);
      box-shadow:  0px 2px 1px 5px rgba(242, 242, 242, 0.1);
  }
  .Nkuzi_Contents table tr td table tr td {
  	font-size: 24px;
  }
  </style>

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
              <li><a href="about.html">More About Us</a></li>
              <li><a href="directors.php">Board Of Directors </a></li>
              <li><a href="staff.php">Our Staff  </a></li>
              <li><a href="funders.php">Our Funders/Donors  </a></li>
              <li><a href="partners.html">Our Partners</a></li>

            </ul>
          </li>
          <li><a href="history.html">History</a></li>
          <li><a href="gallery.html">Gallery</a></li>
          <li><a href="blog.php">Programme</a></li>
          <li><a class="active "  href="documents.php">Documents</a></li>

          <li><a href="contact.html">Contact Us</a></li>

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
          <h2>Documents</h2>
        </div>

      </div>
    </section><!-- End About Us Section -->


    <section class="service-details">
      <div class="container">
        <table style= "margin-top:-100px" width="979" border="0" align="center" cellpadding="0" cellspacing="0">
       <tbody><tr>
         <td width="979" height="56">&nbsp;</td>
         </tr>
       <tr>
         <td height="976" bgcolor="#186914"><table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
             <tbody><tr>
               <td width="525" height="79" font color="white" style="color:white" bgcolor="#186914">Documents as PDF </td>
               <td width="435" bgcolor="#186914"><table width="220" border="0" align="right" cellpadding="0" cellspacing="0">
                 <tbody><tr>
                   <td width="220" height="79"><link rel="stylesheet" href="Report_menu_files/mbcsmbmcp.css" type="text/css"><ul id="mbmcpebul_table" class="mbmcpebul_menulist css_menu" style="width:  193px; height: 45px;">
       <li class="topitem first_button last_button"> <div class="buttonbg gradient_button gradient30"><div class="arrow"><a>Select Document</a></div></div>
         <ul>
                  <li class="has-children">
                    <a> Annual reports Documents</a>
                    <ul class="dropdown">
                      <li><a  href="documents/Annual Report 2003final.pdf" target="main"title="">Annual Report 2003</a></li>
                      <?php
                      include 'phpScripts/db_connection.php';
                      $conn = OpenCon();
                      $sql = "SELECT * FROM documents WHERE document_type = 'Annual reports Documents'";
                      $result = $conn->query($sql);
                      //Store the results in an array
                      $arr = array();
                      while ($row = mysqli_fetch_assoc($result)) {
                       $arr[] = $row;
                      ?>

                      <li><a href="phpScripts/pdf_uploads/<?php echo  $row['document_location'];?>" target="main" title=""><?php echo  $row['document_title'];?></a></li>
                     <?php } ?>
                    </ul>
                  </li>
                  <li class="has-children">
                    <a>Research Reports Documents</a>
                    <ul class="dropdown">

                      <?php

                      $sql = "SELECT * FROM documents WHERE document_type = 'Research Reports Documents'";
                      $result = $conn->query($sql);
                      //Store the results in an array
                      $arr = array();
                      while ($row = mysqli_fetch_assoc($result)) {
                       $arr[] = $row;
                      ?>
                      <li><a href="phpScripts/pdf_uploads/<?php echo  $row['document_location'];?>" target="main" title=""><?php echo  $row['document_title'];?></a></li>
                      <?php } ?>
                    </ul>
                  </li>
                  <li class="has-children">
                    <a>Other Documents</a>
                     <ul class="dropdown">

                       <li class="has-children">
                         <a>Judgements</a>
                         <ul class="dropdown">

                           <?php

                           $sql = "SELECT * FROM documents WHERE document_type = 'Research Reports Documents'";
                           $result = $conn->query($sql);
                           //Store the results in an array
                           $arr = array();
                           while ($row = mysqli_fetch_assoc($result)) {
                            $arr[] = $row;
                           ?>
                           <li><a href="phpScripts/pdf_uploads/<?php echo  $row['document_location'];?>" target="main" title=""><?php echo  $row['document_title'];?></a></li>
                           <?php } ?>
                         </ul>
                       </li>
                       <li class="has-children">
                         <a>Case Studies</a>
                         <ul class="dropdown">

                           <?php

                           $sql = "SELECT * FROM documents WHERE document_type = 'Research Reports Documents'";
                           $result = $conn->query($sql);
                           //Store the results in an array
                           $arr = array();
                           while ($row = mysqli_fetch_assoc($result)) {
                            $arr[] = $row;
                           ?>
                           <li><a href="phpScripts/pdf_uploads/<?php echo  $row['document_location'];?>" target="main" title=""><?php echo  $row['document_title'];?></a></li>
                           <?php } ?>
                         </ul>
                       </li>
                    </ul>
                  </li>
                </ul>
     </li>
     <!-- Menus will work without this javascript file. It is used only for extra
          effects, improved usability and compatibility with very old web browsers. -->
     <script type="text/javascript" src="mbjsmbmcp.js"></script>
     </td>
                 </tr>
               </tbody></table></td>
             </tr>
         </tbody></table>
           <iframe width="980" src="" name="main" height="100%" allowtransparency="yes" frameborder="0"></iframe></td>
       </tr>
     </tbody></table>

      </div>
    </section>





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
              <li><i class="bx bx-chevron-right"></i> <a href="documents.php">Documents</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="partners.html">Our Partners</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="gallery.html">Gallery</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="adminLogin.php">Admin Login</a></li>
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

</body>

</html>
