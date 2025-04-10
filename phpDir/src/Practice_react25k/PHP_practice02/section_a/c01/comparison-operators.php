<?php

/* 
  Write you php code here

   */
$stock_level = 15;
$wanted = 10;

?>
<!DOCTYPE html>
<html>

<head>
  <title>Comparison Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart</h2>
  <h1><?php
      echo ($stock_level > $wanted)
      ?></h1>

</body>

</html>