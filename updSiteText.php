<?php
  session_start();
  include 'db.php';
  //$db->updateSiteText('vpass', 'password');
  
  foreach ($_POST as $key => $value) {
  	$db->updateSiteText($key, $value);
  }
  header('location: sitesettings.php');
  ?>