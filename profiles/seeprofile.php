<?php
  include '../db.php';
  $db->showUserInfo($_POST['nick']);
 ?>

<!DOCTYPE html>
<HTML>
  <HEAD>
    <TITLE>Profile: username</TITLE>
    
    <link rel='stylesheet' type='text/css' href='../css/profile.css'>
    
  </HEAD>
  <BODY>
   <center><a href="../index.php">Main page</a><br></center>
    <div class='logo'>
      <?php 
        $img = $_POST['nick'];
        if (file_exists($_POST['nick'])) {
          echo "<img src=$img>";
        } else {
          echo "<img src=../I/logo.jpg";
        }
        ?>
   </div>
   <div class='info'>
      Nickname:<br>
      Rule: <br>
      E-mail: <br>
      Name: <br>
      Surname: 
   </div>
   <div class='values'>
      <?php echo $_POST['nick'] ?> <br>
      <?php echo $grule ?> <br>
      <?php 
        global $autorize;
        if ($autorize) {
           echo $gemail;
        } else {
          echo '';
        }
        ?> <br>
      <?php echo $gname ?> <br>
      <?php echo $gsurname ?>  
   </div>

  </BODY>
</HTML>