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

        <nav class="navbar navbar-expand-lg  navbar-light bg-primary">

            </style>
            <div class="container-fluid">
                <img src="./Images/new_logo.png" class="img-fluid" alt="">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="/ShopNest">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="products.php">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="./users_area/user_registration.php">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#"><i class="fa-solid fa-cart-shopping fa-bounce"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Total Price</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                <a class="nav-link" href="#">Welcome Guest</a>
                </li>
            </ul>
        </nav>
        <div class="bg-light">
            <h3 class="text-center">Products</h3>
            <p class ="text-center">Products are listed below</p>
        </div>

        <div class="row">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="col-md-6">
                            <img src="./Images/laptop discount.png" class="card-img-top" alt="">
                            </div>
                            <div class="col-md-6">
                            <img src="./Images/laptop discount2.png" class="card-img-top" alt="">
                            </div>
                            <div class="col-md-6">
                            <img src="./Images/airpods discount.png" class="card-img-top" alt="">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Top Offers</h5>
                                <p class="card-text">put top offers here</p>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="card">
                            <img src="./Images/living room.png" class="card-img-top" alt="">
                            <img src="./Images/self care.png" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Popular Categories</h5>
                                <p class="card-text">put popular categories in here</p>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="card">
                            <img src="./Images/cameras.png" class="card-img-top" alt="">
                            <img src="./Images/stationary.png" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Must have products</h5>
                                <p class="card-text">put must have products in here</p>
                                <a href="#" class="btn btn-info">Add to Nest</a>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2 bg-tertiary p-0">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item bg-primary">
                        <a href="#" class="nav-link text-light text-center"><h4>Brands</h4></a>
                        <li class="nav-item text-dark text-center">
                            <a class="nav-link" href="#">Nikes</a>
                        </li>
                        <li class="nav-item text-dark text-center">
                            <a class="nav-link" href="#">Levis</a>
                        </li>
                        <li class="nav-item text-dark text-center">
                            <a class="nav-link" href="#">Puma</a>
                        </li>
                        <li class="nav-item text-dark text-center">
                            <a class="nav-link" href="#">Adidas</a>
                        </li>
                        <li class="nav-item text-dark text-center">
                            <a class="nav-link" href="#">Gragas</a>
                        </li>
                    </li>
                    <li class="nav-item bg-primary">
                        <a href="#" class="nav-link text- text-center"><h4>Categories</h4></a>
                        <li class="nav-item text-dark text-center">
                            <a class="nav-link" href="#">Kitchen</a>
                        </li>
                        <li class="nav-item text-dark text-center">
                            <a class="nav-link" href="#">Garden</a>
                        </li>
                        <li class="nav-item text-dark text-center">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item text-dark text-center">
                            <a class="nav-link" href="#">Living Room</a>
                        </li>
                    </li>
                </ul>
            </div>     
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <?php include "./includes/footer.php" ?>
    </body>
</html>