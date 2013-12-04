<?php
  session_start();
  include 'db.php';
  include 'lang/language.php';
  $title = $_POST['title'];
  $ann = $_POST['annotation'];
  $id = $_POST['uptid'];
  $full_text = $_POST['full_text'];
  $db->updateArticle($title, $ann, $full_text, $id, $_SESSION['lang']);
  print($title);
  header("location: article.php?id=$id&page=1");
 ?>