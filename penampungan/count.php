<?php
$mysqli = new mysqli('172.20.0.2', 'root', 'root', 'Redlock');
$result = $mysqli->query('SELECT COUNT(*) as total FROM users');
$row = $result->fetch_assoc();
echo 'Total number of users: ' . $row['total'];
?>
