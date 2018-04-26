<?php
//setting header to json
header('Content-Type: application/json');

//database
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'notificationData');

//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
	die("Connection failed: " . $mysqli->error);
}

//query to get data from the table
//past 24h
$query = sprintf("SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'SWR Aktuell')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'Inforadio')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'Fritz')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'BILD')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'Tagesschau')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'ZDFheute')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'SZ.de')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'SPIEGEL ONLINE')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'stern')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'FOCUS Online')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'RT News')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'DW')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'WELT Edition')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'ZEIT ONLINE')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'FAZ - Der Tag')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'Tagesspiegel')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'FAZ.NET')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'DerWesten')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'ntv')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'presseportal')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'NDR NDS')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'Resi') ORDER BY `number` DESC LIMIT 10
");

//execute query
$result = $mysqli->query($query);

//loop through the returned data
$data1 = array();
foreach ($result as $row) {
	$data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$mysqli->close();

//now print the data
print json_encode($data);

?>
