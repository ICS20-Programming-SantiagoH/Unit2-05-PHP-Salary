<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Salary calculator">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Santiago Hewett">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Salary calculator</title>
  </head>
  <body>
    <!-- php echo to print the html to the page -->
<?php 
echo "<h1>Tax time!</h1>";
echo "<h3>This program will calculate the amount of money you receive after taxes.</h3>";
?>
<!-- form to get the hours and rate from the user -->
    <form action="./results.php" method="post" target="results">
      <label for=lblHours">Hours:</label>
      <input type="text" id="hours" placeholder="Enter your hours" name="hours"><br><br>
      <label for="lblRate">Rate:</label>
      <input type="text" id="rate" placeholder="Enter your hourly rate" name="rate"><br><br>
      <input type="submit" value="Calculate">
    </form>
    
    <!-- iframe for the results to show on the web page. -->
    <iframe id="results" name="results">			
      After taxes, your take home salary is $ " + $takeHomeSalary
    </iframe>
  </body>
</html>