<?php 
require "../db.php";
require "./interfaces/commentRepository.php";


class CommentRepositoryImpl implements CommentRepository{

    private $conn;

    public function __construct()
    {
        $this->conn = DB::getInstance();
    }
    
    public function addComment($obj_comment){}
    public function deleteComment($obj_comment){}
    public function editComment($obj_comment){}
    public function publishComment($obj_comment){}

}
// $comment = new CommentRepositoryImpl();

?>