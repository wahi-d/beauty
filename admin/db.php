<?php
$host = '52.91.208.54';
$db   = 'beauty';
$user = 'admin';
$pass = 'admin123';

// Create connection
$conn = mysqli_connect($host, $user, $pass, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
