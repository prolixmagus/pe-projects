

<?php

	$length = "";
	$width = "";

	function calculateSquareFeet($width, $length) {
		return intval($width) * intval($length);
	}

	function calculateSquareMeters($width, $length) {
		$squareFeet = calculateSquareFeet($width, $length);
		return $squareFeet * 0.09290304;
	}

	if (isset ($_POST['submitted']) ) {
		$length = $_POST['length'];
		$width = $_POST['width'];

		$totalSquareFeet = calculateSquareFeet($width, $length);
		$totalSquareMeters = calculateSquareMeters($width, $length);
	}

	if (isset ($_POST['clear']) ) {
		$length = "";
		$width = "";
	}