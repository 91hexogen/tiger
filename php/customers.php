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
$query = sprintf
("SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY)) AND (appName LIKE 'SWR Aktuell')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY)) AND (appName LIKE 'Inforadio')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY)) AND (appName LIKE 'rbb|24')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY)) AND (appName LIKE 'Brandenburg Aktuell')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY)) AND (appName LIKE 'Radio Paloma')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY)) AND (appName LIKE 'Radio SAW')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY)) AND (appName LIKE 'hr-INFO')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY)) AND (appName LIKE 'SWR3')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY)) AND (appName LIKE 'Fritz')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY)) AND (appName LIKE 'YOU FM')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY)) AND (appName LIKE 'hr2-kultur')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY)) AND (appName LIKE 'hr3')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY)) AND (appName LIKE 'boerse.ARD')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY)) AND (appName LIKE 'Kulturradio')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY)) AND (appName LIKE 'radioeins')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY)) AND (appName LIKE 'DASDING')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY)) AND (appName LIKE 'KaffeeOderTee')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY)) AND (appName LIKE 'SWR4 BW')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY)) AND (appName LIKE 'SWR4 RP')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY)) AND (appName LIKE 'ARDBuffet')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY)) AND (appName LIKE 'SWR1 RP')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY)) AND (appName LIKE 'SWR1 BW')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY)) AND (appName LIKE 'ROCKLAND.fm')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY)) AND (appName LIKE '1A Webradio')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY)) AND (appName LIKE 'Hit Radio N1')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY)) AND (appName LIKE 'Charivari 98.6')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY)) AND (appName LIKE 'Radio F 94.5')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY)) AND (appName LIKE 'Pirate Gong')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY)) AND (appName LIKE 'Gong 97.1')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY)) AND (appName LIKE 'Radio TEDDY')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY)) AND (appName LIKE 'WIGLmania')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY)) AND (appName LIKE 'BB RADIO')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY)) AND (appName LIKE 'Kochblogradio')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY)) AND (appName LIKE 'Radio Gong')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY)) AND (appName LIKE 'SCHWARZWALDRADIO')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY)) AND (appName LIKE 'Retro FM')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY)) AND (appName LIKE 'Abendschau') ORDER BY `number` DESC LIMIT 10
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
