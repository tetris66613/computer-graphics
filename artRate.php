<?php
 session_start();
 include 'db.php';

 $db->rateArticle($_GET['id'], $_SESSION['nickname'], $_GET['rate']);

 ?>