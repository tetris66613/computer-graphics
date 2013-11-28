<?php
  session_start();
  include 'db.php';
  
  foreach ($_POST as $key => $value) {
  	$db->updateSiteText($key, $value);
  }
  header('location: sitesettings.php');
  ?>