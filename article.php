<!DOCTYPE html>
<html>
  <head>
    <title>Article</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel='stylesheet' name='text/css' href='css/main.css'>

  </head>
  <body>
    <?php
      include 'checkauto.php';
      include 'sitetitle.php';
      include 'db.php';
      $db->showArticle($_GET['id'], $_SESSION['lang']);
    ?>
    <div class='title'>
      <center>
        <?php echo $gtitle; ?><br>
        <?php echo $gdate; ?><br>
      </center>
     Average rate: <?php echo $gRate; ?>


    </div>
    <div class='text'>
      <?php 
        echo $gfull_text; 
      ?><br>
      <form action="artRate.php" method="get">
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <input type="radio" name="rate" value="1">1
        <input type="radio" name="rate" value="2">2
        <input type="radio" name="rate" value="3">3
        <input type="radio" name="rate" value="4">4
        <input type="radio" name="rate" value="5">5
        <input type="submit" value="Rate">
      </form>
    </div>
    <?php
     
      if (!empty($_SESSION['rule'])) {
        include 'commentform.php';
      }  
      include 'comment.php';
    ?>
  </body>
</html>