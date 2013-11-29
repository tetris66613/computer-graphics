 <?php 
  include 'db.php';
  include 'lang/language.php';
?>

<!DOCTYPE html>

  
    <a href="article.php?id=<?php echo $ai['id'].'&' ?>
                         lang=<?php echo $_SESSION['lang'].'&' ?>
                         page=1">
      <?php 
        
        echo $t;
        
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
    echo $a;
    
    
   
       
   
  ?>
  
     <a href="article.php?id=<?php echo $ai['id'].'&' ?>
                         lang=<?php echo $_SESSION['lang'].'&' ?>
                         page=1">Read more</a>
  <br><br>