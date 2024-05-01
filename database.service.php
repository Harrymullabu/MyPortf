<?php

require_once '/pages/projects.php';

class DatabaseService {

    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function get_posts() {
        $query = "SELECT * FROM posts";
        $stmt = $this->pdo->query($query);
        $posts = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $posts[] = new ProjectModel($row);
        }

        return $posts;
    }

    public function get_post_by_id($id) {
        $query = "SELECT * FROM posts WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            return new ProjectModel($row);
        } else {
            return null;
        }
    }

    public function submit_post($data) {
        $query = "INSERT INTO posts (title, Language, link, projects, Description) VALUES (:title, :Language, :link, :projects, :Description)";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($data);
    }

    public function edit_post($data) {
        $query = "UPDATE posts SET title = :title, Language = :Language, link = :link, projects = :projects, Description = :Description WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($data);
    }

}
?>
