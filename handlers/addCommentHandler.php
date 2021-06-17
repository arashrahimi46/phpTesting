<?php 
require "../repositories/commentRepositoryImpl.php";
require "../model/comment.php";
if($_SERVER['REQUEST_METHOD']=="POST"){

    $commentRepositoryImpl = new CommentRepositoryImpl();

    $comment = new Comment();
    $comment->author = "ali";
    $comment->comment = $_POST["commentvalue"];
    // $comment->post_id = $_REQUEST["id"];
    $comment->post_id = "1";
    
    $commentRepositoryImpl->addComment($comment);

}
?>