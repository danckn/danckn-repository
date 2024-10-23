<?php
include('includes/connect.php');
include('functions/common_functions.php');
session_start();
?>

<html>
    <head>
        <title>
            ShopNest - Your Number One Shop for Anything!
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
        <link rel="stylesheet" href="./styles.css">
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container-fluid">
                <img src="./Images/new_logo.png" class="img-fluid" alt="">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="display_all.php">Products</a>
                        </li>
                        <?php
                            if(isset($_SESSION['username'])){
                                echo "<li class='nav-item'>
                                <a class='nav-link text-light' href='./users_area/profile.php'>My Account</a>
                                </li>";
                            } else {
                                echo "<li class='nav-item'>
                                <a class='nav-link text-light' href='./users_area/user_registration.php'>Register</a>
                                </li>";
                            }
                        ?>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php cart_item(); ?></sup></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="index.php">Total Price: <?php total_cart_price(); ?>/-</a>
                        </li>
                    </ul>
                    <form class="d-flex" action="search_product.php" method="get">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
                        <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
                    </form>
                </div>
            </div>
        </nav>
        <!-- calling cart function -->
        <?php cart(); ?>
        
        <!-- second child -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <ul class="navbar-nav me-auto">
                <?php
                    if(!isset($_SESSION['username'])){
                        echo "<li class='nav-item'>
                        <a class='nav-link' href='#'>Welcome Guest</a>
                        </li>";
                    } else {
                        echo "<li class='nav-item'>
                        <a class='nav-link' href='#'>Welcome ".$_SESSION['username']."</a>
                        </li>";
                    } 
                    if(!isset($_SESSION['username'])){
                        echo "<li class='nav-item'>
                        <a class='nav-link' href='./users_area/user_login.php'>Login</a>
                        </li>";
                    } else {
                        echo "<li class='nav-item'>
                        <a class='nav-link' href='./users_area/logout.php'>Logout</a>
                        </li>";
                    }
                ?>
            </ul>
        </nav>
        
                <!-- third child -->
        <div class="bg-light">
            <h3 class="text-center">Shop Nest</h3>
            <p class="text-center">Communications is at the heart of e-commerce and community</p>
        </div>
        
                <!-- fourth child -->
        <div class="row px-1">
            <div class="col-md-10">
                <div class="row">
                    <?php
                        // calling function
                        showcategories();
                        get_unique_categories();
                        get_unique_brands(); 
                    ?>
                </div>
            </div>
            <div class="col-md-2 bg-secondary p-0">
                <!-- brands to be displayed -->
                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item bg-primary">
                        <a href="#" class="nav-link text-light bg-primary"><h4>Delivery Brands</h4></a>
                    </li>
                    <?php getbrands(); ?>
                </ul>
                
                <!-- categories to be displayed -->
                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item bg-primary">
                        <a href="#" class="nav-link text-light bg-primary"><h4>Categories</h4></a>
                    </li>
                    <?php getcategories(); ?>
                </ul>
            </div>
        </div>
            
        <!-- last child -->
        <?php include("./includes/footer.php") ?>
        </div>
            
        <!-- bootstrap js File -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>