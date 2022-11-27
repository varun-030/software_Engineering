//The login page ends the session for login credentials and redirects the user to the index page.


<?php 
session_start(); 
unset($_SESSION['uname']); // for a single variable uname 
session_destroy(); //destroys the session
header('location:index.php'); // redirects back to index page

?>