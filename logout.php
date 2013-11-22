<?php
  session_start();
  unset($_SESSION['id']);
  session_destroy();
  $autorize = false;
  header('location: index.php');
 ?>