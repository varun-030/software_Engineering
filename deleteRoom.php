
<?php 
require_once "connect.php";


$id = $_GET['id'];
$sql = "delete from room where id =?";
$statement = $conn->prepare($sql);
$statement->bind_param('s', $id);
$current_id = $statement->execute() or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_connect_error());
header('location:ViewRoom.php');

?>
