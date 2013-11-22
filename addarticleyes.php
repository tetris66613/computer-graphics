<!DOCTYPE html>

<div class="info">
	<?php include 'makearticlelist.php'; ?>
	<div class="add-articleYES">
		<center>Add your article:</center>
		<form action="addArticle.php" method="post">
			Title: <br>
			<input type="text" name="title" class="text" maxLength="100"><br>
			Annotation: <br>
			<textarea name="annotation" rows="8" cols="100" ></textarea><br>
			Full text: <br>
			<textarea name="full_text" rows="25" cols="100"></textarea><br>
			<input type="submit" value="submit" class="text">
		</form>
	</div>
</div>