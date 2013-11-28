<?php
  include 'db.php';
  $db->admUpdateUserInfo($_POST['nick'], $_POST['admnewname'], $_POST['admnewsurname'], $_POST['rule']);
  header('location: userslist.php');
 ?>
