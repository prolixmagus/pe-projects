<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$item1 = [
			"name" => "Apples",
			"amount" => 0,
			"price" => 0
		];

$item2 = [
			"name" => "Bananas",
			"amount" => 0,
			"price" => 0
		];

$item3 = [
			"name" => "Strawberries",
			"amount" => 0,
			"price" => 0
		];


	if (isset($_POST['submitted'])) {
		$item1 = [
			"name" => $_POST['item1'],
			"amount" => $_POST['amount1'],
			"price" => $_POST['price1'],
		];

		$item2 = [
			"name" => $_POST['item2'],
			"amount" => $_POST['amount2'],
			"price" => $_POST['price2'],
		];

		$item3 = [
			"name" => $_POST['item3'],
			"amount" => $_POST['amount3'],
			"price" => $_POST['price3'],
		];
	}

	$subtotal = ($item1['amount'] * $item1['price']) + ($item2['amount'] * $item2['price']) + ($item3['amount'] * $item3['price']);
	$subtotal = format_money($subtotal);
	$salesTax = $subtotal * .055;
	$salesTax = format_money($salesTax);
	$total = $salesTax + $subtotal;
	$total = format_money($total);

?>