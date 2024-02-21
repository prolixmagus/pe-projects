<?php

// reading database for exercises for programmers files

function getAllExercises() {
	include("exercises-for-programmers/data/exercises-data.php");
	return $exercises;
}

// getting exercise for programmers page for router

function getExerciseTemplate($name) {
	include("exercises-for-programmers/" . "$name" . ".php");
}

// for linking to top level files on local server
function getFile($path) {
	return dirname(__FILE__) . "/" . $path;
}

// formatting php highlight code
function highlight_code($path) {
	ini_set('highlight.string', '#2AA198');
	ini_set('highlight.keyword', '#859900');
	ini_set('highlight.default', '#D33682');
	return highlight_file($path);
}


// For showing associative array when submitting info
function displayCode($code) {
	echo "<pre><code>";
	print_r($code);
	echo "</code></pre>";
	}

// For formatting decimals to the hundredths place

function formatDecimals($number){
	$decimalPosition = strpos(strval($number), ".");
	if ($decimalPosition !== false) {
		return number_format($number, 2, '.', '');
	} else {
		return $number;
	}
}

?>