<?php
$errors = [];
if (($_SERVER['REQUEST_METHOD'] == 'POST'){
$title = $_POST['title'];
$body = $_POST['body'];
$author = $_POST['author'];
$image = $_POST['image'];
if (trim($title) == '')
    echo 'فیلد نام نمی تواند خالی باشد';

if (trim($body) == '')
    echo 'فیلد بادی نمی تواند خالی باشد';

if (trim($author) == '')
    echo 'فیلد نویسنده نمی تواند خالی باشد';

if (isset($image)) {
    echo 'عکس اپلود نشده است';


    try {
        $conn = new PDO("mysql:host=localhost;dbname=makeen_news", "root", "");
        $statm = $conn->prepare("insert into posts (title , body , email , password) values (:name , :username , :email , :password)");
        $statm->execute(compact('name', 'username', 'email', 'password'));

        if ($statm->rowCount()) {
            header("Location: http://localhost:8000/auth/login.php");
            return;
        }

        $errors->set('name', 'اضافه شدن کاربر با موفقیت انجام نشد');
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
