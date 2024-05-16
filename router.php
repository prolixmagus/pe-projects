<?php 

/* router */

	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	} else {
		$page = 'home'; // default
	}

	function get_template($page) {
		$filePath = "pages/$page/template.php";
		if (file_get_contents($filePath)) {
			include($filePath);
		} else {
			include("pages/error404/template.php");
		}
	}