<?php
  if (!$autorize || $_SESSION['rule'] == 'user' || $_SESSION['rule'] == 'banned') {
  	include 'addarticlenot.php';
  } else {
  	include 'addarticleyes.php';
  }
 ?>