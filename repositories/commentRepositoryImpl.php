<?php 
require "../db.php";
require "interfaces/commentRepository.php";


class CommentRepositoryImpl implements CommentRepository{

    private $conn;

    public function __construct()
    {
        $this->conn = DB::getInstance();
    }
    
    public function addComment($obj_comment){
        try{
            $sql = "INSERT INTO comments (author, comment, post_id) 
            VALUES ('$obj_comment->author', '$obj_comment->comment','$obj_comment->post_id' )";
            echo "\n".$sql."\n";
            $this->conn->exec($sql);
            echo "New record created successfully";
        }catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
    public function deleteComment($obj_comment){

    }
    public function editComment($obj_comment){

    }
    public function publishComment($obj_comment){
        
    }

}
// $comment = new CommentRepositoryImpl();

?>