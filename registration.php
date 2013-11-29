 <?php 
  session_start();
  include 'db.php';
  include 'lang/language.php';
  ?>

<!DOCTYPE html>
<HTML>
  <HEAD>
    <TITLE>Computer Graphics</TITLE> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="css/reg.css">
  </HEAD>
  <BODY>
   
    <div class="regist-blank">
      <div class="rb-left">
        <font color="red">*</font><?php echo $langdata['2'][$_SESSION['lang']]; ?>:<br>
        <font color="red">*</font><?php echo $langdata['1'][$_SESSION['lang']]; ?>:<br>
        <font color="red">*</font><?php echo $langdata['11'][$_SESSION['lang']]; ?>:<br>
        <font color="red">*</font><?php echo $langdata['12'][$_SESSION['lang']]; ?>:<br>
        <?php echo $langdata['13'][$_SESSION['lang']]; ?>:<br>
        <?php echo $langdata['14'][$_SESSION['lang']]; ?>:
      </div>
      <div class="rb-right">
        <form action="register.php" method="post">
          <input type="text" name="nickname" value="<?php global $nickname; echo $nickname ?>" size="18"><br>
          <input type="password" name="password" size="18"><br>
          <input type="password" name="rpassword" size="18"><br>
          <input type="text" name="email" value="<?php global $email; echo $email ?>" size="18"><br>
          <input type="text" name="name" value="<?php global $name; echo $name ?>" size="18"><br>
          <input type="text" name="surname" value="<?php global $surname; echo $surname ?>" size="18">
      </div>
          <font color = "red">
            <?php 
              switch ($_SESSION['lang']) {
                case 'en': global $reg_errorsEN;
                           echo $reg_errorsEN;
                           break;
                case 'uk': global $reg_errorsUK;
                           echo $reg_errorsUK;
                           break;
                default: global $reg_errorsEN;
                           echo $reg_errorsEN;
                           break;
              }
              
            ?>
          </font><br>
          <font color="red">*</font> - this paramater can't be empty<br>
          <input type="submit" value="<?php echo $langdata['15'][$_SESSION['lang']]; ?>">
        </form> 
    </div> 
  </BODY>
</HTML>