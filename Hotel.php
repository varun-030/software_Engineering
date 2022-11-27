
<?php 
class Hotel
{
      function getNames()
      {
            require_once "connect.php";

            $sql = "select id, name from hotel";
            
         
            $res = mysqli_query($conn,$sql) or die(mysqli_error($conn));

            
            return $res;
      }

      function getRoomByID($id)
      {
            require "connect.php";

            $sql = "select *  from room where id = $id";

            $res = mysqli_query($conn,$sql) or die(mysqli_error($conn));

            return $res;
      }
      function getHotelNameByRoomID($id)
      {
            require "connect.php";

            $sql = "select name from  hotel,room where hotel.id = room.hotelid and room.id=$id";
      

            $res = mysqli_query($conn,$sql) or die(mysqli_error($conn));

            $row = mysqli_fetch_array($res);

            return $row[0];
      }

}

?>