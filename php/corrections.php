<?php // MYSQL anbinden für Ticker
error_reporting(E_ALL);
$connect = mysqli_connect("localhost", "root", "root", "notificationData");
// Check connection
// if (!$connect) {
//  die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";

// 24 HOURS
$query1 = "SELECT appName FROM Notification WHERE postTime / 1000
>= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR) GROUP BY appName HAVING COUNT(nMessage) > 1 ORDER BY COUNT(nMessage) DESC LIMIT 10";
$query2 = "SELECT COUNT(nMessage) AS number FROM Notification WHERE postTime / 1000
>= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR) GROUP BY appName HAVING COUNT(nMessage) > 1 ORDER BY COUNT(nMessage) DESC LIMIT 10";

// WEEK
$query3 = "SELECT appName FROM Notification WHERE postTime / 1000
>= UNIX_TIMESTAMP(NOW() - INTERVAL 7 DAY) GROUP BY appName HAVING COUNT(nMessage) > 1 ORDER BY COUNT(nMessage) DESC LIMIT 10";
$query4 = "SELECT COUNT(nMessage) AS number FROM Notification WHERE postTime / 1000
>= UNIX_TIMESTAMP(NOW() - INTERVAL 7 DAY) GROUP BY appName HAVING COUNT(nMessage) > 1 ORDER BY COUNT(nMessage) DESC LIMIT 10";

// MONTH
$query5 = "SELECT appName FROM Notification WHERE postTime / 1000
>= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY) GROUP BY appName HAVING COUNT(nMessage) > 1 ORDER BY COUNT(nMessage) DESC LIMIT 10";
$query6 = "SELECT COUNT(nMessage) AS number FROM Notification WHERE postTime / 1000
>= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY) GROUP BY appName HAVING COUNT(nMessage) > 1 ORDER BY COUNT(nMessage) DESC LIMIT 10";

// YEAR
$query7 = "SELECT appName FROM Notification WHERE postTime / 1000
>= UNIX_TIMESTAMP(NOW() - INTERVAL 1 YEAR) GROUP BY appName HAVING COUNT(nMessage) > 1 ORDER BY COUNT(nMessage) DESC LIMIT 10";
$query8 = "SELECT COUNT(nMessage) AS number FROM Notification WHERE postTime / 1000
>= UNIX_TIMESTAMP(NOW() - INTERVAL 1 YEAR) GROUP BY appName HAVING COUNT(nMessage) > 1 ORDER BY COUNT(nMessage) DESC LIMIT 10";

// ALL TIME
$query9 = "SELECT appName, COUNT(nMessage) AS number FROM Notification GROUP BY appName HAVING COUNT(nMessage) > 1 ORDER BY COUNT(nMessage) DESC LIMIT 10";
$query10 = "SELECT appName, COUNT(nMessage) AS number FROM Notification GROUP BY appName HAVING COUNT(nMessage) > 1 ORDER BY COUNT(nMessage) DESC LIMIT 10";



$result1 = mysqli_query($connect, $query1);
$result2 = mysqli_query($connect, $query2);

$result3 = mysqli_query($connect, $query3);
$result4 = mysqli_query($connect, $query4);

$result5 = mysqli_query($connect, $query5);
$result6 = mysqli_query($connect, $query6);

$result7 = mysqli_query($connect, $query7);
$result8 = mysqli_query($connect, $query8);

$result9 = mysqli_query($connect, $query9);
$result10 = mysqli_query($connect, $query10);

?>
