<?php
require ("../db.php");

class PostRepository {
    private $conn;
    public function __construct()
    {
        $this->conn = DB::getInstance();
    }

    public function addPost($request){
        $sql = "INSERT INTO posts (title, body,author,image)VALUES ($request)";
    }
}