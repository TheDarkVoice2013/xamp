<?php
session_start();
include "db_conn.php";

$searchTerm = $_POST['searchTerm'];

$sql = "SELECT DISTINCT location FROM hotels WHERE location LIKE '%$searchTerm%'";

$result = $conn->query($sql);

$uniqueLocations = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $uniqueLocations[] = $row['location'];
    }
}


$locationsJSON = json_encode($uniqueLocations);


echo $locationsJSON;


$conn->close();
?>
