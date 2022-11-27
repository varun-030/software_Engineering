
/* php allows to retrieve the image from database by ID and display it on view, 
if it is unable to retrieve the image, an error is returned.*/

<?php
require_once __DIR__ . '/connect.php';

// 
if (isset($_GET['id'])) // checks if the id variable is set
{
    $sql = "SELECT imageType,image FROM hotel WHERE id=?"; 
    $statement = $conn->prepare($sql);
    $statement->bind_param("i", $_GET['id']);
    $statement->execute() or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_connect_error());
    $result = $statement->get_result();

    $row = $result->fetch_assoc();
    header("Content-type: " . $row["imageType"]);
    echo $row["image"];
}
?>