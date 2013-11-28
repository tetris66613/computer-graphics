<?php
  include 'db.php';
  $title = $_POST['title'];
  $ann = $_POST['annotation'];
  $id = $_POST['uptid'];
  $full_text = nl2br($_POST['full_text']);
  $db->updateArticle($title, $ann, $full_text, $id);
  header("location: articles/article.php?id=$id");
 ?>