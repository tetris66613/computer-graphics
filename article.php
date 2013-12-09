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
     Average rate: <?php 
                     if ($gRate) {
                      echo $gRate;
                     } else {
                      echo "any don't rate this article";
                     }
                     echo "<br>";
                     echo $gfull_text; 
                     if ($_SESSION['rule'] == 'admin') {
                       include 'deleteArtRatings.php';
                     }
                     
                    ?>
     


    </div>
    
    <?php
      if (isset($_SESSION['nickname'])) {
        $urate = $db->checkRate($_SESSION['nickname'], $_GET['id']);   
      }
      
      if (empty($_SESSION['rule'])) {
        include 'comment.php';
      } elseif (!empty($_SESSION['rule']) && !empty($urate['rate'])) {
        include 'commentform.php';

        echo "Your rate: " . $urate['rate'];
        include 'comment.php';
      } elseif (!empty($_SESSION['rule']) && empty($urate['rate'])) {
        include 'commentform.php';
        include 'rate.php';
        include 'comment.php';
      }
    ?>
  </body>
</html>