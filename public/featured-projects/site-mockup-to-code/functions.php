<?php

	function get_file($path) {
		return dirname(__FILE__) . "/" . $path;
	}

	function read_page_data($page) {
		$filePath = "data/pages/$page.json";
		if ( file_get_contents($filePath) ) {
			$json = file_get_contents($filePath);
		} else {
			echo "No contents here!";
		}
		$pageData = json_decode($json, true);
		return $pageData;
	}


?>

