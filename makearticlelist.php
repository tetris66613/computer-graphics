<?php
  include 'db.php'; 
  $db->makeArticlesList($_GET['page']); 
?>