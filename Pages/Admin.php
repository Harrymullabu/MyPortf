<?php
session_start();
$con = parse_ini_file("../config.ini", true);
$env = $con['ENVIRONMENT'];
$url = $con[$env]['URL_ROOT'];
$app = $con[$env]['APP_ROOT'];

// Check if user is logged in, if not redirect to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: {$url}login.php"); 
    exit;
}


include $app . '/nav.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="<?= $url . "styles.css"?>"> <!-- Include your stylesheet -->
</head>

<body>

    <div class="container">
        <h2>Welcome to Admin Panel</h2>
        <p><a href="logout.php">Logout</a></p>

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

        
        <form action="edit_project.php" method="post">
   
    <label for="project">Select Project:</label>
    <select id="project" name="project">
        <?php
        $projects = array("Project 1", "Project 2", "Project 3");
        foreach ($projects as $project) {
            echo "<option value='$project'>$project</option>";
        }
        ?>
    </select>
    <br>
    
    
    <label for="title">Title:</label>
    <input type="text" id="title" name="title"><br>
    
    <label for="description">Description:</label>
    <textarea id="description" name="description"></textarea><br>
    
    <label for="languages">Languages:</label>
    <input type="text" id="languages" name="languages"><br>
    
    <label for="github_link">GitHub Link:</label>
    <input type="text" id="github_link" name="github_link"><br>
    

    <button type="submit">Save Changes</button>
</form>


        </form>

        
        <h3>Delete Project</h3>
        <form action="delete_project.php" method="post">
           
            <button type="submit">Delete Project</button>
        </form>
    </div>

</body>

</html>
