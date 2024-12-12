<?php

include('connect.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the user_id from the session
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
    } else {
        echo "<script>alert('User not logged in!');</script>";
        exit();
    }

    $time = mysqli_real_escape_string($con, $_POST['time']);
    $activity = mysqli_real_escape_string($con, $_POST['activity']);
    $location = mysqli_real_escape_string($con, $_POST['location']);
    $date = mysqli_real_escape_string($con, $_POST['date']);

    $insert_booking_query = "INSERT INTO bookings (user_id, time, activity, location, date) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $insert_booking_query);
    mysqli_stmt_bind_param($stmt, 'issss', $user_id, $time, $activity, $location, $date);
    mysqli_stmt_execute($stmt);

    if (mysqli_stmt_affected_rows($stmt) > 0) {
        echo "<script>alert('Booking added successfully!');</script>";
    } else {
        echo "<script>alert('Failed to add booking.');</script>";
    }
    $con->close();
}
?>
