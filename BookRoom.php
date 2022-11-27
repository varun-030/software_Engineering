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
    <section id="book-a-table" class="book-a-table">

    <div class="row">

      <div class="col-sm-3">

      </div>
      <div class="col-sm-6">
  <?php 
         if(isset($_REQUEST["book"]))
         {
               require_once "connect.php";
               $coupon = $_REQUEST['coupon'];
               $per = 0;
               if($coupon!=null)
               {
                   $per = checkCoupon($coupon);
                   if($per==0)
                   {
                      $id = $_REQUEST['id'];
                      echo "<script>alert('wrong coupon'+$id)</script>";
                     // echo "<script>window.location.href=BookRoom.php?id=$id</script>";
                      echo "<script>window.location.href='BookRoom.php?id='+$id;</script>";
              
                      
                   }
               }
               $rid = $_REQUEST['roomid'];

               $rno = $_REQUEST['rno'];

               $rtype = $_REQUEST['rtype'];

               $hname = $_REQUEST['hname'];
               
               $rprice = $_REQUEST['rprice'];

               $preference = $_REQUEST['preference'];

               $checkIn = $_REQUEST['checkIn'];

               $checkOut = $_REQUEST['checkOut'];
               
               $uname = $_SESSION['uname'];

               $earlier = new DateTime($checkIn);
               
               $later = new DateTime($checkOut);

               $abs_diff = $later->diff($earlier)->format("%a");

                $sql = "INSERT INTO booking(uname,rid,rno,rtype,hname,price,coupon,preference,checkIn,checkOut) VALUES(?,?,?,?,?,?,?,?,?,?)";
                $statement = $conn->prepare($sql);
                $statement->bind_param('ssssssssss', $uname,$rid,$rno,$rtype,$hname,$rprice,$coupon,$preference,$checkIn,$checkOut);
                $current_id = $statement->execute() or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_connect_error());
                if($current_id>=1)
                {
                $id = mysqli_insert_id($conn);  
                echo "<script>alert('Room Booked Successfully '+$id);</script>";
                echo "<script>window.location.href='Payment.php?bid=$id&day=$abs_diff&uname=$uname&price=$rprice&coupon=$coupon&per=$per';</script>";
                }
              } 

         function checkCoupon($code)
         {
          require "connect.php";
         
          $sql = "SELECT percentage FROM coupon where code = '$code'";  
          
          $stmt = $conn->prepare($sql);
             $stmt->execute();
             $res = $stmt->get_result();
            if($row = mysqli_fetch_array($res))
          {
              return $row[0];
          }     
          else 
          {
           return 0;
          }
         }

   ?>
      
    <div class="container">

      <div class="section-title">
        <h2>Book <span>Room</span></h2>

     
        <form action="" method="post" role="form" class="php-email-form1">

            
        <div class="row">
        <?php 
                 require_once "Hotel.php";
                 $id = $_GET['id'];
                 $h = new Hotel();
                 $hname = $h->getHotelNameByRoomID($id); 
                 $res = $h ->getRoomByID($id);
                
                 if($row = mysqli_fetch_array($res))
                 {
                    ?>
          
          <div class="col-lg-12 col-md-12 form-group mt-3 mt-md-0">
          <input type="hidden" class="form-control"  name="roomid" value="<?php echo $row[0]; ?>" readonly>
           
            <input type="text" class="form-control" placeholder="Enter Room No" name="rno" value="<?php echo $row[1]; ?>" readonly>
            <div class="validate"></div>
          </div>
        
          <div class="col-lg-12 col-md-12 form-group">
          
          <input type="text" class="form-control" name="rtype" value="<?php echo $row['2']; ?>" readonly>
         
           </div>
           <div class="col-lg-12 col-md-12 form-group">
          
          <input type="text" class="form-control" name="hname" value="<?php echo $h->getHotelNameByRoomID($id); ?>" readonly>
         
           </div>

          <div class="col-lg-12 col-md-12 form-group">
          <input type="text" class="form-control" name="rprice" value="<?php echo $row['3']; ?>" readonly>
          </div>
           
          <div class="col-lg-12 col-md-12 form-group">

          <div class="col-lg-12 col-md-12 form-group">
          <input type="text" class="form-control" name="coupon" placeholder="Enter the Coupon"> 
          </div>
          <div class="col-lg-12 col-md-12 form-group">

            <div class="col-lg-12 col-md-12 form-group">
              <textarea name="preference" class="form-control" placeholder="Enter Preference" id="" cols="30" rows="10"></textarea>
            </div>
          <span style="text-align:left"><b> Check In Date </b></span> 
          <div class="col-lg-12 col-md-12 form-group">
          
          <input type="date" class="form-control" name="checkIn" required >
          </div>
          <span style="text-align:left"><b> Check Out Date </b></span> 
          <div class="col-lg-12 col-md-12 form-group">
          
          <input type="date" class="form-control" name="checkOut" >
          </div>
        <div class="text-center"><button name="book" type="submit">Book Room</button></div>
    </div>
    </div>
    </div>
    <?php 
                 }
                 ?>
</div>
      </form>

         </div>

         <div class="row">
            <div class="col-lg-3 col-md-3">

            </div>

            <div class="col-lg-6 col-md-6">

    
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

