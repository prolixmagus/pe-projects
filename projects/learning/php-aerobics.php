<?php 
	$bands = ["rolling stones", "adele", "jackson 5", "juju", "nose-job"];

	foreach ($bands as $band) { ?>
		<li>My favoriate band is <?=$band?></li>
	<?php } ?>

<?php
	$numbers = [2, 12, 96, 83, 1466, 3, 7];

	foreach ($numbers as $number) {
		echo $number . ". ";
	}
?>

<?php
	for ($i = 0; $i < 34; $i++) {
		if ($i !== 12 && $i !== 17 && $i !== 23) {
			echo $i ."<br>";
		}
	}

?>

<?php

$sandwich = 6.99;
$tax = 0.10;

$total = $sandwich + ($sandwich * $tax);

$prettyTotal = number_format($total, "2", ".", "");

echo "$" . $prettyTotal;

?>

<?php 

$firstNumber = 7;
$secondNumber = 8;
$sum = 7 + 8;

echo "The result of " . $firstNumber . "+" . $secondNumber . "is ". $firstNumber - $secondNumber
?>