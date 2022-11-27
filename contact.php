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
              
               require_once 'menu.php';

          ?>
        </div>
      </header><!-- End Header -->


      
      <main id="main">       
      <br>
      <br>
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2><span>Contact</span> Us</h2>
        <p></p>
      </div>
    </div>

   
    <div class="container mt-5">

      <div class="info-wrap">
        <div class="row">
          <div class="col-lg-3 col-md-6 info">
            <i class="bi bi-geo-alt"></i>
            <h4>Location:</h4>
            <p>A108 Adam Street<br>New York, NY 535022</p>
          </div>

          <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
            <i class="bi bi-clock"></i>
            <h4>Open Hours:</h4>
            <p>Monday-Saturday:<br>11:00 AM - 2300 PM</p>
          </div>

          <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p>info@example.com<br>contact@example.com</p>
          </div>

          <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
            <i class="bi bi-phone"></i>
            <h4>Call:</h4>
            <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
          </div>
        </div>
      </div>

      <form action="forms/contact.php" method="post" role="form" class="php-email-form">
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="my-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
      </form>

    </div>
  </section><!-- End Contact Section -->


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

