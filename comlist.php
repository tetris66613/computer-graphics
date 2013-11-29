<?php 
  include 'db.php';
  include 'lang/language.php';
?>



	<center>
<?php
  echo $t;
  echo "<br>";
  echo $d['cdate'];
  ?>

   <form action="seeprofile.php" method="post">
     <input type="hidden" name="nick" value="<?php echo $n['nick'] ?>">
     <input type="submit" value="<?php echo $n['nick'] ?>">
   </form>

<?php
  
  if (!empty($_SESSION['rule'])) {
    if ($_SESSION['rule'] == 'admin') {
  	include 'admdelcomment.php';
    }
  }
  
  ?>
  </center>
  <?php
    echo $c;
   ?>
<br>