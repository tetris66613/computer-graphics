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
  	protected $Rows;
  	function __construct($u, $p) {
  		$this->user = $u;
  		$this->pass = $p;
  		$this->usersTable = 'users_info';
  		$this->articlesTable = 'articles_info';
  	}
  	public function dbConnect($host, $dbname) {
  		$this->host = $host;
  		$this->dbname = $dbname;
  		$this->dbh = new PDO("mysql:localhost=$this->host; dbname=$this->dbname", $this->user, $this->pass);
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
  				$auth_error = "your are banned and can't log in";
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
      for ($i = 1; $i <= $pages; ++$i) {
        $p = $i;
        include 'pages.php';
      }
      echo "</div>";
      echo "<br>";
      
  		$data = $this->selectColumn('title', 'articles_info', $page);
      $count = count($data);
  		if ($count > 0) {
  			$title = $this->selectColumn('title', 'articles_info', $page);
  			$annotation = $this->selectColumn('annotation', 'articles_info', $page);
  			$nickname = $this->selectColumn('nickname', 'articles_info', $page);
  			$date = $this->selectColumn('wdate', 'articles_info', $page);
  			$aid = $this->selectColumn('id', 'articles_info', $page);
  			for ($i = 0; $i < $count; ++$i) {
  				$t = $title[$i];
  	            $a = $annotation[$i];
  	            $n = $nickname[$i];
                $d = $date[$i];
                $ai = $aid[$i];
  	            include 'artlist.php';
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
    public function addArticle($nickname, $title, $annotation, $full_text, $date) {
      $sql = "INSERT INTO $this->articlesTable 
      (nickname, title, annotation, full_text, wdate) VALUES (:nick, :title, :ann, :ft, :dt)";
      $q = $this->dbh->prepare($sql);
      $q->execute(array(':nick' => $nickname,
                        ':title' => $title,
                        ':ann' => $annotation,
                        ':ft' => $full_text,
                        ':dt' => $date));
      $last = $this->dbh->lastInsertId();
      $header = "articles/article.php?id=$last";
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
    public function showArticle($id) {
      global $gtitle, $gdate, $gfull_text;
      $sql = "SELECT title, wdate, full_text FROM $this->articlesTable
      WHERE id = :id";
      $q = $this->dbh->prepare($sql);
      $q->execute(array(':id' => $id));
      $data = $q->fetch();
      $gtitle = $data['title'];
      $gdate = $data['wdate'];
      $gfull_text = $data['full_text'];
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
  }
 ?>