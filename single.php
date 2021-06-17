<?php
require "db.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="assets/img/ea1.jpg" class="img-responsive img-fluid" alt="">
            </div>
            <div class="col-6">
                <p>
                    date
                </p>
            </div>
            <div class="col-6">
                <p>
                    author
                </p>
            </div>
            <div class="col-12">
                <h1>
                    title
                </h1>
            </div>
            <div class="col-12">
                <p>
                    content
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">comment</label>
                        <input type="email" value="commentvalue" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter comment">

                    </div>

                    <button type="submit" value="addcomment" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>

    <script src="assets/js/jquery-3.2.1.slim.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>