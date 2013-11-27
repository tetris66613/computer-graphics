<?php
  
  if (!file_exists("profiles/".$_SESSION['nickname'])) {
  	echo "<img src=I/logo.jpg>";
  } else {
  	echo "<img class='img' src="."profiles/".$_SESSION['nickname'].">";
  }
  ?>