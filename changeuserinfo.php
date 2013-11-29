 <?php 
  session_start();
  include 'db.php';
  include 'lang/language.php';
?>

<!DOCTYPE html>
<HTML>
  <HEAD>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <TITLE>Change info: <?php echo $_SESSION['nickname']; ?></TITLE>
    
   
    
  </HEAD>
  <BODY>
    <form action="profiles/updateuserinfo.php" method="post">
    <?php echo $langdata['13'][$_SESSION['lang']]; ?>: <input type="text" name="newname">
    <?php echo $langdata['14'][$_SESSION['lang']]; ?>: <input type="text" name="newsurname">
    <input type="submit" value="<?php echo $langdata['19'][$_SESSION['lang']]; ?>">
  </form>
     
  </BODY>
</HTML>