<!DOCTYPE html>
<HTML>
  <HEAD>
    <TITLE>Profile: username</TITLE>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel='stylesheet' type='text/css' href='css/main.css'>
    
  </HEAD>
  <BODY>
    
    <?php 
        include 'checkauto.php';
        $db->showUserInfo($_POST['nick']);
        include 'sitetitle.php';
      ?>
    <div class='logo'>
      <?php 
        $img = 'profiles/'.$_POST['nick'];
        if (file_exists($img)) {
          echo "<img src=$img>";
        } else {
          echo "<img src=../I/logo.jpg>";
        }
        ?>
   </div>
   <div class='pinfo'>
      Nickname:<br>
      Rule: <br>
      E-mail: <br>
      Name: <br>
      Surname: 
   </div>
   <div class='values'>
      <?php echo $_POST['nick'] ?> <br>
      <?php echo $grule ?> <br>
      <?php 
        global $autorize;
        if ($autorize) {
           echo $gemail;
        } else {
          echo '';
        }
        ?> <br>
      <?php echo $gname ?> <br>
      <?php echo $gsurname ?>  
   </div>
   <?php 
     if (isset($_SESSION['nickname'])) {
        if ($_POST['nick'] == $_SESSION['nickname']) {
      header('location: profile.php');
    } 
     }
     
    ?>

  </BODY>
</HTML>