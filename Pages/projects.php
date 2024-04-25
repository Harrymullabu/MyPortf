<?php

require_once 'ProjectModel.php';


$projectData = [
    'title' => 'Project Title',
    'Language' => 'Programming Language',
    'link' => 'https://github.com/your-project-link',
    'projects' => 'projects.php-url',
    'Description' => 'Project Description',
];

// Create a new instance of ProjectModel
$project = new ProjectModel($projectData);
?>

<div class="project">
    <h3><?php echo $project->get_title(); ?></h3>
    <p><strong>Language:</strong> <?php echo $project->get_lang(); ?></p>
    <p><strong>Description:</strong> <?php echo $project->get_desc(); ?></p>
    <p><a href="<?php echo $project->get_link(); ?>">View on GitHub</a></p>
    
</div>

