<?php
include('connect.php');
include('navbar.php');
session_start();
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
<body>
    <?php
    if (isset($_POST['user_register'])) {
        // Sanitize user input
        $user_username = mysqli_real_escape_string($con, $_POST['user_username']);
        $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
        $last_name = mysqli_real_escape_string($con, $_POST['last_name']);
        $user_email = mysqli_real_escape_string($con, $_POST['user_email']);
        $user_password = mysqli_real_escape_string($con, $_POST['user_password']);
        $hash_password = password_hash($user_password, PASSWORD_DEFAULT);
        $conf_user_password = mysqli_real_escape_string($con, $_POST['conf_user_password']);
        
        // Check if username or email exists
        $select_query = "SELECT * FROM `user_table` WHERE user_username = ? OR user_email = ?";
        $stmt = mysqli_prepare($con, $select_query);
        mysqli_stmt_bind_param($stmt, 'ss', $user_username, $user_email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $rows_count = mysqli_num_rows($result);
        
        if ($rows_count > 0) {
            echo "<script>alert('Username and Email already exist');</script>";
        } elseif ($user_password != $conf_user_password) {
            echo "<script>alert('Passwords do not match');</script>";
        } else {
            // Insert user into the database
            $insert_query = "INSERT INTO `user_table` (user_username, first_name, last_name, user_email, user_password) VALUES (?, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($con, $insert_query);
            mysqli_stmt_bind_param($stmt, 'sssss', $user_username, $first_name, $last_name, $user_email, $hash_password);
            mysqli_stmt_execute($stmt);


            header('Location: calendar.php');
            exit();
        }
    }
    
    ?>
    <div class="container-fluid bg-secondary fs-5 text-light">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-md-4 mx-auto p-5">
                <form action="index.php" method="post" enctype="multipart/form-data">
                    <div class="row g-3 border border-5 rounded">
                        <h2 class="text-center">Sign up</h2>
                            <div class="mb-3 col">
                                <label for="first_name" class="form-label">First name</label>
                                <input type="text" id="first_name" class="form-control" placeholder="First name" autocomplete="off" required="required" aria-label="First name" required name="first_name">
                            </div>
                            <div class="mb-3 col">
                                <label for="last_name" class="form-label"> Last name</label>
                                <input type="text" id="last_name" class="form-control" placeholder="Last name" autocomplete="off" required="required" aria-label="Last name" required name="last_name">
                            </div>
                            <div class="mb-3">
                                <label for="user_username" class="form-label">Username</label>
                                <input type="text" id="user_username" class="form-control" placeholder="Username" autocomplete="off" required="required" aria-label="Username" required name="user_username">
                            </div>
                            <div class="mb-3">
                                <label for="user_email" class="form-label">Email</label>
                                <input type="email" id="user_email" class="form-control" placeholder="Email" autocomplete="off" required="required" aria-label="Email" required name="user_email">
                            </div>
                            <div class="mb-3">
                                <label for="user_password" class="form-label">Password</label>
                                <input type="password" id="user_password" class="form-control" placeholder="Password" autocomplete="off" required="required" aria-label="Password" required name="user_password">
                            </div>
                            <div class="mb-3">
                                <label for="conf_user_password" class="form-label">Confirm password</label>
                                <input type="password" id="conf_user_password" class="form-control" placeholder="Confirm password" required="required" autocomplete="off" aria-label=" Confirm password" required name="conf_user_password">
                            </div>
                            <div class="col">
                                <input type="submit" value="Register" class="btn btn-primary border border-0" name="user_register">
                                <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account?<a href="user_login.php" class="text-primary">Login</a></p>
                            </div>
                    </div>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>

<div class="footer">
    <?php include 'footer.php';?>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
