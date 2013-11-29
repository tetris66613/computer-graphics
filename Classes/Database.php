<?php
  abstract class aDatabase {
  	protected $user;
  	protected $pass;
  	protected $host;
  	protected $dbname;
  	protected $dbh;
  	abstract public function dbConnect($host, $dbname);
  }

  class MySQL_Database extends aDatabase {
  	protected $usersTable;
  	protected $articlesTable;
    protected $langTable;
    protected $commentTable;
    protected $rateTable;
  	protected $Rows;
  	function __construct($u, $p) {
  		$this->user = $u;
  		$this->pass = $p;
  		$this->usersTable = 'users_info';
  		$this->articlesTable = 'articles_info';
      $this->langTable = 'menu_lang';
      $this->commentTable = 'comments';
      $this->rateTable = 'art_ratings';
  	}
  	public function dbConnect($host, $dbname) {
  		$this->host = $host;
  		$this->dbname = $dbname;
      $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
  		$this->dbh = new PDO("mysql:localhost=$this->host; dbname=$this->dbname", 
                           $this->user, $this->pass, $options);
  	}
    public function checkUserExists($nick, $email) {
      $sql = "SELECT * FROM $this->usersTable WHERE nickname = :n OR email = :e";
      $q = $this->dbh->prepare($sql);
      $q->execute(array(':n' => $nick,
                        ':e' => $email));
      return($q->fetch());

    }
  	public function addUser($nickname, $password, $email, $name, $surname) {
  		$sql = "INSERT INTO $this->usersTable (nickname, password, email, name, surname) 
        VALUES (:nickname, :password, :email, :name, :surname)";
        $q = $this->dbh->prepare($sql);
        $q->execute(array(':nickname' => $nickname,
                    ':password' => $password,
                    ':email' => $email,
                    ':name' => $name,
                    ':surname' => $surname));
  	}
  	public function loginUser($nickname, $password) {
      global $auth_error;
  		$sql = "SELECT id, password, email, rule, name, surname FROM $this->usersTable
  		WHERE nickname = :nickname";
  		$q = $this->dbh->prepare($sql);
  		$q->execute(array(':nickname' => $nickname));
  		$data = $q->fetch();
  		$stored_password = $data['password'];
  		$id = $data['id'];
  		$rule = $data['rule'];
  		$name = $data['name'];
  		$surname = $data['surname'];
  		$email = $data['email'];
  		if ($stored_password === $password) {
  			if ($rule == 'banned') {
          global $auth_errorUK, $auth_errorEN;
  				$auth_errorEN = "your are banned";
          $auth_errorUK = "ви забанені";
  				include 'index.php';
  			} else {
  				session_start();
                $_SESSION['id'] =  $id;
                $_SESSION['nickname'] = $nickname;
                $_SESSION['rule'] = $rule;
                $_SESSION['email'] = $email;
                $_SESSION['name'] = $name;
                $_SESSION['surname'] = $surname;

                $autorize = true;
                header('location: index.php');
            }
        } else {
        	$auth_error = 'password or nick wrong';
        	include 'index.php';
        }
  	}
  	public function deleteUser($nick) {
  		$sql = "DELETE FROM $this->usersTable WHERE nickname = :nick";
  		$q = $this->dbh->prepare($sql);
  		$q->execute(array(':nick' => $nick));
  	}
  	protected function rowsInTable($table) {
  		$sql = "SELECT id FROM $table";
  		$q = $this->dbh->prepare($sql);
  		$q->execute();
  		$rows = $q->rowCount();
  		return $rows;
  	}
  	protected function selectColumn($column, $table, $page) {
      $v = ($page - 1) * 10;
  		$sql = "SELECT $column FROM $table LIMIT $v, 10";
  		$q = $this->dbh->prepare($sql);
  		$q->execute();
  		$data = $q->fetchAll(PDO::FETCH_ASSOC);
  		return $data;
  	}
  	public function makeArticlesList($page) {
      $rows = $this->rowsInTable('articles_info');
      $pages = (($rows - $rows%10)/10) + 1;
      echo "<div class=pages>";
      for ($i = 1; $i <= $pages; $i++) {
        include 'pages.php';
      }
      echo "</div>";
      echo "<br>";
      
  		$data = $this->selectColumn('title', 'articles_info', $page);
      $count = count($data);
      if ($_SESSION['lang'] == 'en') {
        if ($count > 0) {
        $title = $this->selectColumn('title', 'articles_info', $page);
        $annotation = $this->selectColumn('annotation', 'articles_info', $page);
        $nickname = $this->selectColumn('nickname', 'articles_info', $page);
        $date = $this->selectColumn('wdate', 'articles_info', $page);
        $aid = $this->selectColumn('id', 'articles_info', $page);
        for ($i = 0; $i < $count; ++$i) {
          $ti = $title[$i];
          $an = $annotation[$i];
          $t = htmlentities($ti['title']);
          $a = htmlentities($an['annotation']);
          $n = $nickname[$i];
          $d = $date[$i];
          $ai = $aid[$i];
          include 'artlist.php';
         }
        }
      } elseif ($_SESSION['lang'] == 'uk') {
        if ($count > 0) {
        $title = $this->selectColumn('titleUK', 'articles_info', $page);
        $annotation = $this->selectColumn('annotationUK', 'articles_info', $page);
        $nickname = $this->selectColumn('nickname', 'articles_info', $page);
        $date = $this->selectColumn('wdate', 'articles_info', $page);
        $aid = $this->selectColumn('id', 'articles_info', $page);
        for ($i = 0; $i < $count; ++$i) {
          $ti = $title[$i];
          $an = $annotation[$i];
          $t = htmlentities($ti['titleUK']);
          $a = htmlentities($an['annotationUK']);
          $n = $nickname[$i];
          $d = $date[$i];
          $ai = $aid[$i];
          include 'artlist.php';
        }
        }
      }
    }
                

  	public function selectFromWhere($table, $where, $val) {
      global $nick, $grule, $gname, $gsurname;
  		$sql = "SELECT nickname, name, surname FROM $table WHERE $where = :w";
  		$q = $this->dbh->prepare($sql);
  		$q->execute(array(':w' => $val));
  		$data = $q->fetchAll();
  		foreach ($data as $key => $value) {
  			$nick = $value['nickname'];
        $gname = $value['name'];
        $gsurname = $value['surname'];
        $grule = $val;
  			echo $nick; include 'deleteform.php'; echo "<br>";

  		}
  	}
    public function updateUserInfo($newname, $newsurname, $nickname) {
      $sql = "UPDATE $this->usersTable SET name = :name, surname = :surname WHERE nickname = :nickname";
      $q = $this->dbh->prepare($sql);
      $q->execute(array(':name' => $newname,
                        ':surname' => $newsurname,
                        ':nickname' => $nickname));
      $_SESSION['name'] = $newname;
      $_SESSION['surname'] = $newsurname;
    }
    public function addArticle($nick, $t, $ann, $ft, $tUK, $annUK, $ftUK, $date) {
      $sql = "INSERT INTO $this->articlesTable 
      (nickname, title, annotation, full_text, titleUK, annotationUK, full_textUK, wdate) 
      VALUES (:nick, :t, :ann, :ft, :tUK, :annUK, :ftUK, :dt)";
      $q = $this->dbh->prepare($sql);
      $q->execute(array(':nick' => $nick,
                        ':t' => $t,
                        ':ann' => $ann,
                        ':ft' => $ft,
                        ':tUK' => $tUK,
                        ':annUK' => $annUK,
                        ':ftUK' => $ftUK,
                        ':dt' => $date));
      $last = $this->dbh->lastInsertId();
      $header = "article.php?id=$last";
      header("location: $header");
    }
    public function deleteArticle($id) {
      $sql = "DELETE FROM $this->articlesTable WHERE id = :id";
      $q = $this->dbh->prepare($sql);
      $q->execute(array(':id' => $id));
    }
    public function editArticle($id) {
      global $full_text;
      $sql = "SELECT full_text FROM $this->articlesTable WHERE id = :id";
      $q = $this->dbh->prepare($sql);
      $q->execute(array(':id' => $id));
      $data = $q->fetch();
      $full_text = $data['0'];
    }
    public function updateArticle($t, $a, $f, $id) {
      $sql = "UPDATE $this->articlesTable 
      SET title = :title, annotation = :ann, full_text = :ft WHERE id = :id";
      $q = $this->dbh->prepare($sql);
      $q->execute(array(':title' => $t,
                        ':ann' => $a,
                        ':ft' => $f,
                        ':id' => $id));
    }
    public function showArticle($id, $lang) {
      global $gtitle, $gdate, $gfull_text, $gRate;
      switch ($lang) {
        case 'en': $sql = "SELECT title, wdate, full_text, avrRate FROM $this->articlesTable
                   WHERE id = :id";
                   $q = $this->dbh->prepare($sql);
                   $q->execute(array(':id' => $id));
                   $data = $q->fetch();
                   $gtitle = htmlentities($data['title']);
                   $gdate = htmlentities($data['wdate']);
                   $gfull_text = htmlentities($data['full_text']);
                   $gRate = $data['avrRate'];
                   break;
        case 'uk': $sql = "SELECT titleUK, wdate, full_textUK, avrRate FROM $this->articlesTable
                   WHERE id = :id";
                   $q = $this->dbh->prepare($sql);
                   $q->execute(array(':id' => $id));
                   $data = $q->fetch();
                   $gtitle = htmlentities($data['titleUK']);
                   $gdate = htmlentities($data['wdate']);
                   $gfull_text = htmlentities($data['full_textUK']);
                   $gRate = $data['avrRate'];
                   break;
        default: $sql = "SELECT title, wdate, full_text, avrRate FROM $this->articlesTable
                 WHERE id = :id";
                 $q = $this->dbh->prepare($sql);
                 $q->execute(array(':id' => $id));
                 $data = $q->fetch();
                 $gtitle = htmlentities($data['title']);
                 $gdate = htmlentities($data['wdate']);
                 $gfull_text = htmlentities($data['full_text']);
                 $gRate = $data['avrRate'];
      }
    }
    public function showUserInfo($nick) {
      global $grule, $gemail, $gname, $gsurname;
      $sql = "SELECT rule, email, name, surname FROM $this->usersTable
      WHERE nickname = :n";
      $q = $this->dbh->prepare($sql);
      $q->execute(array(':n' => $nick));
      $data = $q->fetch();
      $grule = $data['rule'];
      $gemail = $data['email'];
      $gname = $data['name'];
      $gsurname = $data['surname'];
    }
    public function admUpdateUserInfo($nick, $newname, $newsurname, $rule) {
      $sql = "UPDATE $this->usersTable
      SET name = :name, surname = :surname, rule = :rule WHERE nickname = :nick";
      $q = $this->dbh->prepare($sql);
      $q->execute(array(':name' => $newname,
                        ':surname' => $newsurname,
                        ':rule' => $rule,
                        ':nick' => $nick));

    }
    public function chooseLang($lang) {
      $sql = "SELECT $lang FROM $this->langTable";
      $q = $this->dbh->prepare($sql);
      $q->execute();
      return($q->fetchAll()); 
    }
    public function updateSiteText($val, $newtext) {
      $l = $_SESSION['lang'];
      $sql = "UPDATE $this->langTable SET $l = :new WHERE val = :v";
      $q = $this->dbh->prepare($sql);
      $q->execute(array(':new' => $newtext,
                        ':v' => $val));
    }
    public function addComment($artId, $nick, $theme, $text, $cdate) {
      $l = $_SESSION['lang'];
      $sql = "INSERT INTO $this->commentTable"."$l"." (nick, theme, cText, artId, cdate) 
      VALUES (:n, :th, :tx, :ai, :dt)";
     
      $q = $this->dbh->prepare($sql);
      $q->execute(array(':n' => $nick,
                        ':th' => $theme,
                        ':tx' => $text,
                        ':ai' => $artId,
                        ':dt' => $cdate));
    }
    public function makeCommentsList($page) {
      $l = $_SESSION['lang'];
      $table = $this->commentTable.$l;
      $rows = $this->rowsInTable($table);
      $pages = (($rows - $rows%10)/10) + 1;
      echo "<div class=pages>";
      for ($i = 1; $i <= $pages; $i++) {
        include 'cpages.php';
      }
      echo "</div>";
      echo "<br>";
      
      $data = $this->selectColumn('nick', $table, $page);
      $count = count($data);
      
        if ($count > 0) {
        $theme = $this->selectColumn('theme', $table, $page);
        $ctext = $this->selectColumn('ctext', $table, $page);
        $nickname = $this->selectColumn('nick', $table, $page);
        $date = $this->selectColumn('cdate', $table, $page);
        $cid = $this->selectColumn('id', $table, $page);
        for ($i = 0; $i < $count; ++$i) {
          $th = $theme[$i];
          $ct = $ctext[$i];
          $t = htmlentities($th['theme']);
          $c = htmlentities($ct['ctext']);
          $n = $nickname[$i];
          $d = $date[$i];
          $ci = $cid[$i];
          include 'comlist.php';
         }
        }   
    }
    public function deleteComment($id) {
      $sql = "DELETE FROM $this->commentTable".$_SESSION['lang']." WHERE id = :id";
      $q = $this->dbh->prepare($sql);
      $q->execute(array(':id' => $id));
    }
    protected function assumeArtRate($id) {
      $sql = "SELECT SUM(rate) FROM $this->rateTable WHERE artid = :id";
      $q = $this->dbh->prepare($sql);
      $q->execute(array(':id' => $id));
      return($q->fetch());
    }
    public function rateArticle($artid, $nick, $rate) {
      $sql = "INSERT INTO $this->rateTable (artId, nick, rate) 
      VALUES (:a, :n, :r)";
      $q = $this->dbh->prepare($sql);
      $q->execute(array(
        ':a' => $artid,
        ':n' => $nick,
        ':r' => $rate));
      $sql = "SELECT rate FROM $this->rateTable WHERE artid = :id";
      $q = $this->dbh->prepare($sql);
      $q->execute(array(':id' => $artid));
      $rRows = $q->rowCount();
      $sume = $this->assumeArtRate($artid);
      $avrRate = $sume['0']/$rRows;
      $sql = "UPDATE $this->articlesTable SET avrRate = :ar WHERE id = :id";
      $q = $this->dbh->prepare($sql);
      $q->execute(array(
        ':ar' => $avrRate,
        ':id' => $artid));
    }
  }
 ?>