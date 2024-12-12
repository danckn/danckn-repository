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
    <div class="container-fluid bg-secondary fs-5 text-light">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-md-4 mx-auto p-5">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row g-3 border border-5 rounded">
                            <h2 class="text-center">Log in</h2>
                            <div class="mb-3">
                                <label for="user_username" class="form-label">Username</label>
                                <input type="text" id="user_username" class="form-control" placeholder="Username" autocomplete="off" required="required" aria-label="Username" required name="user_username">
                            </div>
                            <div class="mb-3">
                                <label for="user_password" class="form-label">Password</label>
                                <input type="password" id="user_password" class="form-control" placeholder="Password" autocomplete="off" required="required" aria-label="Password" required name="user_password">
                            </div>
                            <div class="col">
                                <input type="submit" value="Log in" class="btn btn-primary border border-0" name="user_login">
                                <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account?<a href="/raspberrypi" class="text-primary"> Sign up</a></p>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-3"></div>
            </div>
    </div>
    <?php
    include('footer.php');
    ?>
    
</body>
</html>
<?php
if (isset($_POST['user_login'])) {
    $user_username = $_POST['user_username'];
    $user_password = $_POST['user_password'];
 
    $select_query = "Select * from `user_table` where user_username='$user_username'";
    $result = mysqli_query($con, $select_query);
    $row_count = mysqli_num_rows($result);
    $row_data = mysqli_fetch_assoc($result);

    if ($row_count > 0) {
        $_SESSION['user_username'] = $user_username;
        if (password_verify($user_password, $row_data['user_password'])) {
            if ($row_count == 1) {
                $_SESSION['user_username'] = $user_username;
                echo "<script>alert('Login successful')</script>";
                echo "<script>window.open('calendar.php','_self')</script>";
            } else {
                $_SESSION['user_username'] = $user_username;
                echo "<script>alert('Login successful')</script>";
                echo "<script>window.open('calendar.php','_self')</script>";
            }
        } else {
            echo "<script>alert('Invalid Credentials')</script>";
        }
    } else {
        echo "<script>alert('Invalid Credentials')</script>";
    }
}
?>