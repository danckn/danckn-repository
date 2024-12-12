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
            <h1>Frequently asked questions (FAQs)</h1>
            <div class="card-body">
                <h5 class="card-title">What experience do I need to be a mentor at a Code Club?</h5>
                <p class="card-text">Code Clubs benefit from the support of mentors with different skills and backgrounds. You don’t need experience in coding, teaching, or youth work to be a mentor; you just need to be enthusiastic about helping young people develop their confidence and digital making skills.</p>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body" style="margin-top: 20px; margin-bottom: 20px;">
                <h5 class="card-title">Does Code Club cost anything to attend?</h5>
                <p class="card-text">All Code Clubs are completely free to attend! Young people and their parents or guardians should never have to pay to attend a Code Club. This is ingrained in Code Club's principles and forms part of the Code Club Charter.</p>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body" style="margin-top: 20px; margin-bottom: 20px;">
                <h5 class="card-title">Do mentors need a background check?</h5>
                <p class="card-text">Yes, to ensure the safety of the young people participating in Code Club, all Code Club leaders and mentors must complete the necessary local background checks specific to their region or country.</p>
            </div>
        </div>
    </div>


    <div class="footer">
        <?php include 'footer.php';?>
    </div>
</div>
</body>
</html>