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
  <a href="?glang=en&page=1
  <?php
    if (isset($_GET['page'])) {
      echo '&page='.$_GET['page'];
    }
    if (isset($_POST['nick'])) {
        echo '&nick=' . $_POST['nick'];
      }
    if (isset($_GET['id'])) {
      echo '&id='.$_GET['id'];
    }
    ?>"><img src="lang/uk.gif" width="33px" height="20px"></a>
  <a href="?glang=uk&page=1
  <?php
    if (isset($_GET['page'])) {
      echo '&page='.$_GET['page'];
    }
    if (isset($_POST['nick'])) {
        echo '&nick=' . $_POST['nick'];
      }
    if (isset($_GET['id'])) {
      echo '&id='.$_GET['id'];
    }
    ?>"><img src="lang/ua.gif" width="33px" height="20px"></a>
</div></center>