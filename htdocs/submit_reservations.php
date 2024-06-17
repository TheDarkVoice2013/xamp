<?php

include "db_conn.php";

$hotelId = $_POST['hotelId'];
$startdate = $_POST['startdate'];
$enddate = $_POST['enddate'];
$numberOfRooms = $_POST['numberofrooms'];

echo $hotelId;
return;

$sql = "SELECT roomId FROM reservations WHERE hotel_id = '$hotelId' AND date >= '$startdate' AND date <= '$enddate' AND room_id NOT IN (SELECT room_id FROM reservations WHERE hotel_id = '$hotelId' AND start_date >= '$startdate' AND end_date <= '$enddate')";
$result = $conn->query($sql);
echo $result;
return;
if ($result->num_rows > 0) {
  for ($i=0; $i<$numberOfRooms; $i++) {
    $row = $result->fetch_assoc();
    $roomId = $row['roomId'];
    $sql = "INSERT INTO reservations (roomId, hotel_id, start_date, end_date) VALUES ('$roomId', '$hotelId', '$startdate', '$enddate')";
    $conn->query($sql);
  }

  // Send a success response
  echo json_encode([
    'status' => 'success',
    'message' => 'Reservations submitted successfully.'
  ]);
} else {
  // Send an error response
  echo json_encode([
    'status' => 'error',
    'message' => 'No available rooms found for the specified dates.'
  ]);
}

$conn->close();

?>
