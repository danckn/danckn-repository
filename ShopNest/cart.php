<?php
include('includes/connect.php');
include('functions/common_functions.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website - Cart Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container-fluid p-0">
        <?php
        cart();
        ?>
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

        <div class="bg-light">
            <h3 class="text-center">Shop Nest</h3>
            <p class="text-center">Your number 1 store for anything!</p>
        </div>

        <div class="container">
            <div class="row">
                <form action="" method="post">
                            <?php
                            global $con;
                            $get_ip_add = getIPAddress(); 
                            $total_price = 0;

                            $cart_query = "
                                SELECT c.product_id, p.product_price, p.product_title, p.product_image1, c.quantity
                                FROM cart_details c
                                JOIN products p ON c.product_id = p.product_id
                                WHERE c.ip_address = '$get_ip_add'
                            ";
                            $result = mysqli_query($con, $cart_query);
                            $result_count=mysqli_num_rows($result);
                            if($result_count>0){
                                echo "                    <table class='table table-border text-center'>
                                <thead>
                                    <tr>
                                        <th>Product Title</th>
                                        <th>Product Image</th>
                                        <th>Quantity</th>
                                        <th>Total Price</th>
                                        <th>Remove</th>
                                        <th colspan='2'>Operations</th>
                                    </tr>
                                </thead>
                                <tbody>";
                            while ($row = mysqli_fetch_array($result)) {
                                $product_id = $row['product_id'];
                                $price_table = $row['product_price'];
                                $product_title = $row['product_title'];
                                $product_image1 = $row['product_image1'];
                                $quantity = $row['quantity'];
                                $total_price += $price_table * $quantity;
                            ?>
                            <tr>
                                <td><?php echo $product_title; ?></td>
                                <td><img src="./admin_area/product_images/<?php echo $product_image1; ?>" alt="" class="card-img-top"></td>
                                <td><input type="number" name="qty[<?php echo $product_id; ?>]" value="<?php echo $quantity; ?>" class="form-input w-50"></td>
                                <td><?php echo $price_table * $quantity; ?>/-</td>
                                <td><input type="checkbox" name="remove[]" value="<?php echo $product_id; ?>"></td>
                                <td>
                                    <input class="bg-info px-3 py-2 mx-3 border-0" value="Update Cart" name="update_cart" type="submit"/>
                                    <input class="bg-info px-3 py-2 mx-3 border-0" type="submit" name="remove_cart" value="Remove Item">
                                </td>
                            </tr>
                            <?php
                            }}else{
                                echo "<h2 class='text-center text-danger'>Cart is empty</h2>";
                            }
                            ?>
                        </tbody>
                    </table>
                    <div class="d-flex mb-5">
                    <?php
                        if ($result_count > 0) {
                            echo "<h4 class='px-3'>Subtotal :<strong class='text-info'>" . $total_price . "/-</strong></h4>
                            <a href='index.php'><button class='bg-info px-3 py-2 mx-3 border-0' type='button'>Continue Shopping</button></a>
                            <button class='bg-secondary p-3 py-2 border-0'><a href='./users_area/checkout.php' class='text-light text-decoration-none'>Checkout</a></button>";
                        } else {
                            echo "<a href='index.php'><button class='bg-info px-3 py-2 mx-3 border-0' type='button'>Continue Shopping</button></a>";
                        }
                        ?>
                       
                    </div>
                    
                </form>

                <?php
                if (isset($_POST['update_cart'])) {
                    foreach ($_POST['qty'] as $product_id => $quantity) {
                        $quantity = intval($quantity);
                        $update_cart = "UPDATE `cart_details` SET quantity=$quantity WHERE ip_address='$get_ip_add' AND product_id=$product_id";
                        mysqli_query($con, $update_cart);
                    }
                    echo "<script>window.open('cart.php','_self')</script>";
                }

                if (isset($_POST['remove_cart'])) {
                    foreach ($_POST['remove'] as $product_id) {
                        $delete_cart = "DELETE FROM `cart_details` WHERE ip_address='$get_ip_add' AND product_id=$product_id";
                        mysqli_query($con, $delete_cart);
                    }
                    echo "<script>window.open('cart.php','_self')</script>";
                }
                ?>
            </div>
        </div>
    </div>

<!-- Footer -->
<div class="bg-info p-3 text-center">
    <p>All rights Reserved &copy; Designed by Bradley Chinn</p>
</div>

<!-- bootstrap js File -->
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>