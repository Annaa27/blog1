<?php
require 'database/QueryBuilder.php';

$db = new QueryBuilder;
$id = $_GET['id'];
$posts = $db->getOne("posts", $id);
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
         <h1>Edit Post</h1>
         <form action="update.php?id=<?= $post['id'];?>" method="post">
             
 <div class="form-group">
 <input type="text" class="form-control" value="my new test post">
 </div>
             <div class="form-group">
                 <textarea name="content"  class="form-control">my comment new post about</textarea>    
             </div>
              <div class="form-group">
                 <textarea name="content"  class="form-control">3/1/2018</textarea>    
             </div>
        <div class="form-group"> 
            <button class="btn  btn-warning" type="submit">Submit</button>    
        </div>
            
         </form>
         </div>
        </div>
        </div>
    </body>
</html>
