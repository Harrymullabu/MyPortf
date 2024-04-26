<?php
class ProjectModel
{
    private $_title;
    private $_lang;
    private $_link;
    private $_img;
    private $_desc;

    public function __construct($project)
    {
        $this->_title = $project["title"];
        $this->_lang = $project["Language"];
        $this->_link = $project["link"];
        $this->_desc = $project["Description"];
    }

    public function get_title()
    {
        return $this->_title;
    }

    public function get_desc()
    {
        return $this->_desc;
    }
    public function get_link()
    {
        return $this->_link;
    }

    public function get_lang()
    {
        return $this->_lang;
    }
}
?>
