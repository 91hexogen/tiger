<?php

//json
header('Content-Type: application/json');

//datenbank
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'notificationData');

//verbindung herstellen
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
	die("Connection failed: " . $mysqli->error);
}

//query
$query = sprintf(" ...  ");

//query ausführen
$result = $mysqli->query($query);

//loop
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

//free memory
$result->close();

//verbindung beenden
$mysqli->close();

//ausgabe
print json_encode($data);

?>
