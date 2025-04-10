<!-- Write PHP Code to create 
-array of greetings (i.e. “Hi”, “Howdy”, “Hello”, “Hola”, “Cia”, “Moi”, “Namaste”, “Welcome”) 
-then display random greeting
-find array of best sellers of items (i.e. “notebook”, “pencil”, “ink”) 
-count items and display top items
-create an array holding customer details (e.g firstname, lastname, email).
 -and if you have customer first name add it to greetingPractice / Classroom Coding -->

<?php include 'includes/header.php'; ?>

<h1>Best Sellers</h1>

<?php
// 1. Array of greetings
$greet = ["Hi", "Howdy", "Hello", "Hola", "Cia", "Moi", "Namaste", "Welcome"];

// Pick a random greeting
$greetings = $greet[array_rand($greet)];

// 2. Array of best sellers
$items = ["notebook", "pencil", "ink"];

// Count total items
$total_items = count($items);

// 3. Customer details
$customer = [
    "firstname" => "Sonia",
    "lastname" => "Akter",
    "email" => "asonia3308@gmail.com"
];

// Display personalized greeting if customer first name exists
if (!empty($customer["firstname"])) {
    echo "<h2>{$greetings}, {$customer["firstname"]}!</h2>";
} else {
    echo "<h2>{$greetings}!</h2>";
}

// Display top best selling items
echo "<ul>";
foreach ($items as $item) {
    echo "<li>" . ucfirst($item) . "</li>";
}
echo "</ul>";

echo "<p>Total Best Sellers: <strong>{$total_items}</strong></p>";
?>

<?php include 'includes/footer.php'; ?>