<!DOCTYPE html>
<HTML>
  <HEAD>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <TITLE>Profile</TITLE>
    
    <link rel='stylesheet' type='text/css' href='css/main.css'>
    
  </HEAD>
  <BODY>
    <?php 
        include 'checkauto.php';
        include 'sitetitle.php'; 
      ?>
    <div class='logo'>
      <?php 
        include 'profiles/checklogo.php'; 
      ?>
    </div>
      
      <form action='profiles/changelogo.php' enctype='multipart/form-data' method='post'>
        <input type='hidden' name="id" value="<?php echo $_SESSION['id']; ?>">
        <input type='hidden' name='MAX_FILE_SIZE' value='100000'>
        <?php echo $langdata['18'][$_SESSION['lang']]; ?>:
        <input type='file' name='userfile'>
        <input type='submit' value="<?php echo $langdata['17'][$_SESSION['lang']]; ?>">
      </form>
      <form action='changeuserinfo.php' method='post'>
        <input type='submit' value="<?php echo $langdata['16'][$_SESSION['lang']]; ?>">
      </form>
      
  
   <div class='pinfo'>
      <?php echo $langdata['2'][$_SESSION['lang']]; ?>:<br>
      <?php echo $langdata['6'][$_SESSION['lang']]; ?>: <br>
      <?php echo $langdata['12'][$_SESSION['lang']]; ?>: <br>
      <?php echo $langdata['13'][$_SESSION['lang']]; ?>: <br>
      <?php echo $langdata['14'][$_SESSION['lang']]; ?>: 
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