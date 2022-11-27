<?php 
/*Php allows to search the hotel with zip code and order by list and used a while condition to 
 * access fetch_assoc    
   */
?>
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
             require_once "customermenu.php";
          ?>
         
    
        </div>
      </header><!-- End Header -->


      
      <main id="main">
      <br>
      <section id="about" class="about">
  <?php 
       
        require_once "connect.php";

        if(isset($_GET['zipcode']))
        {
          $zip = $_GET['zipcode'];
        $sql = "SELECT * FROM hotel where address like '%".$zip."%' ORDER BY Id";
        }
        else
        $sql = "SELECT * FROM hotel ORDER BY Id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
?>


      
    <div class="container">


    <form action="" method="get" role="form" class="php-email-form1">

            
<div class="row">

  <div class="col-lg-4 col-md-4 form-group">
    <input type="text" name="zipcode" class="form-control" id="name" placeholder="Enter Zipcode" required>
</div>
    <div class="col-lg-4 col-md-4 form-group">
    <input type="submit" class="btn btn-lg btn-success" value="Search">
  </div>
</form>
      <div class="section-title">
        <h2>View <span>Hotel</span></h2>
       
        <div class="card-columns">
           
        <?php
     if ($result->num_rows > 0) {
        
    while ($row = $result->fetch_assoc()) {

             
        ?>
             
            <div class="card" style="width: 18rem;float:left;margin-left:20px">
          <img class="card-img-top"  width="200px" height="250px" src = "imageView.php?id=<?php echo $row["id"];?>">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row["name"]; ?></h5>
            <p class="card-text"><?php echo $row["address"]; ?></p>
            <div class="card-footer bg-transparent border-dark">
                <p class="card-title">Manager</p>
                <center>
                <!--<a href="" class="btn btn-warning">edit</a> -->
                <a href="ViewHotelRooms.php?id=<?php echo $row['id'];?>&hname=<?php echo $row['name']; ?>" class="btn btn-danger">View Rooms</a> <br> <br>
                <a href="ViewFoodHotels.php?id=<?php echo $row['id'];?>" class="btn btn-danger">View Food</a> <br><br>
                <a href="ViewEventHotels.php?id=<?php echo $row['id'];?>" class="btn btn-danger">View Events</a>
            </center>
            </div>
          </div>
        </div>
            
        </div>

		
<?php
    }
}

   ?>
           
         </div>

        
    </div>
  </section><!-- End Book A Table Section -->
  <div style="clear:both">
           <br><br>
    </div>
   
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

