<!-- Create a simple if else statement to check if candy is in stock or not. If candy is not in stock, then print the message “Sold Out”; if it is available in stock, print the message “In Stock.” -->
<?php
/*
Write your code here
*/
?>
<!DOCTYPE html>
<html>

<head>
  <title>if else Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>
  <?php
  /* Write your code here */
  $candy_in_stock = true;
  if ($candy_in_stock) {
    echo "in stock";
  } else {
    echo "sold out";
  }
  ?>
</body>

</html>