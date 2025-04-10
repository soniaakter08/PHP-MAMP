<!-- Create a simple for loop to find the prices of multiple candy packs. Let us assume one pack of candy costs $1.99. How much did ten packs cost? Display each pack's costs on the web page. -->
<?php
/* Write your code here */
$costPerPack = 1.99;

for ($i = 1; $i <= 10; $i++) {
  $totalCost = $i * $costPerPack;
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>for Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Multiple Packs</h2>
  <p>Total price of 10 packs is:
    <?= $totalCost ?>


  </p>
</body>

</html>