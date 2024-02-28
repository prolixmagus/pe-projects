<?php 
	$name = "";
	$noun1 = "";
	$adjective1 = "";
	$food = "";
	$bodyPart = "";
	$verb = "";
	$noun2 = "";
	$verb2 = "";
	$input = "";
	$message = "";


	if ( isset($_POST["submitted"]) ) {
				$name = $_POST["name"];
				$noun1 = $_POST["noun1"];
				$adjective1 = $_POST["adjective1"];
				$food = $_POST["food"];
				$bodyPart = $_POST["body-part"];
				$verb = $_POST["verb"];
				$noun2 = $_POST["noun2"];
				$verb2 = $_POST["verb2"];
				$message = "One day, the president asked <span class=mad-libs-color>$name</span> to hold a/n <span class=mad-libs-color>$noun1</span></span> that contained top <span class=mad-libs-color>$adjective1</span> launch codes. Before <span class=mad-libs-color>$name</span> could finish eating their <span class=mad-libs-color>$food</span>, the <span class=mad-libs-color>$noun1</span> was handcuffed to their <span class=mad-libs-color>$bodyPart</span></span>. \"I can't <span class=mad-libs-color>$verb</span> this!\" shouted <span class=mad-libs-color>$name</span>, and they threw the <span class=mad-libs-color>$noun1</span> into the <span class=mad-libs-color>$noun2</span>. The FBI <span class=mad-libs-color>$verb2</span> <span class=mad-libs-color>$name</span> and they were never seen again.";
			}
		
		//without useing <required />

		/*	if ( isset($_POST["submitted"]) ) {
				if (empty($_POST["name"]) ||
				empty($_POST["noun1"]) ||
				empty($_POST["adjective1"]) ||
				empty($_POST["food"]) ||
				empty($_POST["body-part"]) ||
				empty($_POST["verb"]) ||
				empty($_POST["noun2"]) ||
				empty($_POST["verb2"]) ) {
			$message = "Please fill out the entire form!";

			} else {
				isset($_POST);
				$name = $_POST["name"];
				$noun1 = $_POST["noun1"];
				$adjective1 = $_POST["adjective1"];
				$food = $_POST["food"];
				$bodyPart = $_POST["body-part"];
				$verb = $_POST["verb"];
				$noun2 = $_POST["noun2"];
				$verb2 = $_POST["verb2"];
				$message = "One day, the president asked $name to hold a/n $noun1 that contained top $adjective1 launch codes. Before $name could finish eating their $food, the $noun1 was handcuffed to their $bodyPart. \"I can't $verb this!\" shouted $name, and they threw the $noun1 into the $noun2. The FBI $verb2 $name and they were never seen again.";
			}
		} */

?>