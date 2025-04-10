<!-- Create a simple if else if statement to check if candy is in the stock or is coming soon or sold out. If candy is not in stock then print message “Sold Out”, if it is available in stock, print message “In Stock” -->
<?php
/* Write your code here */
?>
<!DOCTYPE html>
<html>

<head>
  <title>if else if Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>
  <?php
  /* Write your code here */
  $candy_status = "coming soon";
  if ($candy_status == "in stock") {
    echo "in stock";
  } elseif ($candy_status == "coming soon") {
    echo "coming soon";
  } else {
    echo "sold out";
  }

  ?>
</body>

</html>