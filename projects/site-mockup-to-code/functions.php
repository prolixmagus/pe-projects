<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

	function getFile($path) {
		return dirname(__FILE__) . "/" . $path;
	}

	function getPage($page) {
		$filePath = "templates/pages/$page/template.php";
		if ( file_get_contents($filePath) )  {
			include($filePath);
		} else {
			echo "No page here!";
		}
	}

	function readPageData($page) {
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

