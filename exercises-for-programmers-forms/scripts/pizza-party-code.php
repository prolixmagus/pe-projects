<?php

	$people = '';
	$pizzas = '';
	$slicesPerPizza = '';
	$slicesPerPerson = '';
	$leftoverSlices = '';

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

	if( isset( $_POST['submitted'] ) ) {
		$people = $_POST['people'];
		$pizzas = $_POST['pizzas'];
		$slicesPerPizza = $_POST['slices-per-pizza'];

		$distributedSlices = distributeSlices($people, $pizzas, $slicesPerPizza);
		$leftoverSlices = calculateLeftoverSlices($people, $pizzas, $slicesPerPizza);

	} elseif (isset ( $_POST['clear']) ) {
		$people = '';
		$pizzas = '';
		$slicesPerPizza = '';
	}