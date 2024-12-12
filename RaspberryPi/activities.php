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
    <div class="col-3">
        <div class="card mb-3">
            <img src="images/websiteprogramming.jpg" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">Website Programming</h5>
                <p class="card-text">This will cover many topics of website programming from top to bottom, we will talk about, learn and program websites so that our students can achieve their programming dream.</p>
                <p class="card-text">Some of the most popular programming languages for web development include HTML/CSS, PHP, Python, JavaScript, Java, Ruby, and Swift.</p>
            </div>
        </div>
        <div class="card mb-3">
            <img src="images/tynker.png" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">Tynker</h5>
                <p class="card-text">Tynker is the fun way to learn programming and develop problem-solving & critical thinking skills.</p>
                <p class="card-text">Tynker’s interactive lessons break down coding fundamentals as they solve fun puzzles.</p>
                <p class="card-text">Kids learn with block-based coding before transitioning to text-based languages like JavaScript and Python.</p>
            </div>
        </div>
        <div class="card mb-3">
            <img src="images/codewizardshq.png" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">Code Wizards HQ</h5>
                <p class="card-text">CodeWizardsHQ delivers the most fun and effective live, online coding classes for kids and teens ages 8-18. Our coding classes are designed to give kids the programming knowledge, skills, and confidence to thrive in a digital world.</p>
                <p class="card-text">CodeWizardsHQ’s online coding classes for kids are the most fun and effective way for your child to learn programming. We are committed to giving your child a real advantage: academically, socially, and in technology.</p>
            </div>
        </div>
        <div class="card mb-3">
            <img src="images/scratch.png" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">Scratch</h5>
                <p class="card-text">Scratch is the world’s largest coding community for children and a coding language with a simple visual interface that allows young people to create digital stories, games, and animations. Scratch is designed, developed, and moderated by the Scratch Foundation, a nonprofit organization.</p>
                <p class="card-text">Scratch promotes computational thinking and problem solving skills; creative teaching and learning; self-expression and collaboration; and equity in computing.</p>
            </div>
        </div>
        <div class="card mb-3">
            <img src="images/ailogo.png" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">Ai Workshop</h5>
                <p class="card-text">AI can generate custom learning materials, such as quizzes, flashcards, and even entire lessons tailored to a student's strengths and weaknesses. This personalization ensures that students focus on the topics they need the most help with, maximizing their learning efficiency</p>
            </div>
        </div>
        <div class="card mb-3">
            <img src="images/codeorg.png" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">Code.org</h5>
                <p class="card-text">Explore the world of computer science with engaging videos, self-paced tutorials, programming activities, and more for all ages and experience levels!</p>
                <p class="card-text">You can help encourage your student's school to offer or expand computer science education.</p>
            </div>
        </div>
    </div>


    <div class="footer">
        <?php include 'footer.php';?>
    </div>
</div>
</body>
</html>