<?php
  session_start();
  include 'db.php';
  $db->deleteComment($_POST['id']);
  $header = 'article.php?id=' . $_GET['id'] . '&lang=' . $_SESSION['lang'] . '&page=1';
 header("location: $header");
  ?>