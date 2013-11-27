<!DOCTYPE html>
<HTML>
  <HEAD>
    <TITLE>Users list</TITLE>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    
    
  </HEAD>
  <BODY>
    <?php 
        include 'checkauto.php';
        include 'sitetitle.php';
         
      ?>
    

      <div class="editTranslate">
        <div class="lTB">
          Registration link text:<br>
          Log-in button text:<br>
          Log-out button text:<br>
          Open own profile text:<br>
          User permission text:<br>
          Nickname text:<br>
          Password text:<br>
          Admin show all users button text:<br>
          Admin site settings button text:<br>
          Main menu link text:<br>
          Show articles list menu link text:<br>
          About site menu link text:<br>
        </div>
        <div class="rTB">
          <form action="updSiteText.php" method="post">
            <input type="text" size="20" name="vreglink" 
            value="<?php echo $langdata['5'][$_SESSION['lang']]; ?>"><br>
            <input type="text" size="20" name="vlogin"
            value="<?php echo $langdata['4'][$_SESSION['lang']]; ?>"><br>
            <input type="text" size="20" name="vuserleave"
            value="<?php echo $langdata['8'][$_SESSION['lang']]; ?>"><br>
            <input type="text" size="20" name="vuserinfo"
            value="<?php echo $langdata['7'][$_SESSION['lang']]; ?>"><br>
            <input type="text" size="20" name="vrule"
            value="<?php echo $langdata['6'][$_SESSION['lang']]; ?>"><br>
            <input type="text" size="20" name="vnick"
            value="<?php echo $langdata['2'][$_SESSION['lang']]; ?>"><br>
            <input type="text" size="20" name="vpass"
            value="<?php echo $langdata['1'][$_SESSION['lang']]; ?>"><br>
            <input type="text" size="20" name="vadmusersedit"
            value="<?php echo $langdata['9'][$_SESSION['lang']]; ?>"><br>
            <input type="text" size="20" name="vadmsitesettings"
            value="<?php echo $langdata['22'][$_SESSION['lang']]; ?>"><br>
            <input type="text" size="20" name="vmain"
            value="<?php echo $langdata['0'][$_SESSION['lang']]; ?>"><br>
            <input type="text" size="20" name="varticleslist"
            value="<?php echo $langdata['10'][$_SESSION['lang']]; ?>"><br>
            <input type="text" size="20" name="vabout"
            value="<?php echo $langdata['3'][$_SESSION['lang']]; ?>"><br>
          
        </div>
          <center><input type="submit" value="Update"></center>
        </form>
      </div>
       
    
    
  </BODY>
</HTML>