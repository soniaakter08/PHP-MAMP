<!-- Create a simple for loop to find prices of multiple higher packs of candy. Let us assume the customer wants 10 packs to 100 packs of candies. How much do 10 to 100 packs cost? Display from 10 packs to 100 packs cost on the web page. -->
<?php
/* Write your code here */
$costPerPack = 1.99;

for ($i = 1; $i <= 100; $i++) {
  $totalCost = $i * $costPerPack;
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>for Loop - Higher Counter</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Large Orders</h2>
  <p>
    <?= $totalCost ?>
  </p>
</body>

</html>