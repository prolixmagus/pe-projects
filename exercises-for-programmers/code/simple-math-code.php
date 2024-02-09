<?php
$first = "";
$second = "";
$negativeNumberError = false;;

if (isset($_POST["submitted"])) {
	$first = intval($_POST["firstNumber"]);
	$second = intval($_POST["secondNumber"]);

	function add($first, $second) {
		return $first + $second;
	}

	function subtract($first, $second) {
		return $first - $second;
	}

	function divide($first, $second) {
		if ($second === 0) {
			return "hi Derek";
		} else {
			return $first / $second;
		}
	}

	function multiply($first, $second) {
		return $first * $second;
	}

	function formatDecimals($number){
		$decimalPosition = strpos(strval($number), ".");
		if ($decimalPosition !== false) {
			return number_format($number, 2, '.', '');
		} else {
			return $number;
		}
	}

	function displayOperations($first, $second) {
		echo "<p class'output-voice'>$first + $second = " . add($first, $second) . "</p>";
		echo "<p class'output-voice'>$first - $second = " . subtract($first, $second) . "</p>";
		echo "<p class'output-voice'>$first / $second = " . divide($first, $second) . "</p>";
		echo "<p class'output-voice'>$first * $second = " . multiply($first, $second) . "</p>";
	}
}

?>