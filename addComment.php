<?php
   session_start();
   include 'db.php';
   include 'lang/language.php';
   
  $artId = $_POST['artId'];
  $date = date("r");
  $db->addComment($artId, $_POST['nick'], $_POST['theme'], $_POST['text'], $date);
  

  ?>