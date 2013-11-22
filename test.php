<!DOCTYPE html>
<HTML>
  <HEAD>
    <TITLE>Profile: username</TITLE>
    
    
  </HEAD>
  <BODY>
    
<?php
    include 'db.php';
  
        
        $sql = 'SELECT rule, name, surname FROM users_info WHERE nickname = :nickname';
        $q = $dbh->prepare($sql);
        $q->execute(array(':nickname' => 'ad'));
        $data = $q->fetch();
  print_r($data)

 ?>
      

  </BODY>
</HTML>