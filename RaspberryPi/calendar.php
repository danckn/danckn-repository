<?php
include('connect.php');
include('navbar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raspberry Pi Foundation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <style>
    body{
        justify-content: space-between;
        align-items: center;
        background: #2D3A3A;
    }
    </style>
    <div class="calendar mx-auto">
        <div class="header">
            <button id="prevBtn">
                <i class="fa-solid">&#10094</i>
            </button>
            <div class="monthYear" id="monthYear">December</div>
            <button id="nextBtn">
                <i class="fa-solid">&#10095</i>
            </button>
        </div>
        <div class="days">
            <div class="day">Mon</div>
            <div class="day">Tue</div>
            <div class="day">Wed</div>
            <div class="day">Thu</div>
            <div class="day">Fri</div>
            <div class="day">Sat</div>
            <div class="day">Sun</div>
        </div>
        <div class="dates" id="dates"></div>
    </div>
    <script src="main.js"></script>
    <div class="footer">
        <?php include 'footer.php';?>
    </div>
</body>
</html>