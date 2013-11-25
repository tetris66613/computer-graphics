<!DOCTYPE html>

<div class="autorizationNOT">
	<div class="chooseLang">
      <a href="lang/language.php?lang=en"><img src="lang/uk.gif" width="33px" height="20px"></a>
	  <a href="lang/language.php?lang=uk"><img src="lang/ua.gif" width="33px" height="20px"></a>
    </div>
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


