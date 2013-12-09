<!DOCTYPE html>

<div class="autorizationNOT">
	<div class="chooseLang">
    <a href="?glang=en&page=1
    <?php 
      if (isset($_GET['page'])) {
         echo '&page=' . $_GET['page'];
      }
      if (isset($_POST['nick'])) {
        echo '&nick=' . $_POST['nick'];
      }
      if (isset($_GET['id'])) 
      { 
        echo '&id='.$_GET['id']; 
      }
    ?>"><img src="lang/uk.gif" width="33px" height="20px"></a>
     
	 <a href="?glang=uk&page=1
    <?php 
      if (isset($_GET['page'])) {
         echo '&page=' . $_GET['page'];
      }
      if (isset($_POST['nick'])) {
        echo '&nick=' . $_POST['nick'];
      }
      if (isset($_GET['id'])) 
      { 
        echo '&id='.$_GET['id']; 
      }
    ?>"><img src="lang/ua.gif" width="33px" height="20px"></a>
    </div>
  <form action="userlogin.php" method="post">
    <?php echo $langdata['2'][$_SESSION['lang']]; ?>
    <input type="text" name="nickname" size=15 maxLength=15>
    <?php echo $langdata['1'][$_SESSION['lang']]; ?>
    <input type="password" name="password" size=10 maxLength=15>
    <input type="submit" name="submit" value="<?php echo $langdata['4'][$_SESSION['lang']]; ?>">
    <?php 
      global $auth_errorUK, $auth_errorEN;
      if ($_SESSION['lang'] == 'en') {
        echo $auth_errorEN;
      } else {
        echo $auth_errorUK;
      }
      ?>
    <a href="registration.php">
        <?php echo $langdata['5'][$_SESSION['lang']]; ?>
    </a>
    
 </form>
</div>


