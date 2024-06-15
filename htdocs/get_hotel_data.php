<?php
session_start();


$hotelId = $_POST['hotelId'];


include "db_conn.php";


$sql = "SELECT * FROM hotels WHERE hotel_id = '$hotelId'";
$result = $conn->query($sql);
$hotelData = [];

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $hotelData[] = $row;
  }
}

echo json_encode($hotelData);


$conn->close();
?>
