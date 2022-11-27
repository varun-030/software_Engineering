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
    
          <nav id="navbar"  class="navbar order-last order-lg-0">
            <ul>
              <li><a class="nav-link scrollto" href="http://localhost/Hotel">Home</a></li>
              <li><a class="nav-link scrollto " href="about.php">About</a></li>
              <li class="dropdown active"><a href="#"><span>Login</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="adminLogin.php">Admin Login</a></li>
                  <li><a href="customerLogin.php">Customer Login</a></li>
                 
                </ul>
              </li>

            <li><a class="nav-link scrollto" href="gallery.php">Gallery</a></li>
            <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
    
          <a href="#book-a-table" class="book-a-table-btn scrollto">Book a Room</a>
    
        </div>
      </header><!-- End Header -->


      
      <main id="main">

      <br>
<section id="book-a-table" class="book-a-table">
    <div class="container">

      <div class="section-title">
        <h2>Customer <span>Registration</span></h2>
         </div>

         <div class="row">
            <div class="col-lg-3 col-md-3">

            </div>

            <div class="col-lg-6 col-md-6">
        <?php 
            
             if(isset($_POST['submit']))
             {

               
                 require_once "connect.php";
                 $fname = $_POST['fname'];
                 $lname = $_POST['lname'];
                 $uname = $_POST['uname'];
                 $password = $_POST['password'];
                 $email = $_POST['email'];
                 $phone = $_POST['phone'];


                 $sql="select * from customer_registration where uname='$uname'";

                 $r = mysqli_query($conn,$sql);

                 if($row=mysqli_fetch_array($r))
                 {
                    echo "<script>alert('Username already taken');</script>";
                 }
                 else
                 {

                 $sql = "insert into customer_registration(fname,lname,uname,password,email,phone) values 
                 ('$fname','$lname','$uname','$password','$email','$phone')";

                 $res = mysqli_query($conn,$sql) or die(mysqli_error($conn));

                 if($res)
                {
                      echo "<script>alert('Customer Registration is successfull');</script>";
                 }
                 else 
                 {
                    echo "<script>alert('Choose different Username');</script>";
                 }
                }
                 mysqli_close($conn);
             }
        ?>
        

      <form action="" method="post" role="form" class="php-email-form1">

            
        <div class="row">

        <div class="col-lg-12 col-md-12 form-group">
            <input type="text" name="fname" class="form-control" id="name" placeholder="First Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
            <div class="validate"></div>
          </div>

          <div class="col-lg-12 col-md-12 form-group">
            <input type="text" name="lname" class="form-control" id="name" placeholder="Last Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>

          <div class="col-lg-12 col-md-12 form-group">
            <input type="text" name="uname" class="form-control" id="name" placeholder="User Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
          <div class="col-lg-12 col-md-12 form-group mt-3 mt-md-0">
            <input type="password" class="form-control" name="password" id="email" placeholder="Password" data-rule="email" data-msg="Please enter a valid email">
            <div class="validate"></div>
          </div>

          <div class="col-lg-12 col-md-12 form-group">
            <input type="text" name="email" class="form-control" id="name" placeholder="Email" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
          <div class="col-lg-12 col-md-12 form-group">
            <input type="text" name="phone" class="form-control" id="name" placeholder="Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>

          
        <div class="text-center"><button type="submit" name="submit">Register</button></div>
        

        <div class="text-center" style="margin-top: 10px;"><a href="customerLogin.php"><button type="button" class="btn btn-success">Customer Login</button></a></div>
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

