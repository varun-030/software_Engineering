
/* The code below displays a view of staff login that shows the text blocks for entering staff credentials and navigating to staff homepage on successful login.*/

<?php 
session_start();
?>
<html>

/*Below is the code for the header which includes the website name as Delicious Hotel and embedding the menu bar from the menu.php file. This file includes options such as Home, About, Login, Gallery, Contact, and Login has additional login options such as Customer Login, Admin Login, and Staff Login.
*/

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

 /*adding menu to the header which includes options such as Home, About, Login, Gallery, Contact, and Login has additional login options such as Customer Login, Admin Login, and Staff Login.*/
include_once "menu.php";
?>
        </div>
      </header><!-- End Header -->


      
      <main id="main">

/*to show staff login page which includes username and password text fields and a login button , if the entered username and password exist in database and login is successful the page is redirected to staff home page else displays an error message "Wrong Username and Password"   */  
       
      <br>
<section id="book-a-table" class="book-a-table">
    <div class="container">

      <div class="section-title">
        <h2>Staff <span>Login</span></h2>
         </div>

         <div class="row">
            <div class="col-lg-3 col-md-3">

            </div>

            <div class="col-lg-6 col-md-6">

        <?php 
              if(isset($_POST['login'])) 
              {

                $uname = $_POST['uname']; 

                $password = $_POST['password'];

                if($uname=="staff" && $password == "staff")
                {
                    $_SESSION['uname'] = $uname;
                    header('location:StaffHome.php');
                }
                else 
                {
                  echo "<script>Wrong Username and Password</script>"; 
                }
              }

        ?>
      /* It takes in usernames and passwords as inputs, and a string error message is returned if the inputs do not comply with the data validations. */

      <form action="" method="post" role="form" class="php-email-form1">

            
        <div class="row">

          <div class="col-lg-12 col-md-12 form-group">
            <input type="text" name="uname" class="form-control" id="name" placeholder="User Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>

          <div class="col-lg-12 col-md-12 form-group mt-3 mt-md-0">
            <input type="password" class="form-control" name="password" id="email" placeholder="Your Password" data-rule="email" data-msg="Please enter a valid email">
            <div class="validate"></div>
          </div>
          
        <div class="text-center"><button name="login" type="submit">Login</button></div>
    </div>
    </div>
               
    <div class="col-lg-3 col-md-3">

    </div>

</div>
      </form>

    </div>
  </section><!-- End Book A Table Section -->

/* below is the code to display data in the footer. */
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

