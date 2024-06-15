<?php

include "db_conn.php";

if (!isset($_POST) || empty($_POST)) {
  echo json_encode([
    'status' => 'error',
    'message' => 'Missing form data'
  ]);
  exit;
}


$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


if (!preg_match('/^[a-zA-Z0-9_.-]+$/', $username)) {
  echo json_encode([
    'status' => 'error',
    'message' => 'Invalid username format'
  ]);
  exit;
}


if (!$conn) {
  echo json_encode([
    'status' => 'error',
    'message' => 'Error connecting to database'
  ]);
  exit;
}

$checkUsernameQuery = "SELECT * FROM users WHERE username='$username'";
$checkUsernameResult = mysqli_query($conn, $checkUsernameQuery);

if (mysqli_num_rows($checkUsernameResult) > 0) {
  mysqli_close($conn);
  echo json_encode([
    'status' => 'error',
    'message' => 'Username already exists'
  ]);
  exit;
}


$hashedPassword = md5($password);


$insertManagerQuery = "INSERT INTO users (username, email, password, role) VALUES ('$username', '$email', '$hashedPassword', 'MANAGER')";
$insertManagerResult = mysqli_query($conn, $insertManagerQuery);

if (!$insertManagerResult) {
  mysqli_close($conn);
  echo json_encode([
    'status' => 'error',
    'message' => 'Error inserting manager into database'
  ]);
  exit;
}

mysqli_close($conn);
echo json_encode([
  'status' => 'success',
  'message' => 'Manager created successfully'
]);
?>