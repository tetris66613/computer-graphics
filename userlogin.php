<?php
  include 'db.php';
  
  $nickname = $_POST['nickname'];
  $password = $_POST['password'];
  
  if (empty($nickname) || empty($password)) {
  	header('location: index.php');
  	exit();
  }

  /*$sql = 'SELECT id, password, rule, name, surname FROM users_info WHERE nickname = :nickname';
  $q = $dbh->prepare($sql);
  $q->execute(array("nickname" => $nickname));
  $data = $q->fetch();
  $stored_password = $data['password'];
  $id = $data['id'];
  $rule = $data['rule'];
  $name = $data['name'];
  $surname = $data['surname'];

  if ($stored_password === $password) {
    if ($rule == 'banned') {
      $auth_error = "your are banned and can't log in";
      include 'index.php';
    } else {
      session_start();
      $_SESSION['id'] =  $id;
      $_SESSION['nickname'] = $nickname;
      $_SESSION['rule'] = $rule;
      $_SESSION['name'] = $name;
      $_SESSION['surname'] = $surname;

    $autorize = true;
    header('location: index.php');
    }
    
  } else {
    $auth_error = 'password or nick wrong';
    include 'index.php';
  }*/

  $db->loginUser($nickname, $password);
?>