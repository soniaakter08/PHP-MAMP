<?php include 'includes/header.php'; ?>

<h1>Best Sellers</h1>

<?php

$greet = ["Hi", "Howdy", "Hello", "Hola", "Cia", "Moi", "Namaste", "Welcome"];


$greetings = $greet[array_rand($greet)];


$items = ["notebook", "pencil", "ink"];


$total_items = count($items);


$customer = [
    "firstname" => "Sonia",
    "lastname" => "Akter",
    "email" => "asonia3308@gmail.com"
];


if (!empty($customer["firstname"])) {
    echo "<h2>{$greetings}, {$customer["firstname"]}!</h2>";
} else {
    echo "<h2>{$greetings}!</h2>";
}


echo "<ul>";
foreach ($items as $item) {
    echo "<li>" . ucfirst($item) . "</li>";
}
echo "</ul>";

echo "<p>Total Best Sellers: <strong>{$total_items}</strong></p>";
?>

<?php include 'includes/footer.php'; ?>