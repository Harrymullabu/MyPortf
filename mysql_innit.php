<?php
//$DB_USER = 'hsegero';
 //$DB_PASS = 'ma1693kn';
 //$DB_HOST = 'localhost';
 //$DB_NAME = 'hsegero';


$mysqli = new mysqli($DB_USER, $DB_PASS, $DB_HOST, $DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

// Perform database operations here...

// Close connection
$conn->close();
?>