<?php
   session_start();
   include 'db.php';
   include 'lang/language.php';
   
  $artId = $_POST['artId'];
  $date = date("c");
  $db->addComment($artId, $_POST['nick'], $_POST['theme'], $_POST['text'], $date);
  $header = 'article.php?id=' . $_POST['artId'] . '&lang=' . $_SESSION['lang'] . '&page=1';
  header("location: $header");

  ?>