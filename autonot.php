<!DOCTYPE html>

<div class="autorizationNOT">
  <form action="userlogin.php" method="post">
    Nickname:
    <input type="text" name="nickname" size=15 maxLength=15>
    Password:
    <input type="password" name="password" size=10 maxLength=15>
    <input type="submit" name="submit" value="log-in">
    <?php global $auth_error; echo $auth_error; ?>
    <a href="registration.php">Registration</a>
 </form>
</div>


