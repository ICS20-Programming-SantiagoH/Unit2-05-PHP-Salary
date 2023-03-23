<?php
	// get the hours and rate from the textfields
	$base = $_POST['hours'];
	$height = $_POST['rate'];

const TAX_RATE = 0.2005
  
	// calculate the area
	$totalPay = $hours * $rate
  $tax = $totalPay * $TAX_RATE
  $takeHomeSalary = $totalPay - $tax
?>
<h3>Results:</h3>
After taxes, your take home salary is $ <?php echo "$takeHomeSalary" ?>.