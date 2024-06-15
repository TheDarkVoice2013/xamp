<?php

session_start(); 
include "db_conn.php";


// Get the values from the POST request
$normalRooms = $_POST['normalRooms'];
$doubleRooms = $_POST['doubleRooms'];
$vipRooms = $_POST['vipRooms'];


$normalRoomsPrice = $_POST['normalroomsprice'];
$doubleRoomsPrice = $_POST['doubleroomsprice'];
$vipRoomsPrice = $_POST['viproomsprice'];
$hotelId = $_POST['hotelId'];

for ($i = 1; $i <= $normalRooms; $i++) {
  $sql = "INSERT INTO rooms (hotel_id, type, occupancy_limit) VALUES ('$hotelId', 'normal', 2)";
  $result = $conn->query($sql);
}

for ($i = 1; $i <= $doubleRooms; $i++) {
  $sql = "INSERT INTO rooms (hotel_id, type, occupancy_limit) VALUES ('$hotelId', 'double', 4)";
  $result = $conn->query($sql);
}

for ($i = 1; $i <= $vipRooms; $i++) {
  $sql = "INSERT INTO rooms (hotel_id, type, occupancy_limit) VALUES ('$hotelId', 'vip', 6)";
  $result = $conn->query($sql);
}

// Check if the rooms were added successfully
if ($result) {
  echo json_encode(['status' => 'success', 'message' => 'Rooms added successfully.']);
} else {
  echo json_encode(['status' => 'error', 'message' => 'Error adding rooms: ' . $conn->error]);
}

$conn->close();
?>
