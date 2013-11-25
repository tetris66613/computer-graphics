<?php
  session_start();
  $uploaddir = '';
 $uploadfile = $uploaddir . $_SESSION['nickname'];


move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile); 

header("location: profile.php");

?>