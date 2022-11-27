/*
This part of the code handles the admin menu page,
Where the different options available for the admin when he enter succesfully.
When admin hover on hotels admin will get option of view/add Hotels. If admin choose any of the option admin will redirected the respected files.
When admin hover on Rooms admin will get option of view/add Rooms. If admin choose any of the option admin will redirected the respected files.
When admin hover on Food admin will get option of view/add Food. If admin choose any of the option admin will redirected the respected files.
When admin hover on Events admin will get option of view/add Events. If admin choose any of the option admin will redirected the respected files.
When admin hover on hotels admin will get option of view Feedback. If admin choose any of the option admin will redirected the respected files.
Admin has a logout button to logout of the module.
*/
<nav id="navbar"  class="navbar order-last order-lg-0">
            <ul>
              <li><a class="nav-link scrollto" href="AdminHome.php">Home</a></li>
             
              
              <li class="dropdown active"><a href="#"><span>Hotel</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="AddHotel.php">AddHotel.php</a></li>
                  <li><a href="ViewHotel.php">ViewHotel.php</a></li>
                 
                </ul>
              </li>

             
              <li class="dropdown active"><a href="#"><span>Rooms</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="AddRoom.php">Add Room.php</a></li>
                  <li><a href="ViewRoom.php">View Room.php</a></li>
                 
                </ul>
              </li>
              <li class="dropdown active"><a href="#"><span>Food</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="AddFood.php">Add Food</a></li>
                  <li><a href="ViewFood.php">View Food</a></li>
                 
                </ul>
              </li>
              <li class="dropdown active"><a href="#"><span>Event</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="AddEvent.php">Add Event</a></li>
                  <li><a href="ViewEvent.php">View Event</a></li>
                  <li><a href="ViewBookEvent.php">View Booking</a></li>
                 
                </ul>
              </li>
              
              <li><a class="nav-link scrollto" href="ViewFeedback.php">View Feedback</a></li>
             

             
           
            <li><a class="nav-link scrollto" href="logout.php">Logout</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
    