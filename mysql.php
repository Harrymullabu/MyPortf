<?php
$DB_USER = 'hsegero ';
$DB_PASS = 'ma1693kn';
$DB_HOST = 'localhost';
$DB_NAME = 'hsegero';
try {
    $conn = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASS);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Function to create a new project
function createProject($title, $description, $languages, $link) {
    global $conn;
    try {
        $sql = "INSERT INTO projects (Title, Description, Languages, Link) VALUES (:title, :description, :languages, :link)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':languages', $languages);
        $stmt->bindParam(':link', $link);
        $stmt->execute();
        return true;
    } catch(PDOException $e) {
        return false;
    }
}

// Function to read project information
function readProjects() {
    global $conn;
    try {
        $sql = "SELECT * FROM projects";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } catch(PDOException $e) {
        return false;
    }
}

// Function to update project information
function updateProject($id, $title, $description, $languages, $link) {
    global $conn;
    try {
        $sql = "UPDATE projects SET Title = :title, Description = :description, Languages = :languages, Link = :link WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':languages', $languages);
        $stmt->bindParam(':link', $link);
        $stmt->execute();
        return true;
    } catch(PDOException $e) {
        return false;
    }
}

// Function to delete project
function deleteProject($id) {
    global $conn;
    try {
        $sql = "DELETE FROM projects WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return true;
    } catch(PDOException $e) {
        return false;
    }
}
?>