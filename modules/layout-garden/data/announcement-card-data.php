<?php 
$shows = [
	[
		"day" => date("D"),
		"date" => date("d"),
		"time" => "9:00pm",
		"headliner" => "Amazing show!",
		"summary" => "Come and see some amazing shows tonight! This is sample text for some great shows! I love this guy, I love this gal, let's get it going!",
	],
	[
		"day" => date("D", strtotime("+1 day")),
		"date" => date("d", strtotime("+1 day")),
		"time" => "7:30pm",
		"headliner" => "Amazing show!",
		"summary" => "Come and see some amazing shows tonight! This is sample text for some great shows! I love this guy, I love this gal, let's get it going!",
	],
	[
		"day" => date("D", strtotime("+2 day")),
		"date" => date("d", strtotime("+2 day")),
		"time" => "5:30pm",
		"headliner" => "Amazing show!",
		"summary" => "Come and see some amazing shows tonight! This is sample text for some great shows! I love this guy, I love this gal, let's get it going!",
	],
	[
		"day" => date("D", strtotime("+3 day")),
		"date" => date("d", strtotime("+3 day")),
		"time" => "2:00 am",
		"headliner" => "Amazing show!",
		"summary" => "Come and see some amazing shows tonight! This is sample text for some great shows! I love this guy, I love this gal, let's get it going!",
	],
];

?>