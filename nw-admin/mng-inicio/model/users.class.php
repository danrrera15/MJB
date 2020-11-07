<?php
class usuarios {
	var $DB;
  function __construct() {
    $this->DB = new DBManager;
  }

	/*** Obtener datos ***/
	function get(){
		$sql = "SELECT * FROM tbl_users";
		$data	= $this->DB->Consulta($sql);
		return $data;
	}

	function getById($id){
		$sql = "SELECT * FROM tbl_users WHERE user_id = %d;";
		$sql = sprintf($sql, $id);
		$data	= $this->DB->Consulta($sql);
		return $data[0];
	}

	/*** Modificar datos ***/
	function insert($array){
		$campos = ''; $datos = '';
		foreach ($array as $nombre => $valor){
			$campos .= $nombre . ",";
			$datos  .= "'".$valor . "',";
		}
		$campos .= '['; $campos = str_replace(',[','',$campos);
		$datos .= '['; $datos = str_replace(',[','',$datos);
		$sql = "INSERT INTO tbl_users (".$campos.") VALUES (".$datos.")";

		$bool = $this->DB->Execute($sql);
		return $bool;
	}

	function update($array,$condicion){
		$valores = '';
		foreach ($array as $nombre => $valor){
			$valores .= $nombre . "='" . $valor . "',";
		}
		$valores .= '['; $valores = str_replace(',[','',$valores);
		$sql = "UPDATE tbl_users SET ".$valores ." WHERE user_id = ".$condicion;
		$bool = $this->DB->Execute($sql);
		return $bool;
	}

	function delete($id){
		$sql = "DELETE FROM tbl_users WHERE user_id = %d;";
		$sql = sprintf($sql, $id);
		$bool	= mysqli_query( $this->c ,$sql);
		return $bool;
	}

}
?>
