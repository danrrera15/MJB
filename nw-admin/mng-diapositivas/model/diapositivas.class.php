<?php
class diapositivas {
	var $DB;
  function __construct() {
    $this->DB = new DBManager;
  }

	/*** Obtener datos ***/

	function get(){
		$sql = "SELECT * FROM tbl_diapositivas ORDER BY diap_id ASC";
		$data	= $this->DB->Consulta($sql);
		return $data;
	}

	function getById($id){
		$sql = "SELECT * FROM tbl_diapositivas WHERE diap_id = %d;";
		$sql = sprintf($sql, $id);
		$data	= $this->DB->Consulta($sql);
		return $data[0];
	}

	/*** Manipular datos ***/
	function insert($array){
		$campos = ''; $datos = '';
		foreach ($array as $nombre => $valor){
			$campos .= " $nombre,";
			$datos  .= " '$valor',";
		}
		$campos = preg_replace('/(,{1})$/','',$campos);
		$datos = preg_replace('/(,{1})$/','',$datos);
		$sql = "INSERT INTO tbl_diapositivas ( $campos ) VALUES ( $datos )";
		$bool = $this->DB->Execute($sql);
		return $bool;
	}

	function update($array,$condicion) {
		$valores = '';
		foreach ($array as $nombre => $valor){
			$valores .= " $nombre = '$valor',";
		}
		$valores = preg_replace('/(,{1})$/','',$valores);
		$sql = "UPDATE tbl_diapositivas SET $valores WHERE diap_id = $condicion";
		$bool = $this->DB->Execute($sql);
		return $bool;
	}

	function delete($id) {
		$sql = "DELETE FROM tbl_diapositivas WHERE diap_id = %d;";
		$sql = sprintf($sql, $id);
		$bool	= $this->DB->Execute($sql);
		return $bool;
	}

}
?>
