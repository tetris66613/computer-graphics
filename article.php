<?php
    include 'db.php';
    $db->showArticle($_GET['id']);
 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Article</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel='stylesheet' name='text/css' href='css/main.css'>

  </head>
  <body>
    <?php
      include 'checkauto.php';
      include 'sitetitle.php';
    ?>
    <div class='title'>
    <?php echo $gtitle ?><br>
    <?php echo $gdate ?><br>
    </div>
    <div class='text'>
    <?php echo $gfull_text ?><br>
    </div>
  </body>
</html>