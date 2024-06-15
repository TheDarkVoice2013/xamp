<?php

require 'db_conn.php';
$location = $_POST['location'];
$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];
$adults = $_POST['adults'];
$kids = $_POST['kids'];

$hotelsResults =$conn->query("
  SELECT
    hotels.hotel_id,
    hotels.name,
    hotels.location,
    hotels.description,
    hotels.imagepath
  FROM hotels
  JOIN rooms ON hotels.hotel_id = rooms.hotel_id
  LEFT JOIN reservations ON rooms.room_id = reservations.room_id
  WHERE
    hotels.location LIKE '%$location%'
    AND rooms.occupancy_limit >= $adults + $kids
    AND (
      (reservations.start_date IS NULL AND reservations.end_date IS NULL)
      OR (
        '$startDate' > reservations.end_date
        OR '$endDate' < reservations.start_date
      )
    )
  GROUP BY hotels.hotel_id;
");
$hotels = [];

if ($hotelsResults->num_rows > 0) {
  while ($hotelResult = $hotelsResults->fetch_assoc()) {
    $hotels[] = [
      'hotel_id' => $hotelResult['hotel_id'],
      'name' => $hotelResult['name'],
      'location' => $hotelResult['location'],
      'description' => $hotelResult['description'],
      'image' => $hotelResult['imagepath']
    ];
  }
}

echo json_encode($hotels);
?>