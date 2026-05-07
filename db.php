<?php
$host = 'localhost';
$db   = 'beauty';
$user = 'admin';
$pass = 'admin123';

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
