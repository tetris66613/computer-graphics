<?php
 session_start();
 include 'db.php';

 $db->rateArticle($_GET['id'], $_SESSION['nickname'], $_GET['rate']);
 $header = 'article.php?id=' . $_GET['id'] . '&lang=' . $_SESSION['lang'] . '&page=1';
 header("location: $header");

 ?>