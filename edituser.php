<?php
  include 'db.php';
  /*$sql = 'UPDATE users_info SET name = :name, surname = :surname WHERE nickname = :nickname';
  $q = $dbh->prepare($sql);
  $q->execute(array(':name' => $_POST['admnewname'],
  	                ':surname' => $_POST['admnewsurname'],
  	                ':nickname' => $_POST['nick']));*/

  $db->admUpdateUserInfo($_POST['nick'], $_POST['admnewname'], $_POST['admnewsurname'], $_POST['rule']);
 
  
  header('location: userslist.php');
 ?>
