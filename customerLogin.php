<?php 
session_start();
?>
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
<section id="book-a-table" class="book-a-table">
    <div class="container">

      <div class="section-title">
        <h2>Customer <span>Login</span></h2>
         </div>

         <div class="row">
            <div class="col-lg-3 col-md-3">

            </div>

            <div class="col-lg-6 col-md-6">

             <?php 
              if(isset($_POST['login']))
              {
                  $uname = $_POST['uname'];
                  $upass = $_POST['upass'];
                  require_once "connect.php";
                  $sql = "select * from customer_registration where uname='$uname' and password='$upass'";
                  $res = mysqli_query($conn,$sql) or die(mysqli_error($conn));

                  while($row = mysqli_fetch_array($res))
                  {
                      $_SESSION['uname'] = $uname;
                      echo "<script>alert('Login Success');</script>";

                      echo "<script>window.location='CustomerHome.php';</script>";
                  }
                  mysqli_close($conn);


              }

             ?>
        

      <form action="" method="post" role="form" class="php-email-form1">

            
        <div class="row">

          <div class="col-lg-12 col-md-12 form-group">
            <input type="text" name="uname" class="form-control" id="name" placeholder="User Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
          <div class="col-lg-12 col-md-12 form-group mt-3 mt-md-0">
            <input type="password" class="form-control" name="upass" placeholder="upass" data-rule="email" data-msg="Please enter a valid email">
            <div class="validate"></div>
          </div>
          
        <div class="text-center"><button type="submit" name="login">Login</button></div>
        

        <div class="text-center" style="margin-top: 10px;"><a href="CustomerRegister.php"><button type="button" class="btn btn-success">New User Register</button></a></div>
    </div>
    </div>
               
    <div class="col-lg-3 col-md-3">

    </div>

</div>
      </form>

    </div>
  </section><!-- End Book A Table Section -->
  
       
 
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

