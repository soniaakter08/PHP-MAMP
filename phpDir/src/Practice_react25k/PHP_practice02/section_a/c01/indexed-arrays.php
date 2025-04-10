<?php

/* 
  Write you php code here

   */
$best_sellers = ["Chocolate", "Mints", "Fudge", "Bubble gum", "Toffee", "Jelly Beans"];

?>
<!DOCTYPE html>
<html>

<head>
  <title>Indexed Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Best Sellers</h2>
  <h2>Three best-selling items <p><?php echo $best_sellers[0];
                                  echo "<br>";
                                  echo $best_sellers[1];
                                  echo "<br>";
                                  echo $best_sellers[2];

                                  ?></h2>


  </p>

</body>

</html>