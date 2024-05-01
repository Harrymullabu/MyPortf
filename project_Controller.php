<?php

class Project_Controller
{
    private $DB_NAME;

    function __construct($data)
    {
        $this->DB_NAME = $data;
    }

    public function render()
    {
        foreach ($this->DB_NAME["projects"] as $projectData) 
        {
            $project = new ProjectModel($projectData); 
            include_once( 'pages/projects.php');
        }
    }
}
