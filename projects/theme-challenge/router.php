<?php
	if ( isset($_GET['theme']) ) {
		$page = $_GET['theme'];
	} else {
		$page = 'garden';
	}

	function getTemplate($page) {
		include($page . '.php');
	}

	function readPageData($page) {
		$filePath = "data/$page.json";
		if ( file_get_contents($filePath) ) {
			$json = file_get_contents($filePath);
		} else {
			echo "No contents here!";
		}
		$pageData = json_decode($json, true);
		return $pageData;
	}

	function getFile($path) {
		return dirname(__FILE__) . "/" . $path;
	}