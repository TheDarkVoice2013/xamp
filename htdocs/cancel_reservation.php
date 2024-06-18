<?php

require 'db_conn.php';
$ret = new stdClass;

$id = $_POST['id'];
$ret->id = $id;


$sql = "UPDATE reservations
    SET status = 'CANCELLED'
    WHERE reservation_id = " . $id;
$result = $conn->query($sql);
$ret->test =$result;

echo json_encode($ret);
?>