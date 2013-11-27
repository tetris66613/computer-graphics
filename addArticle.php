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
  /*$sql = 'INSERT INTO articles_info (nickname, title, annotation, full_text, wdate) 
  VALUES (:nickname, :title, :annotation, :full_text, :wdate)';
  $q = $dbh->prepare($sql);
  $q->execute(array(':nickname' => $nickname,
  	                ':title' => $title,
  	                ':annotation' => $annotation,
  	                ':full_text' => $full_text,
                    ':wdate' => $date)); */

  $db->addArticle($nickname, $title, $annotation, $full_text, 
                  $titleUK, $annotationUK, $full_textUK, $date);
 ?>