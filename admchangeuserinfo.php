<!DOCTYPE html>
<HTML>
  <HEAD>
    <TITLE>Change info: <?php echo $_POST['nick']; ?></TITLE>
  </HEAD>
  <BODY>
    <form action="edituser.php" method="post">
      <input type="hidden" name="nick" value=<?php echo $_POST['nick'] ?>>
    Name: <input type="text" name="admnewname">
    Surname: <input type="text" name="admnewsurname">
    <input type="radio" name="rule" value="admin" 
    <?php if ($_POST['rule'] == 'admin') echo 'checked' ?>>Admin
    <input type="radio" name="rule" value="editor"
    <?php if ($_POST['rule'] == 'editor') echo 'checked' ?>>Editor 
    <input type="radio" name="rule" value="user"
    <?php if ($_POST['rule'] == 'user') echo 'checked' ?>>User 
    <input type="radio" name="rule" value="banned"
    <?php if ($_POST['rule'] == 'banned') echo 'checked' ?>>Banned 
    <input type="submit" value="update">
  </form>
     
  </BODY>
</HTML>