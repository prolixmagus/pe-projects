<?php

//length
$length = '';
$width = '';
$gallons = 350;
$diameter = '';


function calculatePaintNeeded ($gallons, $area) {
	$gallonsNeeded = intval($area) / $gallons;
	return ceil($gallonsNeeded);
}

if ( isset( $_POST['submitted'] ) ) {
	$length = $_POST['length'];
	$width = $_POST['width'];
	$area = $length * $width;
	$totalPaint = ceil(calculatePaintNeeded($gallons, $area));
}

if ( isset ( $_POST['circle'] ) ) {
	$diameter = $_POST['diameter'];
	$radius = intval($diameter) / 2;
	$area = number_format( (pi() * pow($radius, 2) ), 2, '.', ' ');;
	$totalPaint = ceil(calculatePaintNeeded($gallons, $area));
}