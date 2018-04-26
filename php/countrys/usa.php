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
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'NYTimes')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'Quartz')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'HuffPost')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'USA TODAY')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'ESPN')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'Squid')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'Fox News')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'WSJ')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'WP')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'The Times')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'Financial Times')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'The Times')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'LA Times')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'CNN')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'Smart News')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'AOL')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'NBC News')
UNION ALL
SELECT appName, COUNT(*) AS number FROM Notification WHERE (postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR)) AND (appName LIKE 'watson') ORDER BY `number` DESC LIMIT 10
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
