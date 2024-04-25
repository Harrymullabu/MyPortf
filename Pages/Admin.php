<?php
session_start();

// Check if user is logged in, if not redirect to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

// Include necessary files

// Process form submissions if any

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="styles.css"> <!-- Include your stylesheet -->
</head>
<body>

    <div class="container">
        <h2>Welcome to Admin Panel</h2>
        <p><a href="logout.php">Logout</a></p>

        <!-- Form to create a new project -->
        <h3>Create New Project</h3>
        <form action="create_project.php" method="post">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" required><br>
            <label for="description">Description:</label>
            <textarea name="description" id="description" rows="3" required></textarea><br>
            <label for="languages">Languages:</label>
            <input type="text" name="languages" id="languages" required><br>
            <label for="github_link">GitHub Link:</label>
            <input type="text" name="github_link" id="github_link" required><br>
            <button type="submit">Create Project</button>
        </form>

        <!-- Form to edit existing projects -->
        <h3>Edit Project</h3>
        <form action="edit_project.php" method="post">
            <!-- Include dropdown or list to select projects to edit -->
            <!-- Input fields for title, description, languages, and github link -->
            <button type="submit">Save Changes</button>
        </form>

        <!-- Form to delete existing projects -->
        <h3>Delete Project</h3>
        <form action="delete_project.php" method="post">
            <!-- Include dropdown or list to select projects to delete -->
            <button type="submit">Delete Project</button>
        </form>
    </div>

</body>
</html>
