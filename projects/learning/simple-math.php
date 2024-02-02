<h2>Simple Math!</h2>
<?php

function calculate($firstNumber, $secondNumber) {

	echo "<li>" . $firstNumber . "+" . $secondNumber . "=" . ($firstNumber + $secondNumber) . "</li>";
	echo "<li>" . $firstNumber . "-" . $secondNumber . "=" . ($firstNumber - $secondNumber) . "</li>";
	echo "<li>" . $firstNumber . "/" . $secondNumber . "=" . ($firstNumber / $secondNumber) . "</li>";
	echo "<li>" . $firstNumber . "*" . $secondNumber . "=" . ($firstNumber * $secondNumber) . "</li>";
}

?>

<ul>
<?=calculate(7, 3)?>
</ul>

<?php 

function addNumber($firstNumber, $secondNumber) {
	return  $firstNumber . " + " . $secondNumber . " = " . ($firstNumber + $secondNumber);
}

function subtractNumber($firstNumber, $secondNumber) {
	return  $firstNumber . " - " . $secondNumber . " = " . ($firstNumber - $secondNumber);
}

function divideNumber($firstNumber, $secondNumber) {
	return $firstNumber . " / " . $secondNumber . " = " . ($firstNumber / $secondNumber);
}

function multiplyNumber($firstNumber, $secondNumber) {
	return $firstNumber . " * " . $secondNumber . " = " . ($firstNumber * $secondNumber);
}

$equations = [addNumber(5, 2), subtractNumber(5, 2), divideNumber(5, 2), multiplyNumber(5, 2)];

?>

<ul>
	<?php foreach ($equations as $equation) { ?>
		<li><?=$equation?></li>
	<?php } ?>
</ul>


