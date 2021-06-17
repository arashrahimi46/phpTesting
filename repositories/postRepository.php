<?php
require ("../db.php");

class PostRepository {
    private $conn;
    public function __construct()
    {
        $this->conn = DB::getInstance();
    }

    public function addPost($post){
        try {
            $sql = "INSERT INTO posts (title, body,author,image)VALUES ('$post->title' , '$post->body' , '$post->author', '$post->image')";
            $this->conn->exec($sql);
           header("Location: http://localhost:8000");
        }
    catch (PDOException $e){
            echo $e->getMessage();
    }
    }
}