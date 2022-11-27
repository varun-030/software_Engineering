/*
This is part of the code is operated from the admin module where the admin can add the Room.
when the admin hover over room Admin gets the option of View,add/delete the room.
When Admin wants to add room. Admin can add them by using this part of the code.
Admin needs to enter the details like name of hotelid, room type, room number and room price.
When hotel is added we get message stating room added successfully.
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

             require_once "adminmenu.php";
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
         if(isset($_REQUEST["Add"]))
         {
              require_once "connect.php";
               $hid = $_REQUEST['hname'];

               $rno = $_REQUEST['rno'];

               $rtype = $_REQUEST['rtype'];
               
               $rprice = $_REQUEST['rprice'];

             
                $sql = "INSERT INTO room(roomno,type,price,hotelid) VALUES(?,?,?,?)";
                $statement = $conn->prepare($sql);
                $statement->bind_param('ssss', $rno, $rtype,$rprice,$hid);
                $current_id = $statement->execute() or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_connect_error());
                if($current_id>=1)
                {
                echo "<script>alert('Room Added Successfully');</script>";
                echo "<script>window.location.href='AddRoom.php';</script>";
                }
              }


         

   ?>
      
    <div class="container">

      <div class="section-title">
        <h2>Add <span>Room</span></h2>


        <form action="" method="post" role="form" class="php-email-form1" >

            
        <div class="row">

          <div class="col-lg-12 col-md-12 form-group">
            <select name="hname" class="form-control" required>
                <option value="">Select Hotel</option>
                <?php 
                 require_once "Hotel.php";
                 
                 $h = new Hotel();
                 
                 $res = $h ->getNames();
                 while($row = mysqli_fetch_array($res))
                 {
                    ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo  $row["name"]; ?></option>
                    <?php 
                 }
                ?>
            </select>

          </div>
          
          <div class="col-lg-12 col-md-12 form-group mt-3 mt-md-0">
           
            <input type="text" class="form-control" placeholder="Enter Room No" name="rno" required>
            <div class="validate"></div>
          </div>
        
          <div class="col-lg-12 col-md-12 form-group">
          
           <select name="rtype" class="form-control" required>
            <option value="">Select Room Type</option>
            <option value="Luxary">Luxary</option>
            <option value="Delux">Delux</option>
            <option value="Suite">Suite</option>
           </select>
           </div>

          <div class="col-lg-12 col-md-12 form-group">
          <input type="text" class="form-control" name="rprice" placeholder="Enter Room Price" required>
          </div>
          
          
        <div class="text-center"><button name="Add" type="submit">Add Room</button></div>
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

