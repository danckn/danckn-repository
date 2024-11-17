<?php
include('../includes/connect.php');
include('../functions/common_functions.php')
?>
<html>
    <head>
        <title>Admin Dashboard</title>
        <!-- Bootstrap CSS Link -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- Font Awesome Link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" >
        <link rel="stylesheet" href="../styles.css">

        <style>
          .admin_image{
                width: 100px;
                object-fit: contain;
            }
            .footer{
                position:absolute;
                bottom:0;
            }
            body{
                overflow-x: hidden;
            }
            .product_img{
                width:100px;
                object-fit: contain;
            }
        </style>
    </head>

    <body>
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-primary">
                <div class="container-fluid">
                    <img src="../images/new_jogo.png" alt="" class="logo">
                    <nav class="navbar navbar-expand-lg text-light">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link">Welcome Admin!</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </nav>
            <div class="bg-light">
                <h3 class="text-center p-2">Manage Details</h3>
            </div>
            <div class="row">
                <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                    <div class="p-3">
                        <a href="index.php"><img src="../images/new_logo.png" alt="" class="admin_image"></a>
                        <p class="text-light text-center">Daniel</p>
                    </div>
                    <div class="button text-center">
                        <button class="my-3"><a href="index.php?insert_products" class="nav-link text-dark my-1">Insert Products</a></button>
                        <button><a href="index.php?view_products" class="nav-link text-dark my-1">View Products</a></button>
                        <button><a href="index.php?insert_categories" class="nav-link text-dark my-1">Insert Categories</a></button>
                        <button><a href="index.php?view_categories" class="nav-link text-dark my-1">View Categories</a></button>
                        <button><a href="index.php?insert_brands" class="nav-link text-dark my-1">Insert Brands</a></button>
                        <button><a href="index.php?view_brands" class="nav-link text-dark my-1">View Brands</a></button>
                        <button><a href="#" class="nav-link text-dark my-1">All Orders</a></button>
                        <button><a href="#" class="nav-link text-dark my-1">All Payments</a></button>
                        <button><a href="#" class="nav-link text-dark my-1">List Users</a></button>
                        <button><a href="index.php?logout" class="nav-link text-dark my-1">Logout</a></button>
                    </div>

                </div>
            </div>
            <div class="container my-3">
            <?php
            if(isset($_GET['view_products'])){
                include('view_products.php');
            }
            if(isset($_GET['insert_products'])){
                include('insert_products.php');
            }
            if(isset($_GET['delete_product'])){
                include('delete_products.php');
            }
            if(isset($_GET['edit_product'])){
                include('edit_product.php');
            }
            if(isset($_GET['view_categories'])){
                include('view_categories.php');
            }
            if(isset($_GET['insert_categories'])){
                include('insert_categories.php');
            }
            if(isset($_GET['view_brands'])){
                include('view_brands.php');
            }
            if(isset($_GET['insert_brands'])){
                include('insert_brands.php');
            }
            if(isset($_GET['logout'])){
                include('logout.php');
            }
            ?>
        </div>
            


        <?php  include "../includes/footer.php"  ?>
    </body>
</html>