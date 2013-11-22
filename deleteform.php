<div class="adminf">
	<form action="deleteuser.php" method="post">
	 <input type="hidden" name="nick" value=<?php global $nick; echo $nick; ?>>
	 <input type="submit" value="delete">
    </form>
    <form action="admchangeuserinfo.php" method="post">
    	<input type="hidden" name="rule" value=<?php global $grule; echo $grule; ?>>
    	<input type="hidden" name="nick" value=<?php global $nick; echo $nick; ?>>
    	<input type="submit" value="edit">
    </form>
</div>
