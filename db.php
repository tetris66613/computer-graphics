<?php
  #$user = "root";
  #$pass = "1111";
  #$dbh = new PDO('mysql:host=localhost; dbname=cgusers', $user, $pass);
  include_once 'Classes/Database.php';
  $db = new MySQL_Database("root","1111");
  $db->dbConnect("localhost", "cgusers");
 ?>