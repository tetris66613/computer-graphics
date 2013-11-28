<?php
  session_start();
  include 'db.php';
  $db->deleteComment($_POST['id']);

  ?>