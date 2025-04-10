<!-- Write PHP Code to convert case in lowercase, uppercase, count number of characters and word count -->

<?php
$text = 'Home sweet home';
?>
<?php include 'includes/header.php'; ?>

<p>
  <?php

  echo "Lowercase: " . strtolower($text) . "<br>";
  echo "Uppercase: " . strtoupper($text) . "<br>";
  echo "Character Count: " . strlen($text) . "<br>";
  echo "Word Count: " . str_word_count($text) . "<br>";

  ?>
</p>

<?php include 'includes/footer.php'; ?>'