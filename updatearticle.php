<?php
  include 'db.php';
  $title = $_POST['title'];
  $ann = $_POST['annotation'];
  $id = $_POST['uptid'];
  $full_text = nl2br($_POST['full_text']);
  $db->updateArticle($title, $ann, $full_text, $id);

  /*$sql = 'UPDATE articles_info SET title = :title, annotation = :ann, full_text = :ft, wdate = :dt  
  WHERE id = :id';
  $q = $dbh->prepare($sql);
  $q->execute(array(':title' => $title,
  	                ':ann' => $_POST['annotation'],
  	                ':ft' => $full_text,
  	                ':dt' => $date,
   	                ':id' => $_POST['uptid']));
  
  $article = fopen("articles/".$_POST['uptid'].".php" , "w+");
  $article = fopen("articles/".$_POST['uptid'].".php", "a");
  $text = "
<!DOCTYPE html>
<html>
  <head>
    <title>Article</title>

    <link rel='stylesheet' name='text/css' href='../css/viewarticle.css'>

  </head>
  <body>
    <div class='title'>
    $title <br>
    $date <br>
    </div>
    <div class='text'>
    $full_text<br>
    </div>
  </body>
</html>
  ";
  fwrite($article, $text);
  fclose($article);*/
  
  header("location: articles/article.php?id=$id");
 ?>