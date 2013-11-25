<!DOCTYPE html>

<center><div class="autorizationYES">
  <?php echo $_SESSION['nickname'] . " rule: " . $_SESSION['rule'];  ?>
  <form action="profiles/profile.php" method="post">
  	<input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
  	<input type="submit" name="profile" value="profile">
  </form>
  <form action="logout.php" method="post">
    <input type="submit" name="submit" value="log-out">
  </form>
  <?php if ($_SESSION['rule'] == 'admin') { include 'userlistbutton.php'; } ?>
  <a href="lang/language.php?lang=en"><img src="lang/uk.gif" width="33px" height="20px"></a>
  <a href="lang/language.php?lang=uk"><img src="lang/ua.gif" width="33px" height="20px"></a>
</div></center>