<?php
  include 'db.php';
  $nickname = $_POST['nick'];
  $db->deleteUser($nickname);
  header('location: userslist.php');
 ?>