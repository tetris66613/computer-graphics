<?php
    include '../db.php';
    $db->showArticle($_GET['id']);
 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Article</title>

    <link rel='stylesheet' name='text/css' href='../css/viewarticle.css'>

  </head>
  <body>
    <div class='title'>
    <?php echo $gtitle ?><br>
    <?php echo $gdate ?><br>
    </div>
    <div class='text'>
    <?php echo $gfull_text ?><br>
    </div>
  </body>
</html>