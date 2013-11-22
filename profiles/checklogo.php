<?php
  
  if (!file_exists($_SESSION['nickname'])) {
  	echo "<img src=../I/logo.jpg>";
  } else {
  	echo "<img src=".$_SESSION['nickname'].">";
  }
  ?>