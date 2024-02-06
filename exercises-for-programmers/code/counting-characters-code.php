
<?php

	$string = "";
	$countedString = "";
	$message = "";
	
	if ( isset($_POST['submitted']) ) {
		$string = $_POST['string'];
		$countedString = strlen($string);
		$message = "$string has $countedString characters.";
	}

?>

