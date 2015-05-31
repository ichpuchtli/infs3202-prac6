<?php
	
date_default_timezone_set("Australia/Brisbane");

$host = "au-cdbr-azure-east-a.cloudapp.net";
$user = "b710479716e9e4";
$pwd = "4ed8c2dd";
$db = "hits2";

$conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd);
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

$sql = 'select counter from hits limit 1';

$hits = $conn->query($sql)->fetchColumn();;

if($hits == false){
	$hits = 0;
} 

$hits += 1;

$sql = 'update hits set counter=' . $hits;

$conn->query($sql);

?>

<html>
<head>
	<meta http-equiv="refresh" content="2">
	<title>INFS3202-Prac6</title>
</head>
<body style="margin: 10% 0 auto 0; text-align: center;">
	<h4>Task 2</h4>
	<br>
	<h1>Total Guests: <?php echo $hits; ?></h1>

	<h3> This page will auto refresh every 2 seconds </h3>
	
	<h2>Current Time: <?php echo date("h:i:sa"); ?></h2>
</body>
</html>
