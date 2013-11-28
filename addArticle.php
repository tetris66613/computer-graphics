<?php
  include 'db.php';
  global $full_text;
  session_start();
  $nickname = $_SESSION['nickname'];
  $title = $_POST['title'];
  $annotation = $_POST['annotation'];
  $full_text = nl2br($_POST['full_text']);
  $titleUK = $_POST['titleUK'];
  $annotationUK = $_POST['annotationUK'];
  $full_textUK = nl2br($_POST['full_textUK']);
  $date = date("r");
  $db->addArticle($nickname, $title, $annotation, $full_text, 
                  $titleUK, $annotationUK, $full_textUK, $date);
 ?>