<?php
class ProjectModel
{
    private $_title;
    private $_lang;
    private $_link;
    private $_desc;

    public function __construct($projects)
    {
        $this->_title = $projects["title"];
        $this->_lang = $projects["Language"];
        $this->_link = $projects["link"];
        $this->_desc = $projects["Description"];
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
