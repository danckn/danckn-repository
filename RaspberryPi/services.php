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
<style>
.card{
    margin-top: 100px;
}

</style>
<body class="bg-secondary">
    <div class="col">

    </div>
    <div class="col-3" style="margin-top: 20px;">
        <div class="card mb-3">
            <h1>Our Services</h1>
            <div class="card-body">
                <h5 class="card-title">Cookie Policy</h5>
                <p class="card-text">The Raspberry Pi Foundation’s website, like most websites, uses small text files called cookies. This note provides information on what cookies are, which cookies the Raspberry Pi Foundation uses, and how they can be controlled.</p>
                <p class="card-text">Our website uses cookies to distinguish you from other users of our website. A cookie is a small file which is stored by your web browser. Cookies provide core functionality (such as the ability to authenticate and log you in to an account), they also help store data on state and and behaviour which can be used to analyse web traffic and visitors. Cookies allow web applications to respond to you as an individual, aiding them to tailor their operations to your needs, likes and dislikes by storing unique information about you.</p>
                <p class="card-text">Our website uses cookies to distinguish you from other users of our website. This helps us to provide you with a good experience when you browse our website, and allows us to improve our site.</p>
                <p class="card-text">By continuing to browse the site, you are agreeing to our use of cookies</p>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body" style="margin-top: 20px; margin-bottom: 20px;">
                <h5 class="card-title">We use the following cookies:</h5>
                <p class="card-text">Strictly necessary cookies. These are cookies that are required for the operation of our website. They include, for example, cookies that enable you to log into secure areas of our website such as forums.</p>
                <p class="card-text">Analytical/performance cookies. They allow us to recognise and count the number of visitors and to see how visitors move around our website when they are using it. This lets us improve the way our website works, for example by helping us to ensure that users are easily finding what they are looking for.</p>
                <p class="card-text">Functionality cookies. These are used to recognise you when you return to our website. This enables us to personalise our content for you.</p>
                <p class="card-text">Targeting cookies. These cookies record your visit to our website, the pages you have visited, and the links you have followed. We will use this information to make our website and the advertising displayed on it more relevant to your interests. We may also share this information with third parties for this purpose.</p>

            </div>
        </div>
    </div>


    <div class="footer">
        <?php include 'footer.php';?>
    </div>
</div>
</body>
</html>