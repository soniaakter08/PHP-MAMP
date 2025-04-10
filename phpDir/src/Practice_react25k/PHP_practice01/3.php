<!-- Make an if statement with elseif  and else to finally display a string saying, I love PHP
 -Make a for loop that displays 10 numbers
 -Make a switch statement that tests against one condition with 5 cases -->

<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>

	</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">

		<?php

		// Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP

		$language = "php";
		if ($language == "python") {
			echo "I love python";
		} elseif ($language == "javascript") {
			echo "I love JavaScript";
		} else {
			echo "I love PHP" . "<br>";
		}


		//Step 2: Make a forloop  that displays 10 numbers

		for ($i = 1; $i <= 10; $i++) {
			echo "The number is: $i " . "<br>";
		}


		//Step 3 : Make a switch Statement that test againts one condition with 5 cases

		$day = "Thursday";
		switch ($day) {
			case "Monday":
				echo "We have Finnish Class at 9.30";
				break;
			case "Tuesday":
				echo "We have React Class at 9.30";
				break;
			case "Wednesday":
				echo "We have Database Class at 9.30";
				break;
			case "Thursday":
				echo "We have PHP Class at 9.30";
				break;
			default:
				echo "Today is weekend!!";
		}

		?>






	</article><!--MAIN CONTENT-->

	<?php include "includes/footer.php"; ?>