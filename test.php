
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "notificationData";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT appName, COUNT(nMessage) AS number FROM Notification WHERE postTime / 1000
>= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR) GROUP BY appName HAVING COUNT(nMessage) > 1 ORDER BY COUNT(nMessage) DESC LIMIT 10;";

$sql .= "SELECT appName, COUNT(nMessage) AS number FROM Notification WHERE postTime / 1000
>= UNIX_TIMESTAMP(NOW() - INTERVAL 7 DAY) GROUP BY appName HAVING COUNT(nMessage) > 1 ORDER BY COUNT(nMessage) DESC LIMIT 10;";

$sql .= "SELECT appName, COUNT(nMessage) AS number FROM Notification WHERE postTime / 1000
>= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY) GROUP BY appName HAVING COUNT(nMessage) > 1 ORDER BY COUNT(nMessage) DESC LIMIT 10";

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
