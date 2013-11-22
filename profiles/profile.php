<!DOCTYPE html>
<HTML>
  <HEAD>
    <TITLE>Profile: <?php session_start(); echo $_SESSION['nickname'] ?></TITLE>
    
    <link rel='stylesheet' type='text/css' href='../css/profile.css'>
    
  </HEAD>
  <BODY>
   <center><a href="../index.php">Main page</a><br></center>
    <div class='logo'>
      <?php include 'checklogo.php'; ?>
      <center>
      <form action='changelogo.php' enctype='multipart/form-data' method='post'>
        <input type='hidden' name="id" value="<?php echo $_SESSION['id']; ?>">
        <input type='hidden' name='MAX_FILE_SIZE' value='100000'>
        Send this file:<input type='file' name='userfile'>
        <input type='submit' value='change logo'>
      </form>
      <form action='../changeuserinfo.php' method='post'>
        <input type='submit' value='change info'>
      </form>
      </center>
  
   </div>
   <div class='info'>
      Nickname:<br>
      Rule: <br>
      E-mail: <br>
      Name: <br>
      Surname: 
   </div>
   <div class='values'>
      <?php 
        
        echo $_SESSION['nickname']; echo "<br>";
        echo $_SESSION['rule']; echo "<br>";
        echo $_SESSION['email']; echo "<br>";
        echo $_SESSION['name']; echo "<br>";
        echo $_SESSION['surname'];
        
      ?>
   </div>

  </BODY>
</HTML>