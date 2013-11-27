<!DOCTYPE html>

<div class="info">
	<?php include 'makearticlelist.php'; ?>
	<div class="add-articleYES">
		<center>Add your article:</center>
		<form action="addArticle.php" method="post">
			<div class="addartEN">
				Title: <br>
				<input type="text" name="title" class="text" maxLength="100"><br>
				Annotation: <br>
				<textarea name="annotation" rows="8" cols="100" ></textarea><br>
				Full text: <br>
				<textarea name="full_text" rows="25" cols="100"></textarea><br>

		    </div>
		    <div class="addartUK">
				Заголовок: <br>
				<input type="text" name="titleUK" class="text" maxLength="100"><br>
				Аннотація: <br>
				<textarea name="annotationUK" rows="8" cols="100" ></textarea><br>
				Текст повністю: <br>
				<textarea name="full_textUK" rows="25" cols="100"></textarea><br>

		    </div>
		    <input type="submit" value="submit" class="text">
		</form>
	</div>
</div>