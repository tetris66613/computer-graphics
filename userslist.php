<!DOCTYPE html>
<HTML>
  <HEAD>
    <TITLE>Users list</TITLE>

    <link rel="stylesheet" type="text/css" href="css/userslist.css">
    
    
  </HEAD>
  <BODY>
    <center><a href="index.php">Main page</a></center>
    <div class="admins">
      <h3>Administrators</h3><br>

      <?php
        include 'db.php';
        
        $db->selectFromWhere('users_info', 'rule', 'admin');
      ?>

    </div>

    <div class="editors">
      <h3>Editors</h3><br>

      <?php
        include 'db.php';
        
        $db->selectFromWhere('users_info', 'rule', 'editor');
        
      ?>

    </div>

    <div class="users">
      <h3>Users</h3><br>

      <?php
        include 'db.php';
        
        $db->selectFromWhere('users_info', 'rule', 'user');
      ?>

    </div>

    <div class="banned">
      <h3>Banned</h3><br>

      <?php
        include 'db.php';
        
        $db->selectFromWhere('users_info', 'rule', 'banned');
      ?>

    </div>
    
  </BODY>
</HTML>