<!-- Create a simple switch statement to get 20% off chocolates on Monday and 20% off mints on Tuesday, and in all other cases, it should show “Buy three packs, get one free. -->
<?php
/* Write your code here */
$day = "Friday";
switch ($day) {
  case "Monday":
    $message = "Get 20% off chocolates !";
    break;
  case "Tuesday":
    $message = " Get 20% off mints!";
    break;
  default:
    $message = "Buy three packs, get one free!";
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>switch Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <p><?= $message ?></p>
</body>

</html>