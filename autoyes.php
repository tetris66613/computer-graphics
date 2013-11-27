<!DOCTYPE html>

<center><div class="autorizationYES">
  <?php 
    echo $_SESSION['nickname'] . " "; 
    echo $langdata['6'][$_SESSION['lang']];
    echo ": " . $_SESSION['rule'];  ?>
  <form action="profile.php" method="post">
  	<input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
  	<input type="submit" name="profile" value="<?php echo $langdata['7'][$_SESSION['lang']]; ?>">
  </form>
  <form action="logout.php" method="post">
    <input type="submit" name="submit" value="<?php echo $langdata['8'][$_SESSION['lang']]; ?>">
  </form>
  <?php 
    if ($_SESSION['rule'] == 'admin') { 
      include 'userlistbutton.php';
      include 'sitesettingsbutton.php';
    } 
      ?>
  <a href="index.php?glang=en"><img src="lang/uk.gif" width="33px" height="20px"></a>
  <a href="index.php?glang=uk"><img src="lang/ua.gif" width="33px" height="20px"></a>
</div></center>