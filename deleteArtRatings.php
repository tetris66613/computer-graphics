 <form action="delRates.php" method="post">
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <input type="hidden" name="page" value="<?php echo $_GET['page']; ?>">
        <input type="submit" value="delete all ratings">
  </form>