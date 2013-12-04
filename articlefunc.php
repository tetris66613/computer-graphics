<!DOCTYPE html>

<form action="editarticle.php" method="post">
	<input type="hidden" name="artid" value="<?php  echo $ai['id']; ?>">
	<input type="hidden" name="artt" value="<?php  echo $t; ?>">
	<input type="hidden" name="arta" value="<?php  echo $a; ?>">
	
	<input type="submit" value="<?php echo $langdata['24'][$_SESSION['lang']] ?>">
</form>

<form action="deletearticle.php" method="post">
	<input type='hidden' name="artid" value="<?php echo $ai['id']; ?>">
	<input type='submit' value="<?php echo $langdata['23'][$_SESSION['lang']] ?>">
</form>