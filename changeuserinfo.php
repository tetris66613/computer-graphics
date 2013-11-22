<!DOCTYPE html>
<HTML>
  <HEAD>
    <TITLE>Change info: <?php session_start(); echo $_SESSION['nickname']; ?></TITLE>
    
   
    
  </HEAD>
  <BODY>
    <form action="profiles/updateuserinfo.php" method="post">
    Name: <input type="text" name="newname">
    Surname: <input type="text" name="newsurname">
    <input type="submit" value="update">
  </form>
     
  </BODY>
</HTML>