<?php
include('connect.php');
include('navbar.php');
session_start();
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
/* General body styling */
body {
font-family: Arial, sans-serif; /* Sets font style */
background-color: #f4f4f9; /* Light gray background color */
margin: 0;
padding: 0;
justify-content: center; /* Centers the content horizontally */
align-items: center; /* Centers the content vertically */
height: 100vh; /* Full viewport height */
}
/* Container for the form */
.form-container {
background-color: white; /* White background for the form */
padding: 30px;
margin: 0 700;
border-radius: 8px; /* Rounded corners */
box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
width: 400px;

text-align: center; /* Centers the text inside the form */
}
h1 {
color: #333; /* Dark gray text for the heading */
margin-bottom: 20px; /* Space below the heading */
}
label {
display: block;
margin: 10px 0 5px; /* Adds margin to labels for spacing */
font-weight: bold;
color: #555; /* Darker text for labels */
}
input, select {
width: auto; /* Makes input and select elements take full width */
padding: 8px;
margin-bottom: 15px; /* Space below input fields */
border: 1px solid #ccc; /* Light border for inputs */
border-radius: 4px; /* Rounded corners for inputs */
box-sizing: border-box; /* Makes sure padding and border are included in width */
}
button {
width: 100%; /* Makes button take full width */
padding: 10px;
background-color: #4CAF50; /* Green background for button */
color: white; /* White text color */
border: none;
border-radius: 4px; /* Rounded corners for button */
font-size: 16px;
cursor: pointer; /* Changes cursor to pointer when hovering */
}
button:hover {
background-color: #45a049; /* Slightly darker green on hover */
}
/* Optional: Styles for responsiveness */
@media (max-width: 400px) {
.form-container {
width: 90%; /* Makes the form container take up 90% width on smaller screens */
}
}
</style>
    <body class="bg-secondary">
        <div class="text-center text-light">
            <div class="col p-5">
                <div class="booking">
            </div>
            <div class="form-container row align-items-start p-5">
                <h1>Book Your Event</h1>
                <form method="POST" action="process_booking.php">
                    <label class="form-group" for="location" >Select Location:</label>
                    <select name="location" id="location">
                        <option value="coding_workshop_lab">Coding Workshop Lab</option>
                        <option value="robotics_lab">Robotics Lab</option>
                        <option value="game_development_lab">Game Development Lab</option>
                    </select>
                    <label for="activity">Select activity:</label>
                    <select name="activity" id="activity" required>
                        <option value="Website Programming">Website Programming</option>
                        <option value="Website Programming (Advanced)">Website Programming (Advanced)</option>
                        <option value="Scratch">Scratch</option>
                        <option value="Scratch (Advanced)">Scratch (Advanced)</option>
                        <option value="AI Workshop">AI Workshop</option>
                        <option value="AI Workshop (Advanced)">AI Workshop (Advanced)</option>
                        <option value="Tynker">Tynker</option>
                        <option value="Tynker (Advanced)">Tynker (Advanced)</option>
                        <option value="Code.org">Code.org</option>
                        <option value="Code.org (Advanced)">Code.org (Advanced)</option>
                        <option value="Code Wizards HQ">Code Wizards HQ</option>
                        <option value="Code Wizards HQ (Advanced)">Code Wizards HQ (Advanced)</option>
                    </select>
                    <label for="date">Select date and time:</label>
                    <select name="date" id="date" required>
                        <option value="17th December">17th December</option>
                        <option value="23th December">23th December</option>
                        <option value="28th December">28th December</option>
                        <option value="4th January">4th January</option>
                        <option value="11th January">11th January</option>
                        <option value="17th January">17th January</option>
                    </select>
                    <select name="time" id="time" required>
                        <option value="12:00-13:00">12:00-13:00</option>
                        <option value="13:00-14:00">13:00-14:00</option>
                        <option value="14:00-15:00">14:00-15:00</option>
                        <option value="15:00-16:00">15:00-16:00</option>
                        <option value="16:00-17:00">16:00-17:00</option>
                        <option value="17:00-18:00">17:00-18:00</option>
                    </select>
                    <button type="submit">Book Now</button>
                </form>
            </div>
            </div>
        </div>
        <div class="footer">
            <?php include 'footer.php';?>
        </div>
    </body>

</html>
