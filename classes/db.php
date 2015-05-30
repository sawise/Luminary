<?php
	class Db{
		private $dbh = null;

		public function __construct() {
			try {
				$this->dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8", DB_USER, DB_PASS,
				array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
				} catch(PDOException $e) {
					echo $e->getMessage();
			}
		}

		private $users_sql = "select * from users";

		public function deleteUser($id){
	      $sql = "delete FROM users WHERE id = :id";
	      $sth = $this->dbh->prepare($sql);
	      $sth->bindParam(':id', $id, PDO::PARAM_INT);
	      $sth->execute();

	      if ($sth->rowCount() > 0) {
	        return true;
	      } else {
	        return false;
	      }
	    }

    	public function createUser($firstname, $lastname, $personalId, $employmentdate){
			$data = array($firstname, $lastname, $personalId,$employmentdate);
			$sth = $this->dbh->prepare("INSERT INTO users (first_name,last_name, personal_id, employment_date) VALUES (?,?,?,?)");
			$sth->execute($data);

			if($sth->rowCount() > 0) {
				return $this->dbh->lastInsertId();
			} else {
				return null;
			}
		}
	    

	    public function updateUser($id, $firstname,$lastname, $personalid, $employmentdate){
	      $data = array($firstname,$lastname, $personalid,$employmentdate, $id);
	      $sth = $this->dbh->prepare("UPDATE users SET first_name = ?, last_name = ?, personal_id = ?, employment_date = ? WHERE id = ?");
	      $sth->execute($data);

	      if($sth->execute($data)) {
	        return true;
	      } else {
	        return false;
	      }
	    }

		

		public function getUsers() {
			$sth = $this->dbh->query($this->users_sql);
			$sth->setFetchMode(PDO::FETCH_CLASS, 'Users');

			$objects = array();

			while($obj = $sth->fetch()) {
				$objects[] = $obj;
			}
			return $objects;

		}

		public function getUser($id) {
			$sql = $this->users_sql." WHERE id = :id";
			$sth = $this->dbh->prepare($sql);
			$sth->bindParam(':id', $id, PDO::PARAM_INT);
			$sth->setFetchMode(PDO::FETCH_CLASS, 'Users');
			$sth->execute();

			$objects = array();

			while($obj = $sth->fetch()) {
				$objects[] = $obj;
			}
			if (count($objects) > 0) {
				return $objects[0];
			} else {
				return null;
			}
		}

		public function search($text) {
			
			
			if($text === 0 || $text === "0"){ //if string is 0 it will show all data
				$where_statements = "";				
			} else if(strpos($text, "__")) { //if the string contains __ (two underscores) it will search for lastname and firstname
	            $searcharray = explode("__", $text);
	            $where_statements = " WHERE first_name = '{$searcharray[0]}' AND last_name LIKE '%{$searcharray[1]}%'";
        	} else {
        		$where_statements = " WHERE first_name LIKE '%{$text}%' OR last_name LIKE '%{$text}%'";
        	}
			$sth = $this->dbh->query($this->users_sql.$where_statements.' ORDER BY id DESC');
			$sth->setFetchMode(PDO::FETCH_CLASS, 'Users');

			$objects = array();

			while($obj = $sth->fetch()) {
				$objects[] = $obj;
			}
			return $objects;
		}



		public function query($sql, $class_name) {
			$sth = $this->dbh->query($sql);
			$sth->setFetchMode(PDO::FETCH_CLASS, $class_name);

			$objects = array();

			while($obj = $sth->fetch()) {
				$objects[] = $obj;
			}

			return $objects;
		}

		public function get($id, $table_name, $class_name, $sql = null) {
			if ($sql == null) {
				$sql = "SELECT * FROM $table_name WHERE id = $id LIMIT 1";
			}

			$sth = $this->dbh->query($sql);
			$sth->setFetchMode(PDO::FETCH_CLASS, $class_name);

			$objects = array();

			while($obj = $sth->fetch()) {
				$objects[] = $obj;
			}

			if (count($objects) > 0) {
				return $objects[0];
			} else {
				return null;
			}
		}

		public function __destruct() {
			$this->dbh = null;
		}

	
		public function currentPageURL() {
			$pageURL = $_SERVER['QUERY_STRING'];
			return $pageURL;
		}
	}

?>
