<?php

require_once '../Project/ProjectModel.php';

class DatabaseService{

    private $_posts = [
        [
            'id'=>1, 
            'title' => 'Project Title',
            'Language' => 'Programming Language',
            'link' => 'https://github.com/-project-link',
            'projects' => 'projects.php-url',
            'Description' => 'Mauris ut lorem tincidunt, finibus velit in, pulvinar odio. Sed molestie eget velit aliquam vehicula. Maecenas sed finibus nisl. Donec ut ex in lorem elementum venenatis ac ut quam. Donec suscipit vulputate blandit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aenean mattis diam at tellus tincidunt, in pulvinar urna semper. Donec vehicula risus nec eros blandit, quis interdum est dapibus. Curabitur sit amet nisl auctor velit feugiat cursus sed eu libero. Nunc venenatis ullamcorper magna, eu interdum velit congue eu. Curabitur eget lorem bibendum, sollicitudin lectus et, imperdiet mi. Vivamus eget risus rhoncus, sollicitudin tortor in, sodales ligula.',
        ],
        [
            'id'=>2, 
            'title' => 'Project Title',
            'Language' => 'Programming Language',
            'link' => 'https://github.com/hmullabu-project-link',
            'projects' => 'projects.php-url',
            'Description' => 'Mauris ut lorem tincidunt, finibus velit in, pulvinar odio. Sed molestie eget velit aliquam vehicula. Maecenas sed finibus nisl. Donec ut ex in lorem elementum venenatis ac ut quam. Donec suscipit vulputate blandit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aenean mattis diam at tellus tincidunt, in pulvinar urna semper. Donec vehicula risus nec eros blandit, quis interdum est dapibus. Curabitur sit amet nisl auctor velit feugiat cursus sed eu libero. Nunc venenatis ullamcorper magna, eu interdum velit congue eu. Curabitur eget lorem bibendum, sollicitudin lectus et, imperdiet mi. Vivamus eget risus rhoncus, sollicitudin tortor in, sodales ligula.',
        ],
        [
            'id'=>1, 
            'title' => 'Project Title',
            'Language' => 'Programming Language',
            'link' => 'https://github.com/-project-link',
            'projects' => 'projects.php-url',
            'Description' => 'Mauris ut lorem tincidunt, finibus velit in, pulvinar odio. Sed molestie eget velit aliquam vehicula. Maecenas sed finibus nisl. Donec ut ex in lorem elementum venenatis ac ut quam. Donec suscipit vulputate blandit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aenean mattis diam at tellus tincidunt, in pulvinar urna semper. Donec vehicula risus nec eros blandit, quis interdum est dapibus. Curabitur sit amet nisl auctor velit feugiat cursus sed eu libero. Nunc venenatis ullamcorper magna, eu interdum velit congue eu. Curabitur eget lorem bibendum, sollicitudin lectus et, imperdiet mi. Vivamus eget risus rhoncus, sollicitudin tortor in, sodales ligula.',
        ],
    ];

    public function get_posts(){
        $response = [];
        foreach($this->_posts as $data){
            $response[] = new ProjectModel($data);
        }

        return $response;
    }

    public function get_post_by_id($id){
        foreach($this->_posts as $data){
            if($data['id'] == $id){
                return new ProjectModel($data);
            }
        }
        return null;
    }

    private function _get_post_index_by_id($id){
        foreach($this->_posts as $key=>$value){
            if($value['id'] == $id){
                return $key;
            }
        }
        return null;
    }

    public function submit_post($data){
       //this is wehre you would do the queries to insert a post to the database
       $this->_posts[] = $data;
    }

    public function edit_post($data){
        //this is where you would do the queries to edit a post in your database
        $index = $this->_get_post_index_by_id($data['id']);
        $this->_posts[$index] = $data;
    }

}
