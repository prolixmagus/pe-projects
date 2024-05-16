<?php
$first = "";
$second = "";
$negativeNumberError = false;

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

	function displayOperations($first, $second) {
		echo "<p class'output-voice'>$first + $second = " . format_decimale(add($first, $second)) . "</p>";
		echo "<p class'output-voice'>$first - $second = " . format_decimale(subtract($first, $second)) . "</p>";
		echo "<p class'output-voice'>$first / $second = " . format_decimale(divide($first, $second)) . "</p>";
		echo "<p class'output-voice'>$first * $second = " . format_decimale(multiply($first, $second)) . "</p>";
	}
}
