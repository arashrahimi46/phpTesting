<?php
require ("../repositories/postRepository.php");
require "../model/Post.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $posts=new Post();
    $posts->title=$_POST['title'];
    $posts->body=$_POST['body'];
    $posts->author=$_POST['author'];
    $postRepository = new PostRepository();

    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $file_ext = explode('.',$_FILES['image']['name']);
    $file_ext=strtolower($file_ext[count($file_ext) - 1]);

    $extensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$extensions)=== false){
        $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }

    if($file_size > 2097152){
        $errors[]='File size must be excately 2 MB';
    }

    if(empty($errors)==true){
        move_uploaded_file($file_tmp,"../assets/uploads/".$file_name);
        $posts->image=$file_name;
        $postRepository->addPost($posts);
    }else{
        print_r($errors);
    }
}

////   $body = $_POST['body'];
//   // $image = $_POST['image'];
//    if (trim($posts->title) == ''){
//        echo 'فیلد نام نمی تواند خالی باشد';
//
//    if (trim($posts->body) == '')
//        echo 'فیلد بادی نمی تواند خالی باشد';
//
//    if (trim($posts->author) == '')
//        echo 'فیلد نویسنده نمی تواند خالی باشد';
//
//   if (isset($image)) {
//        echo 'عکس اپلود نشده است';
//    }

