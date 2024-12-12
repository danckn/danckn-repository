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
    <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="images/stock photo for code1.png" class="w-100" alt="">
        <div class="carousel-caption d-none d-md-block">
            <h5>Computing for everybody</h5>
            <p>From industries large and small, to the kitchen table tinkerer, to the classroom coder, we make computing accessible and affordable for everybody.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="images/stock photo for code2.png" class="w-100" alt="">
        <div class="carousel-caption d-none d-md-block">
            <h5>Events</h5>
            <p>Independently run events for Raspberry Pi enthusiasts take place in libraries, cafés, makerspaces, and community centres all over the world. Often called Raspberry Jams, they are an important part of the Raspberry Pi community, and they support young people and adults alike to get started with Raspberry Pi. More experienced users can share their knowledge and learn new skills. If you would like to host your own event</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="images/stock photo for code3.png" class="w-100" alt="">
        <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>text</p>
        </div>
        </div>
    </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  
<div class="footer">
    <?php include 'footer.php';?>
</div>

</body>
</html>