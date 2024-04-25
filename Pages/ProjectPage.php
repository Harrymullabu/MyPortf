<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php include '../nav.php'; ?>

    <div class="container">
        <h2>Projects</h2>

        <?php
        // Include the necessary files
        require_once 'ProjectModel.php';
        require_once 'Project_Controller.php';

        // Create an instance of Project_Controller
        $projectController = new Project_Controller($data);

        // Render projects
        $projectController->render();
        ?>

    </div>
</body>
</html>
