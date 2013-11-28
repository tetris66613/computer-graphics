<?php
  include 'db.php';
  
  $nickname = $_POST['nickname'];
  $password = $_POST['password'];
  
  if (empty($nickname) || empty($password)) {
  	header('location: index.php');
  	exit();
  }

  $db->loginUser($nickname, $password);
?>