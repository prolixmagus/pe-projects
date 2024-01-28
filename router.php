
<?php 

/* router */

	$page = null;

	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	} else {
		$page = 'home'; // default
	}

	function getTemplate($name) {
			include($name . ".php");
		}
?>