<!-- Create a simple while loop to find prices for multiple packs of candy. For example, if one pack costs $1.99 how much would 5 pack costs? Display the prices for all 5 packs of candy. -->

<?php
/* Write your code here */
?>
<!DOCTYPE html>
<html>

<head>
  <title>while Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Multiple Packs</h2>
  <p>
    <?php
    /* Write your code here */

    $costPerPack = 1.99;
    $numberOfPack = 5;
    $i = 1;
    while ($i <= $numberOfPack) {
      $totalCost = $i * $costPerPack;
      echo $i . 'pack of coset is: ' . $totalCost;
      echo '<br>';
      $i++;
    }

    ?>
  </p>
</body>

</html>