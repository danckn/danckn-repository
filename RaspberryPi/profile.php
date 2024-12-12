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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="style.css" rel="stylesheet">
</head>
<body class="bg-secondary">
    <style>
        .card{
            margin-top: 80px;
        }
        .nav-item {
            list-style: none; /* Remove bullet points */
        }
    </style>
    <div class="card mb-3">
        <img src="images/user.jpg" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">Profile</h5>
                <p class="card-text">Account details</p>
                <?php
                // Retrieve the username from the session
                $user_username = $_SESSION['user_username'];
                
                // Query to fetch the user details
                $user_query = "SELECT * FROM `user_table` WHERE user_username='$user_username'";
                $result = mysqli_query($con, $user_query);
                
                // Fetch the user data
                $user_data = mysqli_fetch_array($result);
                $user_username = $user_data['user_username'];
                $user_email = $user_data['user_email'];
                
                // Output the username and email
                echo "<li class='nav-item'>
                        <p class='user-info my-4'>Username: $user_username</p>
                        <p class='user-info my-4'>Email: $user_email</p>
                    </li>";
                ?>

                <p class="card-text">Bookings</p>
                <?php
                $user_id = $_SESSION['user_id'];
                $query = "SELECT * FROM bookings WHERE user_id = ?";
                $stmt = mysqli_prepare($con, $query);
                mysqli_stmt_bind_param($stmt, 'i', $user_id);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "Activity: " . $row['activity'] . ", Date: " . $row['date'] . "<br>";
                }
                ?>

            </div>
    </div>
</body>
</html>