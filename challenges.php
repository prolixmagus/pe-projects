<?php
include("exercises-data.php");

if ( isset($_GET["practice"]) ) {
	$practice_id = $_GET["practice"];
}

foreach ( $exercises as $exercise ) {
	if ( $practice_id == $exercise["id"] ) {
		$practice = $exercise["form"];
	}
}

?>

<?php
if ( isset($practice_id) ) {
	getTemplate($practice);
}

?>