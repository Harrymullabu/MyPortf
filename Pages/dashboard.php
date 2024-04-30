<?php
session_start();

if(!isset($_SESSION['admin'])) {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h2>Welcome to the Admin Dashboard</h2>
    <p><a href="projects.php">Manage Projects</a></p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
