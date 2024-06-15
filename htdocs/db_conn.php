<?php

$sname= "localhost:4027";
$unmae= "root";
$password = "";

$db_name = "booking_licenta";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}