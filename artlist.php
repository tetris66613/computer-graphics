 <?php 
  include 'db.php';
  include 'lang/language.php';
?>

<!DOCTYPE html>

  
    <a href="article.php?id=<?php echo $ai['id']; ?>">
      <?php 
        if ($_SESSION['lang'] == 'en') {
          echo $t['title'];
        } elseif ($_SESSION['lang'] == 'uk') {
          echo $t['titleUK'];
        }
         
        ?>
    </a>
  <br>
  (<?php echo $langdata['20'][$_SESSION['lang']]; ?> 
  <form action="seeprofile.php" method="post">
      <input type="hidden" name="nick" value="<?php echo $n['nickname']; ?>">
      <input type="submit" name="submit" value="<?php echo $n['nickname']; ?>">
  </form>
      
    
  )
  <?php 
    if (!empty($_SESSION['id'])) {
      if ($_SESSION['rule'] == 'admin' || $_SESSION['nickname'] == $n['nickname']) {
        include 'articlefunc.php';
      } 
    } else {
      echo "<br>";
    }
  ?>
  <font size="3" color="white">
    [<?php echo $d['wdate']; ?>] 
  </font><br>
  <br>
  <?php 
    if ($_SESSION['lang'] == 'en') {
          echo $t['title'];
    } elseif ($_SESSION['lang'] == 'uk') {
          echo $t['titleUK'];
    }
  ?>
  
    <a href="article.php?id=<?php echo $ai['id']; ?>">
      <?php echo $langdata['21'][$_SESSION['lang']]; ?>
    </a>
  <br><br>