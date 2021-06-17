<?php
require ("../repositories/postRepository.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $body = $_POST['body'];
    $author = $_POST['author'];
   // $image = $_POST['image'];
    if (trim($title) == '')
        echo 'فیلد نام نمی تواند خالی باشد';

    if (trim($body) == '')
        echo 'فیلد بادی نمی تواند خالی باشد';

    if (trim($author) == '')
        echo 'فیلد نویسنده نمی تواند خالی باشد';

   /* if (isset($image)) {
        echo 'عکس اپلود نشده است';
    }*/
}
$postRepository = new PostRepository();
$postRepository->addPost($title,$body,$author);