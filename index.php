<?php
	
date_default_timezone_set("Australia/Brisbane");

$hits = unserialize(file_get_contents("cache_file"));

if($hits == false){
	$hits = 0;
} 

$hits += 1;


file_put_contents("cache_file", serialize($hits));

?>

<html>
<head>
	<meta http-equiv="refresh" content="2">
	<title>INFS3202-Prac6</title>
</head>
<body style="margin: 10% 0 auto 0; text-align: center;">
	<h1>Total Guests: <?php echo $hits; ?></h1>

	<h3> This page will auto refresh every 2 seconds </h3>
	
	<h2>Current Time: <?php echo date("h:i:sa"); ?></h2>
</body>
</html>
