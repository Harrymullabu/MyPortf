<?php
$DB_USER = 'hsegero';
$DB_PASS = 'ma1693kn';
$DB_HOST = 'localhost';
$DB_NAME = 'hsegero';


$mysqli = new mysqli($host, $user, $password, $database);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
