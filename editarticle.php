<!DOCTYPE html>
<HTML>
  <HEAD>
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <TITLE>Change article</TITLE>
    
   
    
  </HEAD>
  <BODY>
  	
    <form action="updatearticle.php" method="post">
    	<input type="hidden" name="uptid" value="<?php echo $_POST['artid']; ?>">
    	Title: <br>
		<input type="text" name="title" maxLength="100" value="<?php echo $_POST['artt']; ?>"><br>
		Annotation: <br>
		<textarea name="annotation" rows="8" cols="100"><?php echo $_POST['arta']; ?></textarea><br>
		Full text: <br>
		<textarea name="full_text" rows="25" cols="100">
			<?php
			  include 'db.php';
			  $db->editArticle($_POST['artid']);
			  include 'func.php';
			  echo br2nl($full_text);
			 ?>

		</textarea><br>
		<input type="submit" value="update">

	

  </form> 
  </BODY>
</HTML>

