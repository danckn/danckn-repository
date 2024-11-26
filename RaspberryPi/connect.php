<?php
$con = mysqli_connect("localhost", "root", "", "booking_system_project");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>