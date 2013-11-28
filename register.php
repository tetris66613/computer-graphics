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

    $reg_errorsEN = 'Error: not all *parameters write';
    $reg_errorsUK = 'Помилка: не всі *параметри заповнені';
    header('location: registration.php');
    exit();
  }
  if (!empty($result)) {
    $reg_errorsEN = 'Error: this nickname or email exists';
    $reg_errorsUK = 'Помилка: цей нік чи електроний адрес занятий';
    header('location: registration.php');
    exit();
  }

  if (!preg_match("|^[-0-9a-z_\.]+@[-0-9a-z_^\.]+\.[a-z]{2,6}$|i", $email)) {
    $reg_errorsEN = 'Error: e-mail adress wrong';
    $reg_errorsUK = 'Помилка: невірно набраний адрес електронної пошти';
    include 'registration.php';
    exit();
  }

  if (!ctype_alnum($nickname)) {
    $reg_errorsEN = 'Error: in nickname use only alphabets and numbers';
    $reg_errorsUK = 'Помилка: не всі *параметри заповнені';
    header('location: registration.php');
    exit();
  }

  if (strlen($password) < 2 || strlen($password) > 12) {
    $reg_errorsEN = 'Error: password length must be in range [2-12]';
    $reg_errorsUK = 'Помилка: довжина паролю повинна бути в діапазоні від 2 до 12 символів включно';
    header('location: registration.php');
    exit();
  }
 
  if ($password != $rpassword) {
    $reg_errorsEN = 'Error: passwords don\'t similar';
    $reg_errorsUK = 'Помилка: паролі не співпадають';
    header('location: registration.php');
    exit();
  }
  $db->addUser($nickname, $password, $email, $name, $surname);

  
  
  include 'userlogin.php';
  header('location: userlogin.php');
    
  
?>