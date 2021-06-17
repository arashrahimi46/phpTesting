<?php
require_once __DIR__."/../db.php";
require_once __DIR__."/../index.php";
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

    public function getAllPosts(){
        try {
            $sql="select * from posts ";
            $statment=$this->conn->prepare($sql);
            $statment->execute();
            $result = $statment->setFetchMode(PDO::FETCH_OBJ);

        }
        catch (PDOException $e){
            $e->getMessage();
        }
    } public function getPostsById($id){
        try {
            $sql="select * from posts where id=$id";
            $statment=$this->conn->prepare($sql);
            $statment->execute();
            $result = $statment->setFetchMode(PDO::FETCH_OBJ);
        }
        catch (PDOException $e){
            $e->getMessage();
        }
    }

}