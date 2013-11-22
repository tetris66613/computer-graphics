<?php
  include 'db.php';
  
  $id = $_POST['artid'];
 
  $db->deleteArticle($id);
  header('location: articles.php');
  ?>