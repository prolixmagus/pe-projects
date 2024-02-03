<?php

// for linking to top level files on local server

function getAllExercises() {
	include("exercises-for-programmers/data/exercises-data.php");
	return $exercises;
}

function getExerciseTemplate($name) {
	include("exercises-for-programmers/" . "$name" . ".php");
}

function getFile($path) {
	return dirname(__FILE__) . "/" . $path;
}


// For showing associative array when submitting info
	function displayCode($code) {
		echo "<pre><code>";
		print_r($code);
		echo "</code></pre>";
	}
?>