<?php

class Project_Controller
{
    private $_db;

    function __construct($data)
    {
        $this->_db = $data;
    }

    public function render()
    {
        foreach ($this->_db["Projects"] as $projectData) 
        {
            $project = new ProjectModel($projectData); 
            include_once( 'pages/project.php');
        }
    }
}
?>
