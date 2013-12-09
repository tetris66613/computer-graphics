<?php
  include 'db.php';
  session_start();
  $db->admDeleteAllRatingsArt($_POST['id']);
  $db->rateArticle($_POST['id'], NULL, NULL);
  $header = 'article.php?lang=' . $_SESSION['lang'] . '&id=' . $_POST['id'] . '&page=' . $_POST['page'];
  
  header("location: $header");
  ?>