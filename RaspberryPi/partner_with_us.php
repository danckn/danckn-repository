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
            <h1>Partner with us</h1>
            <div class="card-body">
                <h5 class="card-title">Help grow Code Club</h5>
                <p class="card-text">Code Clubs run all over the world, and have been helping millions of young people learn to code. Your organisation can get involved and help bring Code Club to more young people.</p>
                <p class="card-text">Our partners play an essential role in growing Code Club. From starting clubs to translating resources to donating to support our work, find out how your organisation can get involved.</p>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body" style="margin-top: 20px; margin-bottom: 20px;">
                <h5 class="card-title">Become a partner</h5>
                <p class="card-text">Join our Global Partner network and work with us to establish and grow Code Club in your country.</p>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body" style="margin-top: 20px; margin-bottom: 20px;">
                <h5 class="card-title">Support us</h5>
                <p class="card-text">Set up a one-time, monthly, or annual donation to help us start Code Clubs around the world</p>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body" style="margin-top: 20px; margin-bottom: 20px;">
                <h5 class="card-title">Corporate volunteering</h5>
                <p class="card-text">Host a translation hackathon or encourage company-wide volunteering with Code Club.</p>
            </div>
        </div>
    </div>


    <div class="footer">
        <?php include 'footer.php';?>
    </div>
</div>
</body>
</html>