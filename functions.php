<?php

// CRUD Functions
function read($path) {
	$json = file_get_contents($path);
	return json_decode($json, true);
}

function create($database, $data) {
	$database[] = $data;
	return $database;
}

function save($path, $database) {
	$encodedJson = json_encode($database);
	file_put_contents($path, $encodedJson);
}

function update(&$database, $this_data_id, $new_data) {
	foreach ($database as &$data) {
		if ($data["id"] == $this_data_id) {
			$data = $new_data;
			break;
		}
	}
	return $database;
}

function delete($database, $data_id) {
	$filtered = [];
	
	foreach ($database as $data) {
		if ($data["id"] !== $data_id) {
			array_push($filtered, $data);
			}
		}
	return $filtered;
	}

function getItemById($database, $id_to_match) {
	foreach ($database as $data) {
		if ($data['id'] == $id_to_match) {
		return $data;
		}
	}
}

// reading database for exercises for programmers files

function getAllExercises() {
	$exercises = read("data/exercises-database.json");
	return $exercises;
}

// getting exercise for programmers page for router

function getExerciseTemplate($name) {
	include("exercises-for-programmers-forms/" . "$name" . ".php");
}

function getLayoutGardenTemplate($module) {
	include("modules/layout-garden/" . $module . "/template.php");
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