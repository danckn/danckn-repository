<?php

include('connect.php');

if($_SERVER["REQUEST_METHOD"]=="POST") {
    $time = $_POST['time'];
    $activity = $_POST['activity'];
    $location = $_POST['location'];
    $date = $_POST['date'];

$sql="INSERT INTO bookings(time, activity, location, date) VALUES( '$time', '$activity', '$location', '$date')";
if ($con->query($sql)=== TRUE) {
    echo "Thank you! Your booking for the '".htmlspecialchars($location)."' location at ".htmlspecialchars($time)." on the ".htmlspecialchars($date)." has been confirmed.";
}else{
    echo"Error:".$sql."<br>".$con->error;
}
$con->close();
}
?>
