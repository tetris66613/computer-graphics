<div class='text'>
      <?php 
        echo $gfull_text; 
      ?><br>
      <form action="artRate.php" method="get">
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <input type="radio" name="rate" value="1">1
        <input type="radio" name="rate" value="2">2
        <input type="radio" name="rate" value="3">3
        <input type="radio" name="rate" value="4">4
        <input type="radio" name="rate" value="5">5
        <input type="submit" value="Rate">
      </form>
    </div>