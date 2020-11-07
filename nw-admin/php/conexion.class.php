<?php
	class DBManager{
	  var $conn;

		function __construct() {

			$this->conn = null;
	    /*$host = "mysql:host=localhost";
	    $DB   = "dbname=maderasm_matri";
	    $user = "maderasm_matri";
	    $pass = "d#b%v357+czd";*/
	    /*MODO LOCAL */
	    $host = "mysql:host=localhost";
	    $DB   = "dbname=mjb";
	    $user = "root";
	    $pass = "";


	    try {
	      $this->conn = new PDO("$host;$DB", $user, $pass);
	      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    } catch (PDOException $e) {
	      echo "Connection failed: " . $e->getMessage();
	    }

	  }

	  function Execute($sql){
	    try {
	      $stmt = $this->conn->prepare($sql);
	      $stmt->execute();
	      return true;
	    } catch (PDOException $e) { return false; }
	  }

	  function Consulta($sql){
	    try {
	      $stmt = $this->conn->prepare($sql);
	      $stmt->execute();
	      $result = $stmt->fetchAll();
	      return $result;
	    } catch (PDOException $e) { return false; }

	  }

	  function GetLastInsertID(){
			try {
				$id = $this->conn->lastInsertId();
				return $id;
			} catch (PDOException $e) { return false; }
		}

	  function BeginTransaction(){
			try {
				$this->conn->beginTransaction();
				return true;
			} catch (PDOException $e) { return false; }
		}

	  function Rollback(){
			try {
				$this->conn->rollBack();
				return true;
			} catch (PDOException $e) { return false; }
		}

	  function Commit(){
			try {
				$this->conn->commit();
				return true;
			} catch (PDOException $e) { return false; }
		}

	  function Close(){
			try {
				$this->$conn = null;
				return true;
			} catch (PDOException $e) { return false; }
		}

	}
?>
