<?php
require_once __DIR__ . '/connect.php';
if (isset($_GET['id'])) {
    $sql = "SELECT fimage,imagetype FROM food WHERE fid=?";
    //echo $sql;
    
    $statement = $conn->prepare($sql);
    $statement->bind_param("i", $_GET['id']);
    $statement->execute() or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_connect_error());
    $result = $statement->get_result();

    $row = $result->fetch_assoc();
    header("Content-type: " . $row["imagetype"]);
    echo $row["fimage"];
}
?>