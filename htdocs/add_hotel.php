<?php
include "db_conn.php";


  
  $hotelName = $_POST['name'];
  $hotelLocation = $_POST['location'];
  $hotelDescription = $_POST['description'];
  $imagePath = $_POST['newFilePath']; 

  $sql = "INSERT INTO hotels (name, location, description, imagepath) VALUES ('$hotelName', '$hotelLocation', '$hotelDescription', '$imagePath')";
  if (mysqli_query($conn, $sql)) {
    echo "Hotel created successfully!";
  } else {
    echo "Error creating hotel: " . mysqli_error($conn);
  }

 
  mysqli_close($conn);
?>
