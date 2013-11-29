<?php
  include 'db.php';
  global $full_text;
  session_start();
  $nickname = $_SESSION['nickname'];
  $title = $_POST['title'];
  $annotation = $_POST['annotation'];
  $full_text = $_POST['full_text'];
  $titleUK = $_POST['titleUK'];
  $annotationUK = $_POST['annotationUK'];
  $full_textUK = $_POST['full_textUK'];
  $date = date("c");
  $db->addArticle($nickname, $title, $annotation, $full_text, 
                  $titleUK, $annotationUK, $full_textUK, $date);
 ?>