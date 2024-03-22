<?php
	$name = "";
	$message = "";

	if ( isset($_POST["submitted"]) ) {

		if ( isset($_POST["name"]) ) {
			$name = $_POST["name"];

			if ( strlen($name) > 30) {
				$message = "Is your name really that long? Try again!";
			} else {
				$message = "Hello, $name, nice to meet you!";
			}
		}
	}
?>