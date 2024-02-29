<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	$people = '';
	$pizzas = '';
	$slicesPerPizza = '';
	$slicesPerPerson = '';
	$leftoverSlices = '';

	if( isset( $_POST['submitted'] ) ) {
		$people = $_POST['people'];
		$pizzas = $_POST['pizzas'];
		$slicesPerPizza = $_POST['slices-per-pizza'];

		function calculateTotalSlices($pizzas, $slicesPerPizza) {
			$totalSlices = floor( intval($pizzas) ) * floor(intval ($slicesPerPizza) );
			return $totalSlices;
		}

		function distributeSlices($people, $pizzas, $slicesPerPizza) {
			$slicesPerPerson = calculateTotalSlices($pizzas, $slicesPerPizza) / floor( intval($people) );
			return floor($slicesPerPerson);
		}

		function calculateLeftoverSlices($people, $pizzas, $slicesPerPizza) {
			$leftoverSlices = calculateTotalSlices($pizzas, $slicesPerPizza) % floor( intval($people) );
			return $leftoverSlices;
		}

		$distributedSlices = distributeSlices($people, $pizzas, $slicesPerPizza);
		$leftoverSlices = calculateLeftoverSlices($people, $pizzas, $slicesPerPizza);

	} elseif (isset ( $_POST['clear']) ) {
		$people = '';
		$pizzas = '';
		$slicesPerPizza = '';
	}

?>