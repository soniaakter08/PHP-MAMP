<?php

/* 
  Write you php code here

   */
$items = 3;
$cost = 5;
$sub_total = $cost * $items;
$tax = ($sub_total / 100) * 20;
$total = $sub_total + $tax;

?>
<!DOCTYPE html>
<html>

<head>
  <title>Mathematical Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart</h2>
  <p>Total price is: <?php echo $total ?></p>
</body>

</html>