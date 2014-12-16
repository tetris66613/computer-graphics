<?php
  include_once 'Classes/Database.php';
  
  $db = new MySQL_Database("root","");
  $db->dbConnect("localhost", "cgusers");
 ?>