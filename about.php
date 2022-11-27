/*
On the top of the page beside Home we have a home button we can find the home button 
which tells a general information about the services offered at our hotel 
This part of the code operates that
A Combination of CSS and HTML by using php for the dynamic and rich view to attarct the customers.
*/



<html>
<head>
  
  <link href=" assets/img/favicon.png  " rel="icon">
  <link href=" assets/img/apple-touch-icon.png  " rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <link href=" assets/vendor/animate.css/animate.min.css  " rel="stylesheet">
  <link href=" assets/vendor/bootstrap/css/bootstrap.min.css  " rel="stylesheet">
  <link href=" assets/vendor/bootstrap-icons/bootstrap-icons.css  " rel="stylesheet">
  <link href=" assets/vendor/boxicons/css/boxicons.min.css  " rel="stylesheet">
  <link href=" assets/vendor/glightbox/css/glightbox.min.css  " rel="stylesheet">
  <link href=" assets/vendor/swiper/swiper-bundle.min.css  " rel="stylesheet">
  <link href=" assets/css/style.css  " rel="stylesheet">
</head>

<body>
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
    
          <div class="logo me-auto">
            <h1><a href="index2.html">Delicious Hotel</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
          </div>
    
          <?php 

include_once "menu.php";
?>
          
        </div>
      </header><!-- End Header -->


      
      <main id="main">

       
       
      <br>
 <section id="about" class="about">
    <div class="container-fluid">

        
      <div class="row">

        <div class="col-lg-5 align-items-stretch video-box" style='background-image: url( "assets/img/about.jpg");'>
          <a href="https://www.youtube.com/watch?v=ZRnIn8IS2JA" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
        </div>

        <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

          <div class="content">
            <h3>About Us</strong></h3>
            <p>
              We Maintain the following things
            </p>
           
            <ul>
              <li><i class="bx bx-check-double"></i> 
                Scan your QR code at the hotel entrance’s GetInn Detector

            </li>
              <li><i class="bx bx-check-double"></i>
                The device takes a snapshot of you.
               </li>
              <li><i class="bx bx-check-double"></i> 
                The time of your check-in for our record and safety measures.

   
            </li>
            </ul>
            <p>
                In the current pandemic situation, our model can bring consistent business to the hotels since it follows strict health protocols and fast and smooth process.

                Hotels with our model will be future-proof and generates more revenue
            </p>
          </div>

        </div>

      </div>

    </div>
  </section><!-- End About Section -->

</main>
       <footer id="footer">
        <div class="container">
          <h3>Delicious</h3>
          <p>Restaurant</p>
          
          <div class="copyright">
            &copy; Copyright <strong><span>Delicious</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
                      </div>
        </div>
      </footer><!-- End Footer -->
    
    <script src=" assets/vendor/bootstrap/js/bootstrap.bundle.min.js  "></script>
  <script src=" assets/vendor/glightbox/js/glightbox.min.js  "></script>
  <script src=" assets/vendor/isotope-layout/isotope.pkgd.min.js  "></script>
  <script src=" assets/vendor/php-email-form/validate.js  "></script>
  <script src=" assets/vendor/swiper/swiper-bundle.min.js  "></script>

  <!-- Template Main JS File -->
  <script src=" assets/js/main.js  "></script>

</body>

</html>

