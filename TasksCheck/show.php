<?php
require 'database/QueryBuilder.php';

$db = new QueryBuilder;
$id = $_GET['id'];

$post = $db->getOne("posts", $id);
//var_dump($task);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   
                    <p>
                    <h1><?= $post['title']; ?></h1>
                    <?= $post['comment']; ?>
                    <h1><?= $post['date'];?></h1>
                    </p>
                    <a href="./">Go Back</a>
                </div>
            </div>
        </div>
    </body>
</html>

