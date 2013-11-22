<?php
  global $autorize;
  session_start();
  if (!empty($_SESSION['id'])) {
  	$autorize = true;
  }
  if (!$autorize) {
  	include 'autonot.php'; 
  } else {
  	include 'autoyes.php';
  }
  
 ?>