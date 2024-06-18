<?php
session_start(); 
require 'db_conn.php';

$ret = new stdClass;
$userId =$_SESSION['id'];

$stmt = $conn->prepare("SELECT t1.reservation_id, t1.status, t1.start_date, t1.end_date, t2.name, t3.occupancy_limit, t3.type
                        FROM reservations t1
                        LEFT JOIN hotels t2 USING (hotel_id)
                        LEFT JOIN rooms t3 USING (room_id)
                        WHERE t1.status != 'CANCELLED'
                        AND t1.user_id = ?");
$stmt->bind_param("i", $userId);

if ($stmt->execute()) {
    $result = $stmt->get_result();
    
    $results = [];
    while ($row = $result->fetch_assoc()) {
        $results[] = [
            'id'              => $row['reservation_id'],
            'status'          => $row['status'],
            'start_date'      => $row['start_date'],
            'start_date'      => $row['start_date'],
            'end_date'        => $row['end_date'],
            'type'            => $row['type'],
            'name'            => $row['name'],
            'occupancy_limit' => $row['occupancy_limit']
        ];
    }
    
    $ret->results = $results;
} else {
    $ret->error = "Query execution failed: " . $stmt->error;
}
$stmt->close();

echo json_encode($ret);
?>