<!-- connect file -->
<?php
include('../includes/connect.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>E-Commerce Website using PHP and MySQL</title>
<!-- bootstrap CSS File -->
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<!-- font awesome link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
<!-- External CSS file -->
<link rel="stylesheet" href="../style.css">
</head>
<body>
<!-- navbar -->
<div class="container-fluid p-0">
<!-- first child -->
<nav class="navbar navbar-expand-lg navbar-light bg-info">
<div class="container-fluid">
<img src="../images/logo.png" alt="E-Commerce Image Logo" class="logo">
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="../index.php">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../display_all.php">Products</a>
</li>
<?php
                        if (isset($_SESSION['username'])) {
                            echo "<li class='nav-item'>
<a class='nav-link' href='profile.php'>My Account</a>
</li>";
                        } else {
                            echo "<li class='nav-item'>
<a class='nav-link' href='user_registration.php'>Register</a>
</li>";
                        }
                        ?>
</ul>
<form class="d-flex" action="../search_product.php" method="get">
<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
<input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
</form>
</div>
</div>
</nav>
 
        <!-- second child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
<ul class="navbar-nav me-auto">
<?php
                if (!isset($_SESSION['username'])) {
                    echo "<li class='nav-item'>
<a class='nav-link' href='#'>Welcome Guest</a>
</li>";
                } else {
                    echo "<li class='nav-item'>
<a class='nav-link' href='#'>Welcome " . $_SESSION['username'] . "</a>
</li>";
                }
                if (!isset($_SESSION['username'])) {
                    echo "<li class='nav-item'>
<a class='nav-link' href='./user_login.php'>Login</a>
</li>";
                } else {
                    echo "<li class='nav-item'>
<a class='nav-link' href='logout.php'>Logout</a>
</li>";
                }
                ?>
</ul>
</nav>
 
        <!-- third child -->
<div class="bg-light">
<h3 class="text-center">Hidden Store</h3>
<p class="text-center">Communications is at the heart of e-commerce and community</p>
</div>
 
        <!-- fourth child -->
<div class="row px-1">
<div class="col-md-12">
<div class="row">
<?php
                    if (!isset($_SESSION['username'])) {
                        include('user_login.php');
                    } else {
                        include('payment.php');
                    }
                    ?>
</div>
</div>
</div>
<?php include("../includes/footer.php"); ?>
</div>
<!-- bootstrap js File -->
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>