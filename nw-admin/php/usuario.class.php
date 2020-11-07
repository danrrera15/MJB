<?php
class usuario {
	var $DB;
  function __construct() {
    $this->DB = new DBManager;
  }

  function login ($user, $password) {
		$sql = 'SELECT * FROM tbl_users WHERE user_sesion = "%s" AND user_pass = "%s"';
		$sql = sprintf($sql,$user,$password);
		$data	= $this->DB->Consulta($sql);
		return $data;
	}

}
?>
