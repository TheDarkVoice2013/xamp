<?php

session_start(); 
include "db_conn.php";



$userId = $_POST['userId'];

if ($userId) {
  // Select hotels managed by the specified user
  $sql = "SELECT * FROM hotels WHERE manager_id = $userId";
  $result = mysqli_query($conn, $sql);

  $hotelsData = [];
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $hotelsData[] = $row;
    }
  }

  
  $hotelsDataJson = json_encode($hotelsData);

  
  echo $hotelsDataJson;
} else {
  echo json_encode([
    'status' => 'error',
    'message' => 'Invalid user ID'
  ]);
}


mysqli_close($conn);
?>
