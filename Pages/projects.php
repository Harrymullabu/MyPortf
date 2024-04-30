<?php

$con = parse_ini_file("../config.ini", true);
$env = $con['ENVIRONMENT'];
$url = $con[$env]['URL_ROOT'];
$app = $con[$env]['APP_ROOT'];


session_start();

if(!isset($_SESSION['admin'])) {
    header('Location: index.php');
    exit;
}
$projectData = [
    'title' => 'Project Title',
    'Language' => 'Programming Language',
    'link' => 'https://github.com/your-project-link',
    'projects' => 'projects.php-url',
    'Description' => 'Project Description',
];
include ($app . "/ProjectModel.php");
$project = new ProjectModel($projectData);
?>

<div class="projects">
    <h3><?php echo $project->get_title(); ?></h3>
    <p><strong>Language:</strong> <?php echo $project->get_lang(); ?></p>
    <p><strong>Description:</strong> <?php echo $project->get_desc(); ?></p>
    <p><a href="<?php echo $project->get_link(); ?>">View on GitHub</a></p>




<!DOCTYPE html>
<html>
<head>
    <title>Manage Projects</title>
</head>
<body>
    <h2>Manage Projects</h2>
    <p>Form to create/edit/delete projects goes here</p>
    <p><a href="dashboard.php">Back to Dashboard</a></p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
