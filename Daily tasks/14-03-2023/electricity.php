<!DOCTYPE html>
<html>
<head>
	<title>Electricity Bill Calculator</title>
</head>
<body>
	<h1>Electricity Bill Calculator</h1>
	<form method="post">
		<label for="units">Enter units consumed:</label>
		<input type="number" id="units" name="units">
		<input type="submit" value="Calculate">
	</form>
    
    <?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $units = $_POST['units'];

  // Electricity tariff rates
  $rate1 = 3.5; // First 100 units
  $rate2 = 4.5; // Next 100 units
  $rate3 = 5.5; // Above 200 units

  // Calculate bill amount based on units used
  if ($units <= 100) {
    $billAmount = $units * $rate1;
  } elseif ($units <= 200) {
    $billAmount = 100 * $rate1 + ($units - 100) * $rate2;
  } else {
    $billAmount = 100 * $rate1 + 100 * $rate2 + ($units - 200) * $rate3;
  }

  // Display the bill amount
  echo "Your electricity bill for $units units is: Rs. $billAmount";
}
?>

</body>
</html>
