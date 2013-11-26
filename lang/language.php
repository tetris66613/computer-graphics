<?php
  global $langdata;

  if (isset($_GET['glang'])) {
  	$_SESSION['lang'] = $_GET['glang'];
  }
  
  $langdata = $db->chooselang($_SESSION['lang']);
?>