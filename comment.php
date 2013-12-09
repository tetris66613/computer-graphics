 <div class="comments">
      <?php
        include 'db.php';
        $db->makeCommentsList($_GET['page'], $_GET['id']);
       ?>
    </div>