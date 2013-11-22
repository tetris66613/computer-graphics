<?php
  include 'db.php';

  /*$sql = 'SELECT id FROM  articles_info';
  $q = $dbh->prepare($sql);
  $q->execute();

  $rows = $q->rowCount();

  if ($rows > 0) {
  	$sql = 'SELECT title FROM articles_info';
  	$q = $dbh->prepare($sql);
  	$q->execute();
  	$title = $q->fetchAll(PDO::FETCH_ASSOC);
  	$sql = 'SELECT annotation FROM articles_info';
  	$q = $dbh->prepare($sql);
  	$q->execute();
  	$annotation = $q->fetchAll(PDO::FETCH_ASSOC);
  	$sql = 'SELECT nickname FROM articles_info';
  	$q = $dbh->prepare($sql);
  	$q->execute();
  	$nickname = $q->fetchAll(PDO::FETCH_ASSOC);
    $sql = 'SELECT wdate FROM articles_info';
    $q = $dbh->prepare($sql);
    $q->execute();
    $date = $q->fetchAll(PDO::FETCH_ASSOC);
    $sql = 'SELECT id FROM articles_info';
    $q = $dbh->prepare($sql);
    $q->execute();
    $aid = $q->fetchAll(PDO::FETCH_ASSOC);
  	
    for ($i = $rows-1; $i >= 0; --$i) {
      $t = $title[$i];
  	  $a = $annotation[$i];
  	  $n = $nickname[$i];
      $d = $date[$i];
      $ai = $aid[$i];
  	  include 'artlist.php';
  	} 
  } */

  
  $db->makeArticlesList();
      
      
?>