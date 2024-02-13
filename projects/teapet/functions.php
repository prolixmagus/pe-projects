<?php


function readDatabase() {
 	$data = file_get_contents('database.json');
 	return json_decode($data, true);
 }

?>