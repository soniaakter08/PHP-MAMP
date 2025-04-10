<!-- Write a PHP Code to include header.php and footer.php and check the candy stock. Let us assume you have 25 stock of candy, so check if you have “Good availability”, you have “low stock”, or you are running “Out of stock. -->

<?php
/* Write your code here */
?>


<h2>Chocolate</h2>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$candy_stock = 25;

if ($candy_stock > 10) {
    $stock_status = "Good availability";
} elseif ($candy_stock > 0 && $candy_stock <= 10) {
    $stock_status = "Low stock";
} else {
    $stock_status = "Out of stock";
}

echo "<h2>Candy Stock Status: $stock_status</h2>";
?>