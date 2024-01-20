<?php

// for linking to top level files on local server

function getFile($path) {
	return dirname(__FILE__) . "/" . $path;
}


// For showing associative array when submitting info
	function displayCode($code) {
		echo "<pre><code>";
		print_r($code);
		echo "</code></pre>";
	}
?>