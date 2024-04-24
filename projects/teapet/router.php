
<?php 

/* router */

	$page = null;

	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	} else {
		$page = 'home'; // default
	}

	function get_template($name) {
			include($name . ".php");
		}
?>