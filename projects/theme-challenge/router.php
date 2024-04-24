<?php
	if ( isset($_GET['theme']) ) {
		$page = $_GET['theme'];
	} else {
		$page = 'garden';
	}

	function get_template($page) {
		include($page . '.php');
	}

	function read_page_data($page) {
		$filePath = "data/$page.json";
		if ( file_get_contents($filePath) ) {
			$json = file_get_contents($filePath);
		} else {
			echo "No contents here!";
		}
		$pageData = json_decode($json, true);
		return $pageData;
	}

	function get_file($path) {
		return dirname(__FILE__) . "/" . $path;
	}