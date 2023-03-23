<?php
// declare constant
define("TAX_RATE", 0.2005);
	
  // get the hours and rate from the textfields
	$hours = $_POST['hours'];
	$rate = $_POST['rate'];

	// calculate the area
	$totalPay = $hours * $rate;
  $tax = $totalPay *TAX_RATE;
  $takeHomeSalary = $totalPay - $tax
?>
<?php echo "<h3>Results:</h3>
  After taxes, your take home salary is $" . round($takeHomeSalary, 2) . 
  "<br>Amount of tax the government takes is $" . round($tax, 2) 
  ?>