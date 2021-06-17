<?php 
interface CommentRepository{
    public function addComment($obj_comment);
    public function deleteComment($obj_comment);
    public function editComment($obj_comment);
    public function publishComment($obj_comment);
    public function getCommentsByPostId($post_id);
}
?>