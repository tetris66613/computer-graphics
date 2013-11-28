 <div class="comments">
      <?php
        include 'db.php';
        $db->makeCommentsList($_GET['page']);
       ?>
    </div>