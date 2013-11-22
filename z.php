<?php
  include 'db.php';
  $sql = 'SELECT rule, name, surname WHERE nickname = :nickname';
  $q = $dbh->prepare($sql);
  $q->execute(array(':nickname' => $nickname));
  $data = $q->fetchAll();
  $rule = $data['rule'];
  $name = $data['name'];
  $surname = $data['surname'];
  ?>