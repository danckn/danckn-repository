<?php
include('connect.php');
session_start();
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.php"><img src="images/logo.png" class="img-fluid" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-5 fw-semibold">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="calendar.php">Calendar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="activities.php">Activities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="booking.php">Booking</a>
                </li>
                <?php
                if(isset($_SESSION['user_username'])){
                    echo "<li class='nav-item' style='width: 1230;'>
                            <a class='nav-link' href='./profile.php'>My Account</a>
                        </li>";
                } else {
                    echo "<li class='nav-item' style='width: 1230;'>
                            <a class='nav-link' href='./index.php'>Register</a>
                        </li>";
                }
                ?>
                <?php
                if(!isset($_SESSION['user_username'])){
                    echo "<li class='nav-item'>
                        <a class='nav-link' href='#'>Welcome Guest</a>
                    </li>";
                } else {
                    echo "<li class='nav-item'>
                        <a class='nav-link' href='#'>Welcome ".$_SESSION['user_username']."</a>
                    </li>";
                } 
                if(!isset($_SESSION['user_username'])){
                    echo "<li class='nav-item'>
                        <a class='nav-link' href='./user_login.php'>Login</a>
                    </li>";
                } else {
                    echo "<li class='nav-item'>
                        <a class='nav-link' href='./logout.php'>Logout</a>
                    </li>";
                }
                ?>
            </ul>
        </div>
    </div>
</nav>