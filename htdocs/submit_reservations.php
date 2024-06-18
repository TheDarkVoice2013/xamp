<?php

include "db_conn.php";
session_start(); 
$ret = new stdClass;

$hotelId = $_POST['hotelId'];
$startdate = $_POST['startdate'];
$enddate = $_POST['enddate'];
$roomtype = $_POST['roomtype'];
$numberOfRooms = $_POST['numberofrooms'];
$userId =$_SESSION['id'];

$start_date = date('Y-m-d', strtotime($startdate));
$end_date = date('Y-m-d', strtotime($enddate));

$sql_room = "SELECT room_id FROM rooms WHERE hotel_id = '$hotelId' AND type = '$roomtype' LIMIT 1";

$result_room = $conn->query($sql_room);

if ($result_room->num_rows > 0) {
    $row = $result_room->fetch_assoc();
    $room_id = $row['room_id'];

    $sql1 = "INSERT INTO reservations (user_id, hotel_id, room_id, status, updated_at, start_date, end_date)
             VALUES ('$userId', '$hotelId', '$room_id', 'PENDING', NOW(), '$start_date', '$end_date')";

    // Execute the query
    $conn->query($sql1);
} else {
    $ret->ERR[] = "Error: No matching room found for the given hotel and room type.";
}

$conn->close();

echo json_encode($ret);

?>
