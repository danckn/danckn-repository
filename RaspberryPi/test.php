<!DOCTYPE html>
<html>
<head>
<style>
.calendar {
  display: grid;
  justify-content: center;
  grid-template-columns: 150px 150px 150px; /*Make the grid smaller than the container*/
  gap: 10px;
  background-color: #000000;
  padding: 10px;
}

.calendar > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
}
</style>
</head>
<body>

<h1>The justify-content Property</h1>

<p>Use the <em>justify-content</em> property to align the grid inside the container.</p>

<p>The value "center" will align the grid in the middle of the container:</p>

<div class="calendar">
    <div class="header">
        <button id="prevBtn">
            <i class="fa-solid">&#10094</i>
        </button>
        <div class="monthYear" id="monthYear"></div>
        <button id="nextBtn">
            <i class="fa-solid">&#10095</i>
        </button>
    </div>
    <div class="days">
        <div class="day">Mon</div>
        <div class="day">Tue</div>
        <div class="day">Wed</div>
        <div class="day">Thu</div>
        <div class="day">Fri</div>
        <div class="day">Sat</div>
        <div class="day">Sun</div>
    </div>
    <div class="dates" id="dates"></div>
</div>



</body>
</html>
