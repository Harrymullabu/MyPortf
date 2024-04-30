<?php
$username = 'hsegero';
$password = 'ma1693kn';
$servername = 'localhost';
$databasename = 'hsegero';

try {
 
    $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password); 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "CREATE TABLE IF NOT EXISTS projects (
        id INT AUTO_INCREMENT PRIMARY KEY,
        Title VARCHAR(255) NOT NULL,
        Description TEXT,
        Languages VARCHAR(100),
        Link VARCHAR(255)
    )";
    
  
    $conn->exec($sql);
    echo "Table 'projects' created successfully";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}


$conn = null;

