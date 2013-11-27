
<?php
  global $autorize;
  session_start();
      if (empty($_SESSION['lang'])) {
        $_SESSION['lang'] = 'en';
      } 
  if (!empty($_SESSION['id'])) {
  	$autorize = true;
  }
  include 'db.php';
  include 'lang/language.php';
  if (!$autorize) {
  	include 'autonot.php'; 
  } else {
  	include 'autoyes.php';
  }
  
 ?>