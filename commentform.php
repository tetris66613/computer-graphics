 

      <form action="addComment.php" method="post">
        <input type="hidden" name="artId" value="<?php echo $_GET['id'] ?>">
        <input type="hidden" name="nick" value="<?php echo $_SESSION['nickname'] ?>">
        <input type="text" name="theme" size="20">
        <textarea name="text" rows=5>
        </textarea><br>
        <input type="submit" value="send">
      </form>