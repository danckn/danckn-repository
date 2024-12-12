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
            <h1>About us</h1>
            <div class="card-body">
                <h5 class="card-title">Our vision</h5>
                <p class="card-text">Our vision is that every young person develops:</p>
                <p class="card-text">The knowledge, skills, and confidence to use computers and digital technologies effectively in their work, community, and personal life; to solve problems and to express themselves creatively</p>
                <p class="card-text">Sufficient understanding of societal and ethical issues to be able to critically evaluate digital technologies and their application, and to design and use technology for good</p>
                <p class="card-text">The mindsets that enable them to confidently engage with technological change and to continue learning about new and emerging technologies</p>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body" style="margin-top: 20px; margin-bottom: 20px;">
                <h5 class="card-title">Our long-term goals</h5>
                <p class="card-text">Education: To enable any school to teach students about computing and how to create with digital technologies, through providing the best possible curriculum, resources, and training for teachers.</p>
                <p class="card-text">Non-formal learning: To engage millions of young people in learning about computing and how to create with digital technologies outside of school, through online resources and apps, clubs, competitions, and partnerships with youth organisations.</p>
                <p class="card-text">Research: To deepen our understanding of how young people learn about computing and how to create with digital technologies, and to use that knowledge to increase the impact of our work and advance the field of computing education.</p>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body" style="margin-top: 20px; margin-bottom: 20px;">
                <h5 class="card-title"></h5>
                <p class="card-text">Raspberry Pi Foundation is a registered charity in England and Wales (1129409)
Registered as a company limited by guarantee in England and Wales No.06758215
Registered office: Raspberry Pi Foundation, 37 Hills Road, Cambridge, CB2 1NT</p>
                <p class="card-text">Raspberry Pi Ltd
Registered as a company No.08207441
Registered office: 194 Cambridge Science Park, Milton Road, Cambridge, England, CB4 0A</p>
                <p class="card-text">For filings related to the Raspberry Pi Foundation North America 501(c)(3) charity, please contact us.

</p>
            </div>
        </div>
    </div>


    <div class="footer">
        <?php include 'footer.php';?>
    </div>
</div>
</body>
</html>