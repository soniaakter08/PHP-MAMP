<?php
echo "hello world";
echo "</br>";

$name = "James";
echo "Hello , $name!";

$student = array("name" => "john", "age" => 18);

echo "<pre>";
echo $student["name"];

echo "<pre>";
echo $student["age"];

echo "<pre>";
$cars = array("Toyota", "BMW", "Hondo");
echo $cars[1];

$forename = "sonia";
$lastname = "Akter";
$together = $forename . " " . $lastname;
echo "<pre>";
//echo $together;
?>

<?= $together; ?>
