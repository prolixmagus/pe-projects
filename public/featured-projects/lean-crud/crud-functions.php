<?php

function read() {
	$json = file_get_contents('database.json');
	return json_decode($json, true);
}

function create($database, $data) {
	$database[] = $data;
	return $database;
}

function save($database) {
	$encodedJson = json_encode($database);
	file_put_contents('database.json', $encodedJson);
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

function getSymbolById($database, $id_to_match) {
	foreach ($database as $data) {
		if ($data['id'] == $id_to_match) {
		return $data;
		}
	}
}