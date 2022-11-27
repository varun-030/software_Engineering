/*
The code below displays the payment view to make payment.
This view asks for certain details in order to process the payment. 
Customer details are inserted into the database once they are provided by the customer.
*/


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


/* To take inputs like Booking ID, Number of Days, Price Per Day, Coupon, Discount Amount, Card Number, Card PIN from the customer and insert them into the database as a record of payment history.*/   

      <main id="main">
      <br>
    <section id="book-a-table" class="book-a-table">

    <div class="row">

      <div class="col-sm-3">

      </div>
      <div class="col-sm-6">
  <?php 
         if(isset($_REQUEST["payment"]))
         {
              require_once "connect.php";
              $bid = $_REQUEST['bid'];
              $nod = $_REQUEST['nod'];
              $ppd = $_REQUEST['ppd'];
              $coupon = $_REQUEST['coupon'];
              $discount = $_REQUEST['discount'];
              $tamount = $_REQUEST['tamount'];
              $cardnumber = $_REQUEST['cardnumber'];
              $pin = $_REQUEST['pin'];
              $uname = $_REQUEST['uname'];
              $pdate = $date = date('Y/m/d');
              $sql = "INSERT INTO payment(bid,nod,ppd,couponcode,discountamount,tamount,cardnumber,pin,uname,pdate) VALUES(?,?,?,?,?,?,?,?,?,?)";
                $statement = $conn->prepare($sql);
                $statement->bind_param('ssssssssss', $bid,$nod,$ppd,$coupon,$discount,$tamount,$cardnumber,$pin,$uname,$pdate);
                $current_id = $statement->execute() or die(mysqli_error($conn));
                if($current_id>=1)
                {
                echo "<script>alert('Payment Done Successfully');</script>";
                echo "<script>window.location.href='ViewCHotel.php?';</script>";
                }
          } 

   ?>
      
    <div class="container">

      <div class="section-title">
        <h2> Payment<span>Details</span></h2>

         <?php 
            $bid = $_REQUEST['bid'];
            $day = $_REQUEST['day'];
            $price = $_REQUEST['price'];
            $uname = $_REQUEST['uname'];
            $coupon = $_REQUEST['coupon'];
            $per = $_REQUEST['per'];
            $tamt = $price * $day;
            $discount = ($tamt*$per)/100;
            $tamt = $tamt - $discount;

          ?>
        <form action="" method="post" role="form" class="php-email-form1">
        
        <div class="row">
        <span style="text-align:left"><b> Booking ID: </b></span>
          <div class="col-lg-12 col-md-12 form-group mt-3 mt-md-0">
           
            <input type="text" class="form-control" name="bid" value="<?php echo $bid; ?>" readonly>
            <div class="validate"></div>
          </div>

          <span style="text-align:left"><b> Number of Days: </b></span>
          <div class="col-lg-12 col-md-12 form-group mt-3 mt-md-0">
           
            <input type="text" class="form-control" name="nod" value="<?php echo $day; ?>" readonly>
            <div class="validate"></div>
          </div>
          <span style="text-align:left"><b>Price Per Day: </b></span>
          <div class="col-lg-12 col-md-12 form-group mt-3 mt-md-0">
           
            <input type="text" class="form-control" name="ppd" value="<?php echo $price; ?>" readonly>
            <div class="validate"></div>
          </div>
          <span style="text-align:left"><b>Coupon: </b></span>
          <div class="col-lg-12 col-md-12 form-group mt-3 mt-md-0">
           
            <input type="text" class="form-control" name="coupon" value="<?php echo $coupon; ?>" readonly>
            <div class="validate"></div>
          </div>
          <span style="text-align:left"><b>Discount Amount: </b></span>
          <div class="col-lg-12 col-md-12 form-group mt-3 mt-md-0">
           
            <input type="text" class="form-control" name="discount" value="<?php echo $discount; ?>" readonly>
            <div class="validate"></div>
          </div>
          <span style="text-align:left"><b> Total Amount: </b></span>
          <div class="col-lg-12 col-md-12 form-group mt-3 mt-md-0">
           
            <input type="text" class="form-control" name="tamount" value="<?php echo $tamt; ?>" readonly>
            <div class="validate"></div>
          </div>

          <span style="text-align:left"><b> Enter the Card Number: </b></span> 
          <div class="col-lg-12 col-md-12 form-group">
          
          <input type="text" class="form-control" name="cardnumber" required >
          </div>

          <span style="text-align:left"><b> Enter the 4 Digit Pin: </b></span> 
          <div class="col-lg-12 col-md-12 form-group">
          
          <input type="text" class="form-control" name="pin" required >
          </div>
        
        <div class="text-center"><button name="payment" type="submit">Make Payment</button></div>
    </div>
    </div>
    </div>

</div>
      </form>

         </div>

         <div class="row">
            <div class="col-lg-3 col-md-3">

            </div>

            <div class="col-lg-6 col-md-6">

    
    </div>
  </section><!-- End Book A Table Section -->

// below is the code to display data in the footer.
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

