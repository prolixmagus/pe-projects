<?php

include("creature-name-data.php");

function randomCreature($myths) {

	$random = rand(0, 84);

		foreach ($myths['names'] as $key => $value) {
		if ($key == $random) {
			return ucfirst($value);
		}
	}
	return "No-Face";
}

?>
