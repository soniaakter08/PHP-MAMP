<?php

/* 
  Write you php code here

   */
$offers = [
  ["name" => "chocolate", "price" => 5, "stock_level" => 10],
  ["name" => "mints", "price" => 4, "stock_level" => 12],
  ["name" => "bubble gum", "price" => 3, "stock_level" => 15],
];

?>
<!DOCTYPE html>
<html>

<head>
  <title>Multidimensional Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Offers</h2>
  <p><?php echo $offers[0]["name"] . "'s price is " . $offers[0]["price"], " euros";
      echo "<br>";
      echo $offers[1]["name"] . "'s price is " . $offers[1]["price"], " euros";
      echo "<br>";
      echo $offers[2]["name"] . "'s price is " . $offers[2]["price"], " euros";

      ?>
  </p>


</body>

</html>