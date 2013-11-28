<?php 
  include 'db.php';
  include 'lang/language.php';
?>



	<center>
<?php
  echo $t;
  echo "<br>";
  echo $d['cdate'];
  echo "<br>";
  if ($_SESSION['rule'] == 'admin') {
  	include 'admdelcomment.php';
  }
  
  ?>
  </center>
  <?php 
    echo $c;
   ?>
<br>
