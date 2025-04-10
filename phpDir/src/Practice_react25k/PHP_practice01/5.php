<!-- -Use a pre-built math function and echo it
-Use a pre-built string function and echo it
-Use a pre-built array function and echo it -->

<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
<section class="content">

  <aside class="col-xs-4">
    <?php Navigation(); ?>


  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">


    <?php


    //Step1: Use a pre-built math function here and echo it

    echo (round(0.60) . "<br>");


    //Step 2:  Use a pre-built string function here and echo it

    echo str_ireplace("world", "Sonia", "Hello good world! " . "<br>");


    //Step 3:  Use a pre-built Array function here and echo it
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    arsort($age);

    foreach ($age as $x => $x_value) {
      echo "Key=" . $x . ", Value=" . $x_value;
      echo "<br>";
    }
    ?>





  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>