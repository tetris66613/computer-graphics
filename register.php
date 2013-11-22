<?php
  global $nickname;
  include 'db.php';
  $nickname = $_POST['nickname'];
  $password = $_POST['password'];
  $rpassword = $_POST['rpassword'];
  $email = $_POST['email'];
  $name = $_POST['name'];
  $surname = $_POST['surname'];

  if (empty($nickname) || empty($password) || empty($rpassword) || empty($email)) {
    $reg_errors = "Error: not all *parameters write";
    include 'registration.php';
    exit();
  }

  /*$sql = 'SELECT * FROM users_info WHERE nickname = :nickname OR email = :email';
  $q = $dbh->prepare($sql);
  $q->execute(array(':nickname' => $nickname,
                    ':email' => $email));
  $result = $q->fetch();*/
 
  if (!empty($result)) {
    $reg_errors = "Error: this nickname or email exists";
    include 'registration.php';
    exit();
  }

  if (!preg_match("|^[-0-9a-z_\.]+@[-0-9a-z_^\.]+\.[a-z]{2,6}$|i", $email)) {
    $reg_errors = "E-mail adress wrong";
    include 'registration.php';
    exit();
  }

  if (!ctype_alnum($nickname)) {
    $reg_errors = "Error: use only alphabets and numbers";
    include 'registration.php';
    exit();
  }

  if (strlen($password) < 2 || strlen($password) > 12) {
    $reg_errors = "Error: password length must be in range [2-12]";
    include 'registration.php';
    exit();
  }
 
  if ($password != $rpassword) {
    $reg_errors = "Error: passwords don't similar";
    include 'registration.php';
    exit();
  }
  /*$sql = "INSERT INTO users_info (nickname, password, email, name, surname) 
  VALUES (:nickname, :password, :email, :name, :surname)";
  $q = $dbh->prepare($sql);
  $q->execute(array(':nickname' => $nickname,
                    ':password' => $password,
                    ':email' => $email,
                    ':name' => $name,
                    ':surname' => $surname));*/

  $db->addUser($nickname, $password, $email, $name, $surname);

  
  
  include 'userlogin.php';
    
  
?>