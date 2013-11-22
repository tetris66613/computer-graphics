<!DOCTYPE html>

<form action="editarticle.php" method="post">
	<input type="hidden" name="artid" value="<?php  echo $ai['id']; ?>">
	<input type="hidden" name="artt" value="<?php  echo $t['title']; ?>">
	<input type="hidden" name="arta" value="<?php  echo $a['annotation']; ?>">
	
	<input type="submit" value="edit">
</form>

<form action="deletearticle.php" method="post">
	<input type='hidden' name="artid" value="<?php echo $ai['id']; ?>">
	<input type='submit' value='delete'>
</form>