<?php

$currentAge = "";
$retirementAge ="";
$currentYear = date("Y");
$retirementYear="";
$errorMessage="";
$message="";

if ( isset($_POST['submitted']) ) {
	$currentAge = $_POST['currentAge'];
	$retirementAge = $_POST['retirementAge'];
}

function getYearsUntilRetirement($currentAge, $retirementAge) {
	return intval($retirementAge) - intval($currentAge);
}

function getRetirementYear($currentYear, $yearsLeft) {
	return intval($currentYear) + $yearsLeft;
}

$yearsLeft = getYearsUntilRetirement($currentAge, $retirementAge);

$retirementYear = getRetirementYear($currentYear, $yearsLeft);
