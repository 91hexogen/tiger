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
$query = sprintf("SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'BBC NEWS')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'Guardian')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'Mirror')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'Sky News')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'Daily Mail Online')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'News Republic')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'Bundle') ORDER BY `number` DESC LIMIT 10
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
