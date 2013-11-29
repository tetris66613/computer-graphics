<?php
  session_start();
  /*$newname = $_POST['newname'];
  $newsurname = $_POST['newsurname'];
  include '../db.php';
  $sql = 'UPDATE users_info SET name = :name, surname = :surname WHERE nickname = :nickname';
  $q = $dbh->prepare($sql);
  $q->execute(array(':name' => $newname,
  	                ':surname' => $newsurname,
  	                ':nickname' => $_SESSION['nickname']));


   
  $_SESSION['name'] = $newname;
  $_SESSION['surname'] = $newsurname;*/
  $newname = $_POST['newname'];
  $newsurname = $_POST['newsurname'];
  $nickname = $_SESSION['nickname'];
  include '../db.php';
  $db->updateUserInfo($newname, $newsurname, $nickname);
 
  
  header("location: ../profile.php");
 ?>