<?php

/* 
  Write you php code here

   */
$nutrition = ["fat" => 20, "sugar" => 15, "salt" => 3, "fiber" => 30];
?>
<!DOCTYPE html>
<html>

<head>
  <title>Updating Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Nutrition (per 100g)</h2>
  <p>Fat remains <?php echo $nutrition["fat"]; ?> g</p>
  <p>Sugar remains <?php echo $nutrition["sugar"]; ?> g</p>
  <p>Salt remains <?php echo $nutrition["salt"]; ?> g</p>
  <p>Fiber remains <?php echo $nutrition["fiber"]; ?> g</p>

</body>

</html>