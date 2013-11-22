<!DOCTYPE html>
<HTML>
  <HEAD>
    <TITLE>Computer Graphics</TITLE> 

    <link rel="stylesheet" type="text/css" href="css/reg.css">
  </HEAD>
  <BODY>
    <div class="regist-blank">
      <div class="rb-left">
        <font color="red">*</font>Nickname:<br>
        <font color="red">*</font>Password:<br>
        <font color="red">*</font>Repeat:<br>
        <font color="red">*</font>E-mail:<br>
        Name:<br>
        Surname:
      </div>
      <div class="rb-right">
        <form action="register.php" method="post">
          <input type="text" name="nickname" size="18"><br>
          <input type="password" name="password" size="18"><br>
          <input type="password" name="rpassword" size="18"><br>
          <input type="text" name="email" size="18"><br>
          <input type="text" name="name" size="18"><br>
          <input type="text" name="surname" size="18">
      </div>
          <font color = "red">
            <?php 
              global $reg_errors;
              echo $reg_errors;   
            ?>
          </font><br>
          <font color="red">*</font> - this paramater can't be empty<br>
          <input type="submit" value="Register">
        </form> 
    </div> 
  </BODY>
</HTML>